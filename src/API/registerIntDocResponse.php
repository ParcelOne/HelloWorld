<?php

namespace ParcelOneShipping\API;

/**
 * registerIntDocResponse
 */
class registerIntDocResponse {
	/**
	 * @access public
	 * @var ArrayOfprintDocumentsResult
	 */
	public $registerIntDocResult = null;

	/**
	 * @param registerIntDocResult $registerIntDocResult
	 * @access public
	 */
	public function __construct($registerIntDocResult)
	{
		$this->registerIntDocResult = $registerIntDocResult;
	}

}
