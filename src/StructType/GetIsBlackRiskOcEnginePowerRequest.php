<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskOcEnginePowerRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskOcEnginePowerRequest
 * @subpackage Structs
 */
class GetIsBlackRiskOcEnginePowerRequest extends GetIsBlackRiskRequest
{
    /**
     * The EnginePowerKm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePowerKm;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for GetIsBlackRiskOcEnginePowerRequest
     * @uses GetIsBlackRiskOcEnginePowerRequest::setEnginePowerKm()
     * @uses GetIsBlackRiskOcEnginePowerRequest::setVehicleGroupId()
     * @param int $enginePowerKm
     * @param int $vehicleGroupId
     */
    public function __construct($enginePowerKm = null, $vehicleGroupId = null)
    {
        $this
            ->setEnginePowerKm($enginePowerKm)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get EnginePowerKm value
     * @return int|null
     */
    public function getEnginePowerKm()
    {
        return $this->EnginePowerKm;
    }
    /**
     * Set EnginePowerKm value
     * @param int $enginePowerKm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskOcEnginePowerRequest
     */
    public function setEnginePowerKm($enginePowerKm = null)
    {
        // validation for constraint: int
        if (!is_null($enginePowerKm) && !is_numeric($enginePowerKm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePowerKm)), __LINE__);
        }
        $this->EnginePowerKm = $enginePowerKm;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskOcEnginePowerRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskOcEnginePowerRequest
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
