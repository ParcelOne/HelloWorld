<?php

namespace ParcelOneShipping\API;

/**
 * ShipmentDocumentsResult
 */

 class ShipmentDocumentsResult {
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
	 * @var string
	 */
	public $Document = null;
	/**
	 * @access public
	 * @var Format
	 */
	public $Format = null;
	/**
	 * @access public
	 * @var string
	 */
	public $PackageID = null;
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
	 * @param DocType $DocType
	 * @param Document $Document
	 * @param Format $Format
	 * @param PackageID $PackageID
	 * @param ShipmentID $ShipmentID
	 * @param TrackingID $TrackingID
	 * @access public
	 */
	public function __construct($Charges, $DocType, $Document, $Format, $PackageID, $ShipmentID, $TrackingID)
	{
		$this->Charges = $Charges;
		$this->DocType = $DocType;
		$this->Document = $Document;
		$this->Format = $Format;
		$this->PackageID = $PackageID;
		$this->ShipmentID = $ShipmentID;
		$this->TrackingID = $TrackingID;

	}

}
