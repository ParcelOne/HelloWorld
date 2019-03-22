<?php

namespace ParcelOneShipping\API;

use Plenty\Plugin\Log\Loggable;
use SoapHeader;

class ShippingWCF extends \SoapClient
 {

   use Loggable;
   const LOCATION_SANDBOX = 'https://shippingwcfsandbox.awiwe.net/Shippingwcf.svc/Shippingwcf';
   const URL_SANDBOX = 'https://shippingwcfsandbox.awiwe.net/shippingwcf.svc?wsdl';
   const LOCATION_PRODUCTIVE = 'https://shippingwcf.awiwe.net/Shippingwcf.svc/Shippingwcf';
   const URL_PRODUCTIVE = 'https://shippingwcf.awiwe.net/shippingwcf.svc?wsdl';

   private static $classmap = array('getDateTime'=>'ParcelOneShipping\API\getDateTime'
     ,'getDateTimeResponse'=>'ParcelOneShipping\API\getDateTimeResponse'
     ,'getCustomers'=>'ParcelOneShipping\API\getCustomers'
     ,'getCustomersResponse'=>'ParcelOneShipping\API\getCustomersResponse'
     ,'getProfiles'=>'ParcelOneShipping\API\getProfiles'
     ,'getProfilesResponse'=>'ParcelOneShipping\API\getProfilesResponse'
     ,'getCEPs'=>'ParcelOneShipping\API\getCEPs'
     ,'getCEPsResponse'=>'ParcelOneShipping\API\getCEPsResponse'
     ,'getProducts'=>'ParcelOneShipping\API\getProducts'
     ,'getProductsResponse'=>'ParcelOneShipping\API\getProductsResponse'
     ,'getServices'=>'ParcelOneShipping\API\getServices'
     ,'getServicesResponse'=>'ParcelOneShipping\API\getServicesResponse'
     ,'registerShipments'=>'ParcelOneShipping\API\registerShipments'
     ,'registerShipmentsResponse'=>'ParcelOneShipping\API\registerShipmentsResponse'
     ,'registerIntDoc'=>'ParcelOneShipping\API\registerIntDoc'
     ,'registerIntDocResponse'=>'ParcelOneShipping\API\registerIntDocResponse'
     ,'closeShipments'=>'ParcelOneShipping\API\closeShipments'
     ,'closeShipmentsResponse'=>'ParcelOneShipping\API\closeShipmentsResponse'
     ,'getClosableShipments'=>'ParcelOneShipping\API\getClosableShipments'
     ,'getClosableShipmentsResponse'=>'ParcelOneShipping\API\getClosableShipmentsResponse'
     ,'getClosedStamps'=>'ParcelOneShipping\API\getClosedStamps'
     ,'getClosedStampsResponse'=>'ParcelOneShipping\API\getClosedStampsResponse'
     ,'voidShipments'=>'ParcelOneShipping\API\voidShipments'
     ,'voidShipmentsResponse'=>'ParcelOneShipping\API\voidShipmentsResponse'
     ,'getCharges'=>'ParcelOneShipping\API\getCharges'
     ,'getChargesResponse'=>'ParcelOneShipping\API\getChargesResponse'
     ,'getShipmentStatus'=>'ParcelOneShipping\API\getShipmentStatus'
     ,'getShipmentStatusResponse'=>'ParcelOneShipping\API\getShipmentStatusResponse'
     ,'getTrackings'=>'ParcelOneShipping\API\getTrackings'
     ,'getTrackingsResponse'=>'ParcelOneShipping\API\getTrackingsResponse'
     ,'printLabel'=>'ParcelOneShipping\API\printLabel'
     ,'printLabelResponse'=>'ParcelOneShipping\API\printLabelResponse'
     ,'printDocuments'=>'ParcelOneShipping\API\printDocuments'
     ,'printDocumentsResponse'=>'ParcelOneShipping\API\printDocumentsResponse'
     ,'printInternationalDocuments'=>'ParcelOneShipping\API\printInternationalDocuments'
     ,'printInternationalDocumentsResponse'=>'ParcelOneShipping\API\printInternationalDocumentsResponse'
     ,'ArrayOfCustomer'=>'ParcelOneShipping\API\ArrayOfCustomer'
     ,'Customer'=>'ParcelOneShipping\API\Customer'
     ,'ArrayOfConsigner'=>'ParcelOneShipping\API\ArrayOfConsigner'
     ,'Consigner'=>'ParcelOneShipping\API\Consigner'
     ,'ArrayOfProfile'=>'ParcelOneShipping\API\ArrayOfProfile'
     ,'Profile'=>'ParcelOneShipping\API\Profile'
     ,'ArrayOfCEP'=>'ParcelOneShipping\API\ArrayOfCEP'
     ,'CEP'=>'ParcelOneShipping\API\CEP'
     ,'ArrayOfProduct'=>'ParcelOneShipping\API\ArrayOfProduct'
     ,'Product'=>'ParcelOneShipping\API\Product'
     ,'ArrayOfService'=>'ParcelOneShipping\API\ArrayOfService'
     ,'Service'=>'ParcelOneShipping\API\Service'
     ,'ArrayOfShipment'=>'ParcelOneShipping\API\ArrayOfShipment'
     ,'Shipment'=>'ParcelOneShipping\API\Shipment'
     ,'ArrayOfCEPSpecial'=>'ParcelOneShipping\API\ArrayOfCEPSpecial'
     ,'CEPSpecial'=>'ParcelOneShipping\API\CEPSpecial'
     ,'Format'=>'ParcelOneShipping\API\Format'
     ,'Amount'=>'ParcelOneShipping\API\Amount'
     ,'ArrayOfShipmentPackage'=>'ParcelOneShipping\API\ArrayOfShipmentPackage'
     ,'ShipmentPackage'=>'ParcelOneShipping\API\ShipmentPackage'
     ,'IntDoc'=>'ParcelOneShipping\API\IntDoc'
     ,'ArrayOfIntDocContents'=>'ParcelOneShipping\API\ArrayOfIntDocContents'
     ,'IntDocContents'=>'ParcelOneShipping\API\IntDocContents'
     ,'Dimensions'=>'ParcelOneShipping\API\Dimensions'
     ,'Measurement'=>'ParcelOneShipping\API\Measurement'
     ,'ArrayOfShipmentService'=>'ParcelOneShipping\API\ArrayOfShipmentService'
     ,'ShipmentService'=>'ParcelOneShipping\API\ShipmentService'
     ,'ShipFrom'=>'ParcelOneShipping\API\ShipFrom'
     ,'Address'=>'ParcelOneShipping\API\Address'
     ,'Contact'=>'ParcelOneShipping\API\Contact'
     ,'ShipTo'=>'ParcelOneShipping\API\ShipTo'
     ,'ArrayOfShipmentResult'=>'ParcelOneShipping\API\ArrayOfShipmentResult'
     ,'ShipmentResult'=>'ParcelOneShipping\API\ShipmentResult'
     ,'ShipmentActionResult'=>'ParcelOneShipping\API\ShipmentActionResult'
     ,'ArrayOfError'=>'ParcelOneShipping\API\ArrayOfError'
     ,'Error'=>'ParcelOneShipping\API\Error'
     ,'ArrayOfAmount'=>'ParcelOneShipping\API\ArrayOfAmount'
     ,'ArrayOfShipmentDocumentsResult'=>'ParcelOneShipping\API\ArrayOfShipmentDocumentsResult'
     ,'ShipmentDocumentsResult'=>'ParcelOneShipping\API\ShipmentDocumentsResult'
     ,'ArrayOfShipmentPackageResult'=>'ParcelOneShipping\API\ArrayOfShipmentPackageResult'
     ,'ShipmentPackageResult'=>'ParcelOneShipping\API\ShipmentPackageResult'
     ,'ArrayOfIntDocData'=>'ParcelOneShipping\API\ArrayOfIntDocData'
     ,'IntDocData'=>'ParcelOneShipping\API\IntDocData'
     ,'identifyPackage'=>'ParcelOneShipping\API\identifyPackage'
     ,'identifyShipment'=>'ParcelOneShipping\API\identifyShipment'
     ,'ArrayOfprintDocumentsResult'=>'ParcelOneShipping\API\ArrayOfprintDocumentsResult'
     ,'printDocumentsResult'=>'ParcelOneShipping\API\printDocumentsResult'
     ,'ArrayOfidentifyShipment'=>'ParcelOneShipping\API\ArrayOfidentifyShipment'
     ,'ArrayOfClosedResult'=>'ParcelOneShipping\API\ArrayOfClosedResult'
     ,'ClosedResult'=>'ParcelOneShipping\API\ClosedResult'
     ,'ArrayOfShipmentActionResult'=>'ParcelOneShipping\API\ArrayOfShipmentActionResult'
     ,'ArrayOfCharges'=>'ParcelOneShipping\API\ArrayOfCharges'
     ,'Charges'=>'ParcelOneShipping\API\Charges'
     ,'ArrayOfChargesResult'=>'ParcelOneShipping\API\ArrayOfChargesResult'
     ,'ChargesResult'=>'ParcelOneShipping\API\ChargesResult'
     ,'ArrayOfChargesPackageResult'=>'ParcelOneShipping\API\ArrayOfChargesPackageResult'
     ,'ChargesPackageResult'=>'ParcelOneShipping\API\ChargesPackageResult'
     ,'ArrayOfShipmentStatusResult'=>'ParcelOneShipping\API\ArrayOfShipmentStatusResult'
     ,'ShipmentStatusResult'=>'ParcelOneShipping\API\ShipmentStatusResult'
     ,'ArrayOfShipmentTrackingResult'=>'ParcelOneShipping\API\ArrayOfShipmentTrackingResult'
     ,'ShipmentTrackingResult'=>'ParcelOneShipping\API\ShipmentTrackingResult'
     ,'ArrayOfTrackingResult'=>'ParcelOneShipping\API\ArrayOfTrackingResult'
     ,'TrackingResult'=>'ParcelOneShipping\API\TrackingResult'
     ,'ArrayOfPrintRequest'=>'ParcelOneShipping\API\ArrayOfPrintRequest'
     ,'PrintRequest'=>'ParcelOneShipping\API\PrintRequest'
     ,'AuthentificationType' => 'ParcelOneShipping\API\AuthentificationType'
     ,'AuthentificationToken' => 'ParcelOneShipping\API\AuthentificationToken'
     ,'WsseApiKeyHeader' => 'ParcelOneShipping\API\WsseApiKeyHeader'
     ,'WsseAuthHeader' => 'ParcelOneShipping\API\WsseAuthHeader'
     ,'WsseCultureHeader' => 'ParcelOneShipping\API\WsseCultureHeader'
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
        ->debug('ParcelOneShipping'.'::general.shipmentControllerDetectEnv',
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
