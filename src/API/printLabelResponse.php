<?php

namespace ParcelOneShipping\API;

/**
 * printLabelResponse
 */
class printLabelResponse {
	/**
	 * @access public
	 * @var ArrayOfprintDocumentsResult
	 */
	public $printLabelResult = null;

	/**
	 * @param printLabelResult $printLabelResult
	 * @access public
	 */
	public function __construct($printLabelResult)
	{
		$this->printLabelResult = $printLabelResult;
	}

}
