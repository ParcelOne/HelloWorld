<?php

namespace HelloWorld\API;

/**
 * ShipTo
 */
class ShipTo {
	/**
	 * @access public
	 * @var string
	 */
	public $BranchID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $CEPCustID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $CustomsID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Name1 = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Name2 = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Name3 = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $PrivateAddressIndicator = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Reference = null;
	/**
	 * @access public
	 * @var string
	 */
	public $SalesTaxID = null;
	/**
	 * @access public
	 * @var Address
	 */
	public $ShipmentAddress = null;
	/**
	 * @access public
	 * @var Contact
	 */
	public $ShipmentContact = null;

	/**
	 * @param BranchID $BranchID
	 * @param CEPCustID $CEPCustID
	 * @param CustomsID $CustomsID
	 * @param Name1 $Name1
	 * @param Name2 $Name2
	 * @param Name3 $Name3
	 * @param PrivateAddressIndicator $PrivateAddressIndicator
	 * @param Reference $Reference
	 * @param SalesTaxID $SalesTaxID
	 * @param ShipmentAddress $ShipmentAddress
	 * @param ShipmentContact $ShipmentContact
	 * @access public
	 */
	public function __construct($BranchID, $CEPCustID, $CustomsID, $Name1, $Name2, $Name3, $PrivateAddressIndicator, $Reference, $SalesTaxID,$ShipmentAddress, $ShipmentContact)
	{
		$this->BranchID = $BranchID;
		$this->CEPCustID = $CEPCustID;
		$this->CustomsID = $CustomsID;
		$this->Name1 = $Name1;
		$this->Name2 = $Name2;
		$this->Name3 = $Name3;
		$this->PrivateAddressIndicator = $PrivateAddressIndicator;
		$this->Reference = $Reference;
		$this->SalesTaxID = $SalesTaxID;
		$this->ShipmentAddress = $ShipmentAddress;
		$this->ShipmentContact = $ShipmentContact;
	}

}
