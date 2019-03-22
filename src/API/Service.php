<?php

namespace HelloWorld\API;

/**
 * Service
 */

 class Service {
	/**
	 * @access public
	 * @var integer
	 */
	public $AmountNeeded = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $CurrencyNeeded = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $Default = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ServiceID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ServiceName = null;

	/**
	 * @param AmountNeeded $AmountNeeded
	 * @param CurrencyNeeded $CurrencyNeeded
	 * @param Default $Default
	 * @param ServiceID $ServiceID
	 * @param ServiceName $ServiceName
	 * @access public
	 */
	public function __construct($AmountNeeded, $CurrencyNeeded, $Default, $ServiceID, $ServiceName)
	{
		$this->AmountNeeded = $AmountNeeded;
		$this->CurrencyNeeded = $CurrencyNeeded;
		$this->Default = $Default;
		$this->ServiceID = $ServiceID;
		$this->ServiceName = $ServiceName;
	}

}
