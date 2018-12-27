<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClientInactivityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClientInactivityCondition
 * @subpackage Structs
 */
class ClientInactivityCondition extends AvailabilityConditionBase
{
    /**
     * The MaximalClientInactivity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MaximalClientInactivity;
    /**
     * The MinimalClientInactivity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MinimalClientInactivity;
    /**
     * Constructor method for ClientInactivityCondition
     * @uses ClientInactivityCondition::setMaximalClientInactivity()
     * @uses ClientInactivityCondition::setMinimalClientInactivity()
     * @param int $maximalClientInactivity
     * @param int $minimalClientInactivity
     */
    public function __construct($maximalClientInactivity = null, $minimalClientInactivity = null)
    {
        $this
            ->setMaximalClientInactivity($maximalClientInactivity)
            ->setMinimalClientInactivity($minimalClientInactivity);
    }
    /**
     * Get MaximalClientInactivity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMaximalClientInactivity()
    {
        return isset($this->MaximalClientInactivity) ? $this->MaximalClientInactivity : null;
    }
    /**
     * Set MaximalClientInactivity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $maximalClientInactivity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientInactivityCondition
     */
    public function setMaximalClientInactivity($maximalClientInactivity = null)
    {
        // validation for constraint: int
        if (!is_null($maximalClientInactivity) && !is_numeric($maximalClientInactivity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximalClientInactivity)), __LINE__);
        }
        if (is_null($maximalClientInactivity) || (is_array($maximalClientInactivity) && empty($maximalClientInactivity))) {
            unset($this->MaximalClientInactivity);
        } else {
            $this->MaximalClientInactivity = $maximalClientInactivity;
        }
        return $this;
    }
    /**
     * Get MinimalClientInactivity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMinimalClientInactivity()
    {
        return isset($this->MinimalClientInactivity) ? $this->MinimalClientInactivity : null;
    }
    /**
     * Set MinimalClientInactivity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $minimalClientInactivity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientInactivityCondition
     */
    public function setMinimalClientInactivity($minimalClientInactivity = null)
    {
        // validation for constraint: int
        if (!is_null($minimalClientInactivity) && !is_numeric($minimalClientInactivity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalClientInactivity)), __LINE__);
        }
        if (is_null($minimalClientInactivity) || (is_array($minimalClientInactivity) && empty($minimalClientInactivity))) {
            unset($this->MinimalClientInactivity);
        } else {
            $this->MinimalClientInactivity = $minimalClientInactivity;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientInactivityCondition
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
