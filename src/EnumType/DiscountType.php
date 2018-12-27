<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for DiscountType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DiscountType
 * @subpackage Enumerations
 */
class DiscountType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Percentage'
     * @return string 'Percentage'
     */
    const VALUE_PERCENTAGE = 'Percentage';
    /**
     * Constant for value 'Amount'
     * @return string 'Amount'
     */
    const VALUE_AMOUNT = 'Amount';
    /**
     * Constant for value 'Discount'
     * @return string 'Discount'
     */
    const VALUE_DISCOUNT = 'Discount';
    /**
     * Constant for value 'Increase'
     * @return string 'Increase'
     */
    const VALUE_INCREASE = 'Increase';
    /**
     * Constant for value 'ProfessionalSports'
     * @return string 'ProfessionalSports'
     */
    const VALUE_PROFESSIONAL_SPORTS = 'ProfessionalSports';
    /**
     * Constant for value 'ExtremeSports'
     * @return string 'ExtremeSports'
     */
    const VALUE_EXTREME_SPORTS = 'ExtremeSports';
    /**
     * Constant for value 'PassiveAntiTheftProtection'
     * @return string 'PassiveAntiTheftProtection'
     */
    const VALUE_PASSIVE_ANTI_THEFT_PROTECTION = 'PassiveAntiTheftProtection';
    /**
     * Constant for value 'ActiveAlarm'
     * @return string 'ActiveAlarm'
     */
    const VALUE_ACTIVE_ALARM = 'ActiveAlarm';
    /**
     * Constant for value 'ActiveAlarmWithMonitoring'
     * @return string 'ActiveAlarmWithMonitoring'
     */
    const VALUE_ACTIVE_ALARM_WITH_MONITORING = 'ActiveAlarmWithMonitoring';
    /**
     * Constant for value 'ActiveAlarmWithMonitoringAndIntervention'
     * @return string 'ActiveAlarmWithMonitoringAndIntervention'
     */
    const VALUE_ACTIVE_ALARM_WITH_MONITORING_AND_INTERVENTION = 'ActiveAlarmWithMonitoringAndIntervention';
    /**
     * Constant for value 'Summerhouse'
     * @return string 'Summerhouse'
     */
    const VALUE_SUMMERHOUSE = 'Summerhouse';
    /**
     * Constant for value 'HolidayHouse'
     * @return string 'HolidayHouse'
     */
    const VALUE_HOLIDAY_HOUSE = 'HolidayHouse';
    /**
     * Constant for value 'FloodExcluded'
     * @return string 'FloodExcluded'
     */
    const VALUE_FLOOD_EXCLUDED = 'FloodExcluded';
    /**
     * Constant for value 'ApprovedFireProtection'
     * @return string 'ApprovedFireProtection'
     */
    const VALUE_APPROVED_FIRE_PROTECTION = 'ApprovedFireProtection';
    /**
     * Constant for value 'AmateurSports'
     * @return string 'AmateurSports'
     */
    const VALUE_AMATEUR_SPORTS = 'AmateurSports';
    /**
     * Constant for value 'ManualWork'
     * @return string 'ManualWork'
     */
    const VALUE_MANUAL_WORK = 'ManualWork';
    /**
     * Constant for value 'MentalWork'
     * @return string 'MentalWork'
     */
    const VALUE_MENTAL_WORK = 'MentalWork';
    /**
     * Constant for value 'AlcoholConsumption'
     * @return string 'AlcoholConsumption'
     */
    const VALUE_ALCOHOL_CONSUMPTION = 'AlcoholConsumption';
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
     * @uses self::VALUE_PERCENTAGE
     * @uses self::VALUE_AMOUNT
     * @uses self::VALUE_DISCOUNT
     * @uses self::VALUE_INCREASE
     * @uses self::VALUE_PROFESSIONAL_SPORTS
     * @uses self::VALUE_EXTREME_SPORTS
     * @uses self::VALUE_PASSIVE_ANTI_THEFT_PROTECTION
     * @uses self::VALUE_ACTIVE_ALARM
     * @uses self::VALUE_ACTIVE_ALARM_WITH_MONITORING
     * @uses self::VALUE_ACTIVE_ALARM_WITH_MONITORING_AND_INTERVENTION
     * @uses self::VALUE_SUMMERHOUSE
     * @uses self::VALUE_HOLIDAY_HOUSE
     * @uses self::VALUE_FLOOD_EXCLUDED
     * @uses self::VALUE_APPROVED_FIRE_PROTECTION
     * @uses self::VALUE_AMATEUR_SPORTS
     * @uses self::VALUE_MANUAL_WORK
     * @uses self::VALUE_MENTAL_WORK
     * @uses self::VALUE_ALCOHOL_CONSUMPTION
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_PERCENTAGE,
            self::VALUE_AMOUNT,
            self::VALUE_DISCOUNT,
            self::VALUE_INCREASE,
            self::VALUE_PROFESSIONAL_SPORTS,
            self::VALUE_EXTREME_SPORTS,
            self::VALUE_PASSIVE_ANTI_THEFT_PROTECTION,
            self::VALUE_ACTIVE_ALARM,
            self::VALUE_ACTIVE_ALARM_WITH_MONITORING,
            self::VALUE_ACTIVE_ALARM_WITH_MONITORING_AND_INTERVENTION,
            self::VALUE_SUMMERHOUSE,
            self::VALUE_HOLIDAY_HOUSE,
            self::VALUE_FLOOD_EXCLUDED,
            self::VALUE_APPROVED_FIRE_PROTECTION,
            self::VALUE_AMATEUR_SPORTS,
            self::VALUE_MANUAL_WORK,
            self::VALUE_MENTAL_WORK,
            self::VALUE_ALCOHOL_CONSUMPTION,
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
