<?php

namespace ParcelOneShipping\API;

/**
 * printInternationalDocumentsResponse
 */
class printInternationalDocumentsResponse {
	/**
	 * @access public
	 * @var ArrayOfprintDocumentsResult
	 */
	public $printInternationalDocumentsResult = null;

	/**
	 * @param printInternationalDocumentsResult $printInternationalDocumentsResult
	 * @access public
	 */
	public function __construct($printInternationalDocumentsResult)
	{
		$this->printInternationalDocumentsResult = $printInternationalDocumentsResult;
	}

}
