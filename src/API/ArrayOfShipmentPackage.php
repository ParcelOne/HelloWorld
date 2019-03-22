<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfShipmentPackage {
	public $ShipmentPackages = null;
	/**
	 * @param ShipmentPackage $ShipmentPackage
	 * @access public
	 */
	public function __construct($ShipmentPackages)
	{
		$this->ShipmentPackages = $ShipmentPackages;
	}
}
