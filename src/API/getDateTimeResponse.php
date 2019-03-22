<?php

namespace ParcelOneShipping\API;

/**
 * getDateTimeResponse
 */
class getDateTimeResponse {
	/**
	 * @access public
	 * @var dateTime
	 */
	public $getDateTimeResult = null;

	/**
	 * @param getDateTimeResult $getDateTimeResult
	 * @access public
	 */
	public function __construct($getDateTimeResult)
	{
		$this->getDateTimeResult = $getDateTimeResult;
	}

}
