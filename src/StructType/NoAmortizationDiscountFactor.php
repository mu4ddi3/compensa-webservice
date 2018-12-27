<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NoAmortizationDiscountFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NoAmortizationDiscountFactor
 * @subpackage Structs
 */
class NoAmortizationDiscountFactor extends BaseFactorDefinition
{
    /**
     * The VehicleAgeRangeFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAgeRangeFrom;
    /**
     * The VehicleAgeRangeTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAgeRangeTo;
    /**
     * Constructor method for NoAmortizationDiscountFactor
     * @uses NoAmortizationDiscountFactor::setVehicleAgeRangeFrom()
     * @uses NoAmortizationDiscountFactor::setVehicleAgeRangeTo()
     * @param int $vehicleAgeRangeFrom
     * @param int $vehicleAgeRangeTo
     */
    public function __construct($vehicleAgeRangeFrom = null, $vehicleAgeRangeTo = null)
    {
        $this
            ->setVehicleAgeRangeFrom($vehicleAgeRangeFrom)
            ->setVehicleAgeRangeTo($vehicleAgeRangeTo);
    }
    /**
     * Get VehicleAgeRangeFrom value
     * @return int|null
     */
    public function getVehicleAgeRangeFrom()
    {
        return $this->VehicleAgeRangeFrom;
    }
    /**
     * Set VehicleAgeRangeFrom value
     * @param int $vehicleAgeRangeFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor
     */
    public function setVehicleAgeRangeFrom($vehicleAgeRangeFrom = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeRangeFrom) && !is_numeric($vehicleAgeRangeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeRangeFrom)), __LINE__);
        }
        $this->VehicleAgeRangeFrom = $vehicleAgeRangeFrom;
        return $this;
    }
    /**
     * Get VehicleAgeRangeTo value
     * @return int|null
     */
    public function getVehicleAgeRangeTo()
    {
        return $this->VehicleAgeRangeTo;
    }
    /**
     * Set VehicleAgeRangeTo value
     * @param int $vehicleAgeRangeTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor
     */
    public function setVehicleAgeRangeTo($vehicleAgeRangeTo = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeRangeTo) && !is_numeric($vehicleAgeRangeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeRangeTo)), __LINE__);
        }
        $this->VehicleAgeRangeTo = $vehicleAgeRangeTo;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAmortizationDiscountFactor
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
