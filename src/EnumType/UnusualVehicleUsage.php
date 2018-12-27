<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for UnusualVehicleUsage EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UnusualVehicleUsage
 * @subpackage Enumerations
 */
class UnusualVehicleUsage
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'MilitaryVehicle'
     * @return string 'MilitaryVehicle'
     */
    const VALUE_MILITARY_VEHICLE = 'MilitaryVehicle';
    /**
     * Constant for value 'PoliceVehicle'
     * @return string 'PoliceVehicle'
     */
    const VALUE_POLICE_VEHICLE = 'PoliceVehicle';
    /**
     * Constant for value 'TowingVehicle'
     * @return string 'TowingVehicle'
     */
    const VALUE_TOWING_VEHICLE = 'TowingVehicle';
    /**
     * Constant for value 'HazardousMaterialVehicle'
     * @return string 'HazardousMaterialVehicle'
     */
    const VALUE_HAZARDOUS_MATERIAL_VEHICLE = 'HazardousMaterialVehicle';
    /**
     * Constant for value 'TestDriveVehicle'
     * @return string 'TestDriveVehicle'
     */
    const VALUE_TEST_DRIVE_VEHICLE = 'TestDriveVehicle';
    /**
     * Constant for value 'AbroadRegisteredVehicle'
     * @return string 'AbroadRegisteredVehicle'
     */
    const VALUE_ABROAD_REGISTERED_VEHICLE = 'AbroadRegisteredVehicle';
    /**
     * Constant for value 'DrivingSchoolVehicle'
     * @return string 'DrivingSchoolVehicle'
     */
    const VALUE_DRIVING_SCHOOL_VEHICLE = 'DrivingSchoolVehicle';
    /**
     * Constant for value 'CourierVehicle'
     * @return string 'CourierVehicle'
     */
    const VALUE_COURIER_VEHICLE = 'CourierVehicle';
    /**
     * Constant for value 'RentVehicle'
     * @return string 'RentVehicle'
     */
    const VALUE_RENT_VEHICLE = 'RentVehicle';
    /**
     * Constant for value 'RallyVehicle'
     * @return string 'RallyVehicle'
     */
    const VALUE_RALLY_VEHICLE = 'RallyVehicle';
    /**
     * Constant for value 'RequisiteVehicle'
     * @return string 'RequisiteVehicle'
     */
    const VALUE_REQUISITE_VEHICLE = 'RequisiteVehicle';
    /**
     * Constant for value 'TaxiVehicle'
     * @return string 'TaxiVehicle'
     */
    const VALUE_TAXI_VEHICLE = 'TaxiVehicle';
    /**
     * Constant for value 'NotPermittedVehicle'
     * @return string 'NotPermittedVehicle'
     */
    const VALUE_NOT_PERMITTED_VEHICLE = 'NotPermittedVehicle';
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
     * @uses self::VALUE_MILITARY_VEHICLE
     * @uses self::VALUE_POLICE_VEHICLE
     * @uses self::VALUE_TOWING_VEHICLE
     * @uses self::VALUE_HAZARDOUS_MATERIAL_VEHICLE
     * @uses self::VALUE_TEST_DRIVE_VEHICLE
     * @uses self::VALUE_ABROAD_REGISTERED_VEHICLE
     * @uses self::VALUE_DRIVING_SCHOOL_VEHICLE
     * @uses self::VALUE_COURIER_VEHICLE
     * @uses self::VALUE_RENT_VEHICLE
     * @uses self::VALUE_RALLY_VEHICLE
     * @uses self::VALUE_REQUISITE_VEHICLE
     * @uses self::VALUE_TAXI_VEHICLE
     * @uses self::VALUE_NOT_PERMITTED_VEHICLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_MILITARY_VEHICLE,
            self::VALUE_POLICE_VEHICLE,
            self::VALUE_TOWING_VEHICLE,
            self::VALUE_HAZARDOUS_MATERIAL_VEHICLE,
            self::VALUE_TEST_DRIVE_VEHICLE,
            self::VALUE_ABROAD_REGISTERED_VEHICLE,
            self::VALUE_DRIVING_SCHOOL_VEHICLE,
            self::VALUE_COURIER_VEHICLE,
            self::VALUE_RENT_VEHICLE,
            self::VALUE_RALLY_VEHICLE,
            self::VALUE_REQUISITE_VEHICLE,
            self::VALUE_TAXI_VEHICLE,
            self::VALUE_NOT_PERMITTED_VEHICLE,
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
