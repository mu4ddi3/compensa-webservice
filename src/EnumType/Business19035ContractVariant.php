<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for Business19035ContractVariant EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Business19035ContractVariant
 * @subpackage Enumerations
 */
class Business19035ContractVariant
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'VariantI'
     * @return string 'VariantI'
     */
    const VALUE_VARIANT_I = 'VariantI';
    /**
     * Constant for value 'VariantII'
     * @return string 'VariantII'
     */
    const VALUE_VARIANT_II = 'VariantII';
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
     * @uses self::VALUE_VARIANT_I
     * @uses self::VALUE_VARIANT_II
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_VARIANT_I,
            self::VALUE_VARIANT_II,
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
