<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClauseDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClauseDefinition
 * @subpackage Structs
 */
class ClauseDefinition extends AbstractStructBase
{
    /**
     * The AppliesFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AppliesFrom;
    /**
     * The ClauseConditionsDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClauseAvaliabilityConditionsDefinition
     */
    public $ClauseConditionsDefinition;
    /**
     * The ClauseDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ClauseDefinitionId;
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
     * The ExpiryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
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
     * The Premium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $Premium;
    /**
     * The ShortName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ShortName;
    /**
     * The Statements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement
     */
    public $Statements;
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
     * The VersisNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VersisNumber;
    /**
     * Constructor method for ClauseDefinition
     * @uses ClauseDefinition::setAppliesFrom()
     * @uses ClauseDefinition::setClauseConditionsDefinition()
     * @uses ClauseDefinition::setClauseDefinitionId()
     * @uses ClauseDefinition::setCreateDate()
     * @uses ClauseDefinition::setDepartmentContractScope()
     * @uses ClauseDefinition::setExpiryDate()
     * @uses ClauseDefinition::setName()
     * @uses ClauseDefinition::setPremium()
     * @uses ClauseDefinition::setShortName()
     * @uses ClauseDefinition::setStatements()
     * @uses ClauseDefinition::setUserId()
     * @uses ClauseDefinition::setVersion()
     * @uses ClauseDefinition::setVersisNumber()
     * @param string $appliesFrom
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClauseAvaliabilityConditionsDefinition $clauseConditionsDefinition
     * @param int $clauseDefinitionId
     * @param string $createDate
     * @param string $departmentContractScope
     * @param string $expiryDate
     * @param string $name
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @param string $shortName
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement $statements
     * @param int $userId
     * @param int $version
     * @param int $versisNumber
     */
    public function __construct($appliesFrom = null, \Mu4ddi3\Compensa\Webservice\StructType\ClauseAvaliabilityConditionsDefinition $clauseConditionsDefinition = null, $clauseDefinitionId = null, $createDate = null, $departmentContractScope = null, $expiryDate = null, $name = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null, $shortName = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement $statements = null, $userId = null, $version = null, $versisNumber = null)
    {
        $this
            ->setAppliesFrom($appliesFrom)
            ->setClauseConditionsDefinition($clauseConditionsDefinition)
            ->setClauseDefinitionId($clauseDefinitionId)
            ->setCreateDate($createDate)
            ->setDepartmentContractScope($departmentContractScope)
            ->setExpiryDate($expiryDate)
            ->setName($name)
            ->setPremium($premium)
            ->setShortName($shortName)
            ->setStatements($statements)
            ->setUserId($userId)
            ->setVersion($version)
            ->setVersisNumber($versisNumber);
    }
    /**
     * Get AppliesFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAppliesFrom()
    {
        return isset($this->AppliesFrom) ? $this->AppliesFrom : null;
    }
    /**
     * Set AppliesFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $appliesFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
     */
    public function setAppliesFrom($appliesFrom = null)
    {
        // validation for constraint: string
        if (!is_null($appliesFrom) && !is_string($appliesFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($appliesFrom)), __LINE__);
        }
        if (is_null($appliesFrom) || (is_array($appliesFrom) && empty($appliesFrom))) {
            unset($this->AppliesFrom);
        } else {
            $this->AppliesFrom = $appliesFrom;
        }
        return $this;
    }
    /**
     * Get ClauseConditionsDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseAvaliabilityConditionsDefinition|null
     */
    public function getClauseConditionsDefinition()
    {
        return isset($this->ClauseConditionsDefinition) ? $this->ClauseConditionsDefinition : null;
    }
    /**
     * Set ClauseConditionsDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClauseAvaliabilityConditionsDefinition $clauseConditionsDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
     */
    public function setClauseConditionsDefinition(\Mu4ddi3\Compensa\Webservice\StructType\ClauseAvaliabilityConditionsDefinition $clauseConditionsDefinition = null)
    {
        if (is_null($clauseConditionsDefinition) || (is_array($clauseConditionsDefinition) && empty($clauseConditionsDefinition))) {
            unset($this->ClauseConditionsDefinition);
        } else {
            $this->ClauseConditionsDefinition = $clauseConditionsDefinition;
        }
        return $this;
    }
    /**
     * Get ClauseDefinitionId value
     * @return int|null
     */
    public function getClauseDefinitionId()
    {
        return $this->ClauseDefinitionId;
    }
    /**
     * Set ClauseDefinitionId value
     * @param int $clauseDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
     */
    public function setClauseDefinitionId($clauseDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($clauseDefinitionId) && !is_numeric($clauseDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($clauseDefinitionId)), __LINE__);
        }
        $this->ClauseDefinitionId = $clauseDefinitionId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
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
     * Get ExpiryDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getExpiryDate()
    {
        return isset($this->ExpiryDate) ? $this->ExpiryDate : null;
    }
    /**
     * Set ExpiryDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $expiryDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
     */
    public function setExpiryDate($expiryDate = null)
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($expiryDate)), __LINE__);
        }
        if (is_null($expiryDate) || (is_array($expiryDate) && empty($expiryDate))) {
            unset($this->ExpiryDate);
        } else {
            $this->ExpiryDate = $expiryDate;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
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
     * Get Premium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremium()
    {
        return isset($this->Premium) ? $this->Premium : null;
    }
    /**
     * Set Premium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
     */
    public function setPremium(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null)
    {
        if (is_null($premium) || (is_array($premium) && empty($premium))) {
            unset($this->Premium);
        } else {
            $this->Premium = $premium;
        }
        return $this;
    }
    /**
     * Get ShortName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getShortName()
    {
        return isset($this->ShortName) ? $this->ShortName : null;
    }
    /**
     * Set ShortName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $shortName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
     */
    public function setShortName($shortName = null)
    {
        // validation for constraint: string
        if (!is_null($shortName) && !is_string($shortName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($shortName)), __LINE__);
        }
        if (is_null($shortName) || (is_array($shortName) && empty($shortName))) {
            unset($this->ShortName);
        } else {
            $this->ShortName = $shortName;
        }
        return $this;
    }
    /**
     * Get Statements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement|null
     */
    public function getStatements()
    {
        return isset($this->Statements) ? $this->Statements : null;
    }
    /**
     * Set Statements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement $statements
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
     */
    public function setStatements(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement $statements = null)
    {
        if (is_null($statements) || (is_array($statements) && empty($statements))) {
            unset($this->Statements);
        } else {
            $this->Statements = $statements;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
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
     * Get VersisNumber value
     * @return int|null
     */
    public function getVersisNumber()
    {
        return $this->VersisNumber;
    }
    /**
     * Set VersisNumber value
     * @param int $versisNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
     */
    public function setVersisNumber($versisNumber = null)
    {
        // validation for constraint: int
        if (!is_null($versisNumber) && !is_numeric($versisNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($versisNumber)), __LINE__);
        }
        $this->VersisNumber = $versisNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseDefinition
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
