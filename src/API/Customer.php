<?php

namespace HelloWorld\API;

/**
 * Customer
 */
class Customer {
	/**
	 * @access public
	 * @var ArrayOfConsigner
	 */
	public $Consigners = null;
	/**
	 * @access public
	 * @var string
	 */
	public $CustomerID = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $Default = null;
	/**
	 * @access public
	 * @var string
	 */
	public $MandatorID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Shortname = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Status = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $StatusID = null;

	/**
	 * @param Consigners $Consigners
	 * @param CustomerID $CustomerID
	 * @param Default $Default
	 * @param MandatorID $MandatorID
	 * @param Shortname $Shortname
	 * @param Status $Status
	 * @param StatusID $StatusID
	 * @access public
	 */
	public function __construct($Consigners, $CustomerID, $Default , $MandatorID, $Shortname, $Status, $StatusID)
	{
		$this->Consigners = $Consigners;
		$this->CustomerID = $CustomerID;
		$this->Default = $Default;
		$this->MandatorID = $MandatorID;
		$this->Shortname = $Shortname;
		$this->Status = $Status;
		$this->StatusID = $StatusID;
	}

}
