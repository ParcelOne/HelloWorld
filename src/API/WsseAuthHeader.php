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
 * @package ParcelOneShipping\API
 */
 class WsseAuthHeader extends \SoapHeader {
	private $wss_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
	private $wsu_ns = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd';
	public function __construct($user, $pass, $nspace) {
      $auth = pluginApp(standardClass::class,[]);
      $auth = (object)array(
        'Username xmlns="'.$this->wss_ns.'"' => $user,
        'Password xmlns="'.$this->wss_ns.'"' => $pass
      );

      $username_token = pluginApp(standardClass::class,[]);

      $username_token = (object)array(
        'UsernameToken xmlns="'.$this->wss_ns.'"' => $auth
      );

      $security_sv = pluginApp(standardClass::class,[]);
      $security_sv->Security = $username_token;
	    parent::__construct($this->wss_ns, 'Security', $security_sv, false);
	}
}
?>
