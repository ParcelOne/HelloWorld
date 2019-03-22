<?php

namespace HelloWorld\API;

/**
 * ClosedResult
 */
class ClosedResult {
	/**
	 * @access public
	 * @var string
	 */
	public $CEP = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ClosedStamp = null;
	/**
	 * @access public
	 * @var printDocumentsResult
	 */
	public $printDocumentResult = null;

	/**
	 * @param CEP $CEP
	 * @param ClosedStamp $ClosedStamp
	 * @param printDocumentResult $printDocumentResult
	 * @access public
	 */
	public function __construct($CEP, $ClosedStamp, $printDocumentResult)
	{
		$this->CEP = $CEP;
		$this->ClosedStamp = $ClosedStamp;
		$this->printDocumentResult = $printDocumentResult;
	}
}
