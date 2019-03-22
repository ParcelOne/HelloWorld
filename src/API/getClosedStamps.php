<?php

namespace HelloWorld\API;

/**
 * getClosedStamps
 */
class getClosedStamps {
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
	 * @access public
	 * @var string
	 */
	public $StartDate = null;
	/**
	 * @access public
	 * @var string
	 */
	public $EndDate = null;

	/**
	 * @param Mandator $Mandator
	 * @param Consigner $Consigner
	 * @param CEP $CEP
	 * @param StartDate $StartDate
	 * @param EndDate $EndDate
	 * @access public
	 */
	public function __construct($Mandator, $Consigner, $CEP, $StartDate, $EndDate)
	{
		$this->Mandator = $Mandator;
		$this->Consigner = $Consigner;
		$this->CEP = $CEP;
		$this->StartDate = $StartDate;
		$this->EndDate = $EndDate;
	}

}
