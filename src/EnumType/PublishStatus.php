<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PublishStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PublishStatus
 * @subpackage Enumerations
 */
class PublishStatus
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'New'
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'PlanProd'
     * @return string 'PlanProd'
     */
    const VALUE_PLAN_PROD = 'PlanProd';
    /**
     * Constant for value 'Prod'
     * @return string 'Prod'
     */
    const VALUE_PROD = 'Prod';
    /**
     * Constant for value 'Old'
     * @return string 'Old'
     */
    const VALUE_OLD = 'Old';
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
     * @uses self::VALUE_NEW
     * @uses self::VALUE_PLAN_PROD
     * @uses self::VALUE_PROD
     * @uses self::VALUE_OLD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_NEW,
            self::VALUE_PLAN_PROD,
            self::VALUE_PROD,
            self::VALUE_OLD,
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
