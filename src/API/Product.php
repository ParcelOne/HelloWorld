<?php

namespace HelloWorld\API;

/**
 * Product
 */
class Product {
	/**
	 * @access public
	 * @var integer
	 */
	public $Default = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ProductName = null;
	/**
	 * @access public
	 * @var ArrayOfService
	 */
	public $Services = null;

	/**
	 * @param Default $Default
	 * @param ProductID $ProductID
	 * @param ProductName $ProductName
	 * @param Services $Services
	 * @access public
	 */
	public function __construct($Default, $ProductID, $ProductName, $Services)
	{
		$this->Default = $Default;
		$this->ProductID = $ProductID;
		$this->ProductName = $ProductName;
		$this->Services = $Services;
	}

}
