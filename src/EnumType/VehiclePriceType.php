<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VehiclePriceType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehiclePriceType
 * @subpackage Enumerations
 */
class VehiclePriceType
{
    /**
     * Constant for value 'Brutto'
     * @return string 'Brutto'
     */
    const VALUE_BRUTTO = 'Brutto';
    /**
     * Constant for value 'Netto'
     * @return string 'Netto'
     */
    const VALUE_NETTO = 'Netto';
    /**
     * Constant for value 'PartiallyNetto'
     * @return string 'PartiallyNetto'
     */
    const VALUE_PARTIALLY_NETTO = 'PartiallyNetto';
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
     * @uses self::VALUE_BRUTTO
     * @uses self::VALUE_NETTO
     * @uses self::VALUE_PARTIALLY_NETTO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BRUTTO,
            self::VALUE_NETTO,
            self::VALUE_PARTIALLY_NETTO,
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
