<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PhotoDocumentationNotRequiredReason EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PhotoDocumentationNotRequiredReason
 * @subpackage Enumerations
 */
class PhotoDocumentationNotRequiredReason
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'BrandNewVehicle'
     * @return string 'BrandNewVehicle'
     */
    const VALUE_BRAND_NEW_VEHICLE = 'BrandNewVehicle';
    /**
     * Constant for value 'NoClaimsRenewalCnlBenefia'
     * @return string 'NoClaimsRenewalCnlBenefia'
     */
    const VALUE_NO_CLAIMS_RENEWAL_CNL_BENEFIA = 'NoClaimsRenewalCnlBenefia';
    /**
     * Constant for value 'NoClaimsRenewalOtherCompany'
     * @return string 'NoClaimsRenewalOtherCompany'
     */
    const VALUE_NO_CLAIMS_RENEWAL_OTHER_COMPANY = 'NoClaimsRenewalOtherCompany';
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
     * @uses self::VALUE_BRAND_NEW_VEHICLE
     * @uses self::VALUE_NO_CLAIMS_RENEWAL_CNL_BENEFIA
     * @uses self::VALUE_NO_CLAIMS_RENEWAL_OTHER_COMPANY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_BRAND_NEW_VEHICLE,
            self::VALUE_NO_CLAIMS_RENEWAL_CNL_BENEFIA,
            self::VALUE_NO_CLAIMS_RENEWAL_OTHER_COMPANY,
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
