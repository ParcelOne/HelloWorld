<?php

namespace ParcelOneShipping\API;

/**
 * Possibility to access SoapHeader over pluginApp()
 *
 * Class WsseCultureHeader
 * @package ParcelOneShipping\API
 */
 class WsseCultureHeader extends \SoapHeader {
	function __construct($culture) {
	    	    parent::__construct('culture','culture',$culture,false);
	}
}
?>
