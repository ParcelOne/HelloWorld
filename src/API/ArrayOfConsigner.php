<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfConsigner {
	public $Consigners = null;
	/**
	 * @param Consigners $Customers
	 * @access public
	 */
	public function __construct($Consigners)
	{
		$this->Consigners = $Consigners;
	}
}
