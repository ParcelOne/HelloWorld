<?php

namespace ParcelOneShipping\API;

/**
 * getShipmentStatus
 */
class getShipmentStatus {
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
