<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for FileType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FileType
 * @subpackage Enumerations
 */
class FileType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'PromotionInfo'
     * @return string 'PromotionInfo'
     */
    const VALUE_PROMOTION_INFO = 'PromotionInfo';
    /**
     * Constant for value 'Banner'
     * @return string 'Banner'
     */
    const VALUE_BANNER = 'Banner';
    /**
     * Constant for value 'TargetAgencies'
     * @return string 'TargetAgencies'
     */
    const VALUE_TARGET_AGENCIES = 'TargetAgencies';
    /**
     * Constant for value 'TargetMagKamPdaUsers'
     * @return string 'TargetMagKamPdaUsers'
     */
    const VALUE_TARGET_MAG_KAM_PDA_USERS = 'TargetMagKamPdaUsers';
    /**
     * Constant for value 'TargetUsers'
     * @return string 'TargetUsers'
     */
    const VALUE_TARGET_USERS = 'TargetUsers';
    /**
     * Constant for value 'TargetClients'
     * @return string 'TargetClients'
     */
    const VALUE_TARGET_CLIENTS = 'TargetClients';
    /**
     * Constant for value 'TargetPKDCodes'
     * @return string 'TargetPKDCodes'
     */
    const VALUE_TARGET_PKDCODES = 'TargetPKDCodes';
    /**
     * Constant for value 'TargetPostalCodes'
     * @return string 'TargetPostalCodes'
     */
    const VALUE_TARGET_POSTAL_CODES = 'TargetPostalCodes';
    /**
     * Constant for value 'TargetVehicleBrands'
     * @return string 'TargetVehicleBrands'
     */
    const VALUE_TARGET_VEHICLE_BRANDS = 'TargetVehicleBrands';
    /**
     * Constant for value 'TargetRenewalPolicies'
     * @return string 'TargetRenewalPolicies'
     */
    const VALUE_TARGET_RENEWAL_POLICIES = 'TargetRenewalPolicies';
    /**
     * Constant for value 'AlternativeBanner'
     * @return string 'AlternativeBanner'
     */
    const VALUE_ALTERNATIVE_BANNER = 'AlternativeBanner';
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
     * @uses self::VALUE_PROMOTION_INFO
     * @uses self::VALUE_BANNER
     * @uses self::VALUE_TARGET_AGENCIES
     * @uses self::VALUE_TARGET_MAG_KAM_PDA_USERS
     * @uses self::VALUE_TARGET_USERS
     * @uses self::VALUE_TARGET_CLIENTS
     * @uses self::VALUE_TARGET_PKDCODES
     * @uses self::VALUE_TARGET_POSTAL_CODES
     * @uses self::VALUE_TARGET_VEHICLE_BRANDS
     * @uses self::VALUE_TARGET_RENEWAL_POLICIES
     * @uses self::VALUE_ALTERNATIVE_BANNER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_PROMOTION_INFO,
            self::VALUE_BANNER,
            self::VALUE_TARGET_AGENCIES,
            self::VALUE_TARGET_MAG_KAM_PDA_USERS,
            self::VALUE_TARGET_USERS,
            self::VALUE_TARGET_CLIENTS,
            self::VALUE_TARGET_PKDCODES,
            self::VALUE_TARGET_POSTAL_CODES,
            self::VALUE_TARGET_VEHICLE_BRANDS,
            self::VALUE_TARGET_RENEWAL_POLICIES,
            self::VALUE_ALTERNATIVE_BANNER,
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
