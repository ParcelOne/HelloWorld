<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfIntDocData {
	public $IntDocDatas = null;
	/**
	 * @param IntDocDatas $IntDocDatas
	 * @access public
	 */
	public function __construct($IntDocDatas)
	{
		$this->IntDocDatas = $IntDocDatas;
	}
}
