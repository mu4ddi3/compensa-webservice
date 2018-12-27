<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for TariffVariants EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TariffVariants
 * @subpackage Enumerations
 */
class TariffVariants
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'PomocVariantA'
     * @return string 'PomocVariantA'
     */
    const VALUE_POMOC_VARIANT_A = 'PomocVariantA';
    /**
     * Constant for value 'PomocVariantB'
     * @return string 'PomocVariantB'
     */
    const VALUE_POMOC_VARIANT_B = 'PomocVariantB';
    /**
     * Constant for value 'AssistanceBaza'
     * @return string 'AssistanceBaza'
     */
    const VALUE_ASSISTANCE_BAZA = 'AssistanceBaza';
    /**
     * Constant for value 'AssistanceTop'
     * @return string 'AssistanceTop'
     */
    const VALUE_ASSISTANCE_TOP = 'AssistanceTop';
    /**
     * Constant for value 'AssistanceTopNDK'
     * @return string 'AssistanceTopNDK'
     */
    const VALUE_ASSISTANCE_TOP_NDK = 'AssistanceTopNDK';
    /**
     * Constant for value 'OpDriver'
     * @return string 'OpDriver'
     */
    const VALUE_OP_DRIVER = 'OpDriver';
    /**
     * Constant for value 'OpVehicle'
     * @return string 'OpVehicle'
     */
    const VALUE_OP_VEHICLE = 'OpVehicle';
    /**
     * Constant for value 'GapFakturowy'
     * @return string 'GapFakturowy'
     */
    const VALUE_GAP_FAKTUROWY = 'GapFakturowy';
    /**
     * Constant for value 'GapAutoCasco'
     * @return string 'GapAutoCasco'
     */
    const VALUE_GAP_AUTO_CASCO = 'GapAutoCasco';
    /**
     * Constant for value 'BagazBaza'
     * @return string 'BagazBaza'
     */
    const VALUE_BAGAZ_BAZA = 'BagazBaza';
    /**
     * Constant for value 'BagazMoc'
     * @return string 'BagazMoc'
     */
    const VALUE_BAGAZ_MOC = 'BagazMoc';
    /**
     * Constant for value 'AssistanceSubriskBaza'
     * @return string 'AssistanceSubriskBaza'
     */
    const VALUE_ASSISTANCE_SUBRISK_BAZA = 'AssistanceSubriskBaza';
    /**
     * Constant for value 'AssistanceSubriskStandard'
     * @return string 'AssistanceSubriskStandard'
     */
    const VALUE_ASSISTANCE_SUBRISK_STANDARD = 'AssistanceSubriskStandard';
    /**
     * Constant for value 'AssistanceSubriskKomfort'
     * @return string 'AssistanceSubriskKomfort'
     */
    const VALUE_ASSISTANCE_SUBRISK_KOMFORT = 'AssistanceSubriskKomfort';
    /**
     * Constant for value 'AssistanceSubriskLux'
     * @return string 'AssistanceSubriskLux'
     */
    const VALUE_ASSISTANCE_SUBRISK_LUX = 'AssistanceSubriskLux';
    /**
     * Constant for value 'AssistanceSubriskKomfortPlus'
     * @return string 'AssistanceSubriskKomfortPlus'
     */
    const VALUE_ASSISTANCE_SUBRISK_KOMFORT_PLUS = 'AssistanceSubriskKomfortPlus';
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
     * @uses self::VALUE_POMOC_VARIANT_A
     * @uses self::VALUE_POMOC_VARIANT_B
     * @uses self::VALUE_ASSISTANCE_BAZA
     * @uses self::VALUE_ASSISTANCE_TOP
     * @uses self::VALUE_ASSISTANCE_TOP_NDK
     * @uses self::VALUE_OP_DRIVER
     * @uses self::VALUE_OP_VEHICLE
     * @uses self::VALUE_GAP_FAKTUROWY
     * @uses self::VALUE_GAP_AUTO_CASCO
     * @uses self::VALUE_BAGAZ_BAZA
     * @uses self::VALUE_BAGAZ_MOC
     * @uses self::VALUE_ASSISTANCE_SUBRISK_BAZA
     * @uses self::VALUE_ASSISTANCE_SUBRISK_STANDARD
     * @uses self::VALUE_ASSISTANCE_SUBRISK_KOMFORT
     * @uses self::VALUE_ASSISTANCE_SUBRISK_LUX
     * @uses self::VALUE_ASSISTANCE_SUBRISK_KOMFORT_PLUS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_POMOC_VARIANT_A,
            self::VALUE_POMOC_VARIANT_B,
            self::VALUE_ASSISTANCE_BAZA,
            self::VALUE_ASSISTANCE_TOP,
            self::VALUE_ASSISTANCE_TOP_NDK,
            self::VALUE_OP_DRIVER,
            self::VALUE_OP_VEHICLE,
            self::VALUE_GAP_FAKTUROWY,
            self::VALUE_GAP_AUTO_CASCO,
            self::VALUE_BAGAZ_BAZA,
            self::VALUE_BAGAZ_MOC,
            self::VALUE_ASSISTANCE_SUBRISK_BAZA,
            self::VALUE_ASSISTANCE_SUBRISK_STANDARD,
            self::VALUE_ASSISTANCE_SUBRISK_KOMFORT,
            self::VALUE_ASSISTANCE_SUBRISK_LUX,
            self::VALUE_ASSISTANCE_SUBRISK_KOMFORT_PLUS,
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
