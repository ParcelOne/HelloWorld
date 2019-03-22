<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfShipmentStatusResult {
	public $ShipmentStatusResults = null;
	/**
	 * @param ShipmentStatusResult $ShipmentStatusResult
	 * @access public
	 */
	public function __construct($ShipmentStatusResults)
	{
		$this->ShipmentStatusResults = $ShipmentStatusResults;
	}
}
