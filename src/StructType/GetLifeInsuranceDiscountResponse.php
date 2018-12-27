<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLifeInsuranceDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetLifeInsuranceDiscountResponse
 * @subpackage Structs
 */
class GetLifeInsuranceDiscountResponse extends AbstractStructBase
{
    /**
     * The LifeInsuranceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscount
     */
    public $LifeInsuranceDiscount;
    /**
     * Constructor method for GetLifeInsuranceDiscountResponse
     * @uses GetLifeInsuranceDiscountResponse::setLifeInsuranceDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscount $lifeInsuranceDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscount $lifeInsuranceDiscount = null)
    {
        $this
            ->setLifeInsuranceDiscount($lifeInsuranceDiscount);
    }
    /**
     * Get LifeInsuranceDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscount|null
     */
    public function getLifeInsuranceDiscount()
    {
        return isset($this->LifeInsuranceDiscount) ? $this->LifeInsuranceDiscount : null;
    }
    /**
     * Set LifeInsuranceDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscount $lifeInsuranceDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetLifeInsuranceDiscountResponse
     */
    public function setLifeInsuranceDiscount(\Mu4ddi3\Compensa\Webservice\StructType\LifeInsuranceDiscount $lifeInsuranceDiscount = null)
    {
        if (is_null($lifeInsuranceDiscount) || (is_array($lifeInsuranceDiscount) && empty($lifeInsuranceDiscount))) {
            unset($this->LifeInsuranceDiscount);
        } else {
            $this->LifeInsuranceDiscount = $lifeInsuranceDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetLifeInsuranceDiscountResponse
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
