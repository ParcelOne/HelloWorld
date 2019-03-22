<?php

namespace HelloWorld\API;

/**
 * identifyPackage
 */
class identifyPackage {
	/**
	 * @access public
	 * @var string
	 */
	public $PackageRefField = null;
	/**
	 * @access public
	 * @var string
	 */
	public $PackageRefValue = null;

	/**
	 * @param PackageRefField $PackageRefField
	 * @param PackageRefValue $PackageRefValue
	 * @access public
	 */
	public function __construct($PackageRefField, $PackageRefValue)
	{
		$this->PackageRefField = $PackageRefField;
		$this->PackageRefValue = $PackageRefValue;
	}

}
