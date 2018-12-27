<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PromotionCodeStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionCodeStatus
 * @subpackage Enumerations
 */
class PromotionCodeStatus
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Inactive'
     * @return string 'Inactive'
     */
    const VALUE_INACTIVE = 'Inactive';
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Used'
     * @return string 'Used'
     */
    const VALUE_USED = 'Used';
    /**
     * Constant for value 'Expired'
     * @return string 'Expired'
     */
    const VALUE_EXPIRED = 'Expired';
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
     * @uses self::VALUE_INACTIVE
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_USED
     * @uses self::VALUE_EXPIRED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_INACTIVE,
            self::VALUE_ACTIVE,
            self::VALUE_USED,
            self::VALUE_EXPIRED,
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
