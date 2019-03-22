<?php

namespace ParcelOneShipping\API;

/**
 * IntDoc
 */
class IntDoc {
	/**
	 * @access public
	 * @var integer
	 */
	public $Certificate = null;
	/**
	 * @access public
	 * @var string
	 */
	public $CertificateNo = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Comments = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ConsignerCustomsID = null;
	/**
	 * @access public
	 * @var ArrayOfIntDocContents
	 */
	public $ContentsDesc = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Currency = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Date = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Explanation = null;
	/**
	 * @access public
	 * @var Format
	 */
	public $InternationalDocumentFormat = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $Invoice = null;
	/**
	 * @access public
	 * @var string
	 */
	public $InvoiceNo = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $ItemCategory = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $License = null;
	/**
	 * @access public
	 * @var string
	 */
	public $LicenseNo = null;
	/**
	 * @access public
	 * @var string
	 */
	public $NonDeliveryInstruction = null;
	/**
	 * @access public
	 * @var string
	 */
	public $OfficeOfOrigin = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Postage = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $PrintInternationalDocuments = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ServiceLevel = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ShipToRef = null;
	/**
	 * @access public
	 * @var string
	 */
	public $TotalValue = null;
	/**
	 * @access public
	 * @var string
	 */
	public $TotalWeightkg = null;
	/**
	 * @access public
	 * @var integer
	 */
	public $ValidatedForExport = null;

	/**
	 * @param Certificate $Certificate
	 * @param CertificateNo $CertificateNo
	 * @param Comments $Comments
	 * @param ConsignerCustomsID $ConsignerCustomsID
	 * @param ContentsDesc $ContentsDesc
	 * @param Currency $Currency
	 * @param Date $Date
	 * @param Explanation $Explanation
	 * @param InternationalDocumentFormat $InternationalDocumentFormat
	 * @param Invoice $Invoice
	 * @param InvoiceNo $InvoiceNo
	 * @param ItemCategory $ItemCategory
	 * @param License $License
	 * @param LicenseNo $LicenseNo
	 * @param NonDeliveryInstruction $NonDeliveryInstruction
	 * @param OfficeOfOrigin $OfficeOfOrigin
	 * @param Postage $Postage
	 * @param PrintInternationalDocuments $PrintInternationalDocuments
	 * @param ServiceLevel $ServiceLevel
	 * @param ShipToRef $ShipToRef
	 * @param TotalValue $TotalValue
	 * @param TotalWeightkg $TotalWeightkg
	 * @param ValidatedForExport $ValidatedForExport
	 * @access public
	 */
	public function __construct($Certificate, $CertificateNo, $Comments, $ConsignerCustomsID, $ContentsDesc, $Currency, $Date, $Explanation, $InternationalDocumentFormat, $Invoice, $InvoiceNo, $ItemCategory, $License, $LicenseNo, $NonDeliveryInstruction, $OfficeOfOrigin, $Postage, $PrintInternationalDocuments, $ServiceLevel, $ShipToRef, $TotalValue, $TotalWeightkg, $ValidatedForExport)
	{
		$this->Certificate = $Certificate;
		$this->CertificateNo = $CertificateNo;
		$this->Comments = $Comments;
		$this->ConsignerCustomsID = $ConsignerCustomsID;
		$this->ContentsDesc = $ContentsDesc;
		$this->Currency = $Currency;
		$this->Date = $Date;
		$this->Explanation = $Explanation;
		$this->InternationalDocumentFormat = $InternationalDocumentFormat;
		$this->Invoice = $Invoice;
		$this->InvoiceNo = $InvoiceNo;
		$this->ItemCategory = $ItemCategory;
		$this->License = $License;
		$this->LicenseNo = $LicenseNo;
		$this->NonDeliveryInstruction = $NonDeliveryInstruction;
		$this->OfficeOfOrigin = $OfficeOfOrigin;
		$this->Postage = $Postage;
		$this->PrintInternationalDocuments = $PrintInternationalDocuments;
		$this->ServiceLevel = $ServiceLevel;
		$this->ShipToRef = $ShipToRef;
		$this->TotalValue = $TotalValue;
		$this->TotalWeightkg = $TotalWeightkg;
		$this->ValidatedForExport = $ValidatedForExport;
	}

}
