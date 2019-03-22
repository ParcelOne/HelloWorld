<?php

namespace HelloWorld\API;
use SoapVar;
use  HelloWorld\API\AuthentificationToken;
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
	//    $created = gmdate('Y-m-d\TH:i:s\Z');
      //$UsernameFill = pluginApp(SoapVarWrapper::class, [$user, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns]);
      //$PasswordFill = pluginApp(SoapVarWrapper::class, [$pass, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns]);
//      $CreatedFill = pluginApp(SoapVarWrapper::class, [$created, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wsu_ns]);

//	    $auth = pluginApp(AuthentificationType::class, [$UsernameFill, $PasswordFill, $CreatedFill]);
//      $auth = pluginApp(AuthentificationType::class, [$user, $pass, $created]);

      //$auth = pluginApp(AuthentificationType::class, [$UsernameFill, $PasswordFill]);
      $auth = pluginApp(standardClass::class,[]);
      $auth = (object)array(
        $nspace.'Username' => $user,
        $nspace.'Password' => $pass
      );
      //$auth->Username = $user;
      //$auth->Password = $pass;
      //$auth->Username = pluginApp(SoapVarWrapper::class, [$user, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns]);
      //$auth->Password = pluginApp(SoapVarWrapper::class, [$pass, XSD_STRING, NULL, $this->wss_ns, NULL, $this->wss_ns]);
      //$username_token = pluginApp(SoapHeaderWrapper::class, [$this->wss_ns, 'UsernameToken', $auth]);

      $username_token = pluginApp(standardClass::class,[]);
	    //$username_token->UsernameToken = pluginApp(SoapVarWrapper::class, [$auth, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns]);

      //$username_token->UsernameToken = $auth;
      $username_token = (object)array(
        $nspace.'UsernameToken' => $auth
      );


      //$username_token = pluginApp(AuthentificationToken::class, [pluginApp(SoapVarWrapper::class, [$auth, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns])]);
      //$username_token = pluginApp(AuthentificationToken::class, [pluginApp(SoapVarWrapper::class, [$auth, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns])]);
	    //$username_token->UsernameToken = pluginApp(SoapVarWrapper::class, [$auth, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns]);

      //$security_sv = pluginApp(SoapVarWrapper::class, [
	      //  pluginApp(SoapVarWrapper::class, [$username_token, SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'UsernameToken', $this->wss_ns]),
	      //  SOAP_ENC_OBJECT, NULL, $this->wss_ns, 'Security', $this->wss_ns]);

      $security_sv = pluginApp(standardClass::class,[]);
      $security_sv->Security = $username_token;
      //parent::SoapHeader($this->wss_ns, 'Security', $username_token, true);
	    parent::__construct($this->wss_ns, 'Security', $username_token, false);
	}
}
?>
