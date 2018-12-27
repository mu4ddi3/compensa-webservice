<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountLossInsuranceCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountLossInsuranceCondition
 * @subpackage Structs
 */
class DiscountLossInsuranceCondition extends AvailabilityConditionBase
{
    /**
     * The IsLossDiscountInsurance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLossDiscountInsurance;
    /**
     * Constructor method for DiscountLossInsuranceCondition
     * @uses DiscountLossInsuranceCondition::setIsLossDiscountInsurance()
     * @param bool $isLossDiscountInsurance
     */
    public function __construct($isLossDiscountInsurance = null)
    {
        $this
            ->setIsLossDiscountInsurance($isLossDiscountInsurance);
    }
    /**
     * Get IsLossDiscountInsurance value
     * @return bool|null
     */
    public function getIsLossDiscountInsurance()
    {
        return $this->IsLossDiscountInsurance;
    }
    /**
     * Set IsLossDiscountInsurance value
     * @param bool $isLossDiscountInsurance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountLossInsuranceCondition
     */
    public function setIsLossDiscountInsurance($isLossDiscountInsurance = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLossDiscountInsurance) && !is_bool($isLossDiscountInsurance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLossDiscountInsurance)), __LINE__);
        }
        $this->IsLossDiscountInsurance = $isLossDiscountInsurance;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountLossInsuranceCondition
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
