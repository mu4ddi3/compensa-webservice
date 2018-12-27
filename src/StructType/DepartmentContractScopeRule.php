<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepartmentContractScopeRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DepartmentContractScopeRule
 * @subpackage Structs
 */
class DepartmentContractScopeRule extends AbstractStructBase
{
    /**
     * The CoOwnerEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CoOwnerEnabled;
    /**
     * The CoOwnerLegalPartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CoOwnerLegalPartnerType;
    /**
     * The CoOwnerPartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $CoOwnerPartnerType;
    /**
     * The DepartmentContractScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartmentContractScope;
    /**
     * The OwnerLegalPartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OwnerLegalPartnerType;
    /**
     * The OwnerPartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $OwnerPartnerType;
    /**
     * Constructor method for DepartmentContractScopeRule
     * @uses DepartmentContractScopeRule::setCoOwnerEnabled()
     * @uses DepartmentContractScopeRule::setCoOwnerLegalPartnerType()
     * @uses DepartmentContractScopeRule::setCoOwnerPartnerType()
     * @uses DepartmentContractScopeRule::setDepartmentContractScope()
     * @uses DepartmentContractScopeRule::setOwnerLegalPartnerType()
     * @uses DepartmentContractScopeRule::setOwnerPartnerType()
     * @param bool $coOwnerEnabled
     * @param string $coOwnerLegalPartnerType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $coOwnerPartnerType
     * @param string $departmentContractScope
     * @param string $ownerLegalPartnerType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $ownerPartnerType
     */
    public function __construct($coOwnerEnabled = null, $coOwnerLegalPartnerType = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $coOwnerPartnerType = null, $departmentContractScope = null, $ownerLegalPartnerType = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $ownerPartnerType = null)
    {
        $this
            ->setCoOwnerEnabled($coOwnerEnabled)
            ->setCoOwnerLegalPartnerType($coOwnerLegalPartnerType)
            ->setCoOwnerPartnerType($coOwnerPartnerType)
            ->setDepartmentContractScope($departmentContractScope)
            ->setOwnerLegalPartnerType($ownerLegalPartnerType)
            ->setOwnerPartnerType($ownerPartnerType);
    }
    /**
     * Get CoOwnerEnabled value
     * @return bool|null
     */
    public function getCoOwnerEnabled()
    {
        return $this->CoOwnerEnabled;
    }
    /**
     * Set CoOwnerEnabled value
     * @param bool $coOwnerEnabled
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRule
     */
    public function setCoOwnerEnabled($coOwnerEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($coOwnerEnabled) && !is_bool($coOwnerEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($coOwnerEnabled)), __LINE__);
        }
        $this->CoOwnerEnabled = $coOwnerEnabled;
        return $this;
    }
    /**
     * Get CoOwnerLegalPartnerType value
     * @return string|null
     */
    public function getCoOwnerLegalPartnerType()
    {
        return $this->CoOwnerLegalPartnerType;
    }
    /**
     * Set CoOwnerLegalPartnerType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $coOwnerLegalPartnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRule
     */
    public function setCoOwnerLegalPartnerType($coOwnerLegalPartnerType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid($coOwnerLegalPartnerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $coOwnerLegalPartnerType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues())), __LINE__);
        }
        $this->CoOwnerLegalPartnerType = $coOwnerLegalPartnerType;
        return $this;
    }
    /**
     * Get CoOwnerPartnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getCoOwnerPartnerType()
    {
        return isset($this->CoOwnerPartnerType) ? $this->CoOwnerPartnerType : null;
    }
    /**
     * Set CoOwnerPartnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $coOwnerPartnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRule
     */
    public function setCoOwnerPartnerType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $coOwnerPartnerType = null)
    {
        if (is_null($coOwnerPartnerType) || (is_array($coOwnerPartnerType) && empty($coOwnerPartnerType))) {
            unset($this->CoOwnerPartnerType);
        } else {
            $this->CoOwnerPartnerType = $coOwnerPartnerType;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRule
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
     * Get OwnerLegalPartnerType value
     * @return string|null
     */
    public function getOwnerLegalPartnerType()
    {
        return $this->OwnerLegalPartnerType;
    }
    /**
     * Set OwnerLegalPartnerType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $ownerLegalPartnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRule
     */
    public function setOwnerLegalPartnerType($ownerLegalPartnerType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid($ownerLegalPartnerType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $ownerLegalPartnerType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues())), __LINE__);
        }
        $this->OwnerLegalPartnerType = $ownerLegalPartnerType;
        return $this;
    }
    /**
     * Get OwnerPartnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getOwnerPartnerType()
    {
        return isset($this->OwnerPartnerType) ? $this->OwnerPartnerType : null;
    }
    /**
     * Set OwnerPartnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $ownerPartnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRule
     */
    public function setOwnerPartnerType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $ownerPartnerType = null)
    {
        if (is_null($ownerPartnerType) || (is_array($ownerPartnerType) && empty($ownerPartnerType))) {
            unset($this->OwnerPartnerType);
        } else {
            $this->OwnerPartnerType = $ownerPartnerType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentContractScopeRule
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
