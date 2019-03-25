<?php
namespace HelloWorld\Services;

use HelloWorld\Helper\DynamoDBHelper;
use Plenty\Modules\Order\Shipping\Contracts\ParcelServicePresetRepositoryContract;
use Plenty\Modules\Order\Shipping\Countries\Contracts\CountryRepositoryContract;
use Plenty\Modules\Order\Shipping\Countries\Models\Country;
use Plenty\Modules\Order\Shipping\ParcelServiceRegion\Contracts\ParcelServiceRegionRepositoryContract;
use Plenty\Modules\Order\Shipping\ParcelServiceRegion\Models\ParcelServiceRegion;
use Plenty\Modules\Plugin\DynamoDb\Contracts\DynamoDbRepositoryContract;
use Plenty\Plugin\ConfigRepository;
use Plenty\Plugin\CachingRepository;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Log\Loggable;
use HelloWorld\API;
use HelloWorld\API\ShippingWCF;
use HelloWorld\API\getProfiles;

/**
 * Class ShippingSettingsService
 *
 * @author jsternsdorff
 * @package HelloWorld\Services
 */
class ShippingSettingsService
{
    use Loggable;

    const TABLE_NAME = 'ShippingSettings';
    /**
     * @var DynamoDbRepositoryContract
     */
    private $dataBase;
    /**
  	 * @var API\shippingwcf $shippingwcf
  	 */
  	private $shippingwcf;
    /**
  	 * @var API\shippingwcf $shippingwcfns3
  	 */
  	private $shippingwcfns3;
    /**
  	 * @var ConfigRepository
  	 */
  	protected $config;
    /**
     * @var CachingRepository
     */
    private $cachingRepository;

    /**
     * @var CountryRepositoryContract
     */
    private $countryRepositoryContract;


    /**
     * ShippingSettingsService constructor.
     * @param DynamoDbRepositoryContract $dataBase
     * @param ParcelServiceRegionRepositoryContract $parcelServiceRegionRepositoryContract
     * @param ParcelServicePresetRepositoryContract $parcelServicePresetRepositoryContract
     * @param CachingRepository $cachingRepository
     */
    public function __construct(
        CachingRepository $cachingRepository,
        ConfigRepository $config,
        CountryRepositoryContract $countryRepositoryContract)
    {
        $this->cachingRepository = $cachingRepository;
		    $this->config = $config;
        $this->countryRepositoryContract = $countryRepositoryContract;

        $isProductive = false;
        $username = '99999';
        $passw = '986AF39B5FDAF0B6';

        $this->shippingwcf = pluginApp(ShippingWCF::class,[array(), $isProductive, $username, $passw, 'ns2:']);
        $this->shippingwcfns3 = pluginApp(ShippingWCF::class,[array(), $isProductive, $username, $passw, 'ns3:']);
    }


    /**
     * @return array
     */
    public function getServices()
    {
      try{
        $params = pluginApp(getProfiles::class,[0,array()]);

        $response = $this->shippingwcf->getProfiles($params);
        $this->logCommunication();
        return $response;
      }
      catch(\Exception $e)
      {
        $lastRequest = $this->shippingwcf->getLastRequest();
    		$lastResponse = $this->shippingwcf->getLastResponse();
        $this->getLogger(__METHOD__)
              ->error('Error loading profiles of shipping settings', ['Request' => $lastRequest,
   					   'Response' => str_replace(["\n", "\\"],'',$lastResponse)]);
      }
      //return $this->services;
    }

    private function logCommunication()
  	{
  		$lastRequest = $this->shippingwcf->getLastRequest();
  		$lastResponse = $this->shippingwcf->getLastResponse();

  		$this->getLogger(__METHOD__)
  			->info('HelloWorld'.'::general.requestAndResponse',
  				   ['Request' => $lastRequest,
  					   'Response' => str_replace(["\n", "\\"],'',$lastResponse)]);
  	}
}
