<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BlackRiskDefinition
 * @subpackage Structs
 */
class BlackRiskDefinition extends AbstractStructBase
{
    /**
     * The AppliesFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AppliesFrom;
    /**
     * The BlackRiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BlackRiskCode;
    /**
     * The BlackRiskDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BlackRiskDefinitionId;
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
     * Constructor method for BlackRiskDefinition
     * @uses BlackRiskDefinition::setAppliesFrom()
     * @uses BlackRiskDefinition::setBlackRiskCode()
     * @uses BlackRiskDefinition::setBlackRiskDefinitionId()
     * @uses BlackRiskDefinition::setCreateDate()
     * @uses BlackRiskDefinition::setDepartmentContractScope()
     * @uses BlackRiskDefinition::setName()
     * @uses BlackRiskDefinition::setUserId()
     * @uses BlackRiskDefinition::setVersion()
     * @param string $appliesFrom
     * @param string $blackRiskCode
     * @param int $blackRiskDefinitionId
     * @param string $createDate
     * @param string $departmentContractScope
     * @param string $name
     * @param int $userId
     * @param int $version
     */
    public function __construct($appliesFrom = null, $blackRiskCode = null, $blackRiskDefinitionId = null, $createDate = null, $departmentContractScope = null, $name = null, $userId = null, $version = null)
    {
        $this
            ->setAppliesFrom($appliesFrom)
            ->setBlackRiskCode($blackRiskCode)
            ->setBlackRiskDefinitionId($blackRiskDefinitionId)
            ->setCreateDate($createDate)
            ->setDepartmentContractScope($departmentContractScope)
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskDefinition
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
     * Get BlackRiskCode value
     * @return string|null
     */
    public function getBlackRiskCode()
    {
        return $this->BlackRiskCode;
    }
    /**
     * Set BlackRiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\BlackRiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\BlackRiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $blackRiskCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskDefinition
     */
    public function setBlackRiskCode($blackRiskCode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\BlackRiskCode::valueIsValid($blackRiskCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $blackRiskCode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\BlackRiskCode::getValidValues())), __LINE__);
        }
        $this->BlackRiskCode = $blackRiskCode;
        return $this;
    }
    /**
     * Get BlackRiskDefinitionId value
     * @return int|null
     */
    public function getBlackRiskDefinitionId()
    {
        return $this->BlackRiskDefinitionId;
    }
    /**
     * Set BlackRiskDefinitionId value
     * @param int $blackRiskDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskDefinition
     */
    public function setBlackRiskDefinitionId($blackRiskDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($blackRiskDefinitionId) && !is_numeric($blackRiskDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($blackRiskDefinitionId)), __LINE__);
        }
        $this->BlackRiskDefinitionId = $blackRiskDefinitionId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskDefinition
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
