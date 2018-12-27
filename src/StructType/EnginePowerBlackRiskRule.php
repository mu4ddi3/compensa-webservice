<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnginePowerBlackRiskRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EnginePowerBlackRiskRule
 * @subpackage Structs
 */
class EnginePowerBlackRiskRule extends BlackRiskRule
{
    /**
     * The EnginePowerLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePowerLeftBound;
    /**
     * The EnginePowerRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePowerRightBound;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for EnginePowerBlackRiskRule
     * @uses EnginePowerBlackRiskRule::setEnginePowerLeftBound()
     * @uses EnginePowerBlackRiskRule::setEnginePowerRightBound()
     * @uses EnginePowerBlackRiskRule::setVehicleGroupId()
     * @param int $enginePowerLeftBound
     * @param int $enginePowerRightBound
     * @param int $vehicleGroupId
     */
    public function __construct($enginePowerLeftBound = null, $enginePowerRightBound = null, $vehicleGroupId = null)
    {
        $this
            ->setEnginePowerLeftBound($enginePowerLeftBound)
            ->setEnginePowerRightBound($enginePowerRightBound)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get EnginePowerLeftBound value
     * @return int|null
     */
    public function getEnginePowerLeftBound()
    {
        return $this->EnginePowerLeftBound;
    }
    /**
     * Set EnginePowerLeftBound value
     * @param int $enginePowerLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule
     */
    public function setEnginePowerLeftBound($enginePowerLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerLeftBound) && !is_numeric($enginePowerLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerLeftBound)), __LINE__);
        }
        $this->EnginePowerLeftBound = $enginePowerLeftBound;
        return $this;
    }
    /**
     * Get EnginePowerRightBound value
     * @return int|null
     */
    public function getEnginePowerRightBound()
    {
        return $this->EnginePowerRightBound;
    }
    /**
     * Set EnginePowerRightBound value
     * @param int $enginePowerRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule
     */
    public function setEnginePowerRightBound($enginePowerRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerRightBound) && !is_numeric($enginePowerRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerRightBound)), __LINE__);
        }
        $this->EnginePowerRightBound = $enginePowerRightBound;
        return $this;
    }
    /**
     * Get VehicleGroupId value
     * @return int|null
     */
    public function getVehicleGroupId()
    {
        return $this->VehicleGroupId;
    }
    /**
     * Set VehicleGroupId value
     * @param int $vehicleGroupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule
     */
    public function setVehicleGroupId($vehicleGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleGroupId) && !is_numeric($vehicleGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleGroupId)), __LINE__);
        }
        $this->VehicleGroupId = $vehicleGroupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskRule
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
