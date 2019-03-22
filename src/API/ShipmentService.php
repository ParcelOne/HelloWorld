<?php

namespace HelloWorld\API;

/**
 * ShipmentService
 */
class ShipmentService {
	/**
	 * @access public
	 * @var string
	 */
	public $Parameters = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ServiceID = null;
	/**
	 * @access public
	 * @var Amount
	 */
	public $Value = null;

	/**
	 * @param Parameters $Parameters
	 * @param ServiceID $ServiceID
	 * @param Value $Value
	 * @access public
	 */
	public function __construct($Parameters, $ServiceID, $Value)
	{
		$this->Parameters = $Parameters;
		$this->ServiceID = $ServiceID;
		$this->Value = $Value;
	}

}
