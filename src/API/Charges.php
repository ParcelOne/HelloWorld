<?php

namespace HelloWorld\API;

/**
 * Charges
 */
class Charges {
	/**
	 * @access public
	 * @var string
	 */
	public $CEPID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ConsignerID = null;
	/**
	 * @access public
	 * @var identifyShipment
	 */
	public $IDShipment = null;
	/**
	 * @access public
	 * @var string
	 */
	public $MandatorID = null;
	/**
	 * @access public
	 * @var ArrayOfShipmentPackage
	 */
	public $Packages = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $PrivateAddressIndicator = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductID = null;
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
	 * @var Address
	 */
	public $ShipToAddress = null;

	/**
	 * @param CEPID $CEPID
	 * @param ConsignerID $ConsignerID
	 * @param IDShipment $IDShipment
	 * @param MandatorID $MandatorID
	 * @param Packages $Packages
	 * @param PrivateAddressIndicator $PrivateAddressIndicator
	 * @param ProductID $ProductID
	 * @param ReturnShipmentIndicator $ReturnShipmentIndicator
	 * @param Services $Services
	 * @param ShipToAddress $ShipToAddress
	 * @access public
	 */
	public function __construct($CEPID, $ConsignerID, $IDShipment, $MandatorID, $Packages, $PrivateAddressIndicator, $ProductID, $ReturnShipmentIndicator, $Services, $ShipToAddress)
	{
		$this->CEPID = $CEPID;
		$this->ConsignerID = $ConsignerID;
		$this->IDShipment = $IDShipment;
		$this->MandatorID = $MandatorID;
		$this->Packages = $Packages;
		$this->PrivateAddressIndicator = $PrivateAddressIndicator;
		$this->ProductID = $ProductID;
		$this->ReturnShipmentIndicator = $ReturnShipmentIndicator;
		$this->Services = $Services;
		$this->ShipToAddress = $ShipToAddress;
	}

}
