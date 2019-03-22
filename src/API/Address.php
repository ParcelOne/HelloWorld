<?php

namespace HelloWorld\API;

/**
 * Address
 */
class Address {
	/**
	 * @access public
	 * @var string
	 */
	public $City= null;
	/**
	 * @access public
	 * @var string
	 */
	public $Country= null;
	/**
	 * @access public
	 * @var string
	 */
	public $District= null;
	/**
	 * @access public
	 * @var string
	 */
	public $PostalCode= null;
	/**
	 * @access public
	 * @var string
	 */
	public $State= null;
	/**
	 * @access public
	 * @var string
	 */
	public $Street= null;
	/**
	 * @access public
	 * @var string
	 */
	public $Streetno= null;

	/**
	 * @param City $City
	 * @param Country $Country
	 * @param District $District
	 * @param PostalCode $PostalCode
	 * @param State $State
	 * @param Street $Street
	 * @param Streetno $Streetno
	 * @access public
	 */
	public function __construct($City, $Country, $District, $PostalCode ,$State ,$Street ,$Streetno)
	{
		$this->City = $City;
		$this->Country = $Country;
		$this->District = $District;
		$this->PostalCode = $PostalCode;
		$this->State    = $State;
		$this->Street   = $Street;
		$this->Streetno = $Streetno;
	}

}
