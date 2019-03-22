<?php

namespace ParcelOneShipping\API;

/**
 * getChargesResponse
 */
class getChargesResponse {
	/**
	 * @access public
	 * @var ArrayOfChargesResult
	 */
	public $getChargesResult = null;

	/**
	 * @param getChargesResult $getChargesResult
	 * @access public
	 */
	public function __construct($getChargesResult)
	{
		$this->getChargesResult = $getChargesResult;
	}

}
