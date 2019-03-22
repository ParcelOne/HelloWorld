<?php

namespace ParcelOneShipping\API;

/**
 * closeShipmentsResponse
 */
class closeShipmentsResponse {
	/**
	 * @access public
	 * @var ArrayOfClosedResult
	 */
	public $closeShipmentsResult = null;

	/**
	 * @param closeShipmentsResult $closeShipmentsResult
	 * @access public
	 */
	public function __construct($closeShipmentsResult)
	{
		$this->closeShipmentsResult = $closeShipmentsResult;
	}

}
