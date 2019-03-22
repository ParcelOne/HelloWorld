<?php

namespace ParcelOneShipping\API;

/**
 * ShipmentResult
 */

class ShipmentResult {
	/**
	 * @access public
	 * @var ShipmentActionResult
	 */
	public $ActionResult = null;
	/**
	 * @access public
	 * @var ArrayOfAmount
	 */
	public $Charges = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $DocumentsAvailable = null;
	/**
	 * @access public
	 * @var ArrayOfShipmentDocumentsResult
	 */
	public $DocumentsResults = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $InternationalDocumentsAvailable = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $InternationalDocumentsNeeded = null;
	/**
	 * @access public
	 * @var ArrayOfShipmentDocumentsResult
	 */
	public $InternationalDocumentsResults = null;
	/**
	 * @access public
	 * @var string
	 */
	public $LabelURL = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $LabelsAvailable = null;
	/**
	 * @access public
	 * @var ArrayOfShipmentPackageResult
	 */
	public $PackageResults = null;
	/**
	 * @access public
	 * @var Amount
	 */
	public $TotalCharges = null;

	/**
	 * @param ActionResult $ActionResult
	 * @param Charges $Charges
	 * @param DocumentsAvailable $DocumentsAvailable
	 * @param DocumentsResults $DocumentsResults
	 * @param InternationalDocumentsAvailable $InternationalDocumentsAvailable
	 * @param InternationalDocumentsNeeded $InternationalDocumentsNeeded
	 * @param InternationalDocumentsResults $InternationalDocumentsResults
	 * @param LabelURL $LabelURL
	 * @param LabelsAvailable $LabelsAvailable
	 * @param PackageResults $PackageResults
	 * @param TotalCharges $TotalCharges
	 * @access public
	 */
	public function __construct($ActionResult, $Charges, $DocumentsAvailable, $DocumentsResults, $InternationalDocumentsAvailable, $InternationalDocumentsNeeded, $InternationalDocumentsResults, $LabelURL, $LabelsAvailable, $PackageResults, $TotalCharges)
	{
		$this->ActionResult = $ActionResult;
		$this->Charges = $Charges;
		$this->DocumentsAvailable = $DocumentsAvailable;
		$this->DocumentsResults = $DocumentsResults;
		$this->InternationalDocumentsAvailable = $InternationalDocumentsAvailable;
		$this->InternationalDocumentsNeeded = $InternationalDocumentsNeeded;
		$this->InternationalDocumentsResults = $InternationalDocumentsResults;
		$this->LabelURL = $LabelURL;
		$this->LabelsAvailable = $LabelsAvailable;
		$this->PackageResults = $PackageResults;
		$this->TotalCharges = $TotalCharges;
	}

}
