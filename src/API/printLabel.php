<?php

namespace HelloWorld\API;

/**
 * printLabel
 */
class printLabel {
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
