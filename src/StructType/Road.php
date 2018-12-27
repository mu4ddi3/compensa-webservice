<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Road StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Road
 * @subpackage Structs
 */
class Road extends StandardizedAddress
{
    /**
     * The Km
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Km;
    /**
     * The RoadNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RoadNumber;
    /**
     * Constructor method for Road
     * @uses Road::setKm()
     * @uses Road::setRoadNumber()
     * @param string $km
     * @param string $roadNumber
     */
    public function __construct($km = null, $roadNumber = null)
    {
        $this
            ->setKm($km)
            ->setRoadNumber($roadNumber);
    }
    /**
     * Get Km value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKm()
    {
        return isset($this->Km) ? $this->Km : null;
    }
    /**
     * Set Km value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $km
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Road
     */
    public function setKm($km = null)
    {
        // validation for constraint: string
        if (!is_null($km) && !is_string($km)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($km)), __LINE__);
        }
        if (is_null($km) || (is_array($km) && empty($km))) {
            unset($this->Km);
        } else {
            $this->Km = $km;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Road
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Road
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
