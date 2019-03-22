<?php

namespace HelloWorld\API;

/**
 * ShipmentPackageResult
 */

 class ShipmentPackageResult {
	/**
	 * @access public
	 * @var ArrayOfAmount
	 */
	public $Charges = null;
	/**
	 * @access public
	 * @var string
	 */
	public $DocType = null;
	/**
	 * @access public
	 * @var Format
	 */
	public $Format = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Label = null;
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
	 * @access public
	 * @var string
	 */
	public $TrackingURL = null;

	/**
	 * @param Charges $Charges
	 * @param DocType $DocType
	 * @param Format $Format
	 * @param Label $Label
	 * @param PackageID $PackageID
	 * @param PackageRef $PackageRef
	 * @param ShipmentID $ShipmentID
	 * @param TrackingID $TrackingID
	 * @param TrackingURL $TrackingURL
	 * @access public
	 */

	public function __construct($Charges, $DocType, $Format, $Label, $PackageID, $PackageRef, $ShipmentID, $TrackingID, $TrackingURL)
	{
		$this->Charges = $Charges;
		$this->DocType = $DocType;
		$this->Format = $Format;
		$this->Label = $Label;
		$this->PackageID = $PackageID;
		$this->PackageRef = $PackageRef;
		$this->ShipmentID = $ShipmentID;
		$this->TrackingID = $TrackingID;
		$this->TrackingURL = $TrackingURL;
	}

}
