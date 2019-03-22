<?php

namespace ParcelOneShipping\API;

/**
 * printDocumentsResult
 */
class printDocumentsResult {
	/**
	 * @access public
	 * @var ShipmentActionResult
	 */
	public $ActionResult = null;
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
	public $PackageRef = null;
	/**
	 * @access public
	 * @var string
	 */
	public $PackageTrackingID = null;

	/**
	 * @param ActionResult $ActionResult
	 * @param DocType $DocType
	 * @param Document $Document
	 * @param Format $Format
	 * @param PackageID $PackageID
	 * @param PackageRef $PackageRef
	 * @param PackageTrackingID $PackageTrackingID
	 * @access public
	 */
	public function __construct($ActionResult, $DocType, $Document, $Format, $PackageID, $PackageRef, $PackageTrackingID)
	{
		$this->ActionResult = $ActionResult;
		$this->DocType = $DocType;
		$this->Document = $Document;
		$this->Format = $Format;
		$this->PackageID = $PackageID;
		$this->PackageRef = $PackageRef;
		$this->PackageTrackingID = $PackageTrackingID;
	}

}
