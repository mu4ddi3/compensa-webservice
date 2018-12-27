<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZoneRuleDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ZoneRuleDefinition
 * @subpackage Structs
 */
class ZoneRuleDefinition extends AbstractStructBase
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
     * - nillable: true
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
     * The ZoneRuleDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneRuleDefinitionId;
    /**
     * The ZoneRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRule
     */
    public $ZoneRules;
    /**
     * Constructor method for ZoneRuleDefinition
     * @uses ZoneRuleDefinition::setAppliesFrom()
     * @uses ZoneRuleDefinition::setCreateDate()
     * @uses ZoneRuleDefinition::setExpiryDate()
     * @uses ZoneRuleDefinition::setName()
     * @uses ZoneRuleDefinition::setUserId()
     * @uses ZoneRuleDefinition::setVersion()
     * @uses ZoneRuleDefinition::setZoneRuleDefinitionId()
     * @uses ZoneRuleDefinition::setZoneRules()
     * @param string $appliesFrom
     * @param string $createDate
     * @param string $expiryDate
     * @param string $name
     * @param int $userId
     * @param int $version
     * @param int $zoneRuleDefinitionId
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRule $zoneRules
     */
    public function __construct($appliesFrom = null, $createDate = null, $expiryDate = null, $name = null, $userId = null, $version = null, $zoneRuleDefinitionId = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRule $zoneRules = null)
    {
        $this
            ->setAppliesFrom($appliesFrom)
            ->setCreateDate($createDate)
            ->setExpiryDate($expiryDate)
            ->setName($name)
            ->setUserId($userId)
            ->setVersion($version)
            ->setZoneRuleDefinitionId($zoneRuleDefinitionId)
            ->setZoneRules($zoneRules);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRuleDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRuleDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRuleDefinition
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
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRuleDefinition
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRuleDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRuleDefinition
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
     * Get ZoneRuleDefinitionId value
     * @return int|null
     */
    public function getZoneRuleDefinitionId()
    {
        return $this->ZoneRuleDefinitionId;
    }
    /**
     * Set ZoneRuleDefinitionId value
     * @param int $zoneRuleDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRuleDefinition
     */
    public function setZoneRuleDefinitionId($zoneRuleDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($zoneRuleDefinitionId) && !is_numeric($zoneRuleDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneRuleDefinitionId)), __LINE__);
        }
        $this->ZoneRuleDefinitionId = $zoneRuleDefinitionId;
        return $this;
    }
    /**
     * Get ZoneRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRule|null
     */
    public function getZoneRules()
    {
        return isset($this->ZoneRules) ? $this->ZoneRules : null;
    }
    /**
     * Set ZoneRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRule $zoneRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRuleDefinition
     */
    public function setZoneRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfZoneRule $zoneRules = null)
    {
        if (is_null($zoneRules) || (is_array($zoneRules) && empty($zoneRules))) {
            unset($this->ZoneRules);
        } else {
            $this->ZoneRules = $zoneRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneRuleDefinition
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
