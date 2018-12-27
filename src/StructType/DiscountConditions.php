<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountConditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountConditions
 * @subpackage Structs
 */
class DiscountConditions extends AvailabilityConditionBase
{
    /**
     * The Discounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountAvaliabilityCondition
     */
    public $Discounts;
    /**
     * Constructor method for DiscountConditions
     * @uses DiscountConditions::setDiscounts()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountAvaliabilityCondition $discounts
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountAvaliabilityCondition $discounts = null)
    {
        $this
            ->setDiscounts($discounts);
    }
    /**
     * Get Discounts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountAvaliabilityCondition|null
     */
    public function getDiscounts()
    {
        return isset($this->Discounts) ? $this->Discounts : null;
    }
    /**
     * Set Discounts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountAvaliabilityCondition $discounts
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountConditions
     */
    public function setDiscounts(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountAvaliabilityCondition $discounts = null)
    {
        if (is_null($discounts) || (is_array($discounts) && empty($discounts))) {
            unset($this->Discounts);
        } else {
            $this->Discounts = $discounts;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountConditions
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
