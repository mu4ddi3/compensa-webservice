<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PomocInsuranceVehicleAgeBlackRiskRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PomocInsuranceVehicleAgeBlackRiskRule
 * @subpackage Structs
 */
class PomocInsuranceVehicleAgeBlackRiskRule extends BlackRiskRule
{
    /**
     * The VehicleAgeLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAgeLeftBound;
    /**
     * The VehicleAgeRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAgeRightBound;
    /**
     * Constructor method for PomocInsuranceVehicleAgeBlackRiskRule
     * @uses PomocInsuranceVehicleAgeBlackRiskRule::setVehicleAgeLeftBound()
     * @uses PomocInsuranceVehicleAgeBlackRiskRule::setVehicleAgeRightBound()
     * @param int $vehicleAgeLeftBound
     * @param int $vehicleAgeRightBound
     */
    public function __construct($vehicleAgeLeftBound = null, $vehicleAgeRightBound = null)
    {
        $this
            ->setVehicleAgeLeftBound($vehicleAgeLeftBound)
            ->setVehicleAgeRightBound($vehicleAgeRightBound);
    }
    /**
     * Get VehicleAgeLeftBound value
     * @return int|null
     */
    public function getVehicleAgeLeftBound()
    {
        return $this->VehicleAgeLeftBound;
    }
    /**
     * Set VehicleAgeLeftBound value
     * @param int $vehicleAgeLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule
     */
    public function setVehicleAgeLeftBound($vehicleAgeLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeLeftBound) && !is_numeric($vehicleAgeLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeLeftBound)), __LINE__);
        }
        $this->VehicleAgeLeftBound = $vehicleAgeLeftBound;
        return $this;
    }
    /**
     * Get VehicleAgeRightBound value
     * @return int|null
     */
    public function getVehicleAgeRightBound()
    {
        return $this->VehicleAgeRightBound;
    }
    /**
     * Set VehicleAgeRightBound value
     * @param int $vehicleAgeRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule
     */
    public function setVehicleAgeRightBound($vehicleAgeRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeRightBound) && !is_numeric($vehicleAgeRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeRightBound)), __LINE__);
        }
        $this->VehicleAgeRightBound = $vehicleAgeRightBound;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskRule
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
