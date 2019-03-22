<?php

namespace HelloWorld\API;

/**
 * getCharges
 */
class getCharges {
	/**
	 * @access public
	 * @var ArrayOfCharges
	 */
	public $ChargesData = null;

	/**
	 * @param ChargesData $ChargesData
	 * @access public
	 */
	public function __construct($ChargesData)
	{
		$this->ChargesData = $ChargesData;
	}

}
