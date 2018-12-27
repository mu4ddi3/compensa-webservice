<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for AvaliabilityFilterLevel EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AvaliabilityFilterLevel
 * @subpackage Enumerations
 */
class AvaliabilityFilterLevel
{
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Constant for value 'Included'
     * @return string 'Included'
     */
    const VALUE_INCLUDED = 'Included';
    /**
     * Constant for value 'Excluded'
     * @return string 'Excluded'
     */
    const VALUE_EXCLUDED = 'Excluded';
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
     * @uses self::VALUE_ALL
     * @uses self::VALUE_INCLUDED
     * @uses self::VALUE_EXCLUDED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ALL,
            self::VALUE_INCLUDED,
            self::VALUE_EXCLUDED,
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
