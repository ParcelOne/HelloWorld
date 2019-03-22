<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfError {
	public $Errors = null;
	/**
	 * @param Errors $Errors
	 * @access public
	 */
	public function __construct($Errors)
	{
		$this->Errors = $Errors;
	}
}
