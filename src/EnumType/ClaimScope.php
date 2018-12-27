<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ClaimScope EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimScope
 * @subpackage Enumerations
 */
class ClaimScope
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'PartialDamage'
     * @return string 'PartialDamage'
     */
    const VALUE_PARTIAL_DAMAGE = 'PartialDamage';
    /**
     * Constant for value 'CompleteDamage'
     * @return string 'CompleteDamage'
     */
    const VALUE_COMPLETE_DAMAGE = 'CompleteDamage';
    /**
     * Constant for value 'Theft'
     * @return string 'Theft'
     */
    const VALUE_THEFT = 'Theft';
    /**
     * Constant for value 'Elements'
     * @return string 'Elements'
     */
    const VALUE_ELEMENTS = 'Elements';
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
     * @uses self::VALUE_UNDEFINED
     * @uses self::VALUE_PARTIAL_DAMAGE
     * @uses self::VALUE_COMPLETE_DAMAGE
     * @uses self::VALUE_THEFT
     * @uses self::VALUE_ELEMENTS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_PARTIAL_DAMAGE,
            self::VALUE_COMPLETE_DAMAGE,
            self::VALUE_THEFT,
            self::VALUE_ELEMENTS,
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
