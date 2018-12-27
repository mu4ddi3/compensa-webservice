<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePremiumPomoc StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePremiumPomoc
 * @subpackage Structs
 */
class BasePremiumPomoc extends BasePremium
{
    /**
     * The NumberOfSeatsFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSeatsFrom;
    /**
     * The NumberOfSeatsTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSeatsTo;
    /**
     * The VehicleAgeFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleAgeFrom;
    /**
     * The VehicleAgeTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $VehicleAgeTo;
    /**
     * Constructor method for BasePremiumPomoc
     * @uses BasePremiumPomoc::setNumberOfSeatsFrom()
     * @uses BasePremiumPomoc::setNumberOfSeatsTo()
     * @uses BasePremiumPomoc::setVehicleAgeFrom()
     * @uses BasePremiumPomoc::setVehicleAgeTo()
     * @param int $numberOfSeatsFrom
     * @param int $numberOfSeatsTo
     * @param int $vehicleAgeFrom
     * @param int $vehicleAgeTo
     */
    public function __construct($numberOfSeatsFrom = null, $numberOfSeatsTo = null, $vehicleAgeFrom = null, $vehicleAgeTo = null)
    {
        $this
            ->setNumberOfSeatsFrom($numberOfSeatsFrom)
            ->setNumberOfSeatsTo($numberOfSeatsTo)
            ->setVehicleAgeFrom($vehicleAgeFrom)
            ->setVehicleAgeTo($vehicleAgeTo);
    }
    /**
     * Get NumberOfSeatsFrom value
     * @return int|null
     */
    public function getNumberOfSeatsFrom()
    {
        return $this->NumberOfSeatsFrom;
    }
    /**
     * Set NumberOfSeatsFrom value
     * @param int $numberOfSeatsFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumPomoc
     */
    public function setNumberOfSeatsFrom($numberOfSeatsFrom = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfSeatsFrom) && !is_numeric($numberOfSeatsFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeatsFrom)), __LINE__);
        }
        $this->NumberOfSeatsFrom = $numberOfSeatsFrom;
        return $this;
    }
    /**
     * Get NumberOfSeatsTo value
     * @return int|null
     */
    public function getNumberOfSeatsTo()
    {
        return $this->NumberOfSeatsTo;
    }
    /**
     * Set NumberOfSeatsTo value
     * @param int $numberOfSeatsTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumPomoc
     */
    public function setNumberOfSeatsTo($numberOfSeatsTo = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfSeatsTo) && !is_numeric($numberOfSeatsTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeatsTo)), __LINE__);
        }
        $this->NumberOfSeatsTo = $numberOfSeatsTo;
        return $this;
    }
    /**
     * Get VehicleAgeFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehicleAgeFrom()
    {
        return isset($this->VehicleAgeFrom) ? $this->VehicleAgeFrom : null;
    }
    /**
     * Set VehicleAgeFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehicleAgeFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumPomoc
     */
    public function setVehicleAgeFrom($vehicleAgeFrom = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeFrom) && !is_numeric($vehicleAgeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeFrom)), __LINE__);
        }
        if (is_null($vehicleAgeFrom) || (is_array($vehicleAgeFrom) && empty($vehicleAgeFrom))) {
            unset($this->VehicleAgeFrom);
        } else {
            $this->VehicleAgeFrom = $vehicleAgeFrom;
        }
        return $this;
    }
    /**
     * Get VehicleAgeTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getVehicleAgeTo()
    {
        return isset($this->VehicleAgeTo) ? $this->VehicleAgeTo : null;
    }
    /**
     * Set VehicleAgeTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $vehicleAgeTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumPomoc
     */
    public function setVehicleAgeTo($vehicleAgeTo = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeTo) && !is_numeric($vehicleAgeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeTo)), __LINE__);
        }
        if (is_null($vehicleAgeTo) || (is_array($vehicleAgeTo) && empty($vehicleAgeTo))) {
            unset($this->VehicleAgeTo);
        } else {
            $this->VehicleAgeTo = $vehicleAgeTo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumPomoc
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
