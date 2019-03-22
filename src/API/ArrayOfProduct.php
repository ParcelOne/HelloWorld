<?php

namespace HelloWorld\API;

/**
 * ArrayOfCustomer
 */
class ArrayOfProduct {
	public $Products = null;
	/**
	 * @param Product $Customer
	 * @access public
	 */
	public function __construct($Products)
	{
		$this->Products = $Products;
	}
}
