<?php

namespace HelloWorld\API;

/**
 * getServicesResponse
 */
class getServicesResponse {
	/**
	 * @access public
	 * @var ArrayOfService
	 */
	public $getServicesResult = null;

	/**
	 * @param getServicesResult $getServicesResult
	 * @access public
	 */
	public function __construct($getServicesResult)
	{
		$this->getServicesResult = $getServicesResult;
	}

}
