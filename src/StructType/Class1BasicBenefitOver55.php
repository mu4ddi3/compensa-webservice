<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Class1BasicBenefitOver55 StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Class1BasicBenefitOver55
 * @subpackage Structs
 */
class Class1BasicBenefitOver55 extends AccidentBaseRisk
{
    /**
     * Constructor method for Class1BasicBenefitOver55
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Class1BasicBenefitOver55
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
