<?php

namespace ParcelOneShipping\AP;

/**
 * printDocumentsResponse
 */
class printDocumentsResponse {
	/**
	 * @access public
	 * @var ArrayOfprintDocumentsResult
	 */
	public $printDocumentsResult = null;

	/**
	 * @param printDocumentsResult $printDocumentsResult
	 * @access public
	 */
	public function __construct($printDocumentsResult)
	{
		$this->printDocumentsResult = $printDocumentsResult;
	}

}
