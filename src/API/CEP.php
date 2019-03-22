<?php

namespace HelloWorld\API;

/**
 * CEP
 */
class CEP {
	/**
	 * @access public
	 * @var string
	 */
	public $CEPID = null;
	/**
	 * @access public
	 * @var string
	 */
	public $CEPLongname = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $Default = null;
	/**
	 * @access public
	 * @var ArrayOfProduct
	 */
	public $Products = null;

	/**
	 * @param CEPID $CEPID
	 * @param CEPLongname $CEPLongname
	 * @param Default $Default
	 * @param Products $Products
	 * @access public
	 */
	public function __construct($CEPID, $CEPLongname, $Default, $Products)
	 {
		 $this->CEPID = $CEPID;
		 $this->CEPLongname = $CEPLongname;
		 $this->Default = $Default;
		 $this->Products = $Products;
	 }

}
