<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PartnerRoleOnClaim EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PartnerRoleOnClaim
 * @subpackage Enumerations
 */
class PartnerRoleOnClaim
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Policyholder'
     * @return string 'Policyholder'
     */
    const VALUE_POLICYHOLDER = 'Policyholder';
    /**
     * Constant for value 'DriverOfVictimVehicle'
     * @return string 'DriverOfVictimVehicle'
     */
    const VALUE_DRIVER_OF_VICTIM_VEHICLE = 'DriverOfVictimVehicle';
    /**
     * Constant for value 'Perpetrator'
     * @return string 'Perpetrator'
     */
    const VALUE_PERPETRATOR = 'Perpetrator';
    /**
     * Constant for value 'Victim'
     * @return string 'Victim'
     */
    const VALUE_VICTIM = 'Victim';
    /**
     * Constant for value 'Beneficient'
     * @return string 'Beneficient'
     */
    const VALUE_BENEFICIENT = 'Beneficient';
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
     * @uses self::VALUE_POLICYHOLDER
     * @uses self::VALUE_DRIVER_OF_VICTIM_VEHICLE
     * @uses self::VALUE_PERPETRATOR
     * @uses self::VALUE_VICTIM
     * @uses self::VALUE_BENEFICIENT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_POLICYHOLDER,
            self::VALUE_DRIVER_OF_VICTIM_VEHICLE,
            self::VALUE_PERPETRATOR,
            self::VALUE_VICTIM,
            self::VALUE_BENEFICIENT,
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
