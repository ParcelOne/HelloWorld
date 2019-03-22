<?php

namespace HelloWorld\API;

/**
 * getCEPs
 */
class getCEPs {
	/**
	 * @access public
	 * @var string
	 */
	public $Mandator = null;
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
	 * @param level $level
	 * @param Countries $Countries
	 * @access public
	 */
	public function __construct($Mandator, $level, $Countries)
	{
		$this->Mandator = $Mandator;
		$this->level = $level;
		$this->Countries = $Countries;
	}

}
