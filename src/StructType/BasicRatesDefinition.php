<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicRatesDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasicRatesDefinition
 * @subpackage Structs
 */
class BasicRatesDefinition extends AbstractStructBase
{
    /**
     * The BasicRates
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasicRate
     */
    public $BasicRates;
    /**
     * The BasicRatesDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasicRatesDefinitionId;
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
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * The RiskCodeScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCodeScope;
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
     * Constructor method for BasicRatesDefinition
     * @uses BasicRatesDefinition::setBasicRates()
     * @uses BasicRatesDefinition::setBasicRatesDefinitionId()
     * @uses BasicRatesDefinition::setCreateDate()
     * @uses BasicRatesDefinition::setDepartmentContractScope()
     * @uses BasicRatesDefinition::setName()
     * @uses BasicRatesDefinition::setRiskCode()
     * @uses BasicRatesDefinition::setRiskCodeScope()
     * @uses BasicRatesDefinition::setUserId()
     * @uses BasicRatesDefinition::setVersion()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasicRate $basicRates
     * @param int $basicRatesDefinitionId
     * @param string $createDate
     * @param string $departmentContractScope
     * @param string $name
     * @param string $riskCode
     * @param string $riskCodeScope
     * @param int $userId
     * @param int $version
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasicRate $basicRates = null, $basicRatesDefinitionId = null, $createDate = null, $departmentContractScope = null, $name = null, $riskCode = null, $riskCodeScope = null, $userId = null, $version = null)
    {
        $this
            ->setBasicRates($basicRates)
            ->setBasicRatesDefinitionId($basicRatesDefinitionId)
            ->setCreateDate($createDate)
            ->setDepartmentContractScope($departmentContractScope)
            ->setName($name)
            ->setRiskCode($riskCode)
            ->setRiskCodeScope($riskCodeScope)
            ->setUserId($userId)
            ->setVersion($version);
    }
    /**
     * Get BasicRates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasicRate|null
     */
    public function getBasicRates()
    {
        return isset($this->BasicRates) ? $this->BasicRates : null;
    }
    /**
     * Set BasicRates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasicRate $basicRates
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
     */
    public function setBasicRates(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasicRate $basicRates = null)
    {
        if (is_null($basicRates) || (is_array($basicRates) && empty($basicRates))) {
            unset($this->BasicRates);
        } else {
            $this->BasicRates = $basicRates;
        }
        return $this;
    }
    /**
     * Get BasicRatesDefinitionId value
     * @return int|null
     */
    public function getBasicRatesDefinitionId()
    {
        return $this->BasicRatesDefinitionId;
    }
    /**
     * Set BasicRatesDefinitionId value
     * @param int $basicRatesDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
     */
    public function setBasicRatesDefinitionId($basicRatesDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basicRatesDefinitionId) && !is_numeric($basicRatesDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basicRatesDefinitionId)), __LINE__);
        }
        $this->BasicRatesDefinitionId = $basicRatesDefinitionId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
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
     * Get RiskCodeScope value
     * @return string|null
     */
    public function getRiskCodeScope()
    {
        return $this->RiskCodeScope;
    }
    /**
     * Set RiskCodeScope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCodeScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCodeScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $riskCodeScope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
     */
    public function setRiskCodeScope($riskCodeScope = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCodeScope::valueIsValid($riskCodeScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $riskCodeScope, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCodeScope::getValidValues())), __LINE__);
        }
        $this->RiskCodeScope = $riskCodeScope;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRatesDefinition
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
