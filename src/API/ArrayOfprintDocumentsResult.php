<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfprintDocumentsResult {
	public $printDocumentsResults = null;
	/**
	 * @param printDocumentsResults $printDocumentsResults
	 * @access public
	 */
	public function __construct($printDocumentsResults)
	{
		$this->printDocumentsResults = $printDocumentsResults;
	}
}
