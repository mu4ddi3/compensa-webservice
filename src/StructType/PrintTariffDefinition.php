<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PrintTariffDefinition
 * @subpackage Structs
 */
class PrintTariffDefinition extends AbstractStructBase
{
    /**
     * The AbsoluteFilePath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AbsoluteFilePath;
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
     * The PrintFileType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PrintFileType;
    /**
     * The PrintTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PrintTariffDefinitionId;
    /**
     * The RelativeFilePath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RelativeFilePath;
    /**
     * The UserId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $UserId;
    /**
     * Constructor method for PrintTariffDefinition
     * @uses PrintTariffDefinition::setAbsoluteFilePath()
     * @uses PrintTariffDefinition::setAppliesFrom()
     * @uses PrintTariffDefinition::setCreateDate()
     * @uses PrintTariffDefinition::setDepartmentContractScope()
     * @uses PrintTariffDefinition::setExpiryDate()
     * @uses PrintTariffDefinition::setName()
     * @uses PrintTariffDefinition::setPrintFileType()
     * @uses PrintTariffDefinition::setPrintTariffDefinitionId()
     * @uses PrintTariffDefinition::setRelativeFilePath()
     * @uses PrintTariffDefinition::setUserId()
     * @param string $absoluteFilePath
     * @param string $appliesFrom
     * @param string $createDate
     * @param string $departmentContractScope
     * @param string $expiryDate
     * @param string $name
     * @param string $printFileType
     * @param int $printTariffDefinitionId
     * @param string $relativeFilePath
     * @param int $userId
     */
    public function __construct($absoluteFilePath = null, $appliesFrom = null, $createDate = null, $departmentContractScope = null, $expiryDate = null, $name = null, $printFileType = null, $printTariffDefinitionId = null, $relativeFilePath = null, $userId = null)
    {
        $this
            ->setAbsoluteFilePath($absoluteFilePath)
            ->setAppliesFrom($appliesFrom)
            ->setCreateDate($createDate)
            ->setDepartmentContractScope($departmentContractScope)
            ->setExpiryDate($expiryDate)
            ->setName($name)
            ->setPrintFileType($printFileType)
            ->setPrintTariffDefinitionId($printTariffDefinitionId)
            ->setRelativeFilePath($relativeFilePath)
            ->setUserId($userId);
    }
    /**
     * Get AbsoluteFilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAbsoluteFilePath()
    {
        return isset($this->AbsoluteFilePath) ? $this->AbsoluteFilePath : null;
    }
    /**
     * Set AbsoluteFilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $absoluteFilePath
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
     */
    public function setAbsoluteFilePath($absoluteFilePath = null)
    {
        // validation for constraint: string
        if (!is_null($absoluteFilePath) && !is_string($absoluteFilePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($absoluteFilePath)), __LINE__);
        }
        if (is_null($absoluteFilePath) || (is_array($absoluteFilePath) && empty($absoluteFilePath))) {
            unset($this->AbsoluteFilePath);
        } else {
            $this->AbsoluteFilePath = $absoluteFilePath;
        }
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
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
     * Get PrintFileType value
     * @return string|null
     */
    public function getPrintFileType()
    {
        return $this->PrintFileType;
    }
    /**
     * Set PrintFileType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PrintFileType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PrintFileType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $printFileType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
     */
    public function setPrintFileType($printFileType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PrintFileType::valueIsValid($printFileType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $printFileType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PrintFileType::getValidValues())), __LINE__);
        }
        $this->PrintFileType = $printFileType;
        return $this;
    }
    /**
     * Get PrintTariffDefinitionId value
     * @return int|null
     */
    public function getPrintTariffDefinitionId()
    {
        return $this->PrintTariffDefinitionId;
    }
    /**
     * Set PrintTariffDefinitionId value
     * @param int $printTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
     */
    public function setPrintTariffDefinitionId($printTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($printTariffDefinitionId) && !is_numeric($printTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($printTariffDefinitionId)), __LINE__);
        }
        $this->PrintTariffDefinitionId = $printTariffDefinitionId;
        return $this;
    }
    /**
     * Get RelativeFilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRelativeFilePath()
    {
        return isset($this->RelativeFilePath) ? $this->RelativeFilePath : null;
    }
    /**
     * Set RelativeFilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $relativeFilePath
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
     */
    public function setRelativeFilePath($relativeFilePath = null)
    {
        // validation for constraint: string
        if (!is_null($relativeFilePath) && !is_string($relativeFilePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($relativeFilePath)), __LINE__);
        }
        if (is_null($relativeFilePath) || (is_array($relativeFilePath) && empty($relativeFilePath))) {
            unset($this->RelativeFilePath);
        } else {
            $this->RelativeFilePath = $relativeFilePath;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintTariffDefinition
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
