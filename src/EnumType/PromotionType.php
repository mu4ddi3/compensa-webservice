<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PromotionType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionType
 * @subpackage Enumerations
 */
class PromotionType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Automatic'
     * @return string 'Automatic'
     */
    const VALUE_AUTOMATIC = 'Automatic';
    /**
     * Constant for value 'WithPromotionCodes'
     * @return string 'WithPromotionCodes'
     */
    const VALUE_WITH_PROMOTION_CODES = 'WithPromotionCodes';
    /**
     * Constant for value 'AgentsPocket'
     * @return string 'AgentsPocket'
     */
    const VALUE_AGENTS_POCKET = 'AgentsPocket';
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
     * @uses self::VALUE_AUTOMATIC
     * @uses self::VALUE_WITH_PROMOTION_CODES
     * @uses self::VALUE_AGENTS_POCKET
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_AUTOMATIC,
            self::VALUE_WITH_PROMOTION_CODES,
            self::VALUE_AGENTS_POCKET,
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
