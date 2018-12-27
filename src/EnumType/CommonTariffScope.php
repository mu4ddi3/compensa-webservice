<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for CommonTariffScope EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CommonTariffScope
 * @subpackage Enumerations
 */
class CommonTariffScope
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'BlackRisks'
     * @return string 'BlackRisks'
     */
    const VALUE_BLACK_RISKS = 'BlackRisks';
    /**
     * Constant for value 'BonusMalus'
     * @return string 'BonusMalus'
     */
    const VALUE_BONUS_MALUS = 'BonusMalus';
    /**
     * Constant for value 'MinimalPremiumRules'
     * @return string 'MinimalPremiumRules'
     */
    const VALUE_MINIMAL_PREMIUM_RULES = 'MinimalPremiumRules';
    /**
     * Constant for value 'ShortTermFactors'
     * @return string 'ShortTermFactors'
     */
    const VALUE_SHORT_TERM_FACTORS = 'ShortTermFactors';
    /**
     * Constant for value 'LeasingRules'
     * @return string 'LeasingRules'
     */
    const VALUE_LEASING_RULES = 'LeasingRules';
    /**
     * Constant for value 'RenewalBonusMalus'
     * @return string 'RenewalBonusMalus'
     */
    const VALUE_RENEWAL_BONUS_MALUS = 'RenewalBonusMalus';
    /**
     * Constant for value 'Indexation'
     * @return string 'Indexation'
     */
    const VALUE_INDEXATION = 'Indexation';
    /**
     * Constant for value 'Endorsements'
     * @return string 'Endorsements'
     */
    const VALUE_ENDORSEMENTS = 'Endorsements';
    /**
     * Constant for value 'Statements'
     * @return string 'Statements'
     */
    const VALUE_STATEMENTS = 'Statements';
    /**
     * Constant for value 'BonusMalusParameters'
     * @return string 'BonusMalusParameters'
     */
    const VALUE_BONUS_MALUS_PARAMETERS = 'BonusMalusParameters';
    /**
     * Constant for value 'MandatoryPhotos'
     * @return string 'MandatoryPhotos'
     */
    const VALUE_MANDATORY_PHOTOS = 'MandatoryPhotos';
    /**
     * Constant for value 'VehiclesCountBlackRisk'
     * @return string 'VehiclesCountBlackRisk'
     */
    const VALUE_VEHICLES_COUNT_BLACK_RISK = 'VehiclesCountBlackRisk';
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
     * @uses self::VALUE_BLACK_RISKS
     * @uses self::VALUE_BONUS_MALUS
     * @uses self::VALUE_MINIMAL_PREMIUM_RULES
     * @uses self::VALUE_SHORT_TERM_FACTORS
     * @uses self::VALUE_LEASING_RULES
     * @uses self::VALUE_RENEWAL_BONUS_MALUS
     * @uses self::VALUE_INDEXATION
     * @uses self::VALUE_ENDORSEMENTS
     * @uses self::VALUE_STATEMENTS
     * @uses self::VALUE_BONUS_MALUS_PARAMETERS
     * @uses self::VALUE_MANDATORY_PHOTOS
     * @uses self::VALUE_VEHICLES_COUNT_BLACK_RISK
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_BLACK_RISKS,
            self::VALUE_BONUS_MALUS,
            self::VALUE_MINIMAL_PREMIUM_RULES,
            self::VALUE_SHORT_TERM_FACTORS,
            self::VALUE_LEASING_RULES,
            self::VALUE_RENEWAL_BONUS_MALUS,
            self::VALUE_INDEXATION,
            self::VALUE_ENDORSEMENTS,
            self::VALUE_STATEMENTS,
            self::VALUE_BONUS_MALUS_PARAMETERS,
            self::VALUE_MANDATORY_PHOTOS,
            self::VALUE_VEHICLES_COUNT_BLACK_RISK,
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
