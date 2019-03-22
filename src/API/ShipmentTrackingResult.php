<?php

namespace ParcelOneShipping\API;

/**
 * ShipmentTrackingResult
 */
class ShipmentTrackingResult {
	/**
	 * @access public
	 * @var ShipmentActionResult
	 */
	public $ActionResult = null;
	/**
	 * @access public
	 * @var ArrayOfTrackingResult
	 */
	public $Trackings = null;

	/**
	 * @param ActionResult $ActionResult
	 * @param Trackings $Trackings
	 * @access public
	 */
	public function __construct($ActionResult, $Trackings)
	{
		$this->ActionResult = $ActionResult;
		$this->Trackings = $Trackings;
	}
}
