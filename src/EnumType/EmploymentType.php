<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for EmploymentType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EmploymentType
 * @subpackage Enumerations
 */
class EmploymentType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Class1'
     * @return string 'Class1'
     */
    const VALUE_CLASS_1 = 'Class1';
    /**
     * Constant for value 'Class2'
     * @return string 'Class2'
     */
    const VALUE_CLASS_2 = 'Class2';
    /**
     * Constant for value 'Class3'
     * @return string 'Class3'
     */
    const VALUE_CLASS_3 = 'Class3';
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
     * @uses self::VALUE_CLASS_1
     * @uses self::VALUE_CLASS_2
     * @uses self::VALUE_CLASS_3
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_CLASS_1,
            self::VALUE_CLASS_2,
            self::VALUE_CLASS_3,
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
