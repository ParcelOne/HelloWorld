<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfCharges {
	public $Chargess = null;
	/**
	 * @param Chargess $Chargess
	 * @access public
	 */
	public function __construct($Chargess)
	{
		$this->Chargess = $Chargess;
	}
}
