<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SurfaceAreaCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SurfaceAreaCondition
 * @subpackage Structs
 */
class SurfaceAreaCondition extends AvailabilityConditionBase
{
    /**
     * The SurfaceAreaFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $SurfaceAreaFrom;
    /**
     * The SurfaceAreaTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $SurfaceAreaTo;
    /**
     * Constructor method for SurfaceAreaCondition
     * @uses SurfaceAreaCondition::setSurfaceAreaFrom()
     * @uses SurfaceAreaCondition::setSurfaceAreaTo()
     * @param float $surfaceAreaFrom
     * @param float $surfaceAreaTo
     */
    public function __construct($surfaceAreaFrom = null, $surfaceAreaTo = null)
    {
        $this
            ->setSurfaceAreaFrom($surfaceAreaFrom)
            ->setSurfaceAreaTo($surfaceAreaTo);
    }
    /**
     * Get SurfaceAreaFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getSurfaceAreaFrom()
    {
        return isset($this->SurfaceAreaFrom) ? $this->SurfaceAreaFrom : null;
    }
    /**
     * Set SurfaceAreaFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $surfaceAreaFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SurfaceAreaCondition
     */
    public function setSurfaceAreaFrom($surfaceAreaFrom = null)
    {
        if (is_null($surfaceAreaFrom) || (is_array($surfaceAreaFrom) && empty($surfaceAreaFrom))) {
            unset($this->SurfaceAreaFrom);
        } else {
            $this->SurfaceAreaFrom = $surfaceAreaFrom;
        }
        return $this;
    }
    /**
     * Get SurfaceAreaTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getSurfaceAreaTo()
    {
        return isset($this->SurfaceAreaTo) ? $this->SurfaceAreaTo : null;
    }
    /**
     * Set SurfaceAreaTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $surfaceAreaTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SurfaceAreaCondition
     */
    public function setSurfaceAreaTo($surfaceAreaTo = null)
    {
        if (is_null($surfaceAreaTo) || (is_array($surfaceAreaTo) && empty($surfaceAreaTo))) {
            unset($this->SurfaceAreaTo);
        } else {
            $this->SurfaceAreaTo = $surfaceAreaTo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SurfaceAreaCondition
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
