<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PackageElementOptions EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageElementOptions
 * @subpackage Enumerations
 */
class PackageElementOptions
{
    /**
     * Constant for value 'Selected'
     * @return string 'Selected'
     */
    const VALUE_SELECTED = 'Selected';
    /**
     * Constant for value 'Obligatory'
     * @return string 'Obligatory'
     */
    const VALUE_OBLIGATORY = 'Obligatory';
    /**
     * Constant for value 'Avaliable'
     * @return string 'Avaliable'
     */
    const VALUE_AVALIABLE = 'Avaliable';
    /**
     * Constant for value 'Minimal'
     * @return string 'Minimal'
     */
    const VALUE_MINIMAL = 'Minimal';
    /**
     * Constant for value 'Maximal'
     * @return string 'Maximal'
     */
    const VALUE_MAXIMAL = 'Maximal';
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
     * @uses self::VALUE_SELECTED
     * @uses self::VALUE_OBLIGATORY
     * @uses self::VALUE_AVALIABLE
     * @uses self::VALUE_MINIMAL
     * @uses self::VALUE_MAXIMAL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SELECTED,
            self::VALUE_OBLIGATORY,
            self::VALUE_AVALIABLE,
            self::VALUE_MINIMAL,
            self::VALUE_MAXIMAL,
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
