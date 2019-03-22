<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfClosedResult {
	public $ClosedResults = null;
	/**
	 * @param ClosedResults $ClosedResults
	 * @access public
	 */
	public function __construct($ClosedResults)
	{
		$this->ClosedResults = $ClosedResults;
	}
}
