<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimalPremiumRulesDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MinimalPremiumRulesDefinition
 * @subpackage Structs
 */
class MinimalPremiumRulesDefinition extends AbstractStructBase
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
     * The IsShortTerm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsShortTerm;
    /**
     * The MinimalPremiumRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalPremiumRule
     */
    public $MinimalPremiumRules;
    /**
     * The MinimalPremiumRulesDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MinimalPremiumRulesDefinitionId;
    /**
     * The MinimalPremiumSimpleValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $MinimalPremiumSimpleValue;
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
     * Constructor method for MinimalPremiumRulesDefinition
     * @uses MinimalPremiumRulesDefinition::setCreateDate()
     * @uses MinimalPremiumRulesDefinition::setDepartmentContractScope()
     * @uses MinimalPremiumRulesDefinition::setIsShortTerm()
     * @uses MinimalPremiumRulesDefinition::setMinimalPremiumRules()
     * @uses MinimalPremiumRulesDefinition::setMinimalPremiumRulesDefinitionId()
     * @uses MinimalPremiumRulesDefinition::setMinimalPremiumSimpleValue()
     * @uses MinimalPremiumRulesDefinition::setName()
     * @uses MinimalPremiumRulesDefinition::setRiskCode()
     * @uses MinimalPremiumRulesDefinition::setUserId()
     * @uses MinimalPremiumRulesDefinition::setVersion()
     * @param string $createDate
     * @param string $departmentContractScope
     * @param bool $isShortTerm
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalPremiumRule $minimalPremiumRules
     * @param int $minimalPremiumRulesDefinitionId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumSimpleValue
     * @param string $name
     * @param string $riskCode
     * @param int $userId
     * @param int $version
     */
    public function __construct($createDate = null, $departmentContractScope = null, $isShortTerm = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalPremiumRule $minimalPremiumRules = null, $minimalPremiumRulesDefinitionId = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumSimpleValue = null, $name = null, $riskCode = null, $userId = null, $version = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setDepartmentContractScope($departmentContractScope)
            ->setIsShortTerm($isShortTerm)
            ->setMinimalPremiumRules($minimalPremiumRules)
            ->setMinimalPremiumRulesDefinitionId($minimalPremiumRulesDefinitionId)
            ->setMinimalPremiumSimpleValue($minimalPremiumSimpleValue)
            ->setName($name)
            ->setRiskCode($riskCode)
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
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
     * Get IsShortTerm value
     * @return bool|null
     */
    public function getIsShortTerm()
    {
        return $this->IsShortTerm;
    }
    /**
     * Set IsShortTerm value
     * @param bool $isShortTerm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
     */
    public function setIsShortTerm($isShortTerm = null)
    {
        // validation for constraint: boolean
        if (!is_null($isShortTerm) && !is_bool($isShortTerm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isShortTerm)), __LINE__);
        }
        $this->IsShortTerm = $isShortTerm;
        return $this;
    }
    /**
     * Get MinimalPremiumRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalPremiumRule|null
     */
    public function getMinimalPremiumRules()
    {
        return isset($this->MinimalPremiumRules) ? $this->MinimalPremiumRules : null;
    }
    /**
     * Set MinimalPremiumRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalPremiumRule $minimalPremiumRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
     */
    public function setMinimalPremiumRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalPremiumRule $minimalPremiumRules = null)
    {
        if (is_null($minimalPremiumRules) || (is_array($minimalPremiumRules) && empty($minimalPremiumRules))) {
            unset($this->MinimalPremiumRules);
        } else {
            $this->MinimalPremiumRules = $minimalPremiumRules;
        }
        return $this;
    }
    /**
     * Get MinimalPremiumRulesDefinitionId value
     * @return int|null
     */
    public function getMinimalPremiumRulesDefinitionId()
    {
        return $this->MinimalPremiumRulesDefinitionId;
    }
    /**
     * Set MinimalPremiumRulesDefinitionId value
     * @param int $minimalPremiumRulesDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
     */
    public function setMinimalPremiumRulesDefinitionId($minimalPremiumRulesDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($minimalPremiumRulesDefinitionId) && !is_numeric($minimalPremiumRulesDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalPremiumRulesDefinitionId)), __LINE__);
        }
        $this->MinimalPremiumRulesDefinitionId = $minimalPremiumRulesDefinitionId;
        return $this;
    }
    /**
     * Get MinimalPremiumSimpleValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getMinimalPremiumSimpleValue()
    {
        return isset($this->MinimalPremiumSimpleValue) ? $this->MinimalPremiumSimpleValue : null;
    }
    /**
     * Set MinimalPremiumSimpleValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumSimpleValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
     */
    public function setMinimalPremiumSimpleValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalPremiumSimpleValue = null)
    {
        if (is_null($minimalPremiumSimpleValue) || (is_array($minimalPremiumSimpleValue) && empty($minimalPremiumSimpleValue))) {
            unset($this->MinimalPremiumSimpleValue);
        } else {
            $this->MinimalPremiumSimpleValue = $minimalPremiumSimpleValue;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRulesDefinition
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
