<?php

namespace HelloWorld\API;

/**
 * CEPSpecial
 */
class CEPSpecial {
	/**
	 * @access public
	 * @var string
	 */
	public $Key = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Value = null;

	/**
	 * @param Key $Key
	 * @param Value $Value
	 * @access public
	 */
	public function __construct($Key, $Value)
	 {
		 $this->Key = $Key;
		 $this->Value = $Value;
	 }

}
