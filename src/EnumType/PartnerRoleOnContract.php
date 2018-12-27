<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PartnerRoleOnContract EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PartnerRoleOnContract
 * @subpackage Enumerations
 */
class PartnerRoleOnContract
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Owner'
     * @return string 'Owner'
     */
    const VALUE_OWNER = 'Owner';
    /**
     * Constant for value 'CoOwnerOne'
     * @return string 'CoOwnerOne'
     */
    const VALUE_CO_OWNER_ONE = 'CoOwnerOne';
    /**
     * Constant for value 'CoOwnerTwo'
     * @return string 'CoOwnerTwo'
     */
    const VALUE_CO_OWNER_TWO = 'CoOwnerTwo';
    /**
     * Constant for value 'OwnerSpouse'
     * @return string 'OwnerSpouse'
     */
    const VALUE_OWNER_SPOUSE = 'OwnerSpouse';
    /**
     * Constant for value 'CoOwnerSpouse'
     * @return string 'CoOwnerSpouse'
     */
    const VALUE_CO_OWNER_SPOUSE = 'CoOwnerSpouse';
    /**
     * Constant for value 'LesseeOne'
     * @return string 'LesseeOne'
     */
    const VALUE_LESSEE_ONE = 'LesseeOne';
    /**
     * Constant for value 'LesseeTwo'
     * @return string 'LesseeTwo'
     */
    const VALUE_LESSEE_TWO = 'LesseeTwo';
    /**
     * Constant for value 'LesseeThree'
     * @return string 'LesseeThree'
     */
    const VALUE_LESSEE_THREE = 'LesseeThree';
    /**
     * Constant for value 'LesseeSpouse'
     * @return string 'LesseeSpouse'
     */
    const VALUE_LESSEE_SPOUSE = 'LesseeSpouse';
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
     * @uses self::VALUE_OWNER
     * @uses self::VALUE_CO_OWNER_ONE
     * @uses self::VALUE_CO_OWNER_TWO
     * @uses self::VALUE_OWNER_SPOUSE
     * @uses self::VALUE_CO_OWNER_SPOUSE
     * @uses self::VALUE_LESSEE_ONE
     * @uses self::VALUE_LESSEE_TWO
     * @uses self::VALUE_LESSEE_THREE
     * @uses self::VALUE_LESSEE_SPOUSE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_OWNER,
            self::VALUE_CO_OWNER_ONE,
            self::VALUE_CO_OWNER_TWO,
            self::VALUE_OWNER_SPOUSE,
            self::VALUE_CO_OWNER_SPOUSE,
            self::VALUE_LESSEE_ONE,
            self::VALUE_LESSEE_TWO,
            self::VALUE_LESSEE_THREE,
            self::VALUE_LESSEE_SPOUSE,
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
