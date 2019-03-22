<?php

namespace ParcelOneShipping\API;

/**
 * getTrackings
 */
class getTrackings {
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
