<?php

namespace HelloWorld\API;

/**
 * getProductsResponse
 */
class getProductsResponse {
	/**
	 * @access public
	 * @var ArrayOfProduct
	 */
	public $getProductsResult = null;

	/**
	 * @param getProductsResult $getProductsResult
	 * @access public
	 */
	public function __construct($getProductsResult)
	{
		$this->getProductsResult = $getProductsResult;
	}

}
