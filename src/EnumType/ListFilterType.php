<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ListFilterType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ListFilterType
 * @subpackage Enumerations
 */
class ListFilterType
{
    /**
     * Constant for value 'Unused'
     * @return string 'Unused'
     */
    const VALUE_UNUSED = 'Unused';
    /**
     * Constant for value 'Inclusion'
     * @return string 'Inclusion'
     */
    const VALUE_INCLUSION = 'Inclusion';
    /**
     * Constant for value 'Exclusion'
     * @return string 'Exclusion'
     */
    const VALUE_EXCLUSION = 'Exclusion';
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
     * @uses self::VALUE_UNUSED
     * @uses self::VALUE_INCLUSION
     * @uses self::VALUE_EXCLUSION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNUSED,
            self::VALUE_INCLUSION,
            self::VALUE_EXCLUSION,
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
