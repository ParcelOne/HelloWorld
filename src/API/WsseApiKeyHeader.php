<?php

namespace ParcelOneShipping\API;

/**
 * Possibility to access SoapHeader over pluginApp()
 *
 * Class WsseApiKeyHeader
 * @package ParcelOneShipping\API
 */
class WsseApiKeyHeader extends \SoapHeader{
	public function __construct() {
	    	parent::__construct('apikey','apikey','6b5485c5-0151-4728-acb8-3eb800624ae2',false);
	}
}
?>
