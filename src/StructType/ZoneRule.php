<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZoneRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ZoneRule
 * @subpackage Structs
 */
class ZoneRule extends AbstractStructBase
{
    /**
     * The CoOwnerEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CoOwnerEnabled;
    /**
     * The CoOwnerIsResident
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CoOwnerIsResident;
    /**
     * The CoOwnerLegalPartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoOwnerLegalPartnerType;
    /**
     * The CoOwnerPartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $CoOwnerPartnerType;
    /**
     * The OwnerEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OwnerEnabled;
    /**
     * The OwnerIsResident
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OwnerIsResident;
    /**
     * The OwnerLegalPartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OwnerLegalPartnerType;
    /**
     * The OwnerPartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $OwnerPartnerType;
    /**
     * The ZoneSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ZoneSource;
    /**
     * Constructor method for ZoneRule
     * @uses ZoneRule::setCoOwnerEnabled()
     * @uses ZoneRule::setCoOwnerIsResident()
     * @uses ZoneRule::setCoOwnerLegalPartnerType()
     * @uses ZoneRule::setCoOwnerPartnerType()
     * @uses ZoneRule::setOwnerEnabled()
     * @uses ZoneRule::setOwnerIsResident()
     * @uses ZoneRule::setOwnerLegalPartnerType()
     * @uses ZoneRule::setOwnerPartnerType()
     * @uses ZoneRule::setZoneSource()
     * @param bool $coOwnerEnabled
     * @param bool $coOwnerIsResident
     * @param string $coOwnerLegalPartnerType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $coOwnerPartnerType
     * @param bool $ownerEnabled
     * @param bool $ownerIsResident
     * @param string $ownerLegalPartnerType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $ownerPartnerType
     * @param string $zoneSource
     */
    public function __construct($coOwnerEnabled = null, $coOwnerIsResident = null, $coOwnerLegalPartnerType = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $coOwnerPartnerType = null, $ownerEnabled = null, $ownerIsResident = null, $ownerLegalPartnerType = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $ownerPartnerType = null, $zoneSource = null)
    {
        $this
            ->setCoOwnerEnabled($coOwnerEnabled)
            ->setCoOwnerIsResident($coOwnerIsResident)
            ->setCoOwnerLegalPartnerType($coOwnerLegalPartnerType)
            ->setCoOwnerPartnerType($coOwnerPartnerType)
            ->setOwnerEnabled($ownerEnabled)
            ->setOwnerIsResident($ownerIsResident)
            ->setOwnerLegalPartnerType($ownerLegalPartnerType)
            ->setOwnerPartnerType($ownerPartnerType)
            ->setZoneSource($zoneSource);
    }
    /**
     * Get CoOwnerEnabled value
     * @return bool|null
     */
    public function getCoOwnerEnabled()
    {
        return $this->CoOwnerEnabled;
    }
    /**
     * Set CoOwnerEnabled value
     * @param bool $coOwnerEnabled
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
     */
    public function setCoOwnerEnabled($coOwnerEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($coOwnerEnabled) && !is_bool($coOwnerEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($coOwnerEnabled)), __LINE__);
        }
        $this->CoOwnerEnabled = $coOwnerEnabled;
        return $this;
    }
    /**
     * Get CoOwnerIsResident value
     * @return bool|null
     */
    public function getCoOwnerIsResident()
    {
        return $this->CoOwnerIsResident;
    }
    /**
     * Set CoOwnerIsResident value
     * @param bool $coOwnerIsResident
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
     */
    public function setCoOwnerIsResident($coOwnerIsResident = null)
    {
        // validation for constraint: boolean
        if (!is_null($coOwnerIsResident) && !is_bool($coOwnerIsResident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($coOwnerIsResident)), __LINE__);
        }
        $this->CoOwnerIsResident = $coOwnerIsResident;
        return $this;
    }
    /**
     * Get CoOwnerLegalPartnerType value
     * @return string|null
     */
    public function getCoOwnerLegalPartnerType()
    {
        return $this->CoOwnerLegalPartnerType;
    }
    /**
     * Set CoOwnerLegalPartnerType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coOwnerLegalPartnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
     */
    public function setCoOwnerLegalPartnerType($coOwnerLegalPartnerType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid($coOwnerLegalPartnerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coOwnerLegalPartnerType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues())), __LINE__);
        }
        $this->CoOwnerLegalPartnerType = $coOwnerLegalPartnerType;
        return $this;
    }
    /**
     * Get CoOwnerPartnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getCoOwnerPartnerType()
    {
        return isset($this->CoOwnerPartnerType) ? $this->CoOwnerPartnerType : null;
    }
    /**
     * Set CoOwnerPartnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $coOwnerPartnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
     */
    public function setCoOwnerPartnerType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $coOwnerPartnerType = null)
    {
        if (is_null($coOwnerPartnerType) || (is_array($coOwnerPartnerType) && empty($coOwnerPartnerType))) {
            unset($this->CoOwnerPartnerType);
        } else {
            $this->CoOwnerPartnerType = $coOwnerPartnerType;
        }
        return $this;
    }
    /**
     * Get OwnerEnabled value
     * @return bool|null
     */
    public function getOwnerEnabled()
    {
        return $this->OwnerEnabled;
    }
    /**
     * Set OwnerEnabled value
     * @param bool $ownerEnabled
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
     */
    public function setOwnerEnabled($ownerEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($ownerEnabled) && !is_bool($ownerEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ownerEnabled)), __LINE__);
        }
        $this->OwnerEnabled = $ownerEnabled;
        return $this;
    }
    /**
     * Get OwnerIsResident value
     * @return bool|null
     */
    public function getOwnerIsResident()
    {
        return $this->OwnerIsResident;
    }
    /**
     * Set OwnerIsResident value
     * @param bool $ownerIsResident
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
     */
    public function setOwnerIsResident($ownerIsResident = null)
    {
        // validation for constraint: boolean
        if (!is_null($ownerIsResident) && !is_bool($ownerIsResident)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ownerIsResident)), __LINE__);
        }
        $this->OwnerIsResident = $ownerIsResident;
        return $this;
    }
    /**
     * Get OwnerLegalPartnerType value
     * @return string|null
     */
    public function getOwnerLegalPartnerType()
    {
        return $this->OwnerLegalPartnerType;
    }
    /**
     * Set OwnerLegalPartnerType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ownerLegalPartnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
     */
    public function setOwnerLegalPartnerType($ownerLegalPartnerType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid($ownerLegalPartnerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ownerLegalPartnerType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues())), __LINE__);
        }
        $this->OwnerLegalPartnerType = $ownerLegalPartnerType;
        return $this;
    }
    /**
     * Get OwnerPartnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getOwnerPartnerType()
    {
        return isset($this->OwnerPartnerType) ? $this->OwnerPartnerType : null;
    }
    /**
     * Set OwnerPartnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $ownerPartnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
     */
    public function setOwnerPartnerType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $ownerPartnerType = null)
    {
        if (is_null($ownerPartnerType) || (is_array($ownerPartnerType) && empty($ownerPartnerType))) {
            unset($this->OwnerPartnerType);
        } else {
            $this->OwnerPartnerType = $ownerPartnerType;
        }
        return $this;
    }
    /**
     * Get ZoneSource value
     * @return string|null
     */
    public function getZoneSource()
    {
        return $this->ZoneSource;
    }
    /**
     * Set ZoneSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $zoneSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
     */
    public function setZoneSource($zoneSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::valueIsValid($zoneSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $zoneSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ZoneSource::getValidValues())), __LINE__);
        }
        $this->ZoneSource = $zoneSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRule
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
