<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInternationalTransportDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetInternationalTransportDiscountResponse
 * @subpackage Structs
 */
class GetInternationalTransportDiscountResponse extends AbstractStructBase
{
    /**
     * The InternationalTransportDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscount
     */
    public $InternationalTransportDiscount;
    /**
     * Constructor method for GetInternationalTransportDiscountResponse
     * @uses GetInternationalTransportDiscountResponse::setInternationalTransportDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscount $internationalTransportDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscount $internationalTransportDiscount = null)
    {
        $this
            ->setInternationalTransportDiscount($internationalTransportDiscount);
    }
    /**
     * Get InternationalTransportDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscount|null
     */
    public function getInternationalTransportDiscount()
    {
        return isset($this->InternationalTransportDiscount) ? $this->InternationalTransportDiscount : null;
    }
    /**
     * Set InternationalTransportDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscount $internationalTransportDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetInternationalTransportDiscountResponse
     */
    public function setInternationalTransportDiscount(\Mu4ddi3\Compensa\Webservice\StructType\InternationalTransportDiscount $internationalTransportDiscount = null)
    {
        if (is_null($internationalTransportDiscount) || (is_array($internationalTransportDiscount) && empty($internationalTransportDiscount))) {
            unset($this->InternationalTransportDiscount);
        } else {
            $this->InternationalTransportDiscount = $internationalTransportDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetInternationalTransportDiscountResponse
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
