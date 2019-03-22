<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfPrintRequest {
	public $PrintRequests = null;
	/**
	 * @param PrintRequests $PrintRequests
	 * @access public
	 */
	public function __construct($PrintRequests)
	{
		$this->PrintRequests = $PrintRequests;
	}
}
