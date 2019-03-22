<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfIntDocContents {
	public $IntDocContentss = null;
	/**
	 * @param IntDocContentss $IntDocContentss
	 * @access public
	 */
	public function __construct($IntDocContentss)
	{
		$this->IntDocContentss = $IntDocContentss;
	}
}
