<?php

namespace ParcelOneShipping\API;

/**
 * getCustomersResponse
 */
class getCustomersResponse {
	/**
	 * @access public
	 * @var ArrayOfCustomer
	 */
	public $getCustomersResult = null;

	/**
	 * @param getCustomersResult $getCustomersResult
	 * @access public
	 */
	public function __construct($getCustomersResult)
	{
		$this->getCustomersResult = $getCustomersResult;
	}

}
