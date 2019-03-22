<?php

namespace ParcelOneShipping\API;

/**
 * Contact
 */
class Contact {
	/**
	 * @access public
	 * @var string
	 */
	public $AttentionName = null;
	/**
	 * @access public
	 * @var string
	 */
	public $BirthDate = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Company = null;
	/**
	 * @access public
	 * @var string
	 */
	public $ContactPerson = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Email = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Fax = null;
	/**
	 * @access public
	 * @var string
	 */
	public $FirstName = null;
	/**
	 * @access public
	 * @var string
	 */
	public $LastName = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Mobile = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Phone = null;
	/**
	 * @access public
	 * @var string
	 */
	public $Salutation = null;

	/**
	 * @param AttentionName $AttentionName
	 * @param BirthDate $BirthDate
	 * @param Company $Company
	 * @param ContactPerson $ContactPerson
	 * @param Email $Email
	 * @param Fax $Fax
	 * @param FirstName $FirstName
	 * @param LastName $LastName
	 * @param Mobile $Mobile
	 * @param Phone $Phone
	 * @param Salutation $Salutation

	 * @access public
	 */
	public function __construct($AttentionName, $BirthDate, $Company, $ContactPerson, $Email, $Fax, $FirstName, $LastName, $Mobile, $Phone, $Salutation)
	{
		$this->AttentionName = $AttentionName;
		$this->BirthDate = $BirthDate;
		$this->Company = $Company;
		$this->ContactPerson = $ContactPerson;
		$this->Email = $Email;
		$this->Fax = $Fax;
		$this->FirstName = $FirstName;
		$this->LastName = $LastName;
		$this->Mobile = $Mobile;
		$this->Phone = $Phone;
		$this->Salutation = $Salutation;

	}

}
