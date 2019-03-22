<?php

namespace ParcelOneShipping\API;

/**
 * Measurement
 */
class Measurement {
	/**
	 * @access public
	 * @var string
	 */
	public $Unit = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Value = null;

	/**
	 * @param Unit $Unit
	 * @param Value $Value
	 * @access public
	 */
	public function __construct($Unit, $Value)
	{
		$this->Unit = $Unit;
		$this->Value = $Value;
	}

}
