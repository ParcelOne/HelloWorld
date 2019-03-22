<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfCEP {
	public $CEPs = null;
	/**
	 * @param CEPs $CEPs
	 * @access public
	 */
	public function __construct($CEPs)
	{
		$this->CEPs = $CEPs;
	}
}
