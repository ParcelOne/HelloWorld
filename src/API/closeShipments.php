<?php

namespace ParcelOneShipping\API;

/**
 * closeShipments
 */
class closeShipments {
	/**
	 * @access public
	 * @var string
	 */
	public $ClosedStamp = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Mandator = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Consigner = null;
	/**
	 * @access public
	 * @var string
	 */
	public $CEP = null;
	/**
	 * @access public
	 * @var Format
	 */
	public $Format = null;
	/**
	 * @access public
	 * @var ArrayOfidentifyShipment
	 */
	public $Shipments = null;

	    /**
	     * @param ClosedStamp $ClosedStamp
	     * @param Mandator $Mandator
	     * @param Consigner $Consigner
			 * @param CEP $CEP
			 * @param Format $Format
			 * @param Shipments $Shipments
	     * @access public
	     */
	    public function __construct($ClosedStamp, $Mandator, $Consigner , $CEP, $Format, $Shipments)
	    {
	      $this->ClosedStamp = $ClosedStamp;
	      $this->Mandator = $Mandator;
	      $this->Consigner = $Consigner;
				$this->CEP = $CEP;
				$this->Format = $Format;
				$this->Shipments = $Shipments;
	    }

}
