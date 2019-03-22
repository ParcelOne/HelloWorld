<?php

namespace ParcelOneShipping\API;

/**
 * ChargesPackageResult
 */
class ChargesPackageResult {
	/**
	 * @access public
	 * @var ArrayOfAmount
	 */
	public $Charges = null;
	/**
	 * @access public
	 * @var string
	 */
	public $PackageID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $PackageRef = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ShipmentID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $TrackingID = null;

	/**
	 * @param Charges $Charges
	 * @param PackageID $PackageID
	 * @param PackageRef $PackageRef
	 * @param ShipmentID $ShipmentID
	 * @param TrackingID $TrackingID
	 * @access public
	 */
	public function __construct($Charges, $PackageID, $PackageRef, $ShipmentID, $TrackingID)
	{
		$this->Charges = $Charges;
		$this->PackageID = $PackageID;
		$this->PackageRef = $PackageRef;
		$this->ShipmentID = $ShipmentID;
		$this->TrackingID = $TrackingID;
	}
}
