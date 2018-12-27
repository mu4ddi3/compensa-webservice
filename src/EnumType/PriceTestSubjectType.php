<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PriceTestSubjectType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PriceTestSubjectType
 * @subpackage Enumerations
 */
class PriceTestSubjectType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Risk'
     * @return string 'Risk'
     */
    const VALUE_RISK = 'Risk';
    /**
     * Constant for value 'Policy'
     * @return string 'Policy'
     */
    const VALUE_POLICY = 'Policy';
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
     * @uses self::VALUE_RISK
     * @uses self::VALUE_POLICY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_RISK,
            self::VALUE_POLICY,
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
