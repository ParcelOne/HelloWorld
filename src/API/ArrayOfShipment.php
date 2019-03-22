<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfShipment {
	public $Shipments = null;
	/**
	 * @param Shipment $Shipment
	 * @access public
	 */
	public function __construct($Shipments)
	{
		$this->Shipments = $Shipments;
	}
}
