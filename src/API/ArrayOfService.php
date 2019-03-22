<?php

namespace ParcelOneShipping\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfService {
	public $Services = null;
	/**
	 * @param Service $Service
	 * @access public
	 */
	public function __construct($Services)
	{
		$this->Services = $Services;
	}
}
