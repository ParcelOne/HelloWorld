<?php

namespace ParcelOneShipping\API;

/**
 * IntDocContents
 */
class IntDocContents {
	/**
	 * @access public
	 * @var string
	 */
	public $Contents = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ItemValue = null;
	/**
	 * @access public
	 * @var string
	 */
	public $NetWeight = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Origin = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $Quantity = null;
	/**
	 * @access public
	 * @var string
	 */
	public $TariffNumber = null;

	/**
	 * @param Contents $Contents
	 * @param ItemValue $ItemValue
	 * @param NetWeight $NetWeight
	 * @param Origin $Origin
	 * @param Quantity $Quantity
	 * @param TariffNumber $TariffNumber
	 * @access public
	 */
	public function __construct($Contents, $ItemValue, $NetWeight, $Origin, $Quantity, $TariffNumber)
	{
		$this->Contents = $Contents;
		$this->ItemValue = $ItemValue;
		$this->NetWeight = $NetWeight;
		$this->Origin = $Origin;
		$this->Quantity = $Quantity;
		$this->TariffNumber = $TariffNumber;

	}

}
