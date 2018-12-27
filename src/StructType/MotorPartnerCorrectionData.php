<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorPartnerCorrectionData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorPartnerCorrectionData
 * @subpackage Structs
 */
class MotorPartnerCorrectionData extends AbstractStructBase
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
     * The LastName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $LastName;
    /**
     * The PartnerCorrectionSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerCorrectionSource;
    /**
     * The PartnerCorrectionType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PartnerCorrectionType;
    /**
     * The PartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $PartnerType;
    /**
     * The PersonalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PersonalCode;
    /**
     * Constructor method for MotorPartnerCorrectionData
     * @uses MotorPartnerCorrectionData::setCompanyCode()
     * @uses MotorPartnerCorrectionData::setCompanyName()
     * @uses MotorPartnerCorrectionData::setFirstName()
     * @uses MotorPartnerCorrectionData::setLastName()
     * @uses MotorPartnerCorrectionData::setPartnerCorrectionSource()
     * @uses MotorPartnerCorrectionData::setPartnerCorrectionType()
     * @uses MotorPartnerCorrectionData::setPartnerType()
     * @uses MotorPartnerCorrectionData::setPersonalCode()
     * @param string $companyCode
     * @param string $companyName
     * @param string $firstName
     * @param string $lastName
     * @param string $partnerCorrectionSource
     * @param string $partnerCorrectionType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType
     * @param string $personalCode
     */
    public function __construct($companyCode = null, $companyName = null, $firstName = null, $lastName = null, $partnerCorrectionSource = null, $partnerCorrectionType = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType = null, $personalCode = null)
    {
        $this
            ->setCompanyCode($companyCode)
            ->setCompanyName($companyName)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setPartnerCorrectionSource($partnerCorrectionSource)
            ->setPartnerCorrectionType($partnerCorrectionType)
            ->setPartnerType($partnerType)
            ->setPersonalCode($personalCode);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData
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
     * Get PartnerCorrectionSource value
     * @return string|null
     */
    public function getPartnerCorrectionSource()
    {
        return $this->PartnerCorrectionSource;
    }
    /**
     * Set PartnerCorrectionSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerCorrectionSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerCorrectionSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $partnerCorrectionSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData
     */
    public function setPartnerCorrectionSource($partnerCorrectionSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PartnerCorrectionSource::valueIsValid($partnerCorrectionSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $partnerCorrectionSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PartnerCorrectionSource::getValidValues())), __LINE__);
        }
        $this->PartnerCorrectionSource = $partnerCorrectionSource;
        return $this;
    }
    /**
     * Get PartnerCorrectionType value
     * @return string|null
     */
    public function getPartnerCorrectionType()
    {
        return $this->PartnerCorrectionType;
    }
    /**
     * Set PartnerCorrectionType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerCorrectionType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerCorrectionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $partnerCorrectionType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData
     */
    public function setPartnerCorrectionType($partnerCorrectionType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PartnerCorrectionType::valueIsValid($partnerCorrectionType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $partnerCorrectionType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PartnerCorrectionType::getValidValues())), __LINE__);
        }
        $this->PartnerCorrectionType = $partnerCorrectionType;
        return $this;
    }
    /**
     * Get PartnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getPartnerType()
    {
        return isset($this->PartnerType) ? $this->PartnerType : null;
    }
    /**
     * Set PartnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData
     */
    public function setPartnerType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType = null)
    {
        if (is_null($partnerType) || (is_array($partnerType) && empty($partnerType))) {
            unset($this->PartnerType);
        } else {
            $this->PartnerType = $partnerType;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPartnerCorrectionData
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
