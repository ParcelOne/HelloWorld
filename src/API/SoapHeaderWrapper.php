<?php
namespace ParcelOneShipping\API;
/**
 * Possibility to access SoapHeader over pluginApp()
 *
 * Class SoapHeaderWrapper
 * @package DHLShipping\API
 */
class SoapHeaderWrapper extends \SoapHeader{

	public function __construct($namespace, $name, $data = null, $mustunderstand = false, $actor = null)
	{
		parent::SoapHeader($namespace, $name, $data, $mustunderstand, $actor);
	}

}
