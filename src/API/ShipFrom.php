<?php

namespace HelloWorld\API;

/**
 * ShipFrom
 */
class ShipFrom {
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
	 * @param CustomsID $CustomsID
	 * @param Name1 $Name1
	 * @param Name2 $Name2
	 * @param Name3 $Name3
	 * @param Reference $Reference
	 * @param SalesTaxID $SalesTaxID
	 * @param ShipmentAddress $ShipmentAddress
	 * @param ShipmentContact $ShipmentContact

	 * @access public
	 */
	public function __construct($CustomsID, $Name1, $Name2, $Name3, $Reference, $SalesTaxID, $ShipmentAddress, $ShipmentContact)
	{
		$this->CustomsID = $CustomsID;
		$this->Name1 = $Name1;
		$this->Name2 = $Name2;
		$this->Name3 = $Name3;
		$this->Reference = $Reference;
		$this->SalesTaxID = $SalesTaxID;
		$this->ShipmentAddress = $ShipmentAddress;
		$this->ShipmentContact = $ShipmentContact;

	}

}
