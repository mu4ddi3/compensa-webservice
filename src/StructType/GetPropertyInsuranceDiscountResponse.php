<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPropertyInsuranceDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPropertyInsuranceDiscountResponse
 * @subpackage Structs
 */
class GetPropertyInsuranceDiscountResponse extends AbstractStructBase
{
    /**
     * The PropertyInsuranceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscount
     */
    public $PropertyInsuranceDiscount;
    /**
     * Constructor method for GetPropertyInsuranceDiscountResponse
     * @uses GetPropertyInsuranceDiscountResponse::setPropertyInsuranceDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscount $propertyInsuranceDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscount $propertyInsuranceDiscount = null)
    {
        $this
            ->setPropertyInsuranceDiscount($propertyInsuranceDiscount);
    }
    /**
     * Get PropertyInsuranceDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscount|null
     */
    public function getPropertyInsuranceDiscount()
    {
        return isset($this->PropertyInsuranceDiscount) ? $this->PropertyInsuranceDiscount : null;
    }
    /**
     * Set PropertyInsuranceDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscount $propertyInsuranceDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPropertyInsuranceDiscountResponse
     */
    public function setPropertyInsuranceDiscount(\Mu4ddi3\Compensa\Webservice\StructType\PropertyInsuranceDiscount $propertyInsuranceDiscount = null)
    {
        if (is_null($propertyInsuranceDiscount) || (is_array($propertyInsuranceDiscount) && empty($propertyInsuranceDiscount))) {
            unset($this->PropertyInsuranceDiscount);
        } else {
            $this->PropertyInsuranceDiscount = $propertyInsuranceDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPropertyInsuranceDiscountResponse
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
