<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssistanceInsuranceBlackRiskRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AssistanceInsuranceBlackRiskRule
 * @subpackage Structs
 */
class AssistanceInsuranceBlackRiskRule extends BlackRiskRule
{
    /**
     * The NumberOfSeatsLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSeatsLeftBound;
    /**
     * The NumberOfSeatsRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSeatsRightBound;
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
     * Constructor method for AssistanceInsuranceBlackRiskRule
     * @uses AssistanceInsuranceBlackRiskRule::setNumberOfSeatsLeftBound()
     * @uses AssistanceInsuranceBlackRiskRule::setNumberOfSeatsRightBound()
     * @uses AssistanceInsuranceBlackRiskRule::setVehicleAgeLeftBound()
     * @uses AssistanceInsuranceBlackRiskRule::setVehicleAgeRightBound()
     * @param int $numberOfSeatsLeftBound
     * @param int $numberOfSeatsRightBound
     * @param int $vehicleAgeLeftBound
     * @param int $vehicleAgeRightBound
     */
    public function __construct($numberOfSeatsLeftBound = null, $numberOfSeatsRightBound = null, $vehicleAgeLeftBound = null, $vehicleAgeRightBound = null)
    {
        $this
            ->setNumberOfSeatsLeftBound($numberOfSeatsLeftBound)
            ->setNumberOfSeatsRightBound($numberOfSeatsRightBound)
            ->setVehicleAgeLeftBound($vehicleAgeLeftBound)
            ->setVehicleAgeRightBound($vehicleAgeRightBound);
    }
    /**
     * Get NumberOfSeatsLeftBound value
     * @return int|null
     */
    public function getNumberOfSeatsLeftBound()
    {
        return $this->NumberOfSeatsLeftBound;
    }
    /**
     * Set NumberOfSeatsLeftBound value
     * @param int $numberOfSeatsLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule
     */
    public function setNumberOfSeatsLeftBound($numberOfSeatsLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfSeatsLeftBound) && !is_numeric($numberOfSeatsLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeatsLeftBound)), __LINE__);
        }
        $this->NumberOfSeatsLeftBound = $numberOfSeatsLeftBound;
        return $this;
    }
    /**
     * Get NumberOfSeatsRightBound value
     * @return int|null
     */
    public function getNumberOfSeatsRightBound()
    {
        return $this->NumberOfSeatsRightBound;
    }
    /**
     * Set NumberOfSeatsRightBound value
     * @param int $numberOfSeatsRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule
     */
    public function setNumberOfSeatsRightBound($numberOfSeatsRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfSeatsRightBound) && !is_numeric($numberOfSeatsRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeatsRightBound)), __LINE__);
        }
        $this->NumberOfSeatsRightBound = $numberOfSeatsRightBound;
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskRule
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
