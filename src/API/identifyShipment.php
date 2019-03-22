<?php

namespace ParcelOneShipping\API;

/**
 * identifyShipment
 */
class identifyShipment {
	/**
	 * @access public
	 * @var string
	 */
	public $ShipmentRefField = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ShipmentRefValue = null;

	/**
	 * @param ShipmentRefField $ShipmentRefField
	 * @param ShipmentRefValue $ShipmentRefValue
	 * @access public
	 */
	public function __construct($ShipmentRefField, $ShipmentRefValue)
	{
		$this->ShipmentRefField = $ShipmentRefField;
		$this->ShipmentRefValue = $ShipmentRefValue;
	}

}
