<?php

namespace HelloWorld\API;

/**
 * Consigner
 */
class Consigner {
	/**
	 * @access public
	 * @var string
	 */
	public $ConsignerID = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $Default = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Shortname = null;

	/**
	 * @param ConsignerID $ConsignerID
	 * @param Default $Default
	 * @param Shortname $Shortname
	 * @access public
	 */
	public function __construct($ConsignerID, $Default, $Shortname)
	{
		$this->ConsignerID = $ConsignerID;
		$this->Default = $Default;
		$this->Shortname = $Shortname;
	}

}
