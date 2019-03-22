<?php

namespace HelloWorld\API;

/**
 * getClosedStampsResponse
 */
class getClosedStampsResponse {
	/**
	 * @access public
	 * @var ArrayOfstring
	 */
	public $getClosedStampsResult = null;

	/**
	 * @param getClosedStampsResult $getClosedStampsResult
	 * @access public
	 */
	public function __construct($getClosedStampsResult)
	{
		$this->getClosedStampsResult = $getClosedStampsResult;
	}

}
