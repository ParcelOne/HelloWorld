<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfShipmentPackageResult {
	public $ShipmentPackageResults = null;
	/**
	 * @param ShipmentPackageResult $ShipmentPackageResult
	 * @access public
	 */
	public function __construct($ShipmentPackageResults)
	{
		$this->ShipmentPackageResults = $ShipmentPackageResults;
	}
}
