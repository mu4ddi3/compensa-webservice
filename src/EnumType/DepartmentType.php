<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for DepartmentType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DepartmentType
 * @subpackage Enumerations
 */
class DepartmentType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'BMP'
     * @return string 'BMP'
     */
    const VALUE_BMP = 'BMP';
    /**
     * Constant for value 'BSP'
     * @return string 'BSP'
     */
    const VALUE_BSP = 'BSP';
    /**
     * Constant for value 'BZK'
     * @return string 'BZK'
     */
    const VALUE_BZK = 'BZK';
    /**
     * Constant for value 'DUG'
     * @return string 'DUG'
     */
    const VALUE_DUG = 'DUG';
    /**
     * Constant for value 'DUI'
     * @return string 'DUI'
     */
    const VALUE_DUI = 'DUI';
    /**
     * Constant for value 'DKI'
     * @return string 'DKI'
     */
    const VALUE_DKI = 'DKI';
    /**
     * Constant for value 'DMS'
     * @return string 'DMS'
     */
    const VALUE_DMS = 'DMS';
    /**
     * Constant for value 'DUZ'
     * @return string 'DUZ'
     */
    const VALUE_DUZ = 'DUZ';
    /**
     * Constant for value 'Branch'
     * @return string 'Branch'
     */
    const VALUE_BRANCH = 'Branch';
    /**
     * Constant for value 'Management'
     * @return string 'Management'
     */
    const VALUE_MANAGEMENT = 'Management';
    /**
     * Constant for value 'Other'
     * @return string 'Other'
     */
    const VALUE_OTHER = 'Other';
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
     * @uses self::VALUE_BMP
     * @uses self::VALUE_BSP
     * @uses self::VALUE_BZK
     * @uses self::VALUE_DUG
     * @uses self::VALUE_DUI
     * @uses self::VALUE_DKI
     * @uses self::VALUE_DMS
     * @uses self::VALUE_DUZ
     * @uses self::VALUE_BRANCH
     * @uses self::VALUE_MANAGEMENT
     * @uses self::VALUE_OTHER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_BMP,
            self::VALUE_BSP,
            self::VALUE_BZK,
            self::VALUE_DUG,
            self::VALUE_DUI,
            self::VALUE_DKI,
            self::VALUE_DMS,
            self::VALUE_DUZ,
            self::VALUE_BRANCH,
            self::VALUE_MANAGEMENT,
            self::VALUE_OTHER,
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
