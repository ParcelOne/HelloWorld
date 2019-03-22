<?php

namespace ParcelOneShipping\API;

/**
 * getServices
 */
class getServices {
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
	 * @var string
	 */
	public $Product = null;
	/**
	 * @access public
	 * @var ArrayOfstring
	 */
	public $Countries = null;

	/**
	 * @param Mandator $Mandator
	 * @param CEP $CEP
	 * @param Product $Product
	 * @param Countries $Countries
	 * @access public
	 */
	public function __construct($Mandator, $CEP, $Product ,$Countries)
	{
		$this->Mandator = $Mandator;
		$this->CEP = $CEP;
		$this->Product = $Product;
		$this->Countries = $Countries;
	}

}
