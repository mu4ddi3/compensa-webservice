<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleOriginCorrectionFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleOriginCorrectionFactor
 * @subpackage Structs
 */
class VehicleOriginCorrectionFactor extends BaseFactorDefinition
{
    /**
     * The IsAcSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcSelected;
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
     * The TariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $TariffVariant;
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
     * Constructor method for VehicleOriginCorrectionFactor
     * @uses VehicleOriginCorrectionFactor::setIsAcSelected()
     * @uses VehicleOriginCorrectionFactor::setSteeringWheelConfiguration()
     * @uses VehicleOriginCorrectionFactor::setTariffMode()
     * @uses VehicleOriginCorrectionFactor::setTariffVariant()
     * @uses VehicleOriginCorrectionFactor::setVehicleGroupId()
     * @uses VehicleOriginCorrectionFactor::setVehicleImportStatus()
     * @param bool $isAcSelected
     * @param string $steeringWheelConfiguration
     * @param string $tariffMode
     * @param string $tariffVariant
     * @param int $vehicleGroupId
     * @param string $vehicleImportStatus
     */
    public function __construct($isAcSelected = null, $steeringWheelConfiguration = null, $tariffMode = null, $tariffVariant = null, $vehicleGroupId = null, $vehicleImportStatus = null)
    {
        $this
            ->setIsAcSelected($isAcSelected)
            ->setSteeringWheelConfiguration($steeringWheelConfiguration)
            ->setTariffMode($tariffMode)
            ->setTariffVariant($tariffVariant)
            ->setVehicleGroupId($vehicleGroupId)
            ->setVehicleImportStatus($vehicleImportStatus);
    }
    /**
     * Get IsAcSelected value
     * @return bool|null
     */
    public function getIsAcSelected()
    {
        return $this->IsAcSelected;
    }
    /**
     * Set IsAcSelected value
     * @param bool $isAcSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor
     */
    public function setIsAcSelected($isAcSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAcSelected) && !is_bool($isAcSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAcSelected)), __LINE__);
        }
        $this->IsAcSelected = $isAcSelected;
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor
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
     * Get TariffVariant value
     * @return string|null
     */
    public function getTariffVariant()
    {
        return $this->TariffVariant;
    }
    /**
     * Set TariffVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tariffVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor
     */
    public function setTariffVariant($tariffVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($tariffVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $tariffVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
        }
        $this->TariffVariant = $tariffVariant;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor
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
