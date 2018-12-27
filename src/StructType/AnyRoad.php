<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnyRoad StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AnyRoad
 * @subpackage Structs
 */
class AnyRoad extends StandardizedAddress
{
    /**
     * The City1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $City1;
    /**
     * The City2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $City2;
    /**
     * The RoadNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RoadNumber;
    /**
     * Constructor method for AnyRoad
     * @uses AnyRoad::setCity1()
     * @uses AnyRoad::setCity2()
     * @uses AnyRoad::setRoadNumber()
     * @param string $city1
     * @param string $city2
     * @param string $roadNumber
     */
    public function __construct($city1 = null, $city2 = null, $roadNumber = null)
    {
        $this
            ->setCity1($city1)
            ->setCity2($city2)
            ->setRoadNumber($roadNumber);
    }
    /**
     * Get City1 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity1()
    {
        return isset($this->City1) ? $this->City1 : null;
    }
    /**
     * Set City1 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city1
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnyRoad
     */
    public function setCity1($city1 = null)
    {
        // validation for constraint: string
        if (!is_null($city1) && !is_string($city1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city1)), __LINE__);
        }
        if (is_null($city1) || (is_array($city1) && empty($city1))) {
            unset($this->City1);
        } else {
            $this->City1 = $city1;
        }
        return $this;
    }
    /**
     * Get City2 value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity2()
    {
        return isset($this->City2) ? $this->City2 : null;
    }
    /**
     * Set City2 value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city2
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnyRoad
     */
    public function setCity2($city2 = null)
    {
        // validation for constraint: string
        if (!is_null($city2) && !is_string($city2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city2)), __LINE__);
        }
        if (is_null($city2) || (is_array($city2) && empty($city2))) {
            unset($this->City2);
        } else {
            $this->City2 = $city2;
        }
        return $this;
    }
    /**
     * Get RoadNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRoadNumber()
    {
        return isset($this->RoadNumber) ? $this->RoadNumber : null;
    }
    /**
     * Set RoadNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $roadNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnyRoad
     */
    public function setRoadNumber($roadNumber = null)
    {
        // validation for constraint: string
        if (!is_null($roadNumber) && !is_string($roadNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($roadNumber)), __LINE__);
        }
        if (is_null($roadNumber) || (is_array($roadNumber) && empty($roadNumber))) {
            unset($this->RoadNumber);
        } else {
            $this->RoadNumber = $roadNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AnyRoad
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
