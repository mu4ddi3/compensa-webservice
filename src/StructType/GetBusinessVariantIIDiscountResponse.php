<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBusinessVariantIIDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBusinessVariantIIDiscountResponse
 * @subpackage Structs
 */
class GetBusinessVariantIIDiscountResponse extends AbstractStructBase
{
    /**
     * The BusinessVariantIIDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BusinessVariantIIDiscount
     */
    public $BusinessVariantIIDiscount;
    /**
     * Constructor method for GetBusinessVariantIIDiscountResponse
     * @uses GetBusinessVariantIIDiscountResponse::setBusinessVariantIIDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BusinessVariantIIDiscount $businessVariantIIDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\BusinessVariantIIDiscount $businessVariantIIDiscount = null)
    {
        $this
            ->setBusinessVariantIIDiscount($businessVariantIIDiscount);
    }
    /**
     * Get BusinessVariantIIDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BusinessVariantIIDiscount|null
     */
    public function getBusinessVariantIIDiscount()
    {
        return isset($this->BusinessVariantIIDiscount) ? $this->BusinessVariantIIDiscount : null;
    }
    /**
     * Set BusinessVariantIIDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BusinessVariantIIDiscount $businessVariantIIDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBusinessVariantIIDiscountResponse
     */
    public function setBusinessVariantIIDiscount(\Mu4ddi3\Compensa\Webservice\StructType\BusinessVariantIIDiscount $businessVariantIIDiscount = null)
    {
        if (is_null($businessVariantIIDiscount) || (is_array($businessVariantIIDiscount) && empty($businessVariantIIDiscount))) {
            unset($this->BusinessVariantIIDiscount);
        } else {
            $this->BusinessVariantIIDiscount = $businessVariantIIDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBusinessVariantIIDiscountResponse
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
