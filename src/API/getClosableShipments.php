<?php

namespace HelloWorld\API;

/**
 * getClosableShipments
 */
class getClosableShipments {
	/**
	 * @access public
	 * @var string
	 */
	public $Mandator = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Consigner = null;
	/**
	 * @access public
	 * @var string
	 */
	public $CEP = null;

	/**
	 * @param Mandator $Mandator
	 * @param Consigner $Consigner
	 * @param CEP $CEP
	 * @access public
	 */
	public function __construct($Mandator, $Consigner, $CEP)
	{
		$this->Mandator = $Mandator;
		$this->Consigner = $Consigner;
		$this->CEP = $CEP;
	}

}
