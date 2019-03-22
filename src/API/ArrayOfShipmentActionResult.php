<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfShipmentActionResult {
	public $ShipmentActionResults = null;
	/**
	 * @param ShipmentActionResult $ShipmentActionResult
	 * @access public
	 */
	public function __construct($ShipmentActionResults)
	{
		$this->ShipmentActionResults = $ShipmentActionResults;
	}
}
