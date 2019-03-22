<?php

namespace ParcelOneShipping\API;

/**
 * getClosableShipmentsResponse
 */
class getClosableShipmentsResponse {
	/**
	 * @access public
	 * @var ArrayOfprintDocumentsResult
	 */
	public $getClosableShipmentsResult = null;

	/**
	 * @param getClosableShipmentsResult $getClosableShipmentsResult
	 * @access public
	 */
	public function __construct($getClosableShipmentsResult)
	{
		$this->getClosableShipmentsResult = $getClosableShipmentsResult;
	}

}
