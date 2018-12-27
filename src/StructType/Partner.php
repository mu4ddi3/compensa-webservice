<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Partner StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Partner
 * @subpackage Structs
 */
class Partner extends QueryableEntity
{
    /**
     * The address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public $address;
    /**
     * The birthDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $birthDate;
    /**
     * The companyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $companyCode;
    /**
     * The companyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $companyName;
    /**
     * The contractorType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $contractorType;
    /**
     * The emailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $emailAddress;
    /**
     * The faxNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $faxNumber;
    /**
     * The firstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $firstName;
    /**
     * The isAddressEqualsMailingAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $isAddressEqualsMailingAddress;
    /**
     * The lastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $lastName;
    /**
     * The mailingAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public $mailingAddress;
    /**
     * The partnerRole
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Role
     */
    public $partnerRole;
    /**
     * The personalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $personalCode;
    /**
     * The phoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $phoneNumber;
    /**
     * The Address
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public $Address;
    /**
     * The BirthDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BirthDate;
    /**
     * The CompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompanyCode;
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompanyName;
    /**
     * The ContractorType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $ContractorType;
    /**
     * The DocumentName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DocumentName;
    /**
     * The DocumentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DocumentNumber;
    /**
     * The EmailAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EmailAddress;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The IsAmbiguousPersonalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAmbiguousPersonalCode;
    /**
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The PersonalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PersonalCode;
    /**
     * The PhoneNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PhoneNumber;
    /**
     * The ResidentialStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ResidentialStatusType
     */
    public $ResidentialStatus;
    /**
     * The SecondName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SecondName;
    /**
     * Constructor method for Partner
     * @uses Partner::setAddress()
     * @uses Partner::setBirthDate()
     * @uses Partner::setCompanyCode()
     * @uses Partner::setCompanyName()
     * @uses Partner::setContractorType()
     * @uses Partner::setEmailAddress()
     * @uses Partner::setFaxNumber()
     * @uses Partner::setFirstName()
     * @uses Partner::setIsAddressEqualsMailingAddress()
     * @uses Partner::setLastName()
     * @uses Partner::setMailingAddress()
     * @uses Partner::setPartnerRole()
     * @uses Partner::setPersonalCode()
     * @uses Partner::setPhoneNumber()
     * @uses Partner::setAddress_1()
     * @uses Partner::setBirthDate_1()
     * @uses Partner::setCompanyCode_1()
     * @uses Partner::setCompanyName_1()
     * @uses Partner::setContractorType_1()
     * @uses Partner::setDocumentName()
     * @uses Partner::setDocumentNumber()
     * @uses Partner::setEmailAddress_1()
     * @uses Partner::setFirstName_1()
     * @uses Partner::setIsAmbiguousPersonalCode()
     * @uses Partner::setLastName_1()
     * @uses Partner::setPersonalCode_1()
     * @uses Partner::setPhoneNumber_1()
     * @uses Partner::setResidentialStatus()
     * @uses Partner::setSecondName()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $address
     * @param string $birthDate
     * @param string $companyCode
     * @param string $companyName
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $contractorType
     * @param string $emailAddress
     * @param string $faxNumber
     * @param string $firstName
     * @param bool $isAddressEqualsMailingAddress
     * @param string $lastName
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $mailingAddress
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Role $partnerRole
     * @param string $personalCode
     * @param string $phoneNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $address
     * @param string $birthDate
     * @param string $companyCode
     * @param string $companyName
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $contractorType
     * @param string $documentName
     * @param string $documentNumber
     * @param string $emailAddress
     * @param string $firstName
     * @param bool $isAmbiguousPersonalCode
     * @param string $lastName
     * @param string $personalCode
     * @param string $phoneNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResidentialStatusType $residentialStatus
     * @param string $secondName
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Address $address = null, $birthDate = null, $companyCode = null, $companyName = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $contractorType = null, $emailAddress = null, $faxNumber = null, $firstName = null, $isAddressEqualsMailingAddress = null, $lastName = null, \Mu4ddi3\Compensa\Webservice\StructType\Address $mailingAddress = null, \Mu4ddi3\Compensa\Webservice\StructType\Role $partnerRole = null, $personalCode = null, $phoneNumber = null, \Mu4ddi3\Compensa\Webservice\StructType\Address $address_1 = null, $birthDate_1 = null, $companyCode_1 = null, $companyName_1 = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $contractorType_1 = null, $documentName = null, $documentNumber = null, $emailAddress_1 = null, $firstName_1 = null, $isAmbiguousPersonalCode = null, $lastName_1 = null, $personalCode_1 = null, $phoneNumber_1 = null, \Mu4ddi3\Compensa\Webservice\StructType\ResidentialStatusType $residentialStatus = null, $secondName = null)
    {
        $this
            ->setAddress($address)
            ->setBirthDate($birthDate)
            ->setCompanyCode($companyCode)
            ->setCompanyName($companyName)
            ->setContractorType($contractorType)
            ->setEmailAddress($emailAddress)
            ->setFaxNumber($faxNumber)
            ->setFirstName($firstName)
            ->setIsAddressEqualsMailingAddress($isAddressEqualsMailingAddress)
            ->setLastName($lastName)
            ->setMailingAddress($mailingAddress)
            ->setPartnerRole($partnerRole)
            ->setPersonalCode($personalCode)
            ->setPhoneNumber($phoneNumber)
            ->setAddress_1($address_1)
            ->setBirthDate_1($birthDate_1)
            ->setCompanyCode_1($companyCode_1)
            ->setCompanyName_1($companyName_1)
            ->setContractorType_1($contractorType_1)
            ->setDocumentName($documentName)
            ->setDocumentNumber($documentNumber)
            ->setEmailAddress_1($emailAddress_1)
            ->setFirstName_1($firstName_1)
            ->setIsAmbiguousPersonalCode($isAmbiguousPersonalCode)
            ->setLastName_1($lastName_1)
            ->setPersonalCode_1($personalCode_1)
            ->setPhoneNumber_1($phoneNumber_1)
            ->setResidentialStatus($residentialStatus)
            ->setSecondName($secondName);
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address|null
     */
    public function getAddress()
    {
        return isset($this->address) ? $this->address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $address
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setAddress(\Mu4ddi3\Compensa\Webservice\StructType\Address $address = null)
    {
        if (is_null($address) || (is_array($address) && empty($address))) {
            unset($this->address);
        } else {
            $this->address = $address;
        }
        return $this;
    }
    /**
     * Get BirthDate value
     * @return string|null
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }
    /**
     * Set BirthDate value
     * @param string $birthDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setBirthDate($birthDate = null)
    {
        // validation for constraint: string
        if (!is_null($birthDate) && !is_string($birthDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDate)), __LINE__);
        }
        $this->birthDate = $birthDate;
        return $this;
    }
    /**
     * Get CompanyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyCode()
    {
        return isset($this->companyCode) ? $this->companyCode : null;
    }
    /**
     * Set CompanyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setCompanyCode($companyCode = null)
    {
        // validation for constraint: string
        if (!is_null($companyCode) && !is_string($companyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyCode)), __LINE__);
        }
        if (is_null($companyCode) || (is_array($companyCode) && empty($companyCode))) {
            unset($this->companyCode);
        } else {
            $this->companyCode = $companyCode;
        }
        return $this;
    }
    /**
     * Get CompanyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyName()
    {
        return isset($this->companyName) ? $this->companyName : null;
    }
    /**
     * Set CompanyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        if (is_null($companyName) || (is_array($companyName) && empty($companyName))) {
            unset($this->companyName);
        } else {
            $this->companyName = $companyName;
        }
        return $this;
    }
    /**
     * Get ContractorType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getContractorType()
    {
        return isset($this->contractorType) ? $this->contractorType : null;
    }
    /**
     * Set ContractorType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $contractorType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setContractorType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $contractorType = null)
    {
        if (is_null($contractorType) || (is_array($contractorType) && empty($contractorType))) {
            unset($this->contractorType);
        } else {
            $this->contractorType = $contractorType;
        }
        return $this;
    }
    /**
     * Get EmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailAddress()
    {
        return isset($this->emailAddress) ? $this->emailAddress : null;
    }
    /**
     * Set EmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailAddress
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress)), __LINE__);
        }
        if (is_null($emailAddress) || (is_array($emailAddress) && empty($emailAddress))) {
            unset($this->emailAddress);
        } else {
            $this->emailAddress = $emailAddress;
        }
        return $this;
    }
    /**
     * Get faxNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFaxNumber()
    {
        return isset($this->faxNumber) ? $this->faxNumber : null;
    }
    /**
     * Set faxNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $faxNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setFaxNumber($faxNumber = null)
    {
        // validation for constraint: string
        if (!is_null($faxNumber) && !is_string($faxNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($faxNumber)), __LINE__);
        }
        if (is_null($faxNumber) || (is_array($faxNumber) && empty($faxNumber))) {
            unset($this->faxNumber);
        } else {
            $this->faxNumber = $faxNumber;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName()
    {
        return isset($this->firstName) ? $this->firstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->firstName);
        } else {
            $this->firstName = $firstName;
        }
        return $this;
    }
    /**
     * Get isAddressEqualsMailingAddress value
     * @return bool|null
     */
    public function getIsAddressEqualsMailingAddress()
    {
        return $this->isAddressEqualsMailingAddress;
    }
    /**
     * Set isAddressEqualsMailingAddress value
     * @param bool $isAddressEqualsMailingAddress
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setIsAddressEqualsMailingAddress($isAddressEqualsMailingAddress = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAddressEqualsMailingAddress) && !is_bool($isAddressEqualsMailingAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAddressEqualsMailingAddress)), __LINE__);
        }
        $this->isAddressEqualsMailingAddress = $isAddressEqualsMailingAddress;
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName()
    {
        return isset($this->lastName) ? $this->lastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->lastName);
        } else {
            $this->lastName = $lastName;
        }
        return $this;
    }
    /**
     * Get mailingAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address|null
     */
    public function getMailingAddress()
    {
        return isset($this->mailingAddress) ? $this->mailingAddress : null;
    }
    /**
     * Set mailingAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $mailingAddress
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setMailingAddress(\Mu4ddi3\Compensa\Webservice\StructType\Address $mailingAddress = null)
    {
        if (is_null($mailingAddress) || (is_array($mailingAddress) && empty($mailingAddress))) {
            unset($this->mailingAddress);
        } else {
            $this->mailingAddress = $mailingAddress;
        }
        return $this;
    }
    /**
     * Get partnerRole value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Role|null
     */
    public function getPartnerRole()
    {
        return isset($this->partnerRole) ? $this->partnerRole : null;
    }
    /**
     * Set partnerRole value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Role $partnerRole
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setPartnerRole(\Mu4ddi3\Compensa\Webservice\StructType\Role $partnerRole = null)
    {
        if (is_null($partnerRole) || (is_array($partnerRole) && empty($partnerRole))) {
            unset($this->partnerRole);
        } else {
            $this->partnerRole = $partnerRole;
        }
        return $this;
    }
    /**
     * Get PersonalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonalCode()
    {
        return isset($this->personalCode) ? $this->personalCode : null;
    }
    /**
     * Set PersonalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setPersonalCode($personalCode = null)
    {
        // validation for constraint: string
        if (!is_null($personalCode) && !is_string($personalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personalCode)), __LINE__);
        }
        if (is_null($personalCode) || (is_array($personalCode) && empty($personalCode))) {
            unset($this->personalCode);
        } else {
            $this->personalCode = $personalCode;
        }
        return $this;
    }
    /**
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneNumber()
    {
        return isset($this->phoneNumber) ? $this->phoneNumber : null;
    }
    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setPhoneNumber($phoneNumber = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber) && !is_string($phoneNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber)), __LINE__);
        }
        if (is_null($phoneNumber) || (is_array($phoneNumber) && empty($phoneNumber))) {
            unset($this->phoneNumber);
        } else {
            $this->phoneNumber = $phoneNumber;
        }
        return $this;
    }
    /**
     * Get Address value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address|null
     */
    public function getAddress_1()
    {
        return isset($this->Address) ? $this->Address : null;
    }
    /**
     * Set Address value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Address $address
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setAddress_1(\Mu4ddi3\Compensa\Webservice\StructType\Address $address_1 = null)
    {
        if (is_null($address_1) || (is_array($address_1) && empty($address_1))) {
            unset($this->Address);
        } else {
            $this->Address = $address_1;
        }
        return $this;
    }
    /**
     * Get BirthDate value
     * @return string|null
     */
    public function getBirthDate_1()
    {
        return $this->BirthDate;
    }
    /**
     * Set BirthDate value
     * @param string $birthDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setBirthDate_1($birthDate_1 = null)
    {
        // validation for constraint: string
        if (!is_null($birthDate_1) && !is_string($birthDate_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($birthDate_1)), __LINE__);
        }
        $this->BirthDate = $birthDate_1;
        return $this;
    }
    /**
     * Get CompanyCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyCode_1()
    {
        return isset($this->CompanyCode) ? $this->CompanyCode : null;
    }
    /**
     * Set CompanyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setCompanyCode_1($companyCode_1 = null)
    {
        // validation for constraint: string
        if (!is_null($companyCode_1) && !is_string($companyCode_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyCode_1)), __LINE__);
        }
        if (is_null($companyCode_1) || (is_array($companyCode_1) && empty($companyCode_1))) {
            unset($this->CompanyCode);
        } else {
            $this->CompanyCode = $companyCode_1;
        }
        return $this;
    }
    /**
     * Get CompanyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyName_1()
    {
        return isset($this->CompanyName) ? $this->CompanyName : null;
    }
    /**
     * Set CompanyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setCompanyName_1($companyName_1 = null)
    {
        // validation for constraint: string
        if (!is_null($companyName_1) && !is_string($companyName_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName_1)), __LINE__);
        }
        if (is_null($companyName_1) || (is_array($companyName_1) && empty($companyName_1))) {
            unset($this->CompanyName);
        } else {
            $this->CompanyName = $companyName_1;
        }
        return $this;
    }
    /**
     * Get ContractorType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getContractorType_1()
    {
        return isset($this->ContractorType) ? $this->ContractorType : null;
    }
    /**
     * Set ContractorType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $contractorType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setContractorType_1(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $contractorType_1 = null)
    {
        if (is_null($contractorType_1) || (is_array($contractorType_1) && empty($contractorType_1))) {
            unset($this->ContractorType);
        } else {
            $this->ContractorType = $contractorType_1;
        }
        return $this;
    }
    /**
     * Get DocumentName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentName()
    {
        return isset($this->DocumentName) ? $this->DocumentName : null;
    }
    /**
     * Set DocumentName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setDocumentName($documentName = null)
    {
        // validation for constraint: string
        if (!is_null($documentName) && !is_string($documentName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentName)), __LINE__);
        }
        if (is_null($documentName) || (is_array($documentName) && empty($documentName))) {
            unset($this->DocumentName);
        } else {
            $this->DocumentName = $documentName;
        }
        return $this;
    }
    /**
     * Get DocumentNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDocumentNumber()
    {
        return isset($this->DocumentNumber) ? $this->DocumentNumber : null;
    }
    /**
     * Set DocumentNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $documentNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setDocumentNumber($documentNumber = null)
    {
        // validation for constraint: string
        if (!is_null($documentNumber) && !is_string($documentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($documentNumber)), __LINE__);
        }
        if (is_null($documentNumber) || (is_array($documentNumber) && empty($documentNumber))) {
            unset($this->DocumentNumber);
        } else {
            $this->DocumentNumber = $documentNumber;
        }
        return $this;
    }
    /**
     * Get EmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailAddress_1()
    {
        return isset($this->EmailAddress) ? $this->EmailAddress : null;
    }
    /**
     * Set EmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailAddress
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setEmailAddress_1($emailAddress_1 = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress_1) && !is_string($emailAddress_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($emailAddress_1)), __LINE__);
        }
        if (is_null($emailAddress_1) || (is_array($emailAddress_1) && empty($emailAddress_1))) {
            unset($this->EmailAddress);
        } else {
            $this->EmailAddress = $emailAddress_1;
        }
        return $this;
    }
    /**
     * Get FirstName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFirstName_1()
    {
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setFirstName_1($firstName_1 = null)
    {
        // validation for constraint: string
        if (!is_null($firstName_1) && !is_string($firstName_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName_1)), __LINE__);
        }
        if (is_null($firstName_1) || (is_array($firstName_1) && empty($firstName_1))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName_1;
        }
        return $this;
    }
    /**
     * Get IsAmbiguousPersonalCode value
     * @return bool|null
     */
    public function getIsAmbiguousPersonalCode()
    {
        return $this->IsAmbiguousPersonalCode;
    }
    /**
     * Set IsAmbiguousPersonalCode value
     * @param bool $isAmbiguousPersonalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setIsAmbiguousPersonalCode($isAmbiguousPersonalCode = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAmbiguousPersonalCode) && !is_bool($isAmbiguousPersonalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAmbiguousPersonalCode)), __LINE__);
        }
        $this->IsAmbiguousPersonalCode = $isAmbiguousPersonalCode;
        return $this;
    }
    /**
     * Get LastName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getLastName_1()
    {
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setLastName_1($lastName_1 = null)
    {
        // validation for constraint: string
        if (!is_null($lastName_1) && !is_string($lastName_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName_1)), __LINE__);
        }
        if (is_null($lastName_1) || (is_array($lastName_1) && empty($lastName_1))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName_1;
        }
        return $this;
    }
    /**
     * Get PersonalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPersonalCode_1()
    {
        return isset($this->PersonalCode) ? $this->PersonalCode : null;
    }
    /**
     * Set PersonalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setPersonalCode_1($personalCode_1 = null)
    {
        // validation for constraint: string
        if (!is_null($personalCode_1) && !is_string($personalCode_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personalCode_1)), __LINE__);
        }
        if (is_null($personalCode_1) || (is_array($personalCode_1) && empty($personalCode_1))) {
            unset($this->PersonalCode);
        } else {
            $this->PersonalCode = $personalCode_1;
        }
        return $this;
    }
    /**
     * Get PhoneNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPhoneNumber_1()
    {
        return isset($this->PhoneNumber) ? $this->PhoneNumber : null;
    }
    /**
     * Set PhoneNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $phoneNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setPhoneNumber_1($phoneNumber_1 = null)
    {
        // validation for constraint: string
        if (!is_null($phoneNumber_1) && !is_string($phoneNumber_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phoneNumber_1)), __LINE__);
        }
        if (is_null($phoneNumber_1) || (is_array($phoneNumber_1) && empty($phoneNumber_1))) {
            unset($this->PhoneNumber);
        } else {
            $this->PhoneNumber = $phoneNumber_1;
        }
        return $this;
    }
    /**
     * Get ResidentialStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResidentialStatusType|null
     */
    public function getResidentialStatus()
    {
        return isset($this->ResidentialStatus) ? $this->ResidentialStatus : null;
    }
    /**
     * Set ResidentialStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResidentialStatusType $residentialStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setResidentialStatus(\Mu4ddi3\Compensa\Webservice\StructType\ResidentialStatusType $residentialStatus = null)
    {
        if (is_null($residentialStatus) || (is_array($residentialStatus) && empty($residentialStatus))) {
            unset($this->ResidentialStatus);
        } else {
            $this->ResidentialStatus = $residentialStatus;
        }
        return $this;
    }
    /**
     * Get SecondName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSecondName()
    {
        return isset($this->SecondName) ? $this->SecondName : null;
    }
    /**
     * Set SecondName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $secondName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public function setSecondName($secondName = null)
    {
        // validation for constraint: string
        if (!is_null($secondName) && !is_string($secondName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($secondName)), __LINE__);
        }
        if (is_null($secondName) || (is_array($secondName) && empty($secondName))) {
            unset($this->SecondName);
        } else {
            $this->SecondName = $secondName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
