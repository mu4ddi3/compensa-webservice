<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ZoneDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ZoneDefinition
 * @subpackage Structs
 */
class ZoneDefinition extends AbstractStructBase
{
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreateDate;
    /**
     * The DefaultZone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DefaultZone;
    /**
     * The DepartmentContractScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartmentContractScope;
    /**
     * The Name
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
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
     * The ZoneDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneDefinitionId;
    /**
     * The Zones
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPostalCodeZone
     */
    public $Zones;
    /**
     * Constructor method for ZoneDefinition
     * @uses ZoneDefinition::setCreateDate()
     * @uses ZoneDefinition::setDefaultZone()
     * @uses ZoneDefinition::setDepartmentContractScope()
     * @uses ZoneDefinition::setName()
     * @uses ZoneDefinition::setRiskCode()
     * @uses ZoneDefinition::setUserId()
     * @uses ZoneDefinition::setVersion()
     * @uses ZoneDefinition::setZoneDefinitionId()
     * @uses ZoneDefinition::setZones()
     * @param string $createDate
     * @param int $defaultZone
     * @param string $departmentContractScope
     * @param string $name
     * @param string $riskCode
     * @param int $userId
     * @param int $version
     * @param int $zoneDefinitionId
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPostalCodeZone $zones
     */
    public function __construct($createDate = null, $defaultZone = null, $departmentContractScope = null, $name = null, $riskCode = null, $userId = null, $version = null, $zoneDefinitionId = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPostalCodeZone $zones = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setDefaultZone($defaultZone)
            ->setDepartmentContractScope($departmentContractScope)
            ->setName($name)
            ->setRiskCode($riskCode)
            ->setUserId($userId)
            ->setVersion($version)
            ->setZoneDefinitionId($zoneDefinitionId)
            ->setZones($zones);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
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
     * Get DefaultZone value
     * @return int|null
     */
    public function getDefaultZone()
    {
        return $this->DefaultZone;
    }
    /**
     * Set DefaultZone value
     * @param int $defaultZone
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
     */
    public function setDefaultZone($defaultZone = null)
    {
        // validation for constraint: int
        if (!is_null($defaultZone) && !is_numeric($defaultZone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($defaultZone)), __LINE__);
        }
        $this->DefaultZone = $defaultZone;
        return $this;
    }
    /**
     * Get DepartmentContractScope value
     * @return string|null
     */
    public function getDepartmentContractScope()
    {
        return $this->DepartmentContractScope;
    }
    /**
     * Set DepartmentContractScope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $departmentContractScope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
     */
    public function setDepartmentContractScope($departmentContractScope = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::valueIsValid($departmentContractScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $departmentContractScope, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DepartmentContractScope::getValidValues())), __LINE__);
        }
        $this->DepartmentContractScope = $departmentContractScope;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
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
     * Get RiskCode value
     * @return string|null
     */
    public function getRiskCode()
    {
        return $this->RiskCode;
    }
    /**
     * Set RiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $riskCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
     */
    public function setRiskCode($riskCode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($riskCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $riskCode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        $this->RiskCode = $riskCode;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
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
     * Get ZoneDefinitionId value
     * @return int|null
     */
    public function getZoneDefinitionId()
    {
        return $this->ZoneDefinitionId;
    }
    /**
     * Set ZoneDefinitionId value
     * @param int $zoneDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
     */
    public function setZoneDefinitionId($zoneDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($zoneDefinitionId) && !is_numeric($zoneDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneDefinitionId)), __LINE__);
        }
        $this->ZoneDefinitionId = $zoneDefinitionId;
        return $this;
    }
    /**
     * Get Zones value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPostalCodeZone|null
     */
    public function getZones()
    {
        return isset($this->Zones) ? $this->Zones : null;
    }
    /**
     * Set Zones value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPostalCodeZone $zones
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
     */
    public function setZones(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPostalCodeZone $zones = null)
    {
        if (is_null($zones) || (is_array($zones) && empty($zones))) {
            unset($this->Zones);
        } else {
            $this->Zones = $zones;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ZoneDefinition
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
