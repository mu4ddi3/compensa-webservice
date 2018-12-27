<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountExclusion StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountExclusion
 * @subpackage Structs
 */
class DiscountExclusion extends Exclusion
{
    /**
     * The DepartmentContractScope
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DepartmentContractScope;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Discount;
    /**
     * The ExcludedDiscounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring
     */
    public $ExcludedDiscounts;
    /**
     * Constructor method for DiscountExclusion
     * @uses DiscountExclusion::setDepartmentContractScope()
     * @uses DiscountExclusion::setDiscount()
     * @uses DiscountExclusion::setExcludedDiscounts()
     * @param string $departmentContractScope
     * @param string $discount
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $excludedDiscounts
     */
    public function __construct($departmentContractScope = null, $discount = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $excludedDiscounts = null)
    {
        $this
            ->setDepartmentContractScope($departmentContractScope)
            ->setDiscount($discount)
            ->setExcludedDiscounts($excludedDiscounts);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountExclusion
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
     * Get Discount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDiscount()
    {
        return isset($this->Discount) ? $this->Discount : null;
    }
    /**
     * Set Discount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $discount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountExclusion
     */
    public function setDiscount($discount = null)
    {
        // validation for constraint: string
        if (!is_null($discount) && !is_string($discount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($discount)), __LINE__);
        }
        if (is_null($discount) || (is_array($discount) && empty($discount))) {
            unset($this->Discount);
        } else {
            $this->Discount = $discount;
        }
        return $this;
    }
    /**
     * Get ExcludedDiscounts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring|null
     */
    public function getExcludedDiscounts()
    {
        return isset($this->ExcludedDiscounts) ? $this->ExcludedDiscounts : null;
    }
    /**
     * Set ExcludedDiscounts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $excludedDiscounts
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountExclusion
     */
    public function setExcludedDiscounts(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfstring $excludedDiscounts = null)
    {
        if (is_null($excludedDiscounts) || (is_array($excludedDiscounts) && empty($excludedDiscounts))) {
            unset($this->ExcludedDiscounts);
        } else {
            $this->ExcludedDiscounts = $excludedDiscounts;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountExclusion
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
