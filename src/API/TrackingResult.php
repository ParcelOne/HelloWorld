<?php

namespace ParcelOneShipping\API;

/**
 * TrackingResult
 */
class TrackingResult {
	/**
	 * @access public
	 * @var string
	 */
	public $TrackingDateTime = null;
	/**
	 * @access public
	 * @var string
	 */
	public $TrackingLocation = null;
	/**
	 * @access public
	 * @var string
	 */
	public $TrackingStatus = null;
	/**
	 * @access public
	 * @var string
	 */
	public $TrackingStatusCode = null;

	/**
	 * @param TrackingDateTime $TrackingDateTime
	 * @param TrackingLocation $TrackingLocation
	 * @param TrackingStatus $TrackingStatus
	 * @param TrackingStatusCode $TrackingStatusCode
	 * @access public
	 */
	public function __construct($TrackingDateTime, $TrackingLocation, $TrackingStatus, $TrackingStatusCode)
	{
		$this->TrackingDateTime = $TrackingDateTime;
		$this->TrackingLocation = $TrackingLocation;
		$this->TrackingStatus = $TrackingStatus;
		$this->TrackingStatusCode = $TrackingStatusCode;
	}

}
