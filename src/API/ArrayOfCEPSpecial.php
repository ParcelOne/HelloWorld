<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfCEPSpecial {
	public $CEPSpecials = null;
	/**
	 * @param CEPSpecials $CEPSpecials
	 * @access public
	 */
	public function __construct($CEPSpecials)
	{
		$this->CEPSpecials = $CEPSpecials;
	}
}
