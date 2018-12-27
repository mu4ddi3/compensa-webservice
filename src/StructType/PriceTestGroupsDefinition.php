<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PriceTestGroupsDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceTestGroupsDefinition
 * @subpackage Structs
 */
class PriceTestGroupsDefinition extends AbstractStructBase
{
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreateDate;
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
     * The PriceTestGroups
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTestGroup
     */
    public $PriceTestGroups;
    /**
     * The PriceTestGroupsDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PriceTestGroupsDefinitionId;
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
     * Constructor method for PriceTestGroupsDefinition
     * @uses PriceTestGroupsDefinition::setCreateDate()
     * @uses PriceTestGroupsDefinition::setDepartmentContractScope()
     * @uses PriceTestGroupsDefinition::setName()
     * @uses PriceTestGroupsDefinition::setPriceTestGroups()
     * @uses PriceTestGroupsDefinition::setPriceTestGroupsDefinitionId()
     * @uses PriceTestGroupsDefinition::setUserId()
     * @uses PriceTestGroupsDefinition::setVersion()
     * @param string $createDate
     * @param string $departmentContractScope
     * @param string $name
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTestGroup $priceTestGroups
     * @param int $priceTestGroupsDefinitionId
     * @param int $userId
     * @param int $version
     */
    public function __construct($createDate = null, $departmentContractScope = null, $name = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTestGroup $priceTestGroups = null, $priceTestGroupsDefinitionId = null, $userId = null, $version = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setDepartmentContractScope($departmentContractScope)
            ->setName($name)
            ->setPriceTestGroups($priceTestGroups)
            ->setPriceTestGroupsDefinitionId($priceTestGroupsDefinitionId)
            ->setUserId($userId)
            ->setVersion($version);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition
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
     * Get PriceTestGroups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTestGroup|null
     */
    public function getPriceTestGroups()
    {
        return isset($this->PriceTestGroups) ? $this->PriceTestGroups : null;
    }
    /**
     * Set PriceTestGroups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTestGroup $priceTestGroups
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition
     */
    public function setPriceTestGroups(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTestGroup $priceTestGroups = null)
    {
        if (is_null($priceTestGroups) || (is_array($priceTestGroups) && empty($priceTestGroups))) {
            unset($this->PriceTestGroups);
        } else {
            $this->PriceTestGroups = $priceTestGroups;
        }
        return $this;
    }
    /**
     * Get PriceTestGroupsDefinitionId value
     * @return int|null
     */
    public function getPriceTestGroupsDefinitionId()
    {
        return $this->PriceTestGroupsDefinitionId;
    }
    /**
     * Set PriceTestGroupsDefinitionId value
     * @param int $priceTestGroupsDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition
     */
    public function setPriceTestGroupsDefinitionId($priceTestGroupsDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($priceTestGroupsDefinitionId) && !is_numeric($priceTestGroupsDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($priceTestGroupsDefinitionId)), __LINE__);
        }
        $this->PriceTestGroupsDefinitionId = $priceTestGroupsDefinitionId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroupsDefinition
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
