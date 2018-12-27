<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ISIndexation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ISIndexation
 * @subpackage Structs
 */
class ISIndexation extends AbstractStructBase
{
    /**
     * The AgeLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AgeLeftBound;
    /**
     * The AgeRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AgeRightBound;
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Factor;
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleType;
    /**
     * Constructor method for ISIndexation
     * @uses ISIndexation::setAgeLeftBound()
     * @uses ISIndexation::setAgeRightBound()
     * @uses ISIndexation::setFactor()
     * @uses ISIndexation::setVehicleType()
     * @param int $ageLeftBound
     * @param int $ageRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @param string $vehicleType
     */
    public function __construct($ageLeftBound = null, $ageRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null, $vehicleType = null)
    {
        $this
            ->setAgeLeftBound($ageLeftBound)
            ->setAgeRightBound($ageRightBound)
            ->setFactor($factor)
            ->setVehicleType($vehicleType);
    }
    /**
     * Get AgeLeftBound value
     * @return int|null
     */
    public function getAgeLeftBound()
    {
        return $this->AgeLeftBound;
    }
    /**
     * Set AgeLeftBound value
     * @param int $ageLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation
     */
    public function setAgeLeftBound($ageLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($ageLeftBound) && !is_numeric($ageLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ageLeftBound)), __LINE__);
        }
        $this->AgeLeftBound = $ageLeftBound;
        return $this;
    }
    /**
     * Get AgeRightBound value
     * @return int|null
     */
    public function getAgeRightBound()
    {
        return $this->AgeRightBound;
    }
    /**
     * Set AgeRightBound value
     * @param int $ageRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation
     */
    public function setAgeRightBound($ageRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($ageRightBound) && !is_numeric($ageRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ageRightBound)), __LINE__);
        }
        $this->AgeRightBound = $ageRightBound;
        return $this;
    }
    /**
     * Get Factor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactor()
    {
        return isset($this->Factor) ? $this->Factor : null;
    }
    /**
     * Set Factor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation
     */
    public function setFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        if (is_null($factor) || (is_array($factor) && empty($factor))) {
            unset($this->Factor);
        } else {
            $this->Factor = $factor;
        }
        return $this;
    }
    /**
     * Get VehicleType value
     * @return string|null
     */
    public function getVehicleType()
    {
        return $this->VehicleType;
    }
    /**
     * Set VehicleType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation
     */
    public function setVehicleType($vehicleType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::valueIsValid($vehicleType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleType::getValidValues())), __LINE__);
        }
        $this->VehicleType = $vehicleType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation
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
