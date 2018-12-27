<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for BlackRiskCode EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BlackRiskCode
 * @subpackage Enumerations
 */
class BlackRiskCode
{
    /**
     * Constant for value 'AcInsuranceVehicleAgeBlackRisk'
     * @return string 'AcInsuranceVehicleAgeBlackRisk'
     */
    const VALUE_AC_INSURANCE_VEHICLE_AGE_BLACK_RISK = 'AcInsuranceVehicleAgeBlackRisk';
    /**
     * Constant for value 'AssistanceInsuranceVehicleAgeBlackRisk'
     * @return string 'AssistanceInsuranceVehicleAgeBlackRisk'
     */
    const VALUE_ASSISTANCE_INSURANCE_VEHICLE_AGE_BLACK_RISK = 'AssistanceInsuranceVehicleAgeBlackRisk';
    /**
     * Constant for value 'BrandBlackRiskDefinitions'
     * @return string 'BrandBlackRiskDefinitions'
     */
    const VALUE_BRAND_BLACK_RISK_DEFINITIONS = 'BrandBlackRiskDefinitions';
    /**
     * Constant for value 'CabrioBlackRisk'
     * @return string 'CabrioBlackRisk'
     */
    const VALUE_CABRIO_BLACK_RISK = 'CabrioBlackRisk';
    /**
     * Constant for value 'CentralBlackRisk'
     * @return string 'CentralBlackRisk'
     */
    const VALUE_CENTRAL_BLACK_RISK = 'CentralBlackRisk';
    /**
     * Constant for value 'DeductibleVariantPolicyDurationBlackRisk'
     * @return string 'DeductibleVariantPolicyDurationBlackRisk'
     */
    const VALUE_DEDUCTIBLE_VARIANT_POLICY_DURATION_BLACK_RISK = 'DeductibleVariantPolicyDurationBlackRisk';
    /**
     * Constant for value 'DeductibleVariantVehicleAgeBlackRisk'
     * @return string 'DeductibleVariantVehicleAgeBlackRisk'
     */
    const VALUE_DEDUCTIBLE_VARIANT_VEHICLE_AGE_BLACK_RISK = 'DeductibleVariantVehicleAgeBlackRisk';
    /**
     * Constant for value 'EnginePowerBlackRisk'
     * @return string 'EnginePowerBlackRisk'
     */
    const VALUE_ENGINE_POWER_BLACK_RISK = 'EnginePowerBlackRisk';
    /**
     * Constant for value 'GapInsuranceVehicleSourceBlackRisk'
     * @return string 'GapInsuranceVehicleSourceBlackRisk'
     */
    const VALUE_GAP_INSURANCE_VEHICLE_SOURCE_BLACK_RISK = 'GapInsuranceVehicleSourceBlackRisk';
    /**
     * Constant for value 'MaximalInsuranceSumAcBlackRisk'
     * @return string 'MaximalInsuranceSumAcBlackRisk'
     */
    const VALUE_MAXIMAL_INSURANCE_SUM_AC_BLACK_RISK = 'MaximalInsuranceSumAcBlackRisk';
    /**
     * Constant for value 'MinimalVehicleValueInfoEkspertBlackRisk'
     * @return string 'MinimalVehicleValueInfoEkspertBlackRisk'
     */
    const VALUE_MINIMAL_VEHICLE_VALUE_INFO_EKSPERT_BLACK_RISK = 'MinimalVehicleValueInfoEkspertBlackRisk';
    /**
     * Constant for value 'MinimalVehicleValueOtherThanInfoEkspertBlackRisk'
     * @return string 'MinimalVehicleValueOtherThanInfoEkspertBlackRisk'
     */
    const VALUE_MINIMAL_VEHICLE_VALUE_OTHER_THAN_INFO_EKSPERT_BLACK_RISK = 'MinimalVehicleValueOtherThanInfoEkspertBlackRisk';
    /**
     * Constant for value 'ModelTypeBlackRisk'
     * @return string 'ModelTypeBlackRisk'
     */
    const VALUE_MODEL_TYPE_BLACK_RISK = 'ModelTypeBlackRisk';
    /**
     * Constant for value 'TechnicalExaminationInvalidBlackRisk'
     * @return string 'TechnicalExaminationInvalidBlackRisk'
     */
    const VALUE_TECHNICAL_EXAMINATION_INVALID_BLACK_RISK = 'TechnicalExaminationInvalidBlackRisk';
    /**
     * Constant for value 'UnderwriterBlackRisk'
     * @return string 'UnderwriterBlackRisk'
     */
    const VALUE_UNDERWRITER_BLACK_RISK = 'UnderwriterBlackRisk';
    /**
     * Constant for value 'UnusualVehicleUsageBlackRisk'
     * @return string 'UnusualVehicleUsageBlackRisk'
     */
    const VALUE_UNUSUAL_VEHICLE_USAGE_BLACK_RISK = 'UnusualVehicleUsageBlackRisk';
    /**
     * Constant for value 'VehicleGroupBlackRisk'
     * @return string 'VehicleGroupBlackRisk'
     */
    const VALUE_VEHICLE_GROUP_BLACK_RISK = 'VehicleGroupBlackRisk';
    /**
     * Constant for value 'WdInsurancePolicyDurationBlackRisk'
     * @return string 'WdInsurancePolicyDurationBlackRisk'
     */
    const VALUE_WD_INSURANCE_POLICY_DURATION_BLACK_RISK = 'WdInsurancePolicyDurationBlackRisk';
    /**
     * Constant for value 'LeasingBlackRisk'
     * @return string 'LeasingBlackRisk'
     */
    const VALUE_LEASING_BLACK_RISK = 'LeasingBlackRisk';
    /**
     * Constant for value 'PomocInsuranceVehicleAgeBlackRisk'
     * @return string 'PomocInsuranceVehicleAgeBlackRisk'
     */
    const VALUE_POMOC_INSURANCE_VEHICLE_AGE_BLACK_RISK = 'PomocInsuranceVehicleAgeBlackRisk';
    /**
     * Constant for value 'BmCorrectionBlackRisk'
     * @return string 'BmCorrectionBlackRisk'
     */
    const VALUE_BM_CORRECTION_BLACK_RISK = 'BmCorrectionBlackRisk';
    /**
     * Constant for value 'AssistanceInsuranceBlackRisk'
     * @return string 'AssistanceInsuranceBlackRisk'
     */
    const VALUE_ASSISTANCE_INSURANCE_BLACK_RISK = 'AssistanceInsuranceBlackRisk';
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
     * @uses self::VALUE_AC_INSURANCE_VEHICLE_AGE_BLACK_RISK
     * @uses self::VALUE_ASSISTANCE_INSURANCE_VEHICLE_AGE_BLACK_RISK
     * @uses self::VALUE_BRAND_BLACK_RISK_DEFINITIONS
     * @uses self::VALUE_CABRIO_BLACK_RISK
     * @uses self::VALUE_CENTRAL_BLACK_RISK
     * @uses self::VALUE_DEDUCTIBLE_VARIANT_POLICY_DURATION_BLACK_RISK
     * @uses self::VALUE_DEDUCTIBLE_VARIANT_VEHICLE_AGE_BLACK_RISK
     * @uses self::VALUE_ENGINE_POWER_BLACK_RISK
     * @uses self::VALUE_GAP_INSURANCE_VEHICLE_SOURCE_BLACK_RISK
     * @uses self::VALUE_MAXIMAL_INSURANCE_SUM_AC_BLACK_RISK
     * @uses self::VALUE_MINIMAL_VEHICLE_VALUE_INFO_EKSPERT_BLACK_RISK
     * @uses self::VALUE_MINIMAL_VEHICLE_VALUE_OTHER_THAN_INFO_EKSPERT_BLACK_RISK
     * @uses self::VALUE_MODEL_TYPE_BLACK_RISK
     * @uses self::VALUE_TECHNICAL_EXAMINATION_INVALID_BLACK_RISK
     * @uses self::VALUE_UNDERWRITER_BLACK_RISK
     * @uses self::VALUE_UNUSUAL_VEHICLE_USAGE_BLACK_RISK
     * @uses self::VALUE_VEHICLE_GROUP_BLACK_RISK
     * @uses self::VALUE_WD_INSURANCE_POLICY_DURATION_BLACK_RISK
     * @uses self::VALUE_LEASING_BLACK_RISK
     * @uses self::VALUE_POMOC_INSURANCE_VEHICLE_AGE_BLACK_RISK
     * @uses self::VALUE_BM_CORRECTION_BLACK_RISK
     * @uses self::VALUE_ASSISTANCE_INSURANCE_BLACK_RISK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AC_INSURANCE_VEHICLE_AGE_BLACK_RISK,
            self::VALUE_ASSISTANCE_INSURANCE_VEHICLE_AGE_BLACK_RISK,
            self::VALUE_BRAND_BLACK_RISK_DEFINITIONS,
            self::VALUE_CABRIO_BLACK_RISK,
            self::VALUE_CENTRAL_BLACK_RISK,
            self::VALUE_DEDUCTIBLE_VARIANT_POLICY_DURATION_BLACK_RISK,
            self::VALUE_DEDUCTIBLE_VARIANT_VEHICLE_AGE_BLACK_RISK,
            self::VALUE_ENGINE_POWER_BLACK_RISK,
            self::VALUE_GAP_INSURANCE_VEHICLE_SOURCE_BLACK_RISK,
            self::VALUE_MAXIMAL_INSURANCE_SUM_AC_BLACK_RISK,
            self::VALUE_MINIMAL_VEHICLE_VALUE_INFO_EKSPERT_BLACK_RISK,
            self::VALUE_MINIMAL_VEHICLE_VALUE_OTHER_THAN_INFO_EKSPERT_BLACK_RISK,
            self::VALUE_MODEL_TYPE_BLACK_RISK,
            self::VALUE_TECHNICAL_EXAMINATION_INVALID_BLACK_RISK,
            self::VALUE_UNDERWRITER_BLACK_RISK,
            self::VALUE_UNUSUAL_VEHICLE_USAGE_BLACK_RISK,
            self::VALUE_VEHICLE_GROUP_BLACK_RISK,
            self::VALUE_WD_INSURANCE_POLICY_DURATION_BLACK_RISK,
            self::VALUE_LEASING_BLACK_RISK,
            self::VALUE_POMOC_INSURANCE_VEHICLE_AGE_BLACK_RISK,
            self::VALUE_BM_CORRECTION_BLACK_RISK,
            self::VALUE_ASSISTANCE_INSURANCE_BLACK_RISK,
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
