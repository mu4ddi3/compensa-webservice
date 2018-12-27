<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCapAndCollarRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCapAndCollarRequest
 * @subpackage Structs
 */
class GetCapAndCollarRequest extends AbstractStructBase
{
    /**
     * The Capacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Capacity;
    /**
     * The ContinuationSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContinuationSource;
    /**
     * The DeltaBM
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaBM;
    /**
     * The DeltaMAJ
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaMAJ;
    /**
     * The DeltaWAR
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWAR;
    /**
     * The DeltaWU
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWU;
    /**
     * The EnginePower
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EnginePower;
    /**
     * The PolgenId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolgenId;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCode;
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
     * The Zone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Zone;
    /**
     * Constructor method for GetCapAndCollarRequest
     * @uses GetCapAndCollarRequest::setCapacity()
     * @uses GetCapAndCollarRequest::setContinuationSource()
     * @uses GetCapAndCollarRequest::setDeltaBM()
     * @uses GetCapAndCollarRequest::setDeltaMAJ()
     * @uses GetCapAndCollarRequest::setDeltaWAR()
     * @uses GetCapAndCollarRequest::setDeltaWU()
     * @uses GetCapAndCollarRequest::setEnginePower()
     * @uses GetCapAndCollarRequest::setPolgenId()
     * @uses GetCapAndCollarRequest::setPostalCode()
     * @uses GetCapAndCollarRequest::setTariffMode()
     * @uses GetCapAndCollarRequest::setVehicleGroupId()
     * @uses GetCapAndCollarRequest::setZone()
     * @param int $capacity
     * @param string $continuationSource
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJ
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWAR
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU
     * @param int $enginePower
     * @param int $polgenId
     * @param string $postalCode
     * @param string $tariffMode
     * @param int $vehicleGroupId
     * @param int $zone
     */
    public function __construct($capacity = null, $continuationSource = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJ = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWAR = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU = null, $enginePower = null, $polgenId = null, $postalCode = null, $tariffMode = null, $vehicleGroupId = null, $zone = null)
    {
        $this
            ->setCapacity($capacity)
            ->setContinuationSource($continuationSource)
            ->setDeltaBM($deltaBM)
            ->setDeltaMAJ($deltaMAJ)
            ->setDeltaWAR($deltaWAR)
            ->setDeltaWU($deltaWU)
            ->setEnginePower($enginePower)
            ->setPolgenId($polgenId)
            ->setPostalCode($postalCode)
            ->setTariffMode($tariffMode)
            ->setVehicleGroupId($vehicleGroupId)
            ->setZone($zone);
    }
    /**
     * Get Capacity value
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }
    /**
     * Set Capacity value
     * @param int $capacity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: int
        if (!is_null($capacity) && !is_numeric($capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacity)), __LINE__);
        }
        $this->Capacity = $capacity;
        return $this;
    }
    /**
     * Get ContinuationSource value
     * @return string|null
     */
    public function getContinuationSource()
    {
        return $this->ContinuationSource;
    }
    /**
     * Set ContinuationSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $continuationSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setContinuationSource($continuationSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::valueIsValid($continuationSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $continuationSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ContinuationSource::getValidValues())), __LINE__);
        }
        $this->ContinuationSource = $continuationSource;
        return $this;
    }
    /**
     * Get DeltaBM value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaBM()
    {
        return isset($this->DeltaBM) ? $this->DeltaBM : null;
    }
    /**
     * Set DeltaBM value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setDeltaBM(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM = null)
    {
        if (is_null($deltaBM) || (is_array($deltaBM) && empty($deltaBM))) {
            unset($this->DeltaBM);
        } else {
            $this->DeltaBM = $deltaBM;
        }
        return $this;
    }
    /**
     * Get DeltaMAJ value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaMAJ()
    {
        return isset($this->DeltaMAJ) ? $this->DeltaMAJ : null;
    }
    /**
     * Set DeltaMAJ value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJ
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setDeltaMAJ(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJ = null)
    {
        if (is_null($deltaMAJ) || (is_array($deltaMAJ) && empty($deltaMAJ))) {
            unset($this->DeltaMAJ);
        } else {
            $this->DeltaMAJ = $deltaMAJ;
        }
        return $this;
    }
    /**
     * Get DeltaWAR value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWAR()
    {
        return isset($this->DeltaWAR) ? $this->DeltaWAR : null;
    }
    /**
     * Set DeltaWAR value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWAR
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setDeltaWAR(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWAR = null)
    {
        if (is_null($deltaWAR) || (is_array($deltaWAR) && empty($deltaWAR))) {
            unset($this->DeltaWAR);
        } else {
            $this->DeltaWAR = $deltaWAR;
        }
        return $this;
    }
    /**
     * Get DeltaWU value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWU()
    {
        return isset($this->DeltaWU) ? $this->DeltaWU : null;
    }
    /**
     * Set DeltaWU value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setDeltaWU(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU = null)
    {
        if (is_null($deltaWU) || (is_array($deltaWU) && empty($deltaWU))) {
            unset($this->DeltaWU);
        } else {
            $this->DeltaWU = $deltaWU;
        }
        return $this;
    }
    /**
     * Get EnginePower value
     * @return int|null
     */
    public function getEnginePower()
    {
        return $this->EnginePower;
    }
    /**
     * Set EnginePower value
     * @param int $enginePower
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setEnginePower($enginePower = null)
    {
        // validation for constraint: int
        if (!is_null($enginePower) && !is_numeric($enginePower)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($enginePower)), __LINE__);
        }
        $this->EnginePower = $enginePower;
        return $this;
    }
    /**
     * Get PolgenId value
     * @return int|null
     */
    public function getPolgenId()
    {
        return $this->PolgenId;
    }
    /**
     * Set PolgenId value
     * @param int $polgenId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setPolgenId($polgenId = null)
    {
        // validation for constraint: int
        if (!is_null($polgenId) && !is_numeric($polgenId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($polgenId)), __LINE__);
        }
        $this->PolgenId = $polgenId;
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCode()
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
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
     * Get Zone value
     * @return int|null
     */
    public function getZone()
    {
        return $this->Zone;
    }
    /**
     * Set Zone value
     * @param int $zone
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
     */
    public function setZone($zone = null)
    {
        // validation for constraint: int
        if (!is_null($zone) && !is_numeric($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zone)), __LINE__);
        }
        $this->Zone = $zone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCapAndCollarRequest
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
