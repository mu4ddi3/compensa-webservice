<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
 * StructType
 * @subpackage Structs
 */
class KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL extends AbstractStructBase
{
    /**
     * The Key
     * @var string
     */
    public $Key;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - nillable: true
     * @var bool
     */
    public $Value;
    /**
     * Constructor method for KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     * @uses KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL::setKey()
     * @uses KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL::setValue()
     * @param string $key
     * @param bool $value
     */
    public function __construct($key = null, $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnClaim::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnClaim::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $key
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     */
    public function setKey($key = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnClaim::valueIsValid($key)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $key, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnClaim::getValidValues())), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get Value value
     * @return bool|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param bool $value
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     */
    public function setValue($value = null)
    {
        // validation for constraint: boolean
        if (!is_null($value) && !is_bool($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\KeyValueOfPartnerRoleOnClaimNullableOfbooleanBFmuWHBL
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
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
