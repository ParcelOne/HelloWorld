<?php

namespace ParcelOneShipping\API;

/**
 * ShipmentStatusResult
 */
class ShipmentStatusResult {
	/**
	 * @access public
	 * @var ShipmentActionResult
	 */
	public $ActionResult = null;
	/**
	 * @access public
	 * @var string
	 */
	public $LastCEP = null;
	/**
	 * @access public
	 * @var string
	 */
	public $LastTrackingNo = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ShipmentStatus = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ShipmentStatusCode = null;

	/**
	 * @param ActionResult $ActionResult
	 * @param LastCEP $LastCEP
	 * @param LastTrackingNo $LastTrackingNo
	 * @param ShipmentStatus $ShipmentStatus
	 * @param ShipmentStatusCode $ShipmentStatusCode
	 * @access public
	 */
	public function __construct($ActionResult, $LastCEP, $LastTrackingNo, $ShipmentStatus, $ShipmentStatusCode)
	{
		$this->ActionResult = $ActionResult;
		$this->LastCEP = $LastCEP;
		$this->LastTrackingNo = $LastTrackingNo;
		$this->ShipmentStatus = $ShipmentStatus;
		$this->ShipmentStatusCode = $ShipmentStatusCode;
	}

}
