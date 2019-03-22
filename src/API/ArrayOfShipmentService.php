<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfShipmentService {
	public $ShipmentServices = null;
	/**
	 * @param ShipmentService $ShipmentService
	 * @access public
	 */
	public function __construct($ShipmentServices)
	{
		$this->ShipmentServices = $ShipmentServices;
	}
}
