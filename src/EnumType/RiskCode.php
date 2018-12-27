<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for RiskCode EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskCode
 * @subpackage Enumerations
 */
class RiskCode
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'OC'
     * @return string 'OC'
     */
    const VALUE_OC = 'OC';
    /**
     * Constant for value 'AC'
     * @return string 'AC'
     */
    const VALUE_AC = 'AC';
    /**
     * Constant for value 'WD'
     * @return string 'WD'
     */
    const VALUE_WD = 'WD';
    /**
     * Constant for value 'OP'
     * @return string 'OP'
     */
    const VALUE_OP = 'OP';
    /**
     * Constant for value 'NNW'
     * @return string 'NNW'
     */
    const VALUE_NNW = 'NNW';
    /**
     * Constant for value 'Assistance'
     * @return string 'Assistance'
     */
    const VALUE_ASSISTANCE = 'Assistance';
    /**
     * Constant for value 'Pomoc'
     * @return string 'Pomoc'
     */
    const VALUE_POMOC = 'Pomoc';
    /**
     * Constant for value 'Szyby'
     * @return string 'Szyby'
     */
    const VALUE_SZYBY = 'Szyby';
    /**
     * Constant for value 'GAP'
     * @return string 'GAP'
     */
    const VALUE_GAP = 'GAP';
    /**
     * Constant for value 'DNA'
     * @return string 'DNA'
     */
    const VALUE_DNA = 'DNA';
    /**
     * Constant for value 'OUZOC'
     * @return string 'OUZOC'
     */
    const VALUE_OUZOC = 'OUZOC';
    /**
     * Constant for value 'OUZAC'
     * @return string 'OUZAC'
     */
    const VALUE_OUZAC = 'OUZAC';
    /**
     * Constant for value 'Bagaz'
     * @return string 'Bagaz'
     */
    const VALUE_BAGAZ = 'Bagaz';
    /**
     * Constant for value 'OCACOPWD'
     * @return string 'OCACOPWD'
     */
    const VALUE_OCACOPWD = 'OCACOPWD';
    /**
     * Constant for value 'ALL'
     * @return string 'ALL'
     */
    const VALUE_ALL = 'ALL';
    /**
     * Constant for value 'ACWD'
     * @return string 'ACWD'
     */
    const VALUE_ACWD = 'ACWD';
    /**
     * Constant for value 'Klauzula'
     * @return string 'Klauzula'
     */
    const VALUE_KLAUZULA = 'Klauzula';
    /**
     * Constant for value 'BLS'
     * @return string 'BLS'
     */
    const VALUE_BLS = 'BLS';
    /**
     * Constant for value 'Mobilny19035'
     * @return string 'Mobilny19035'
     */
    const VALUE_MOBILNY_19035 = 'Mobilny19035';
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
     * @uses self::VALUE_OC
     * @uses self::VALUE_AC
     * @uses self::VALUE_WD
     * @uses self::VALUE_OP
     * @uses self::VALUE_NNW
     * @uses self::VALUE_ASSISTANCE
     * @uses self::VALUE_POMOC
     * @uses self::VALUE_SZYBY
     * @uses self::VALUE_GAP
     * @uses self::VALUE_DNA
     * @uses self::VALUE_OUZOC
     * @uses self::VALUE_OUZAC
     * @uses self::VALUE_BAGAZ
     * @uses self::VALUE_OCACOPWD
     * @uses self::VALUE_ALL
     * @uses self::VALUE_ACWD
     * @uses self::VALUE_KLAUZULA
     * @uses self::VALUE_BLS
     * @uses self::VALUE_MOBILNY_19035
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_OC,
            self::VALUE_AC,
            self::VALUE_WD,
            self::VALUE_OP,
            self::VALUE_NNW,
            self::VALUE_ASSISTANCE,
            self::VALUE_POMOC,
            self::VALUE_SZYBY,
            self::VALUE_GAP,
            self::VALUE_DNA,
            self::VALUE_OUZOC,
            self::VALUE_OUZAC,
            self::VALUE_BAGAZ,
            self::VALUE_OCACOPWD,
            self::VALUE_ALL,
            self::VALUE_ACWD,
            self::VALUE_KLAUZULA,
            self::VALUE_BLS,
            self::VALUE_MOBILNY_19035,
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
