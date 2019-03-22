<?php

namespace HelloWorld\API;

/**
 * Error
 */

class Error {
	/**
	 * @access public
	 * @var string
	 */
	public $ErrorNo = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Message = null;
	/**
	 * @access public
	 * @var string
	 */
	public $StatusCode = null;

	/**
	 * @param ErrorNo $ErrorNo
	 * @param Message $Message
	 * @param StatusCode $StatusCode
	 * @access public
	 */
	public function __construct($ErrorNo, $Message, $StatusCode)
	{
		$this->ErrorNo = $ErrorNo;
		$this->Message = $Message;
		$this->StatusCode = $StatusCode;
	}

}
