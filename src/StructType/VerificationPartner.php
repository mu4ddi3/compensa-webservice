<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerificationPartner StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VerificationPartner
 * @subpackage Structs
 */
class VerificationPartner extends VerificationObject
{
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
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FirstName;
    /**
     * The IsResident
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsResident;
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
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The IsExtendedVerificationAvailable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsExtendedVerificationAvailable;
    /**
     * The PartnerCorrectionData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerCorrectionData
     */
    public $PartnerCorrectionData;
    /**
     * The PartnerRoleOnContract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerRoleOnContract;
    /**
     * The Policies
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicy
     */
    public $Policies;
    /**
     * The VerificationMessages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationMessage
     */
    public $VerificationMessages;
    /**
     * Constructor method for VerificationPartner
     * @uses VerificationPartner::setCompanyCode()
     * @uses VerificationPartner::setCompanyName()
     * @uses VerificationPartner::setFirstName()
     * @uses VerificationPartner::setIsResident()
     * @uses VerificationPartner::setLastName()
     * @uses VerificationPartner::setPersonalCode()
     * @uses VerificationPartner::setType()
     * @uses VerificationPartner::setIsExtendedVerificationAvailable()
     * @uses VerificationPartner::setPartnerCorrectionData()
     * @uses VerificationPartner::setPartnerRoleOnContract()
     * @uses VerificationPartner::setPolicies()
     * @uses VerificationPartner::setVerificationMessages()
     * @param string $companyCode
     * @param string $companyName
     * @param string $firstName
     * @param bool $isResident
     * @param string $lastName
     * @param string $personalCode
     * @param string $type
     * @param bool $isExtendedVerificationAvailable
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerCorrectionData $partnerCorrectionData
     * @param string $partnerRoleOnContract
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicy $policies
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationMessage $verificationMessages
     */
    public function __construct($companyCode = null, $companyName = null, $firstName = null, $isResident = null, $lastName = null, $personalCode = null, $type = null, $isExtendedVerificationAvailable = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerCorrectionData $partnerCorrectionData = null, $partnerRoleOnContract = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicy $policies = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationMessage $verificationMessages = null)
    {
        $this
            ->setCompanyCode($companyCode)
            ->setCompanyName($companyName)
            ->setFirstName($firstName)
            ->setIsResident($isResident)
            ->setLastName($lastName)
            ->setPersonalCode($personalCode)
            ->setType($type)
            ->setIsExtendedVerificationAvailable($isExtendedVerificationAvailable)
            ->setPartnerCorrectionData($partnerCorrectionData)
            ->setPartnerRoleOnContract($partnerRoleOnContract)
            ->setPolicies($policies)
            ->setVerificationMessages($verificationMessages);
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
        return isset($this->CompanyCode) ? $this->CompanyCode : null;
    }
    /**
     * Set CompanyCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setCompanyCode($companyCode = null)
    {
        // validation for constraint: string
        if (!is_null($companyCode) && !is_string($companyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyCode)), __LINE__);
        }
        if (is_null($companyCode) || (is_array($companyCode) && empty($companyCode))) {
            unset($this->CompanyCode);
        } else {
            $this->CompanyCode = $companyCode;
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
        return isset($this->CompanyName) ? $this->CompanyName : null;
    }
    /**
     * Set CompanyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        if (is_null($companyName) || (is_array($companyName) && empty($companyName))) {
            unset($this->CompanyName);
        } else {
            $this->CompanyName = $companyName;
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
        return isset($this->FirstName) ? $this->FirstName : null;
    }
    /**
     * Set FirstName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $firstName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        if (is_null($firstName) || (is_array($firstName) && empty($firstName))) {
            unset($this->FirstName);
        } else {
            $this->FirstName = $firstName;
        }
        return $this;
    }
    /**
     * Get IsResident value
     * @return bool|null
     */
    public function getIsResident()
    {
        return $this->IsResident;
    }
    /**
     * Set IsResident value
     * @param bool $isResident
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setIsResident($isResident = null)
    {
        // validation for constraint: boolean
        if (!is_null($isResident) && !is_bool($isResident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isResident)), __LINE__);
        }
        $this->IsResident = $isResident;
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
        return isset($this->LastName) ? $this->LastName : null;
    }
    /**
     * Set LastName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $lastName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setLastName($lastName = null)
    {
        // validation for constraint: string
        if (!is_null($lastName) && !is_string($lastName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastName)), __LINE__);
        }
        if (is_null($lastName) || (is_array($lastName) && empty($lastName))) {
            unset($this->LastName);
        } else {
            $this->LastName = $lastName;
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
        return isset($this->PersonalCode) ? $this->PersonalCode : null;
    }
    /**
     * Set PersonalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $personalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setPersonalCode($personalCode = null)
    {
        // validation for constraint: string
        if (!is_null($personalCode) && !is_string($personalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($personalCode)), __LINE__);
        }
        if (is_null($personalCode) || (is_array($personalCode) && empty($personalCode))) {
            unset($this->PersonalCode);
        } else {
            $this->PersonalCode = $personalCode;
        }
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationPartnerType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VerificationPartnerType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VerificationPartnerType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VerificationPartnerType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get IsExtendedVerificationAvailable value
     * @return bool|null
     */
    public function getIsExtendedVerificationAvailable()
    {
        return $this->IsExtendedVerificationAvailable;
    }
    /**
     * Set IsExtendedVerificationAvailable value
     * @param bool $isExtendedVerificationAvailable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setIsExtendedVerificationAvailable($isExtendedVerificationAvailable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isExtendedVerificationAvailable) && !is_bool($isExtendedVerificationAvailable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isExtendedVerificationAvailable)), __LINE__);
        }
        $this->IsExtendedVerificationAvailable = $isExtendedVerificationAvailable;
        return $this;
    }
    /**
     * Get PartnerCorrectionData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerCorrectionData|null
     */
    public function getPartnerCorrectionData()
    {
        return isset($this->PartnerCorrectionData) ? $this->PartnerCorrectionData : null;
    }
    /**
     * Set PartnerCorrectionData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerCorrectionData $partnerCorrectionData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setPartnerCorrectionData(\Mu4ddi3\Compensa\Webservice\StructType\PartnerCorrectionData $partnerCorrectionData = null)
    {
        if (is_null($partnerCorrectionData) || (is_array($partnerCorrectionData) && empty($partnerCorrectionData))) {
            unset($this->PartnerCorrectionData);
        } else {
            $this->PartnerCorrectionData = $partnerCorrectionData;
        }
        return $this;
    }
    /**
     * Get PartnerRoleOnContract value
     * @return string|null
     */
    public function getPartnerRoleOnContract()
    {
        return $this->PartnerRoleOnContract;
    }
    /**
     * Set PartnerRoleOnContract value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $partnerRoleOnContract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setPartnerRoleOnContract($partnerRoleOnContract = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::valueIsValid($partnerRoleOnContract)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $partnerRoleOnContract, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::getValidValues())), __LINE__);
        }
        $this->PartnerRoleOnContract = $partnerRoleOnContract;
        return $this;
    }
    /**
     * Get Policies value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicy|null
     */
    public function getPolicies()
    {
        return isset($this->Policies) ? $this->Policies : null;
    }
    /**
     * Set Policies value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicy $policies
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setPolicies(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicy $policies = null)
    {
        if (is_null($policies) || (is_array($policies) && empty($policies))) {
            unset($this->Policies);
        } else {
            $this->Policies = $policies;
        }
        return $this;
    }
    /**
     * Get VerificationMessages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationMessage|null
     */
    public function getVerificationMessages()
    {
        return isset($this->VerificationMessages) ? $this->VerificationMessages : null;
    }
    /**
     * Set VerificationMessages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationMessage $verificationMessages
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
     */
    public function setVerificationMessages(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVerificationMessage $verificationMessages = null)
    {
        if (is_null($verificationMessages) || (is_array($verificationMessages) && empty($verificationMessages))) {
            unset($this->VerificationMessages);
        } else {
            $this->VerificationMessages = $verificationMessages;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VerificationPartner
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
