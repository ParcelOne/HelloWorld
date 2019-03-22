<?php

namespace HelloWorld\API;

/**
 * getProfilesResponse
 */
class getProfilesResponse {
	/**
	 * @access public
	 * @var ArrayOfProfile
	 */
	public $getProfilesResult = null;

	/**
	 * @param getProfilesResult $getProfilesResult
	 * @access public
	 */
	public function __construct($getProfilesResult)
	{
		$this->getProfilesResult = $getProfilesResult;
	}

}
