<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Vehicle StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Vehicle
 * @subpackage Structs
 */
class Vehicle extends QueryableEntity
{
    /**
     * The BrandName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BrandName;
    /**
     * The IsSpecialForceVehicle
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSpecialForceVehicle;
    /**
     * The Model
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Model;
    /**
     * The RegistrationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RegistrationNumber;
    /**
     * The SerialNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SerialNumber;
    /**
     * The VIN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VIN;
    /**
     * The VehicleStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleStatusType
     */
    public $VehicleStatus;
    /**
     * The VehicleType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VehicleType;
    /**
     * Constructor method for Vehicle
     * @uses Vehicle::setBrandName()
     * @uses Vehicle::setIsSpecialForceVehicle()
     * @uses Vehicle::setModel()
     * @uses Vehicle::setRegistrationNumber()
     * @uses Vehicle::setSerialNumber()
     * @uses Vehicle::setVIN()
     * @uses Vehicle::setVehicleStatus()
     * @uses Vehicle::setVehicleType()
     * @param string $brandName
     * @param bool $isSpecialForceVehicle
     * @param string $model
     * @param string $registrationNumber
     * @param string $serialNumber
     * @param string $vIN
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleStatusType $vehicleStatus
     * @param string $vehicleType
     */
    public function __construct($brandName = null, $isSpecialForceVehicle = null, $model = null, $registrationNumber = null, $serialNumber = null, $vIN = null, \Mu4ddi3\Compensa\Webservice\StructType\VehicleStatusType $vehicleStatus = null, $vehicleType = null)
    {
        $this
            ->setBrandName($brandName)
            ->setIsSpecialForceVehicle($isSpecialForceVehicle)
            ->setModel($model)
            ->setRegistrationNumber($registrationNumber)
            ->setSerialNumber($serialNumber)
            ->setVIN($vIN)
            ->setVehicleStatus($vehicleStatus)
            ->setVehicleType($vehicleType);
    }
    /**
     * Get BrandName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrandName()
    {
        return isset($this->BrandName) ? $this->BrandName : null;
    }
    /**
     * Set BrandName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brandName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
     */
    public function setBrandName($brandName = null)
    {
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandName)), __LINE__);
        }
        if (is_null($brandName) || (is_array($brandName) && empty($brandName))) {
            unset($this->BrandName);
        } else {
            $this->BrandName = $brandName;
        }
        return $this;
    }
    /**
     * Get IsSpecialForceVehicle value
     * @return bool|null
     */
    public function getIsSpecialForceVehicle()
    {
        return $this->IsSpecialForceVehicle;
    }
    /**
     * Set IsSpecialForceVehicle value
     * @param bool $isSpecialForceVehicle
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
     */
    public function setIsSpecialForceVehicle($isSpecialForceVehicle = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialForceVehicle) && !is_bool($isSpecialForceVehicle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSpecialForceVehicle)), __LINE__);
        }
        $this->IsSpecialForceVehicle = $isSpecialForceVehicle;
        return $this;
    }
    /**
     * Get Model value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModel()
    {
        return isset($this->Model) ? $this->Model : null;
    }
    /**
     * Set Model value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $model
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
     */
    public function setModel($model = null)
    {
        // validation for constraint: string
        if (!is_null($model) && !is_string($model)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($model)), __LINE__);
        }
        if (is_null($model) || (is_array($model) && empty($model))) {
            unset($this->Model);
        } else {
            $this->Model = $model;
        }
        return $this;
    }
    /**
     * Get RegistrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return isset($this->RegistrationNumber) ? $this->RegistrationNumber : null;
    }
    /**
     * Set RegistrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registrationNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
     */
    public function setRegistrationNumber($registrationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($registrationNumber) && !is_string($registrationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registrationNumber)), __LINE__);
        }
        if (is_null($registrationNumber) || (is_array($registrationNumber) && empty($registrationNumber))) {
            unset($this->RegistrationNumber);
        } else {
            $this->RegistrationNumber = $registrationNumber;
        }
        return $this;
    }
    /**
     * Get SerialNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSerialNumber()
    {
        return isset($this->SerialNumber) ? $this->SerialNumber : null;
    }
    /**
     * Set SerialNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serialNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
     */
    public function setSerialNumber($serialNumber = null)
    {
        // validation for constraint: string
        if (!is_null($serialNumber) && !is_string($serialNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($serialNumber)), __LINE__);
        }
        if (is_null($serialNumber) || (is_array($serialNumber) && empty($serialNumber))) {
            unset($this->SerialNumber);
        } else {
            $this->SerialNumber = $serialNumber;
        }
        return $this;
    }
    /**
     * Get VIN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVIN()
    {
        return isset($this->VIN) ? $this->VIN : null;
    }
    /**
     * Set VIN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vIN
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
     */
    public function setVIN($vIN = null)
    {
        // validation for constraint: string
        if (!is_null($vIN) && !is_string($vIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vIN)), __LINE__);
        }
        if (is_null($vIN) || (is_array($vIN) && empty($vIN))) {
            unset($this->VIN);
        } else {
            $this->VIN = $vIN;
        }
        return $this;
    }
    /**
     * Get VehicleStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleStatusType|null
     */
    public function getVehicleStatus()
    {
        return isset($this->VehicleStatus) ? $this->VehicleStatus : null;
    }
    /**
     * Set VehicleStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleStatusType $vehicleStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
     */
    public function setVehicleStatus(\Mu4ddi3\Compensa\Webservice\StructType\VehicleStatusType $vehicleStatus = null)
    {
        if (is_null($vehicleStatus) || (is_array($vehicleStatus) && empty($vehicleStatus))) {
            unset($this->VehicleStatus);
        } else {
            $this->VehicleStatus = $vehicleStatus;
        }
        return $this;
    }
    /**
     * Get VehicleType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVehicleType()
    {
        return isset($this->VehicleType) ? $this->VehicleType : null;
    }
    /**
     * Set VehicleType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vehicleType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
     */
    public function setVehicleType($vehicleType = null)
    {
        // validation for constraint: string
        if (!is_null($vehicleType) && !is_string($vehicleType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vehicleType)), __LINE__);
        }
        if (is_null($vehicleType) || (is_array($vehicleType) && empty($vehicleType))) {
            unset($this->VehicleType);
        } else {
            $this->VehicleType = $vehicleType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Vehicle
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
