<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PriceTestStateType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceTestStateType
 * @subpackage Enumerations
 */
class PriceTestStateType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Applied'
     * @return string 'Applied'
     */
    const VALUE_APPLIED = 'Applied';
    /**
     * Constant for value 'Failed'
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'NotApplicable'
     * @return string 'NotApplicable'
     */
    const VALUE_NOT_APPLICABLE = 'NotApplicable';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_APPLIED
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_NOT_APPLICABLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_APPLIED,
            self::VALUE_FAILED,
            self::VALUE_NOT_APPLICABLE,
        );
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
