<?php

namespace ParcelOneShipping\API;

/**
 * Dimensions
 */
class Dimensions {
	/**
	 * @access public
	 * @var string
	 */
	public $Height = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Length = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Measurement = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Width = null;

	/**
	 * @param Height $Height
	 * @param Length $Length
	 * @param Measurement $Measurement
	 * @param Width $Width
	 * @access public
	 */
	public function __construct($Height, $Length, $Measurement ,$Width)
	{
		$this->Height = $Height;
		$this->Length = $Length;
		$this->Measurement = $Measurement;
		$this->Width = $Width;
	}

}
