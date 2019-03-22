<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfShipmentTrackingResult {
	public $ShipmentTrackingResults = null;
	/**
	 * @param ShipmentTrackingResult $ShipmentTrackingResult
	 * @access public
	 */
	public function __construct($ShipmentTrackingResults)
	{
		$this->ShipmentTrackingResults = $ShipmentTrackingResults;
	}
}
