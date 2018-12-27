<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyDuration StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PolicyDuration
 * @subpackage Structs
 */
class PolicyDuration extends AbstractStructBase
{
    /**
     * The DurationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DurationType;
    /**
     * The MaximalNumberOfDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MaximalNumberOfDays;
    /**
     * The MinimalNumberOfDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MinimalNumberOfDays;
    /**
     * Constructor method for PolicyDuration
     * @uses PolicyDuration::setDurationType()
     * @uses PolicyDuration::setMaximalNumberOfDays()
     * @uses PolicyDuration::setMinimalNumberOfDays()
     * @param string $durationType
     * @param int $maximalNumberOfDays
     * @param int $minimalNumberOfDays
     */
    public function __construct($durationType = null, $maximalNumberOfDays = null, $minimalNumberOfDays = null)
    {
        $this
            ->setDurationType($durationType)
            ->setMaximalNumberOfDays($maximalNumberOfDays)
            ->setMinimalNumberOfDays($minimalNumberOfDays);
    }
    /**
     * Get DurationType value
     * @return string|null
     */
    public function getDurationType()
    {
        return $this->DurationType;
    }
    /**
     * Set DurationType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyDurationType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyDurationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $durationType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDuration
     */
    public function setDurationType($durationType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PolicyDurationType::valueIsValid($durationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $durationType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PolicyDurationType::getValidValues())), __LINE__);
        }
        $this->DurationType = $durationType;
        return $this;
    }
    /**
     * Get MaximalNumberOfDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMaximalNumberOfDays()
    {
        return isset($this->MaximalNumberOfDays) ? $this->MaximalNumberOfDays : null;
    }
    /**
     * Set MaximalNumberOfDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $maximalNumberOfDays
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDuration
     */
    public function setMaximalNumberOfDays($maximalNumberOfDays = null)
    {
        // validation for constraint: int
        if (!is_null($maximalNumberOfDays) && !is_numeric($maximalNumberOfDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximalNumberOfDays)), __LINE__);
        }
        if (is_null($maximalNumberOfDays) || (is_array($maximalNumberOfDays) && empty($maximalNumberOfDays))) {
            unset($this->MaximalNumberOfDays);
        } else {
            $this->MaximalNumberOfDays = $maximalNumberOfDays;
        }
        return $this;
    }
    /**
     * Get MinimalNumberOfDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMinimalNumberOfDays()
    {
        return isset($this->MinimalNumberOfDays) ? $this->MinimalNumberOfDays : null;
    }
    /**
     * Set MinimalNumberOfDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $minimalNumberOfDays
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDuration
     */
    public function setMinimalNumberOfDays($minimalNumberOfDays = null)
    {
        // validation for constraint: int
        if (!is_null($minimalNumberOfDays) && !is_numeric($minimalNumberOfDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalNumberOfDays)), __LINE__);
        }
        if (is_null($minimalNumberOfDays) || (is_array($minimalNumberOfDays) && empty($minimalNumberOfDays))) {
            unset($this->MinimalNumberOfDays);
        } else {
            $this->MinimalNumberOfDays = $minimalNumberOfDays;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDuration
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
