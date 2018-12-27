<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartmentContractScopeRuleDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DepartmentContractScopeRuleDefinition
 * @subpackage Structs
 */
class DepartmentContractScopeRuleDefinition extends AbstractStructBase
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
     * The DepartmentContractScopeRuleDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DepartmentContractScopeRuleDefinitionId;
    /**
     * The DepartmentContractScopeRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDepartmentContractScopeRule
     */
    public $DepartmentContractScopeRules;
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
     * Constructor method for DepartmentContractScopeRuleDefinition
     * @uses DepartmentContractScopeRuleDefinition::setAppliesFrom()
     * @uses DepartmentContractScopeRuleDefinition::setCreateDate()
     * @uses DepartmentContractScopeRuleDefinition::setDepartmentContractScopeRuleDefinitionId()
     * @uses DepartmentContractScopeRuleDefinition::setDepartmentContractScopeRules()
     * @uses DepartmentContractScopeRuleDefinition::setExpiryDate()
     * @uses DepartmentContractScopeRuleDefinition::setName()
     * @uses DepartmentContractScopeRuleDefinition::setUserId()
     * @uses DepartmentContractScopeRuleDefinition::setVersion()
     * @param string $appliesFrom
     * @param string $createDate
     * @param int $departmentContractScopeRuleDefinitionId
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDepartmentContractScopeRule $departmentContractScopeRules
     * @param string $expiryDate
     * @param string $name
     * @param int $userId
     * @param int $version
     */
    public function __construct($appliesFrom = null, $createDate = null, $departmentContractScopeRuleDefinitionId = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDepartmentContractScopeRule $departmentContractScopeRules = null, $expiryDate = null, $name = null, $userId = null, $version = null)
    {
        $this
            ->setAppliesFrom($appliesFrom)
            ->setCreateDate($createDate)
            ->setDepartmentContractScopeRuleDefinitionId($departmentContractScopeRuleDefinitionId)
            ->setDepartmentContractScopeRules($departmentContractScopeRules)
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRuleDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRuleDefinition
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
     * Get DepartmentContractScopeRuleDefinitionId value
     * @return int|null
     */
    public function getDepartmentContractScopeRuleDefinitionId()
    {
        return $this->DepartmentContractScopeRuleDefinitionId;
    }
    /**
     * Set DepartmentContractScopeRuleDefinitionId value
     * @param int $departmentContractScopeRuleDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRuleDefinition
     */
    public function setDepartmentContractScopeRuleDefinitionId($departmentContractScopeRuleDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($departmentContractScopeRuleDefinitionId) && !is_numeric($departmentContractScopeRuleDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($departmentContractScopeRuleDefinitionId)), __LINE__);
        }
        $this->DepartmentContractScopeRuleDefinitionId = $departmentContractScopeRuleDefinitionId;
        return $this;
    }
    /**
     * Get DepartmentContractScopeRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDepartmentContractScopeRule|null
     */
    public function getDepartmentContractScopeRules()
    {
        return isset($this->DepartmentContractScopeRules) ? $this->DepartmentContractScopeRules : null;
    }
    /**
     * Set DepartmentContractScopeRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDepartmentContractScopeRule $departmentContractScopeRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRuleDefinition
     */
    public function setDepartmentContractScopeRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDepartmentContractScopeRule $departmentContractScopeRules = null)
    {
        if (is_null($departmentContractScopeRules) || (is_array($departmentContractScopeRules) && empty($departmentContractScopeRules))) {
            unset($this->DepartmentContractScopeRules);
        } else {
            $this->DepartmentContractScopeRules = $departmentContractScopeRules;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRuleDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRuleDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRuleDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRuleDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRuleDefinition
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
