<?php

namespace HelloWorld\API;

/**
 * PrintRequest
 */
class PrintRequest {
	/**
	 * @access public
	 * @var string
	 */
	public $DocType = null;
	/**
	 * @access public
	 * @var Format
	 */
	public $Format = null;
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
	 * @param DocType $DocType
	 * @param Format $Format
	 * @param IDPackage $IDPackage
	 * @param IDShipment $IDShipment
	 * @access public
	 */
	public function __construct($DocType, $Format, $IDPackage, $IDShipment)
	{
		$this->DocType = $DocType;
		$this->Format = $Format;
		$this->IDPackage = $IDPackage;
		$this->IDShipment = $IDShipment;
	}

}
