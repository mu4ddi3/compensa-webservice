<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientAgeCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClientAgeCondition
 * @subpackage Structs
 */
class ClientAgeCondition extends AvailabilityConditionBase
{
    /**
     * The MaximalClientAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MaximalClientAge;
    /**
     * The MinimalClientAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MinimalClientAge;
    /**
     * Constructor method for ClientAgeCondition
     * @uses ClientAgeCondition::setMaximalClientAge()
     * @uses ClientAgeCondition::setMinimalClientAge()
     * @param int $maximalClientAge
     * @param int $minimalClientAge
     */
    public function __construct($maximalClientAge = null, $minimalClientAge = null)
    {
        $this
            ->setMaximalClientAge($maximalClientAge)
            ->setMinimalClientAge($minimalClientAge);
    }
    /**
     * Get MaximalClientAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMaximalClientAge()
    {
        return isset($this->MaximalClientAge) ? $this->MaximalClientAge : null;
    }
    /**
     * Set MaximalClientAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $maximalClientAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientAgeCondition
     */
    public function setMaximalClientAge($maximalClientAge = null)
    {
        // validation for constraint: int
        if (!is_null($maximalClientAge) && !is_numeric($maximalClientAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximalClientAge)), __LINE__);
        }
        if (is_null($maximalClientAge) || (is_array($maximalClientAge) && empty($maximalClientAge))) {
            unset($this->MaximalClientAge);
        } else {
            $this->MaximalClientAge = $maximalClientAge;
        }
        return $this;
    }
    /**
     * Get MinimalClientAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMinimalClientAge()
    {
        return isset($this->MinimalClientAge) ? $this->MinimalClientAge : null;
    }
    /**
     * Set MinimalClientAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $minimalClientAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientAgeCondition
     */
    public function setMinimalClientAge($minimalClientAge = null)
    {
        // validation for constraint: int
        if (!is_null($minimalClientAge) && !is_numeric($minimalClientAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalClientAge)), __LINE__);
        }
        if (is_null($minimalClientAge) || (is_array($minimalClientAge) && empty($minimalClientAge))) {
            unset($this->MinimalClientAge);
        } else {
            $this->MinimalClientAge = $minimalClientAge;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientAgeCondition
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
