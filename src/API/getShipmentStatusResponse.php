<?php

namespace ParcelOneShipping\API;

/**
 * getShipmentStatusResponse
 */
class getShipmentStatusResponse {
	/**
	 * @access public
	 * @var ArrayOfShipmentStatusResult
	 */
	public $getShipmentStatusResult = null;

	/**
	 * @param getShipmentStatusResult $getShipmentStatusResult
	 * @access public
	 */
	public function __construct($getShipmentStatusResult)
	{
		$this->getShipmentStatusResult = $getShipmentStatusResult;
	}

}
