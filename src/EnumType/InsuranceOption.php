<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for InsuranceOption EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuranceOption
 * @subpackage Enumerations
 */
class InsuranceOption
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'ShortTerm'
     * @return string 'ShortTerm'
     */
    const VALUE_SHORT_TERM = 'ShortTerm';
    /**
     * Constant for value 'AnnualPermanentResidenceAbroad'
     * @return string 'AnnualPermanentResidenceAbroad'
     */
    const VALUE_ANNUAL_PERMANENT_RESIDENCE_ABROAD = 'AnnualPermanentResidenceAbroad';
    /**
     * Constant for value 'AnnualReturnJourneysLastingNoLongerThanXDays'
     * @return string 'AnnualReturnJourneysLastingNoLongerThanXDays'
     */
    const VALUE_ANNUAL_RETURN_JOURNEYS_LASTING_NO_LONGER_THAN_XDAYS = 'AnnualReturnJourneysLastingNoLongerThanXDays';
    /**
     * Constant for value 'AnnualOpenPolicy'
     * @return string 'AnnualOpenPolicy'
     */
    const VALUE_ANNUAL_OPEN_POLICY = 'AnnualOpenPolicy';
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
     * @uses self::VALUE_SHORT_TERM
     * @uses self::VALUE_ANNUAL_PERMANENT_RESIDENCE_ABROAD
     * @uses self::VALUE_ANNUAL_RETURN_JOURNEYS_LASTING_NO_LONGER_THAN_XDAYS
     * @uses self::VALUE_ANNUAL_OPEN_POLICY
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_SHORT_TERM,
            self::VALUE_ANNUAL_PERMANENT_RESIDENCE_ABROAD,
            self::VALUE_ANNUAL_RETURN_JOURNEYS_LASTING_NO_LONGER_THAN_XDAYS,
            self::VALUE_ANNUAL_OPEN_POLICY,
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
