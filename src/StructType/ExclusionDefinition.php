<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExclusionDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ExclusionDefinition
 * @subpackage Structs
 */
class ExclusionDefinition extends AbstractStructBase
{
    /**
     * The AppliesFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AppliesFrom;
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreateDate;
    /**
     * The ExclusionDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ExclusionDefinitionId;
    /**
     * The Exclusions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfExclusion
     */
    public $Exclusions;
    /**
     * The ExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ExpiryDate;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Version;
    /**
     * Constructor method for ExclusionDefinition
     * @uses ExclusionDefinition::setAppliesFrom()
     * @uses ExclusionDefinition::setCreateDate()
     * @uses ExclusionDefinition::setExclusionDefinitionId()
     * @uses ExclusionDefinition::setExclusions()
     * @uses ExclusionDefinition::setExpiryDate()
     * @uses ExclusionDefinition::setName()
     * @uses ExclusionDefinition::setUserId()
     * @uses ExclusionDefinition::setVersion()
     * @param string $appliesFrom
     * @param string $createDate
     * @param int $exclusionDefinitionId
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfExclusion $exclusions
     * @param string $expiryDate
     * @param string $name
     * @param int $userId
     * @param int $version
     */
    public function __construct($appliesFrom = null, $createDate = null, $exclusionDefinitionId = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfExclusion $exclusions = null, $expiryDate = null, $name = null, $userId = null, $version = null)
    {
        $this
            ->setAppliesFrom($appliesFrom)
            ->setCreateDate($createDate)
            ->setExclusionDefinitionId($exclusionDefinitionId)
            ->setExclusions($exclusions)
            ->setExpiryDate($expiryDate)
            ->setName($name)
            ->setUserId($userId)
            ->setVersion($version);
    }
    /**
     * Get AppliesFrom value
     * @return string|null
     */
    public function getAppliesFrom()
    {
        return $this->AppliesFrom;
    }
    /**
     * Set AppliesFrom value
     * @param string $appliesFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ExclusionDefinition
     */
    public function setAppliesFrom($appliesFrom = null)
    {
        // validation for constraint: string
        if (!is_null($appliesFrom) && !is_string($appliesFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appliesFrom)), __LINE__);
        }
        $this->AppliesFrom = $appliesFrom;
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string|null
     */
    public function getCreateDate()
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ExclusionDefinition
     */
    public function setCreateDate($createDate = null)
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        return $this;
    }
    /**
     * Get ExclusionDefinitionId value
     * @return int|null
     */
    public function getExclusionDefinitionId()
    {
        return $this->ExclusionDefinitionId;
    }
    /**
     * Set ExclusionDefinitionId value
     * @param int $exclusionDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ExclusionDefinition
     */
    public function setExclusionDefinitionId($exclusionDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($exclusionDefinitionId) && !is_numeric($exclusionDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($exclusionDefinitionId)), __LINE__);
        }
        $this->ExclusionDefinitionId = $exclusionDefinitionId;
        return $this;
    }
    /**
     * Get Exclusions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfExclusion|null
     */
    public function getExclusions()
    {
        return isset($this->Exclusions) ? $this->Exclusions : null;
    }
    /**
     * Set Exclusions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfExclusion $exclusions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ExclusionDefinition
     */
    public function setExclusions(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfExclusion $exclusions = null)
    {
        if (is_null($exclusions) || (is_array($exclusions) && empty($exclusions))) {
            unset($this->Exclusions);
        } else {
            $this->Exclusions = $exclusions;
        }
        return $this;
    }
    /**
     * Get ExpiryDate value
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->ExpiryDate;
    }
    /**
     * Set ExpiryDate value
     * @param string $expiryDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ExclusionDefinition
     */
    public function setExpiryDate($expiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryDate)), __LINE__);
        }
        $this->ExpiryDate = $expiryDate;
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ExclusionTypes::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ExclusionTypes::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $name
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ExclusionDefinition
     */
    public function setName($name = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ExclusionTypes::valueIsValid($name)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $name, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ExclusionTypes::getValidValues())), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get UserId value
     * @return int|null
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    /**
     * Set UserId value
     * @param int $userId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ExclusionDefinition
     */
    public function setUserId($userId = null)
    {
        // validation for constraint: int
        if (!is_null($userId) && !is_numeric($userId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($userId)), __LINE__);
        }
        $this->UserId = $userId;
        return $this;
    }
    /**
     * Get Version value
     * @return int|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param int $version
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ExclusionDefinition
     */
    public function setVersion($version = null)
    {
        // validation for constraint: int
        if (!is_null($version) && !is_numeric($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($version)), __LINE__);
        }
        $this->Version = $version;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ExclusionDefinition
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
