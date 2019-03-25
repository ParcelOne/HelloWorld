<?php

namespace HelloWorld\API;
use SoapVar;
use  HelloWorld\API\UsernameToken;
use  HelloWorld\API\AuthentificationType;

use  HelloWorld\API\standardClass;
use  HelloWorld\API\SoapVarWrapper;
use  HelloWorld\API\SoapHeaderWrapper;
/**
 * Possibility to access SoapHeader over pluginApp()
 *
 * Class WsseAuthHeader
 * @package HelloWorld\API
 */
 class WsseAuthHeader extends \SoapHeader {
	private $wss_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
	private $wsu_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';
	public function __construct($user, $pass, $nspace) {

    $xml = '
<wsse:Security SOAP-ENV:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
   <wsse:UsernameToken>
       <wsse:Username>'.$user.'</wsse:Username>
       <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">'.$pass.'</wsse:Password>
   </wsse:UsernameToken>
</wsse:Security>
';

      $xml2Return = pluginApp(SoapVarWrapper::class, [$xml, XSD_ANYXML, NULL, NULL, NULL, NULL]);
	    parent::__construct($this->wss_ns, 'Security', $xml2Return, true);
	}
}
?>
