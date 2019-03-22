<?php

namespace HelloWorld\API;

/**
 * registerShipments
 */
class registerShipments {
	/**
	 * @access public
	 * @var ArrayOfShipment
	 */
	public $ShippingData = null;

	/**
	 * @param ShippingData $ShippingData
	 * @access public
	 */
	public function __construct($ShippingData)
	{
		$this->ShippingData = $ShippingData;
	}

}
