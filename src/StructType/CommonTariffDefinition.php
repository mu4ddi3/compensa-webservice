<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CommonTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CommonTariffDefinition
 * @subpackage Structs
 */
class CommonTariffDefinition extends AbstractStructBase
{
    /**
     * The AppliesFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AppliesFrom;
    /**
     * The CommonTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CommonTariffDefinitionId;
    /**
     * The CommonTariffScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CommonTariffScope;
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
     * Constructor method for CommonTariffDefinition
     * @uses CommonTariffDefinition::setAppliesFrom()
     * @uses CommonTariffDefinition::setCommonTariffDefinitionId()
     * @uses CommonTariffDefinition::setCommonTariffScope()
     * @uses CommonTariffDefinition::setCreateDate()
     * @uses CommonTariffDefinition::setDepartmentContractScope()
     * @uses CommonTariffDefinition::setExpiryDate()
     * @uses CommonTariffDefinition::setName()
     * @uses CommonTariffDefinition::setUserId()
     * @uses CommonTariffDefinition::setVersion()
     * @param string $appliesFrom
     * @param int $commonTariffDefinitionId
     * @param string $commonTariffScope
     * @param string $createDate
     * @param string $departmentContractScope
     * @param string $expiryDate
     * @param string $name
     * @param int $userId
     * @param int $version
     */
    public function __construct($appliesFrom = null, $commonTariffDefinitionId = null, $commonTariffScope = null, $createDate = null, $departmentContractScope = null, $expiryDate = null, $name = null, $userId = null, $version = null)
    {
        $this
            ->setAppliesFrom($appliesFrom)
            ->setCommonTariffDefinitionId($commonTariffDefinitionId)
            ->setCommonTariffScope($commonTariffScope)
            ->setCreateDate($createDate)
            ->setDepartmentContractScope($departmentContractScope)
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
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
     * Get CommonTariffDefinitionId value
     * @return int|null
     */
    public function getCommonTariffDefinitionId()
    {
        return $this->CommonTariffDefinitionId;
    }
    /**
     * Set CommonTariffDefinitionId value
     * @param int $commonTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
     */
    public function setCommonTariffDefinitionId($commonTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($commonTariffDefinitionId) && !is_numeric($commonTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($commonTariffDefinitionId)), __LINE__);
        }
        $this->CommonTariffDefinitionId = $commonTariffDefinitionId;
        return $this;
    }
    /**
     * Get CommonTariffScope value
     * @return string|null
     */
    public function getCommonTariffScope()
    {
        return $this->CommonTariffScope;
    }
    /**
     * Set CommonTariffScope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CommonTariffScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CommonTariffScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $commonTariffScope
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
     */
    public function setCommonTariffScope($commonTariffScope = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CommonTariffScope::valueIsValid($commonTariffScope)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $commonTariffScope, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CommonTariffScope::getValidValues())), __LINE__);
        }
        $this->CommonTariffScope = $commonTariffScope;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
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
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->ExpiryDate;
    }
    /**
     * Set ExpiryDate value
     * @param string $expiryDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonTariffDefinition
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
