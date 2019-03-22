<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfShipmentDocumentsResult {
	public $ShipmentDocumentsResults = null;
	/**
	 * @param ShipmentDocumentsResult $ShipmentDocumentsResult
	 * @access public
	 */
	public function __construct($ShipmentDocumentsResults)
	{
		$this->ShipmentDocumentsResults = $ShipmentDocumentsResults;
	}
}
