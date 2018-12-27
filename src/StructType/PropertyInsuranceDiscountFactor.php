<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PropertyInsuranceDiscountFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PropertyInsuranceDiscountFactor
 * @subpackage Structs
 */
class PropertyInsuranceDiscountFactor extends BaseFactorDefinition
{
    /**
     * The PropertyInsurancePremiumRangeFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PropertyInsurancePremiumRangeFrom;
    /**
     * The PropertyInsurancePremiumRangeTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PropertyInsurancePremiumRangeTo;
    /**
     * Constructor method for PropertyInsuranceDiscountFactor
     * @uses PropertyInsuranceDiscountFactor::setPropertyInsurancePremiumRangeFrom()
     * @uses PropertyInsuranceDiscountFactor::setPropertyInsurancePremiumRangeTo()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremiumRangeFrom
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremiumRangeTo
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremiumRangeFrom = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremiumRangeTo = null)
    {
        $this
            ->setPropertyInsurancePremiumRangeFrom($propertyInsurancePremiumRangeFrom)
            ->setPropertyInsurancePremiumRangeTo($propertyInsurancePremiumRangeTo);
    }
    /**
     * Get PropertyInsurancePremiumRangeFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPropertyInsurancePremiumRangeFrom()
    {
        return isset($this->PropertyInsurancePremiumRangeFrom) ? $this->PropertyInsurancePremiumRangeFrom : null;
    }
    /**
     * Set PropertyInsurancePremiumRangeFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremiumRangeFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor
     */
    public function setPropertyInsurancePremiumRangeFrom(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremiumRangeFrom = null)
    {
        if (is_null($propertyInsurancePremiumRangeFrom) || (is_array($propertyInsurancePremiumRangeFrom) && empty($propertyInsurancePremiumRangeFrom))) {
            unset($this->PropertyInsurancePremiumRangeFrom);
        } else {
            $this->PropertyInsurancePremiumRangeFrom = $propertyInsurancePremiumRangeFrom;
        }
        return $this;
    }
    /**
     * Get PropertyInsurancePremiumRangeTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPropertyInsurancePremiumRangeTo()
    {
        return isset($this->PropertyInsurancePremiumRangeTo) ? $this->PropertyInsurancePremiumRangeTo : null;
    }
    /**
     * Set PropertyInsurancePremiumRangeTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremiumRangeTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor
     */
    public function setPropertyInsurancePremiumRangeTo(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $propertyInsurancePremiumRangeTo = null)
    {
        if (is_null($propertyInsurancePremiumRangeTo) || (is_array($propertyInsurancePremiumRangeTo) && empty($propertyInsurancePremiumRangeTo))) {
            unset($this->PropertyInsurancePremiumRangeTo);
        } else {
            $this->PropertyInsurancePremiumRangeTo = $propertyInsurancePremiumRangeTo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscountFactor
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
