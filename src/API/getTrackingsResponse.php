<?php

namespace HelloWorld\API;

/**
 * getTrackingsResponse
 */
class getTrackingsResponse {
	/**
	 * @access public
	 * @var ArrayOfShipmentTrackingResult
	 */
	public $getTrackingsResult = null;

	/**
	 * @param getTrackingsResult $getTrackingsResult
	 * @access public
	 */
	public function __construct($getTrackingsResult)
	{
		$this->getTrackingsResult = $getTrackingsResult;
	}

}
