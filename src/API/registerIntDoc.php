<?php

namespace ParcelOneShipping\API;

/**
 * registerIntDoc
 */
class registerIntDoc {
	/**
	 * @access public
	 * @var ArrayOfIntDocData
	 */
	public $InternationalDoc = null;

	/**
	 * @param InternationalDoc $InternationalDoc
	 * @access public
	 */
	public function __construct($InternationalDoc)
	{
		$this->InternationalDoc = $InternationalDoc;
	}

}
