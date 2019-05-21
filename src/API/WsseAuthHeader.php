<?php

namespace HelloWorld\API;
use SoapVar;
use  HelloWorld\API\UsernameToken;
use  HelloWorld\API\AuthentificationType;
use  HelloWorld\API\standardClass;
/**
 * Possibility to access SoapHeader over pluginApp()
 *
 * Class WsseAuthHeader
 * @package HelloWorld\API
 */
 class WsseAuthHeader extends \SoapHeader {
	public $wss_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
	public $wsu_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';
	public function __construct($user, $pass, $nspace) {
      $auth = pluginApp(standardClass::class,[]);
      $auth = (object)array(
        'Username' => pluginApp(SoapVar::class, [$user, XSD_STRING, "string", $this->wss_ns, NULL, $this->wss_ns]),
        'Password' => pluginApp(SoapVar::class, [$pass, XSD_STRING, "string", $this->wss_ns, NULL, $this->wss_ns])
      );

      $UsernameToken = pluginApp(UsernameToken::class,[ pluginApp(SoapVar::class, [$auth, SOAP_ENC_OBJECT, "string", $this->wss_ns, 'UsernameToken', $this->wss_ns]) ]);

      $security_sv = pluginApp(SoapVar::class, [
        pluginApp(SoapVar::class, [$UsernameToken, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns]),
      SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'Security', $this->wss_ns]);
	    parent::__construct($this->wss_ns, 'Security', $security_sv, false);
	}
}
?>
