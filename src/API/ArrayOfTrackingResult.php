<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfTrackingResult {
	public $TrackingResults = null;
	/**
	 * @param TrackingResults $TrackingResults
	 * @access public
	 */
	public function __construct($TrackingResults)
	{
		$this->TrackingResults = $TrackingResults;
	}
}
