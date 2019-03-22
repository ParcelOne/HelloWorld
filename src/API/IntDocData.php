<?php

namespace ParcelOneShipping\API;

/**
 * IntDocData
 */
class IntDocData {
	/**
	 * @access public
	 * @var identifyPackage
	 */
	public $IDPackage = null;
	/**
	 * @access public
	 * @var identifyShipment
	 */
	public $IDShipment = null;
	/**
	 * @access public
	 * @var IntDoc
	 */
	public $InternationalDoc = null;

	/**
	 * @param IDPackage $IDPackage
	 * @param IDShipment $IDShipment
	 * @param InternationalDoc $InternationalDoc
	 * @access public
	 */
	public function __construct($IDPackage, $IDShipment, $InternationalDoc)
	{
		$this->IDPackage = $IDPackage;
		$this->IDShipment = $IDShipment;
		$this->InternationalDoc = $InternationalDoc;
	}

}
