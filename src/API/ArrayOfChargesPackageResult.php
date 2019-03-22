<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfChargesPackageResult {
	public $ChargesPackageResults = null;
	/**
	 * @param ChargesPackageResults $ChargesPackageResults
	 * @access public
	 */
	public function __construct($ChargesPackageResults)
	{
		$this->ChargesPackageResults = $ChargesPackageResults;
	}
}
