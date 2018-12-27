<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ScalpelFactorsDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ScalpelFactorsDefinition
 * @subpackage Structs
 */
class ScalpelFactorsDefinition extends AbstractStructBase
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
     * The ScalpelFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelFactor
     */
    public $ScalpelFactors;
    /**
     * The ScalpelFactorsDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ScalpelFactorsDefinitionId;
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
     * Constructor method for ScalpelFactorsDefinition
     * @uses ScalpelFactorsDefinition::setCreateDate()
     * @uses ScalpelFactorsDefinition::setDepartmentContractScope()
     * @uses ScalpelFactorsDefinition::setName()
     * @uses ScalpelFactorsDefinition::setScalpelFactors()
     * @uses ScalpelFactorsDefinition::setScalpelFactorsDefinitionId()
     * @uses ScalpelFactorsDefinition::setUserId()
     * @uses ScalpelFactorsDefinition::setVersion()
     * @param string $createDate
     * @param string $departmentContractScope
     * @param string $name
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelFactor $scalpelFactors
     * @param int $scalpelFactorsDefinitionId
     * @param int $userId
     * @param int $version
     */
    public function __construct($createDate = null, $departmentContractScope = null, $name = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelFactor $scalpelFactors = null, $scalpelFactorsDefinitionId = null, $userId = null, $version = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setDepartmentContractScope($departmentContractScope)
            ->setName($name)
            ->setScalpelFactors($scalpelFactors)
            ->setScalpelFactorsDefinitionId($scalpelFactorsDefinitionId)
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition
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
     * Get ScalpelFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelFactor|null
     */
    public function getScalpelFactors()
    {
        return isset($this->ScalpelFactors) ? $this->ScalpelFactors : null;
    }
    /**
     * Set ScalpelFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelFactor $scalpelFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition
     */
    public function setScalpelFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelFactor $scalpelFactors = null)
    {
        if (is_null($scalpelFactors) || (is_array($scalpelFactors) && empty($scalpelFactors))) {
            unset($this->ScalpelFactors);
        } else {
            $this->ScalpelFactors = $scalpelFactors;
        }
        return $this;
    }
    /**
     * Get ScalpelFactorsDefinitionId value
     * @return int|null
     */
    public function getScalpelFactorsDefinitionId()
    {
        return $this->ScalpelFactorsDefinitionId;
    }
    /**
     * Set ScalpelFactorsDefinitionId value
     * @param int $scalpelFactorsDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition
     */
    public function setScalpelFactorsDefinitionId($scalpelFactorsDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($scalpelFactorsDefinitionId) && !is_numeric($scalpelFactorsDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($scalpelFactorsDefinitionId)), __LINE__);
        }
        $this->ScalpelFactorsDefinitionId = $scalpelFactorsDefinitionId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactorsDefinition
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
