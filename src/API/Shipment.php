<?php

namespace HelloWorld\API;

/**
 * Shipment
 */
class Shipment {
	/**
	 * @access public
	 * @var string
	 */
	public $CEPID = null;
	/**
	 * @access public
	 * @var ArrayOfCEPSpecial
	 */
	public $CEPSpecials = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ConsignerID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $CostCenter = null;
	/**
	 * @access public
	 * @var Format
	 */
	public $DocumentFormat = null;
	/**
	 * @access public
	 * @var Format
	 */
	public $LabelFormat = null;
	/**
	 * @access public
	 * @var string
	 */
	public $MandatorID = null;
	/**
	 * @access public
	 * @var Amount
	 */
	public $MaxCharges = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Other1 = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Other2 = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Other3 = null;
	/**
	 * @access public
	 * @var ArrayOfShipmentPackage
	 */
	public $Packages = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $PrintDocuments = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $PrintLabel = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductID = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $ReturnCharges = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $ReturnShipmentIndicator = null;
	/**
	 * @access public
	 * @var ArrayOfShipmentService
	 */
	public $Services = null;
	/**
	 * @access public
	 * @var ShipFrom
	 */
	public $ShipFromData = null;
	/**
	 * @access public
	 * @var ShipTo
	 */
	public $ShipToData = null;
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
	 * @var string
	 */
	public $Software = null;

	/**
	 * @param CEPID $CEPID
	 * @param CEPSpecials $CEPSpecials
	 * @param ConsignerID $ConsignerID
	 * @param CostCenter $CostCenter
	 * @param DocumentFormat $DocumentFormat
	 * @param LabelFormat $LabelFormat
	 * @param MandatorID $MandatorID
	 * @param MaxCharges $MaxCharges
	 * @param Other1 $Other1
	 * @param Other2 $Other2
	 * @param Other3 $Other3
	 * @param Packages $Packages
	 * @param PrintDocuments $PrintDocuments
	 * @param PrintLabel $PrintLabel
	 * @param ProductID $ProductID
	 * @param ReturnCharges $ReturnCharges
	 * @param ReturnShipmentIndicator $ReturnShipmentIndicator
	 * @param Services $Services
	 * @param ShipFromData $ShipFromData
	 * @param ShipToData $ShipToData
	 * @param ShipmentID $ShipmentID
	 * @param ShipmentRef $ShipmentRef
	 * @param Software $Software

	 * @access public
	 */
	public function __construct($CEPID, $CEPSpecials, $ConsignerID, $CostCenter, $DocumentFormat, $LabelFormat, $MandatorID, $MaxCharges, $Other1, $Other2, $Other3, $Packages, $PrintDocuments, $PrintLabel, $ProductID, $ReturnCharges, $ReturnShipmentIndicator, $Services, $ShipFromData, $ShipToData, $ShipmentID, $ShipmentRef, $Software)
	{
		$this->CEPID = $CEPID;
		$this->CEPSpecials = $CEPSpecials;
		$this->ConsignerID = $ConsignerID;
		$this->CostCenter = $CostCenter;
		$this->DocumentFormat = $DocumentFormat;
		$this->LabelFormat = $LabelFormat;
		$this->MandatorID = $MandatorID;
		$this->MaxCharges = $MaxCharges;
		$this->Other1 = $Other1;
		$this->Other2 = $Other2;
		$this->Other3 = $Other3;
		$this->Packages = $Packages;
		$this->PrintDocuments = $PrintDocuments;
		$this->PrintLabel = $PrintLabel;
		$this->ProductID = $ProductID;
		$this->ReturnCharges = $ReturnCharges;
		$this->ReturnShipmentIndicator = $ReturnShipmentIndicator;
		$this->Services = $Services;
		$this->ShipFromData = $ShipFromData;
		$this->ShipToData = $ShipToData;
		$this->ShipmentID = $ShipmentID;
		$this->ShipmentRef = $ShipmentRef;
		$this->Software = $Software;
	}

}
