<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfAmount {
	public $Amounts = null;
	/**
	 * @param Amounts $Amounts
	 * @access public
	 */
	public function __construct($Amounts)
	{
		$this->Amounts = $Amounts;
	}
}
