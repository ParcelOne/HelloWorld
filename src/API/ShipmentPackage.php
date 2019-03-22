<?php

namespace HelloWorld\API;

/**
 * ShipmentPackage
 */
class ShipmentPackage {
	/**
	 * @access public
	 * @var IntDoc
	 */
	public $IntDocData = null;
	/**
	 * @access public
	 * @var Dimensions
	 */
	public $PackageDimensions = null;
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
	public $PackageType = null;
	/**
	 * @access public
	 * @var Measurement
	 */
	public $PackageVolume = null;
	/**
	 * @access public
	 * @var Measurement
	 */
	public $PackageWeight = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Remarks = null;
	/**
	 * @access public
	 * @var ArrayOfShipmentService
	 */
	public $Services = null;

	/**
	 * @param IntDocData $IntDocData
	 * @param PackageDimensions $PackageDimensions
	 * @param PackageID $PackageID
	 * @param PackageRef $PackageRef
	 * @param PackageType $PackageType
	 * @param PackageVolume $PackageVolume
	 * @param PackageWeight $PackageWeight
	 * @param Remarks $Remarks
	 * @param Services $Services
	 * @access public
	 */
	public function __construct($IntDocData, $PackageDimensions, $PackageID, $PackageRef, $PackageType, $PackageVolume, $PackageWeight, $Remarks, $Services)
	{
		$this->IntDocData = $IntDocData;
		$this->PackageDimensions = $PackageDimensions;
		$this->PackageID = $PackageID;
		$this->PackageRef = $PackageRef;
		$this->PackageType = $PackageType;
		$this->PackageVolume = $PackageVolume;
		$this->PackageWeight = $PackageWeight;
		$this->Remarks = $Remarks;
		$this->Services = $Services;
	}

}
