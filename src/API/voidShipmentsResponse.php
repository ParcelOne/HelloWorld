<?php

namespace ParcelOneShipping\API;

/**
 * voidShipmentsResponse
 */
class voidShipmentsResponse {
	/**
	 * @access public
	 * @var ArrayOfShipmentActionResult
	 */
	public $voidShipmentsResult = null;

	/**
	 * @param voidShipmentsResult $voidShipmentsResult
	 * @access public
	 */
	public function __construct($voidShipmentsResult)
	{
		$this->voidShipmentsResult = $voidShipmentsResult;
	}

}
