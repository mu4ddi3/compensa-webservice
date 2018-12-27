<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndorsementsDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EndorsementsDefinition
 * @subpackage Structs
 */
class EndorsementsDefinition extends AbstractStructBase
{
    /**
     * The CreateDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CreateDate;
    /**
     * The Definitions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCorrection
     */
    public $Definitions;
    /**
     * The DepartmentContractScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartmentContractScope;
    /**
     * The EndorsementsTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EndorsementsTariffDefinitionId;
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
     * Constructor method for EndorsementsDefinition
     * @uses EndorsementsDefinition::setCreateDate()
     * @uses EndorsementsDefinition::setDefinitions()
     * @uses EndorsementsDefinition::setDepartmentContractScope()
     * @uses EndorsementsDefinition::setEndorsementsTariffDefinitionId()
     * @uses EndorsementsDefinition::setName()
     * @uses EndorsementsDefinition::setUserId()
     * @uses EndorsementsDefinition::setVersion()
     * @param string $createDate
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCorrection $definitions
     * @param string $departmentContractScope
     * @param int $endorsementsTariffDefinitionId
     * @param string $name
     * @param int $userId
     * @param int $version
     */
    public function __construct($createDate = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCorrection $definitions = null, $departmentContractScope = null, $endorsementsTariffDefinitionId = null, $name = null, $userId = null, $version = null)
    {
        $this
            ->setCreateDate($createDate)
            ->setDefinitions($definitions)
            ->setDepartmentContractScope($departmentContractScope)
            ->setEndorsementsTariffDefinitionId($endorsementsTariffDefinitionId)
            ->setName($name)
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsDefinition
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
     * Get Definitions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCorrection|null
     */
    public function getDefinitions()
    {
        return isset($this->Definitions) ? $this->Definitions : null;
    }
    /**
     * Set Definitions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCorrection $definitions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsDefinition
     */
    public function setDefinitions(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCorrection $definitions = null)
    {
        if (is_null($definitions) || (is_array($definitions) && empty($definitions))) {
            unset($this->Definitions);
        } else {
            $this->Definitions = $definitions;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsDefinition
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
     * Get EndorsementsTariffDefinitionId value
     * @return int|null
     */
    public function getEndorsementsTariffDefinitionId()
    {
        return $this->EndorsementsTariffDefinitionId;
    }
    /**
     * Set EndorsementsTariffDefinitionId value
     * @param int $endorsementsTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsDefinition
     */
    public function setEndorsementsTariffDefinitionId($endorsementsTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($endorsementsTariffDefinitionId) && !is_numeric($endorsementsTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($endorsementsTariffDefinitionId)), __LINE__);
        }
        $this->EndorsementsTariffDefinitionId = $endorsementsTariffDefinitionId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsDefinition
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsDefinition
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
