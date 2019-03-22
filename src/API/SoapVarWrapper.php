<?php
namespace HelloWorld\API;
/**
 * Possibility to access SoapHeader over pluginApp()
 *
 * Class SoapHeaderWrapper
 * @package DHLShipping\API
 */
class SoapVarWrapper extends \SoapVar{

	public function __construct($data, $encoding, $typename, $typenamespace, $nodename,  $nodenamespace)
	{
		parent::__construct($data, $encoding, $typename, $typenamespace, $nodename, $nodenamespace);
	}

}
