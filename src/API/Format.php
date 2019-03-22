<?php

namespace ParcelOneShipping\API;

/**
 * Format
 */
class Format {
	/**
	 * @access public
	 * @var string
	 */
	public $Height = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $Orientation = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Size = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Type = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Unit = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Width = null;

/**
 * @param Height $Height
 * @param Orientation $Orientation
 * @param Size $Size
 * @param Type $Type
 * @param Unit $Unit
 * @param Width $Width
 * @access public
 */
public function __construct($Height, $Orientation, $Size, $Type, $Unit, $Width)
{
	$this->Height = $Height;
	$this->Orientation = $Orientation;
	$this->Size  = $Size;
	$this->Type  = $Type;
	$this->Unit  = $Unit;
	$this->Width = $Width;
}
}
