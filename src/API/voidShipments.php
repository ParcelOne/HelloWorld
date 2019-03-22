<?php

namespace HelloWorld\API;

/**
 * voidShipments
 */
class voidShipments {
	/**
	 * @access public
	 * @var ArrayOfidentifyShipment
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
