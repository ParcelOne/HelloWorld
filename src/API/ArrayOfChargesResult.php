<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfChargesResult {
	public $ChargesResults = null;
	/**
	 * @param ChargesResults $ChargesResults
	 * @access public
	 */
	public function __construct($ChargesResults)
	{
		$this->ChargesResults = $ChargesResults;
	}
}
