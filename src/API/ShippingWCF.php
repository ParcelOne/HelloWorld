<?php

namespace HelloWorld\API;

use Plenty\Plugin\Log\Loggable;
use SoapHeader;

class ShippingWCF extends \SoapClient
 {

   use Loggable;
   const LOCATION_SANDBOX = 'https://shippingwcfsandbox.awiwe.net/Shippingwcf.svc/Shippingwcf';
   const URL_SANDBOX = 'https://shippingwcfsandbox.awiwe.net/shippingwcf.svc?wsdl';
   const LOCATION_PRODUCTIVE = 'https://shippingwcf.awiwe.net/Shippingwcf.svc/Shippingwcf';
   const URL_PRODUCTIVE = 'https://shippingwcf.awiwe.net/shippingwcf.svc?wsdl';

   private static $classmap = array('getDateTime'=>'HelloWorld\API\getDateTime'
     ,'getDateTimeResponse'=>'HelloWorld\API\getDateTimeResponse'
     ,'getCustomers'=>'HelloWorld\API\getCustomers'
     ,'getCustomersResponse'=>'HelloWorld\API\getCustomersResponse'
     ,'getProfiles'=>'HelloWorld\API\getProfiles'
     ,'getProfilesResponse'=>'HelloWorld\API\getProfilesResponse'
     ,'getCEPs'=>'HelloWorld\API\getCEPs'
     ,'getCEPsResponse'=>'HelloWorld\API\getCEPsResponse'
     ,'getProducts'=>'HelloWorld\API\getProducts'
     ,'getProductsResponse'=>'HelloWorld\API\getProductsResponse'
     ,'getServices'=>'HelloWorld\API\getServices'
     ,'getServicesResponse'=>'HelloWorld\API\getServicesResponse'
     ,'registerShipments'=>'HelloWorld\API\registerShipments'
     ,'registerShipmentsResponse'=>'HelloWorld\API\registerShipmentsResponse'
     ,'registerIntDoc'=>'HelloWorld\API\registerIntDoc'
     ,'registerIntDocResponse'=>'HelloWorld\API\registerIntDocResponse'
     ,'closeShipments'=>'HelloWorld\API\closeShipments'
     ,'closeShipmentsResponse'=>'HelloWorld\API\closeShipmentsResponse'
     ,'getClosableShipments'=>'HelloWorld\API\getClosableShipments'
     ,'getClosableShipmentsResponse'=>'HelloWorld\API\getClosableShipmentsResponse'
     ,'getClosedStamps'=>'HelloWorld\API\getClosedStamps'
     ,'getClosedStampsResponse'=>'HelloWorld\API\getClosedStampsResponse'
     ,'voidShipments'=>'HelloWorld\API\voidShipments'
     ,'voidShipmentsResponse'=>'HelloWorld\API\voidShipmentsResponse'
     ,'getCharges'=>'HelloWorld\API\getCharges'
     ,'getChargesResponse'=>'HelloWorld\API\getChargesResponse'
     ,'getShipmentStatus'=>'HelloWorld\API\getShipmentStatus'
     ,'getShipmentStatusResponse'=>'HelloWorld\API\getShipmentStatusResponse'
     ,'getTrackings'=>'HelloWorld\API\getTrackings'
     ,'getTrackingsResponse'=>'HelloWorld\API\getTrackingsResponse'
     ,'printLabel'=>'HelloWorld\API\printLabel'
     ,'printLabelResponse'=>'HelloWorld\API\printLabelResponse'
     ,'printDocuments'=>'HelloWorld\API\printDocuments'
     ,'printDocumentsResponse'=>'HelloWorld\API\printDocumentsResponse'
     ,'printInternationalDocuments'=>'HelloWorld\API\printInternationalDocuments'
     ,'printInternationalDocumentsResponse'=>'HelloWorld\API\printInternationalDocumentsResponse'
     ,'ArrayOfCustomer'=>'HelloWorld\API\ArrayOfCustomer'
     ,'Customer'=>'HelloWorld\API\Customer'
     ,'ArrayOfConsigner'=>'HelloWorld\API\ArrayOfConsigner'
     ,'Consigner'=>'HelloWorld\API\Consigner'
     ,'ArrayOfProfile'=>'HelloWorld\API\ArrayOfProfile'
     ,'Profile'=>'HelloWorld\API\Profile'
     ,'ArrayOfCEP'=>'HelloWorld\API\ArrayOfCEP'
     ,'CEP'=>'HelloWorld\API\CEP'
     ,'ArrayOfProduct'=>'HelloWorld\API\ArrayOfProduct'
     ,'Product'=>'HelloWorld\API\Product'
     ,'ArrayOfService'=>'HelloWorld\API\ArrayOfService'
     ,'Service'=>'HelloWorld\API\Service'
     ,'ArrayOfShipment'=>'HelloWorld\API\ArrayOfShipment'
     ,'Shipment'=>'HelloWorld\API\Shipment'
     ,'ArrayOfCEPSpecial'=>'HelloWorld\API\ArrayOfCEPSpecial'
     ,'CEPSpecial'=>'HelloWorld\API\CEPSpecial'
     ,'Format'=>'HelloWorld\API\Format'
     ,'Amount'=>'HelloWorld\API\Amount'
     ,'ArrayOfShipmentPackage'=>'HelloWorld\API\ArrayOfShipmentPackage'
     ,'ShipmentPackage'=>'HelloWorld\API\ShipmentPackage'
     ,'IntDoc'=>'HelloWorld\API\IntDoc'
     ,'ArrayOfIntDocContents'=>'HelloWorld\API\ArrayOfIntDocContents'
     ,'IntDocContents'=>'HelloWorld\API\IntDocContents'
     ,'Dimensions'=>'HelloWorld\API\Dimensions'
     ,'Measurement'=>'HelloWorld\API\Measurement'
     ,'ArrayOfShipmentService'=>'HelloWorld\API\ArrayOfShipmentService'
     ,'ShipmentService'=>'HelloWorld\API\ShipmentService'
     ,'ShipFrom'=>'HelloWorld\API\ShipFrom'
     ,'Address'=>'HelloWorld\API\Address'
     ,'Contact'=>'HelloWorld\API\Contact'
     ,'ShipTo'=>'HelloWorld\API\ShipTo'
     ,'ArrayOfShipmentResult'=>'HelloWorld\API\ArrayOfShipmentResult'
     ,'ShipmentResult'=>'HelloWorld\API\ShipmentResult'
     ,'ShipmentActionResult'=>'HelloWorld\API\ShipmentActionResult'
     ,'ArrayOfError'=>'HelloWorld\API\ArrayOfError'
     ,'Error'=>'HelloWorld\API\Error'
     ,'ArrayOfAmount'=>'HelloWorld\API\ArrayOfAmount'
     ,'ArrayOfShipmentDocumentsResult'=>'HelloWorld\API\ArrayOfShipmentDocumentsResult'
     ,'ShipmentDocumentsResult'=>'HelloWorld\API\ShipmentDocumentsResult'
     ,'ArrayOfShipmentPackageResult'=>'HelloWorld\API\ArrayOfShipmentPackageResult'
     ,'ShipmentPackageResult'=>'HelloWorld\API\ShipmentPackageResult'
     ,'ArrayOfIntDocData'=>'HelloWorld\API\ArrayOfIntDocData'
     ,'IntDocData'=>'HelloWorld\API\IntDocData'
     ,'identifyPackage'=>'HelloWorld\API\identifyPackage'
     ,'identifyShipment'=>'HelloWorld\API\identifyShipment'
     ,'ArrayOfprintDocumentsResult'=>'HelloWorld\API\ArrayOfprintDocumentsResult'
     ,'printDocumentsResult'=>'HelloWorld\API\printDocumentsResult'
     ,'ArrayOfidentifyShipment'=>'HelloWorld\API\ArrayOfidentifyShipment'
     ,'ArrayOfClosedResult'=>'HelloWorld\API\ArrayOfClosedResult'
     ,'ClosedResult'=>'HelloWorld\API\ClosedResult'
     ,'ArrayOfShipmentActionResult'=>'HelloWorld\API\ArrayOfShipmentActionResult'
     ,'ArrayOfCharges'=>'HelloWorld\API\ArrayOfCharges'
     ,'Charges'=>'HelloWorld\API\Charges'
     ,'ArrayOfChargesResult'=>'HelloWorld\API\ArrayOfChargesResult'
     ,'ChargesResult'=>'HelloWorld\API\ChargesResult'
     ,'ArrayOfChargesPackageResult'=>'HelloWorld\API\ArrayOfChargesPackageResult'
     ,'ChargesPackageResult'=>'HelloWorld\API\ChargesPackageResult'
     ,'ArrayOfShipmentStatusResult'=>'HelloWorld\API\ArrayOfShipmentStatusResult'
     ,'ShipmentStatusResult'=>'HelloWorld\API\ShipmentStatusResult'
     ,'ArrayOfShipmentTrackingResult'=>'HelloWorld\API\ArrayOfShipmentTrackingResult'
     ,'ShipmentTrackingResult'=>'HelloWorld\API\ShipmentTrackingResult'
     ,'ArrayOfTrackingResult'=>'HelloWorld\API\ArrayOfTrackingResult'
     ,'TrackingResult'=>'HelloWorld\API\TrackingResult'
     ,'ArrayOfPrintRequest'=>'HelloWorld\API\ArrayOfPrintRequest'
     ,'PrintRequest'=>'HelloWorld\API\PrintRequest'
     ,'AuthentificationType' => 'HelloWorld\API\AuthentificationType'
     ,'AuthentificationToken' => 'HelloWorld\API\AuthentificationToken'
     ,'WsseApiKeyHeader' => 'HelloWorld\API\WsseApiKeyHeader'
     ,'WsseAuthHeader' => 'HelloWorld\API\WsseAuthHeader'
     ,'WsseCultureHeader' => 'HelloWorld\API\WsseCultureHeader'
   );

   /**
    * @param array $options A array of config values
    * @param bool $isProductive
    * @access public
    */
     public function
     __construct(array $options = array(), $isProductive = false, $cigUser = '', $cigPassw = '', $nspace = 'ns3:')
     {
       foreach (self::$classmap as $key => $value)
       {
           if (!isset($options['classmap'][$key]))
           {
               $options['classmap'][$key] = $value;
           }
       }
       $options['login'] = $cigUser;
       $options['password'] = $cigPassw;
       $options['features'] = SOAP_USE_XSI_ARRAY_TYPE;
       $cigLocation = ($isProductive) ? self::LOCATION_PRODUCTIVE : self::LOCATION_SANDBOX;
       $cigUrl = ($isProductive) ? self::URL_PRODUCTIVE : self::URL_SANDBOX;
       /** @var AuthentificationType $auth */
       //$auth = pluginApp(AuthentificationType::class, [$options['login'], $options['password']]);
       //$options['classmap']['AuthentificationType'] = $auth;

       $options['location']    = $cigLocation;
       $options['type']        = 1;
       $options['trace']       = 1;
       $options['exceptions']  = 1;
       $options['soap_version']  = SOAP_1_1;
       $options['cache_wsdl']  = WSDL_CACHE_NONE;
       $options['compression']  = SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP;
       $options['connection_timeout']  = 60;



       parent::__setSoapHeaders($this->buildAuthHeaders($cigUser, $cigPassw, $nspace));
       parent::__construct($cigUrl, $options);
   }

   /**
    * @param bool $isProductive
    * @return SoapHeader
    */
   private function buildAuthHeaders($username, $password, $nspace)
   {
      $soapHeaderApi = pluginApp(WsseApiKeyHeader::class);
      $soapHeaderAuth = pluginApp(WsseAuthHeader::class, [$username, $password, $nspace]);
      $soapHeaderCulture = pluginApp(WsseCultureHeader::class, ["de-DE"]);

      /*$this->getLogger(__METHOD__)
        ->debug('HelloWorld'.'::general.shipmentControllerDetectEnv',
            [   'AuthHeader' => $soapHeaderAuth]);*/

       return Array(
          $soapHeaderAuth,
          $soapHeaderApi,
          $soapHeaderCulture
       );
   }

   /**
    * Creates shipments.
    *
    * @param CreateShipmentOrderRequest $part1
    * @access public
    * @return CreateShipmentOrderResponse
    */
   public function registerShipments(registerShipments $part1)
   {
       return parent::__soapCall('registerShipments', array($part1));
   }

   /**
    * Cancel/Void shipments.
    *
    * @param ArrayOfidentifyShipments $part1
    * @access public
    * @return ArrayOfShipmentActionResult
    */
   public function voidShipments(voidShipments $part1)
   {
       return parent::__soapCall('voidShipments', array($part1));
   }

   /**
    * getProfiles
    *
    * @param ArrayOfidentifyShipments $part1
    * @access public
    * @return ArrayOfShipmentActionResult
    */
   public function getProfiles(getProfiles $part1)
   {
       return parent::__soapCall('getProfiles', array($part1));
   }

   /**
    * @return string
    */
   public function getLastRequest()
   {
       return parent::__getLastRequest();
   }

   /**
    * @return string
    */
   public function getLastRequestHeaders()
   {
       return parent::__getLastRequestHeaders();
   }

   /**
    * @return string
    */
   public function getLastResponse()
   {
       return parent::__getLastResponse();
   }

   /**
    * @return string
    */
   public function getLastResponseHeaders()
   {
       return parent::__getLastResponseHeaders();
   }
   public function getDateTime()
   {
       return parent::__soapCall('getDateTime', array());
   }
}
?>
