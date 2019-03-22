<?php

namespace ParcelOneShipping\API;

/**
 * Amount
 */

class Amount {
	/**
	 * @access public
	 * @var string
	 */
	public $Currency = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Description = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Value = null;

	/**
	 * @param Currency $Currency
	 * @param Description $Description
	 * @param Value $Value
	 * @access public
	 */
	public function __construct($Currency, $Description, $Value)
	{
		$this->Currency = $Currency;
		$this->Description = $Description;
		$this->Value = $Value;
	}

}
