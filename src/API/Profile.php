<?php

namespace HelloWorld\API;

/**
 * Profile
 */
class Profile {
	/**
	 * @access public
	 * @var ArrayOfCEP
	 */
	public $CEPs = null;
	/**
	 * @access public
	 * @var ArrayOfConsigner
	 */
	public $Consigners = null;
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
	public $MandatorShortname = null;

	/**
	 * @param CEPs $CEPs
	 * @param Consigners $Consigners
	 * @param Default $Default
	 * @param MandatorID $MandatorID
	 * @param MandatorShortname $MandatorShortname
	 * @access public
	 */
	public function __construct($CEPs, $Consigners, $Default, $MandatorID, $MandatorShortname)
	{
		$this->CEPs = $CEPs;
		$this->Consigners = $Consigners;
		$this->Default = $Default;
		$this->MandatorID = $MandatorID;
		$this->MandatorShortname = $MandatorShortname;
	}

}
