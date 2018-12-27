<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeductibleVariantDiscountFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DeductibleVariantDiscountFactor
 * @subpackage Structs
 */
class DeductibleVariantDiscountFactor extends BaseFactorDefinition
{
    /**
     * The InsuranceSumRangeFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumRangeFrom;
    /**
     * The InsuranceSumRangeTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumRangeTo;
    /**
     * The Variant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Variant;
    /**
     * Constructor method for DeductibleVariantDiscountFactor
     * @uses DeductibleVariantDiscountFactor::setInsuranceSumRangeFrom()
     * @uses DeductibleVariantDiscountFactor::setInsuranceSumRangeTo()
     * @uses DeductibleVariantDiscountFactor::setVariant()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRangeFrom
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRangeTo
     * @param string $variant
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRangeFrom = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRangeTo = null, $variant = null)
    {
        $this
            ->setInsuranceSumRangeFrom($insuranceSumRangeFrom)
            ->setInsuranceSumRangeTo($insuranceSumRangeTo)
            ->setVariant($variant);
    }
    /**
     * Get InsuranceSumRangeFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumRangeFrom()
    {
        return isset($this->InsuranceSumRangeFrom) ? $this->InsuranceSumRangeFrom : null;
    }
    /**
     * Set InsuranceSumRangeFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRangeFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor
     */
    public function setInsuranceSumRangeFrom(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRangeFrom = null)
    {
        if (is_null($insuranceSumRangeFrom) || (is_array($insuranceSumRangeFrom) && empty($insuranceSumRangeFrom))) {
            unset($this->InsuranceSumRangeFrom);
        } else {
            $this->InsuranceSumRangeFrom = $insuranceSumRangeFrom;
        }
        return $this;
    }
    /**
     * Get InsuranceSumRangeTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumRangeTo()
    {
        return isset($this->InsuranceSumRangeTo) ? $this->InsuranceSumRangeTo : null;
    }
    /**
     * Set InsuranceSumRangeTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRangeTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor
     */
    public function setInsuranceSumRangeTo(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRangeTo = null)
    {
        if (is_null($insuranceSumRangeTo) || (is_array($insuranceSumRangeTo) && empty($insuranceSumRangeTo))) {
            unset($this->InsuranceSumRangeTo);
        } else {
            $this->InsuranceSumRangeTo = $insuranceSumRangeTo;
        }
        return $this;
    }
    /**
     * Get Variant value
     * @return string|null
     */
    public function getVariant()
    {
        return $this->Variant;
    }
    /**
     * Set Variant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor
     */
    public function setVariant($variant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid($variant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues())), __LINE__);
        }
        $this->Variant = $variant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantDiscountFactor
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
