<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgriculturalInsuranceDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAgriculturalInsuranceDiscountResponse
 * @subpackage Structs
 */
class GetAgriculturalInsuranceDiscountResponse extends AbstractStructBase
{
    /**
     * The AgriculturalInsuranceDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscount
     */
    public $AgriculturalInsuranceDiscount;
    /**
     * Constructor method for GetAgriculturalInsuranceDiscountResponse
     * @uses GetAgriculturalInsuranceDiscountResponse::setAgriculturalInsuranceDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscount $agriculturalInsuranceDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscount $agriculturalInsuranceDiscount = null)
    {
        $this
            ->setAgriculturalInsuranceDiscount($agriculturalInsuranceDiscount);
    }
    /**
     * Get AgriculturalInsuranceDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscount|null
     */
    public function getAgriculturalInsuranceDiscount()
    {
        return isset($this->AgriculturalInsuranceDiscount) ? $this->AgriculturalInsuranceDiscount : null;
    }
    /**
     * Set AgriculturalInsuranceDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscount $agriculturalInsuranceDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAgriculturalInsuranceDiscountResponse
     */
    public function setAgriculturalInsuranceDiscount(\Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsuranceDiscount $agriculturalInsuranceDiscount = null)
    {
        if (is_null($agriculturalInsuranceDiscount) || (is_array($agriculturalInsuranceDiscount) && empty($agriculturalInsuranceDiscount))) {
            unset($this->AgriculturalInsuranceDiscount);
        } else {
            $this->AgriculturalInsuranceDiscount = $agriculturalInsuranceDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAgriculturalInsuranceDiscountResponse
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
