<?php

namespace ParcelOneShipping\API;

/**
 * printInternationalDocuments
 */
class printInternationalDocuments {
	/**
	 * @access public
	 * @var ArrayOfPrintRequest
	 */
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
