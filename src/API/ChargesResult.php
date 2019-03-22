<?php

namespace ParcelOneShipping\API;

/**
 * ChargesResult
 */
class ChargesResult {
	/**
	 * @access public
	 * @var ShipmentActionResult
	 */
	public $ActionResult = null;
	/**
	 * @access public
	 * @var ArrayOfChargesPackageResult
	 */
	public $PackageResults = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Remarks = null;
	/**
	 * @access public
	 * @var ArrayOfAmount
	 */
	public $ShipmentCharges = null;
	/**
	 * @access public
	 * @var Amount
	 */
	public $TotalCharges = null;

	/**
	 * @param ActionResult $ActionResult
	 * @param PackageResults $PackageResults
	 * @param Remarks $Remarks
	 * @param ShipmentCharges $ShipmentCharges
	 * @param TotalCharges $TotalCharges
	 * @access public
	 */
	public function __construct($ActionResult, $PackageResults, $Remarks, $ShipmentCharges ,$TotalCharges)
	{
		$this->ActionResult = $ActionResult;
		$this->PackageResults = $PackageResults;
		$this->Remarks = $Remarks;
		$this->ShipmentCharges = $ShipmentCharges;
		$this->TotalCharges = $TotalCharges;
	}
}
