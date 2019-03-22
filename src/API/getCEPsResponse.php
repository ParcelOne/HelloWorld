<?php

namespace HelloWorld\API;

/**
 * getCEPsResponse
 */
class getCEPsResponse {
	/**
	 * @access public
	 * @var ArrayOfCEP
	 */
	public $getCEPsResult = null;

	/**
	 * @param getCEPsResult $getCEPsResult
	 * @access public
	 */
	public function __construct($getCEPsResult)
	{
		$this->getCEPsResult = $getCEPsResult;
	}

}
