<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUnderwriterDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetUnderwriterDiscountResponse
 * @subpackage Structs
 */
class GetUnderwriterDiscountResponse extends AbstractStructBase
{
    /**
     * The UnderwriterDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscount
     */
    public $UnderwriterDiscount;
    /**
     * Constructor method for GetUnderwriterDiscountResponse
     * @uses GetUnderwriterDiscountResponse::setUnderwriterDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscount $underwriterDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscount $underwriterDiscount = null)
    {
        $this
            ->setUnderwriterDiscount($underwriterDiscount);
    }
    /**
     * Get UnderwriterDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscount|null
     */
    public function getUnderwriterDiscount()
    {
        return isset($this->UnderwriterDiscount) ? $this->UnderwriterDiscount : null;
    }
    /**
     * Set UnderwriterDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscount $underwriterDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetUnderwriterDiscountResponse
     */
    public function setUnderwriterDiscount(\Mu4ddi3\Compensa\Webservice\StructType\UnderwriterDiscount $underwriterDiscount = null)
    {
        if (is_null($underwriterDiscount) || (is_array($underwriterDiscount) && empty($underwriterDiscount))) {
            unset($this->UnderwriterDiscount);
        } else {
            $this->UnderwriterDiscount = $underwriterDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetUnderwriterDiscountResponse
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
