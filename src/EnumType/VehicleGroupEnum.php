<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for VehicleGroupEnum EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleGroupEnum
 * @subpackage Enumerations
 */
class VehicleGroupEnum
{
    /**
     * Constant for value 'PassengerCar'
     * @return string 'PassengerCar'
     */
    const VALUE_PASSENGER_CAR = 'PassengerCar';
    /**
     * Constant for value 'LightCommercialVehicle'
     * @return string 'LightCommercialVehicle'
     */
    const VALUE_LIGHT_COMMERCIAL_VEHICLE = 'LightCommercialVehicle';
    /**
     * Constant for value 'Truck'
     * @return string 'Truck'
     */
    const VALUE_TRUCK = 'Truck';
    /**
     * Constant for value 'LightTrailer'
     * @return string 'LightTrailer'
     */
    const VALUE_LIGHT_TRAILER = 'LightTrailer';
    /**
     * Constant for value 'HeavyTrailer'
     * @return string 'HeavyTrailer'
     */
    const VALUE_HEAVY_TRAILER = 'HeavyTrailer';
    /**
     * Constant for value 'Tractor'
     * @return string 'Tractor'
     */
    const VALUE_TRACTOR = 'Tractor';
    /**
     * Constant for value 'FarmTrailer'
     * @return string 'FarmTrailer'
     */
    const VALUE_FARM_TRAILER = 'FarmTrailer';
    /**
     * Constant for value 'BalastTractor'
     * @return string 'BalastTractor'
     */
    const VALUE_BALAST_TRACTOR = 'BalastTractor';
    /**
     * Constant for value 'Bus'
     * @return string 'Bus'
     */
    const VALUE_BUS = 'Bus';
    /**
     * Constant for value 'Motorbike'
     * @return string 'Motorbike'
     */
    const VALUE_MOTORBIKE = 'Motorbike';
    /**
     * Constant for value 'Wheelchair'
     * @return string 'Wheelchair'
     */
    const VALUE_WHEELCHAIR = 'Wheelchair';
    /**
     * Constant for value 'Forklift'
     * @return string 'Forklift'
     */
    const VALUE_FORKLIFT = 'Forklift';
    /**
     * Constant for value 'LowSpeedVehicle'
     * @return string 'LowSpeedVehicle'
     */
    const VALUE_LOW_SPEED_VEHICLE = 'LowSpeedVehicle';
    /**
     * Constant for value 'SpecialPurposeVehicle'
     * @return string 'SpecialPurposeVehicle'
     */
    const VALUE_SPECIAL_PURPOSE_VEHICLE = 'SpecialPurposeVehicle';
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
     * @uses self::VALUE_PASSENGER_CAR
     * @uses self::VALUE_LIGHT_COMMERCIAL_VEHICLE
     * @uses self::VALUE_TRUCK
     * @uses self::VALUE_LIGHT_TRAILER
     * @uses self::VALUE_HEAVY_TRAILER
     * @uses self::VALUE_TRACTOR
     * @uses self::VALUE_FARM_TRAILER
     * @uses self::VALUE_BALAST_TRACTOR
     * @uses self::VALUE_BUS
     * @uses self::VALUE_MOTORBIKE
     * @uses self::VALUE_WHEELCHAIR
     * @uses self::VALUE_FORKLIFT
     * @uses self::VALUE_LOW_SPEED_VEHICLE
     * @uses self::VALUE_SPECIAL_PURPOSE_VEHICLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_PASSENGER_CAR,
            self::VALUE_LIGHT_COMMERCIAL_VEHICLE,
            self::VALUE_TRUCK,
            self::VALUE_LIGHT_TRAILER,
            self::VALUE_HEAVY_TRAILER,
            self::VALUE_TRACTOR,
            self::VALUE_FARM_TRAILER,
            self::VALUE_BALAST_TRACTOR,
            self::VALUE_BUS,
            self::VALUE_MOTORBIKE,
            self::VALUE_WHEELCHAIR,
            self::VALUE_FORKLIFT,
            self::VALUE_LOW_SPEED_VEHICLE,
            self::VALUE_SPECIAL_PURPOSE_VEHICLE,
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
