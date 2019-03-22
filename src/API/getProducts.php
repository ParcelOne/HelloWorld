<?php

namespace ParcelOneShipping\API;

/**
 * getProducts
 */
class getProducts {
	/**
	 * @access public
	 * @var string
	 */
	public $Mandator = null;
	/**
	 * @access public
	 * @var string
	 */
	public $CEP = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $level = null;
	/**
	 * @access public
	 * @var ArrayOfstring
	 */
	public $Countries = null;

	/**
	 * @param Mandator $Mandator
	 * @param CEP $CEP
	 * @param level $level
	 * @param Countries $Countries
	 * @access public
	 */
	public function __construct($Mandator, $CEP, $level, $Countries)
	{
		$this->Mandator = $Mandator;
		$this->CEP = $CEP;
		$this->level = $level;
		$this->Countries = $Countries;

	}

}
