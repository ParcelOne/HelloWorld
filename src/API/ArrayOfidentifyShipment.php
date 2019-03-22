<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfidentifyShipment {
	public $identifyShipments = null;
	/**
	 * @param identifyShipments $identifyShipments
	 * @access public
	 */
	public function __construct($identifyShipments)
	{
		$this->identifyShipments = $identifyShipments;
	}
}
