<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInternationalTransportAcDiscountRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetInternationalTransportAcDiscountRequest
 * @subpackage Structs
 */
class GetInternationalTransportAcDiscountRequest extends GetInternationalTransportDiscountRequest
{
    /**
     * Constructor method for GetInternationalTransportAcDiscountRequest
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetInternationalTransportAcDiscountRequest
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
