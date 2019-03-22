<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfProfile {
	public $Profiles = null;
	/**
	 * @param Profile $Profile
	 * @access public
	 */
	public function __construct($Profiles)
	{
		$this->Profiles = $Profiles;
	}
}
