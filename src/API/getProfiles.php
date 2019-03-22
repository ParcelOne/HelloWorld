<?php

namespace ParcelOneShipping\API;

/**
 * getProfiles
 */
class getProfiles {
	/**
	 * @access public
	 * @var integer
	 */
	public $level = null;
	/**
	 * @access public
	 * @var ArrayOfstring
	 */
	public $Countries = null;

	/**
	 * @param level $level
	 * @param Countries $Countries
	 * @access public
	 */
	public function __construct($level, $Countries)
	{
		$this->level = $level;
		$this->Countries = $Countries;
	}

}
