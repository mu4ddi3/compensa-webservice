<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for ActivityType EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ActivityType
 * @subpackage Enumerations
 */
class ActivityType
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Creation'
     * @return string 'Creation'
     */
    const VALUE_CREATION = 'Creation';
    /**
     * Constant for value 'Update'
     * @return string 'Update'
     */
    const VALUE_UPDATE = 'Update';
    /**
     * Constant for value 'Approval'
     * @return string 'Approval'
     */
    const VALUE_APPROVAL = 'Approval';
    /**
     * Constant for value 'Acceptance'
     * @return string 'Acceptance'
     */
    const VALUE_ACCEPTANCE = 'Acceptance';
    /**
     * Constant for value 'RestorationToDraft'
     * @return string 'RestorationToDraft'
     */
    const VALUE_RESTORATION_TO_DRAFT = 'RestorationToDraft';
    /**
     * Constant for value 'DateModification'
     * @return string 'DateModification'
     */
    const VALUE_DATE_MODIFICATION = 'DateModification';
    /**
     * Constant for value 'Cancellation'
     * @return string 'Cancellation'
     */
    const VALUE_CANCELLATION = 'Cancellation';
    /**
     * Constant for value 'CodesGeneration'
     * @return string 'CodesGeneration'
     */
    const VALUE_CODES_GENERATION = 'CodesGeneration';
    /**
     * Constant for value 'Removal'
     * @return string 'Removal'
     */
    const VALUE_REMOVAL = 'Removal';
    /**
     * Constant for value 'CodesDownload'
     * @return string 'CodesDownload'
     */
    const VALUE_CODES_DOWNLOAD = 'CodesDownload';
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
     * @uses self::VALUE_CREATION
     * @uses self::VALUE_UPDATE
     * @uses self::VALUE_APPROVAL
     * @uses self::VALUE_ACCEPTANCE
     * @uses self::VALUE_RESTORATION_TO_DRAFT
     * @uses self::VALUE_DATE_MODIFICATION
     * @uses self::VALUE_CANCELLATION
     * @uses self::VALUE_CODES_GENERATION
     * @uses self::VALUE_REMOVAL
     * @uses self::VALUE_CODES_DOWNLOAD
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_CREATION,
            self::VALUE_UPDATE,
            self::VALUE_APPROVAL,
            self::VALUE_ACCEPTANCE,
            self::VALUE_RESTORATION_TO_DRAFT,
            self::VALUE_DATE_MODIFICATION,
            self::VALUE_CANCELLATION,
            self::VALUE_CODES_GENERATION,
            self::VALUE_REMOVAL,
            self::VALUE_CODES_DOWNLOAD,
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
