<?php

namespace HelloWorld\API;

/**
 * ShipmentActionResult
 */
class ShipmentActionResult {
	/**
	 * @access public
	 * @var ArrayOfError
	 */
	public $Errors = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ShipmentID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ShipmentRef = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $Success = null;
	/**
	 * @access public
	 * @var string
	 */
	public $TrackingID = null;

	/**
	 * @param Errors $Errors
	 * @param ShipmentID $ShipmentID
	 * @param ShipmentRef $ShipmentRef
	 * @param Success $Success
	 * @param TrackingID $TrackingID
	 * @access public
	 */
	public function __construct($Errors, $ShipmentID, $ShipmentRef, $Success, $TrackingID)
	{
		$this->Errors = $Errors;
		$this->ShipmentID = $ShipmentID;
		$this->ShipmentRef = $ShipmentRef;
		$this->Success = $Success;
		$this->TrackingID = $TrackingID;
	}

}
