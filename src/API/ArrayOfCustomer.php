<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfCustomer {
	public $Customers = null;
	/**
	 * @param Customers $Customers
	 * @access public
	 */
	public function __construct($Customers)
	{
		$this->Customers = $Customers;
	}
}
