<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Family19044Conditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Family19044Conditions
 * @subpackage Structs
 */
class Family19044Conditions extends PropertyConditions
{
    /**
     * The DiscountLossInsurance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DiscountLossInsuranceCondition
     */
    public $DiscountLossInsurance;
    /**
     * Constructor method for Family19044Conditions
     * @uses Family19044Conditions::setDiscountLossInsurance()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountLossInsuranceCondition $discountLossInsurance
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\DiscountLossInsuranceCondition $discountLossInsurance = null)
    {
        $this
            ->setDiscountLossInsurance($discountLossInsurance);
    }
    /**
     * Get DiscountLossInsurance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountLossInsuranceCondition|null
     */
    public function getDiscountLossInsurance()
    {
        return isset($this->DiscountLossInsurance) ? $this->DiscountLossInsurance : null;
    }
    /**
     * Set DiscountLossInsurance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountLossInsuranceCondition $discountLossInsurance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Family19044Conditions
     */
    public function setDiscountLossInsurance(\Mu4ddi3\Compensa\Webservice\StructType\DiscountLossInsuranceCondition $discountLossInsurance = null)
    {
        if (is_null($discountLossInsurance) || (is_array($discountLossInsurance) && empty($discountLossInsurance))) {
            unset($this->DiscountLossInsurance);
        } else {
            $this->DiscountLossInsurance = $discountLossInsurance;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Family19044Conditions
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
