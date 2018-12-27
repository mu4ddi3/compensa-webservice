<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetISIndexationVehicleValueRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetISIndexationVehicleValueRequest
 * @subpackage Structs
 */
class GetISIndexationVehicleValueRequest extends GetISIndexationRequest
{
    /**
     * The SteeringWheelConfiguration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SteeringWheelConfiguration;
    /**
     * The TariffMode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffMode;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * The VehicleImportStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleImportStatus;
    /**
     * Constructor method for GetISIndexationVehicleValueRequest
     * @uses GetISIndexationVehicleValueRequest::setSteeringWheelConfiguration()
     * @uses GetISIndexationVehicleValueRequest::setTariffMode()
     * @uses GetISIndexationVehicleValueRequest::setVehicleGroupId()
     * @uses GetISIndexationVehicleValueRequest::setVehicleImportStatus()
     * @param string $steeringWheelConfiguration
     * @param string $tariffMode
     * @param int $vehicleGroupId
     * @param string $vehicleImportStatus
     */
    public function __construct($steeringWheelConfiguration = null, $tariffMode = null, $vehicleGroupId = null, $vehicleImportStatus = null)
    {
        $this
            ->setSteeringWheelConfiguration($steeringWheelConfiguration)
            ->setTariffMode($tariffMode)
            ->setVehicleGroupId($vehicleGroupId)
            ->setVehicleImportStatus($vehicleImportStatus);
    }
    /**
     * Get SteeringWheelConfiguration value
     * @return string|null
     */
    public function getSteeringWheelConfiguration()
    {
        return $this->SteeringWheelConfiguration;
    }
    /**
     * Set SteeringWheelConfiguration value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\SteeringWheelConfiguration::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\SteeringWheelConfiguration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $steeringWheelConfiguration
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetISIndexationVehicleValueRequest
     */
    public function setSteeringWheelConfiguration($steeringWheelConfiguration = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\SteeringWheelConfiguration::valueIsValid($steeringWheelConfiguration)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $steeringWheelConfiguration, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\SteeringWheelConfiguration::getValidValues())), __LINE__);
        }
        $this->SteeringWheelConfiguration = $steeringWheelConfiguration;
        return $this;
    }
    /**
     * Get TariffMode value
     * @return string|null
     */
    public function getTariffMode()
    {
        return $this->TariffMode;
    }
    /**
     * Set TariffMode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffMode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetISIndexationVehicleValueRequest
     */
    public function setTariffMode($tariffMode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::valueIsValid($tariffMode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffMode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffMode::getValidValues())), __LINE__);
        }
        $this->TariffMode = $tariffMode;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetISIndexationVehicleValueRequest
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
     * Get VehicleImportStatus value
     * @return string|null
     */
    public function getVehicleImportStatus()
    {
        return $this->VehicleImportStatus;
    }
    /**
     * Set VehicleImportStatus value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleImportStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetISIndexationVehicleValueRequest
     */
    public function setVehicleImportStatus($vehicleImportStatus = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::valueIsValid($vehicleImportStatus)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleImportStatus, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleImportStatus::getValidValues())), __LINE__);
        }
        $this->VehicleImportStatus = $vehicleImportStatus;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetISIndexationVehicleValueRequest
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
