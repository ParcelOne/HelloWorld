<?php

namespace ParcelOneShipping\API;

/**
 * registerShipmentsResponse
 */
class registerShipmentsResponse {
	/**
	 * @access public
	 * @var ArrayOfShipmentResult
	 */
	public $registerShipmentsResult = null;

	/**
	 * @param registerShipmentsResult $registerShipmentsResult
	 * @access public
	 */
	public function __construct($registerShipmentsResult)
	{
		$this->registerShipmentsResult = $registerShipmentsResult;
	}

}
