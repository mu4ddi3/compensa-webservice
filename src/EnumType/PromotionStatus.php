<?php

namespace Mu4ddi3\Compensa\Webservice\EnumType;

/**
 * This class stands for PromotionStatus EnumType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionStatus
 * @subpackage Enumerations
 */
class PromotionStatus
{
    /**
     * Constant for value 'Undefined'
     * @return string 'Undefined'
     */
    const VALUE_UNDEFINED = 'Undefined';
    /**
     * Constant for value 'Draft'
     * @return string 'Draft'
     */
    const VALUE_DRAFT = 'Draft';
    /**
     * Constant for value 'Approved'
     * @return string 'Approved'
     */
    const VALUE_APPROVED = 'Approved';
    /**
     * Constant for value 'Accepted'
     * @return string 'Accepted'
     */
    const VALUE_ACCEPTED = 'Accepted';
    /**
     * Constant for value 'Active'
     * @return string 'Active'
     */
    const VALUE_ACTIVE = 'Active';
    /**
     * Constant for value 'Completed'
     * @return string 'Completed'
     */
    const VALUE_COMPLETED = 'Completed';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Constant for value 'Deleted'
     * @return string 'Deleted'
     */
    const VALUE_DELETED = 'Deleted';
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
     * @uses self::VALUE_DRAFT
     * @uses self::VALUE_APPROVED
     * @uses self::VALUE_ACCEPTED
     * @uses self::VALUE_ACTIVE
     * @uses self::VALUE_COMPLETED
     * @uses self::VALUE_CANCELLED
     * @uses self::VALUE_DELETED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNDEFINED,
            self::VALUE_DRAFT,
            self::VALUE_APPROVED,
            self::VALUE_ACCEPTED,
            self::VALUE_ACTIVE,
            self::VALUE_COMPLETED,
            self::VALUE_CANCELLED,
            self::VALUE_DELETED,
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
