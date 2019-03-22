<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfShipmentResult {
	public $ShipmentResults = null;
	/**
	 * @param ShipmentResult $ShipmentResult
	 * @access public
	 */
	public function __construct($ShipmentResults)
	{
		$this->ShipmentResults = $ShipmentResults;
	}
}
