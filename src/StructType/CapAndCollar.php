<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CapAndCollar StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CapAndCollar
 * @subpackage Structs
 */
class CapAndCollar extends AbstractStructBase
{
    /**
     * The Cap
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Cap;
    /**
     * The Collar
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Collar;
    /**
     * The ContinuationSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ContinuationSource;
    /**
     * The DeltaBMLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaBMLeftBound;
    /**
     * The DeltaBMRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaBMRightBound;
    /**
     * The DeltaMAJLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaMAJLeftBound;
    /**
     * The DeltaMAJRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaMAJRightBound;
    /**
     * The DeltaWULeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWULeftBound;
    /**
     * The DeltaWURightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWURightBound;
    /**
     * The EngineCapacityLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EngineCapacityLeftBound;
    /**
     * The EngineCapacityRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EngineCapacityRightBound;
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
     * The PolgenId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
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
     * The ZoneLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneLeftBound;
    /**
     * The ZoneRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ZoneRightBound;
    /**
     * Constructor method for CapAndCollar
     * @uses CapAndCollar::setCap()
     * @uses CapAndCollar::setCollar()
     * @uses CapAndCollar::setContinuationSource()
     * @uses CapAndCollar::setDeltaBMLeftBound()
     * @uses CapAndCollar::setDeltaBMRightBound()
     * @uses CapAndCollar::setDeltaMAJLeftBound()
     * @uses CapAndCollar::setDeltaMAJRightBound()
     * @uses CapAndCollar::setDeltaWULeftBound()
     * @uses CapAndCollar::setDeltaWURightBound()
     * @uses CapAndCollar::setEngineCapacityLeftBound()
     * @uses CapAndCollar::setEngineCapacityRightBound()
     * @uses CapAndCollar::setEnginePowerLeftBound()
     * @uses CapAndCollar::setEnginePowerRightBound()
     * @uses CapAndCollar::setPolgenId()
     * @uses CapAndCollar::setPostalCode()
     * @uses CapAndCollar::setTariffMode()
     * @uses CapAndCollar::setVehicleGroupId()
     * @uses CapAndCollar::setZoneLeftBound()
     * @uses CapAndCollar::setZoneRightBound()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $cap
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $collar
     * @param string $continuationSource
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBMLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBMRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWULeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWURightBound
     * @param int $engineCapacityLeftBound
     * @param int $engineCapacityRightBound
     * @param int $enginePowerLeftBound
     * @param int $enginePowerRightBound
     * @param int $polgenId
     * @param string $postalCode
     * @param string $tariffMode
     * @param int $vehicleGroupId
     * @param int $zoneLeftBound
     * @param int $zoneRightBound
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $cap = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $collar = null, $continuationSource = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBMLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBMRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWULeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWURightBound = null, $engineCapacityLeftBound = null, $engineCapacityRightBound = null, $enginePowerLeftBound = null, $enginePowerRightBound = null, $polgenId = null, $postalCode = null, $tariffMode = null, $vehicleGroupId = null, $zoneLeftBound = null, $zoneRightBound = null)
    {
        $this
            ->setCap($cap)
            ->setCollar($collar)
            ->setContinuationSource($continuationSource)
            ->setDeltaBMLeftBound($deltaBMLeftBound)
            ->setDeltaBMRightBound($deltaBMRightBound)
            ->setDeltaMAJLeftBound($deltaMAJLeftBound)
            ->setDeltaMAJRightBound($deltaMAJRightBound)
            ->setDeltaWULeftBound($deltaWULeftBound)
            ->setDeltaWURightBound($deltaWURightBound)
            ->setEngineCapacityLeftBound($engineCapacityLeftBound)
            ->setEngineCapacityRightBound($engineCapacityRightBound)
            ->setEnginePowerLeftBound($enginePowerLeftBound)
            ->setEnginePowerRightBound($enginePowerRightBound)
            ->setPolgenId($polgenId)
            ->setPostalCode($postalCode)
            ->setTariffMode($tariffMode)
            ->setVehicleGroupId($vehicleGroupId)
            ->setZoneLeftBound($zoneLeftBound)
            ->setZoneRightBound($zoneRightBound);
    }
    /**
     * Get Cap value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getCap()
    {
        return isset($this->Cap) ? $this->Cap : null;
    }
    /**
     * Set Cap value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $cap
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setCap(\Mu4ddi3\Compensa\Webservice\StructType\Factor $cap = null)
    {
        if (is_null($cap) || (is_array($cap) && empty($cap))) {
            unset($this->Cap);
        } else {
            $this->Cap = $cap;
        }
        return $this;
    }
    /**
     * Get Collar value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getCollar()
    {
        return isset($this->Collar) ? $this->Collar : null;
    }
    /**
     * Set Collar value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $collar
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setCollar(\Mu4ddi3\Compensa\Webservice\StructType\Factor $collar = null)
    {
        if (is_null($collar) || (is_array($collar) && empty($collar))) {
            unset($this->Collar);
        } else {
            $this->Collar = $collar;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
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
     * Get DeltaBMLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaBMLeftBound()
    {
        return isset($this->DeltaBMLeftBound) ? $this->DeltaBMLeftBound : null;
    }
    /**
     * Set DeltaBMLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBMLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setDeltaBMLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBMLeftBound = null)
    {
        if (is_null($deltaBMLeftBound) || (is_array($deltaBMLeftBound) && empty($deltaBMLeftBound))) {
            unset($this->DeltaBMLeftBound);
        } else {
            $this->DeltaBMLeftBound = $deltaBMLeftBound;
        }
        return $this;
    }
    /**
     * Get DeltaBMRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaBMRightBound()
    {
        return isset($this->DeltaBMRightBound) ? $this->DeltaBMRightBound : null;
    }
    /**
     * Set DeltaBMRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBMRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setDeltaBMRightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBMRightBound = null)
    {
        if (is_null($deltaBMRightBound) || (is_array($deltaBMRightBound) && empty($deltaBMRightBound))) {
            unset($this->DeltaBMRightBound);
        } else {
            $this->DeltaBMRightBound = $deltaBMRightBound;
        }
        return $this;
    }
    /**
     * Get DeltaMAJLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaMAJLeftBound()
    {
        return isset($this->DeltaMAJLeftBound) ? $this->DeltaMAJLeftBound : null;
    }
    /**
     * Set DeltaMAJLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setDeltaMAJLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJLeftBound = null)
    {
        if (is_null($deltaMAJLeftBound) || (is_array($deltaMAJLeftBound) && empty($deltaMAJLeftBound))) {
            unset($this->DeltaMAJLeftBound);
        } else {
            $this->DeltaMAJLeftBound = $deltaMAJLeftBound;
        }
        return $this;
    }
    /**
     * Get DeltaMAJRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaMAJRightBound()
    {
        return isset($this->DeltaMAJRightBound) ? $this->DeltaMAJRightBound : null;
    }
    /**
     * Set DeltaMAJRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setDeltaMAJRightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaMAJRightBound = null)
    {
        if (is_null($deltaMAJRightBound) || (is_array($deltaMAJRightBound) && empty($deltaMAJRightBound))) {
            unset($this->DeltaMAJRightBound);
        } else {
            $this->DeltaMAJRightBound = $deltaMAJRightBound;
        }
        return $this;
    }
    /**
     * Get DeltaWULeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWULeftBound()
    {
        return isset($this->DeltaWULeftBound) ? $this->DeltaWULeftBound : null;
    }
    /**
     * Set DeltaWULeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWULeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setDeltaWULeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWULeftBound = null)
    {
        if (is_null($deltaWULeftBound) || (is_array($deltaWULeftBound) && empty($deltaWULeftBound))) {
            unset($this->DeltaWULeftBound);
        } else {
            $this->DeltaWULeftBound = $deltaWULeftBound;
        }
        return $this;
    }
    /**
     * Get DeltaWURightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWURightBound()
    {
        return isset($this->DeltaWURightBound) ? $this->DeltaWURightBound : null;
    }
    /**
     * Set DeltaWURightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWURightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setDeltaWURightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWURightBound = null)
    {
        if (is_null($deltaWURightBound) || (is_array($deltaWURightBound) && empty($deltaWURightBound))) {
            unset($this->DeltaWURightBound);
        } else {
            $this->DeltaWURightBound = $deltaWURightBound;
        }
        return $this;
    }
    /**
     * Get EngineCapacityLeftBound value
     * @return int|null
     */
    public function getEngineCapacityLeftBound()
    {
        return $this->EngineCapacityLeftBound;
    }
    /**
     * Set EngineCapacityLeftBound value
     * @param int $engineCapacityLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setEngineCapacityLeftBound($engineCapacityLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($engineCapacityLeftBound) && !is_numeric($engineCapacityLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($engineCapacityLeftBound)), __LINE__);
        }
        $this->EngineCapacityLeftBound = $engineCapacityLeftBound;
        return $this;
    }
    /**
     * Get EngineCapacityRightBound value
     * @return int|null
     */
    public function getEngineCapacityRightBound()
    {
        return $this->EngineCapacityRightBound;
    }
    /**
     * Set EngineCapacityRightBound value
     * @param int $engineCapacityRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setEngineCapacityRightBound($engineCapacityRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($engineCapacityRightBound) && !is_numeric($engineCapacityRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($engineCapacityRightBound)), __LINE__);
        }
        $this->EngineCapacityRightBound = $engineCapacityRightBound;
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
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
     * Get PolgenId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPolgenId()
    {
        return isset($this->PolgenId) ? $this->PolgenId : null;
    }
    /**
     * Set PolgenId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $polgenId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setPolgenId($polgenId = null)
    {
        // validation for constraint: int
        if (!is_null($polgenId) && !is_numeric($polgenId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($polgenId)), __LINE__);
        }
        if (is_null($polgenId) || (is_array($polgenId) && empty($polgenId))) {
            unset($this->PolgenId);
        } else {
            $this->PolgenId = $polgenId;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
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
     * Get ZoneLeftBound value
     * @return int|null
     */
    public function getZoneLeftBound()
    {
        return $this->ZoneLeftBound;
    }
    /**
     * Set ZoneLeftBound value
     * @param int $zoneLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setZoneLeftBound($zoneLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($zoneLeftBound) && !is_numeric($zoneLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneLeftBound)), __LINE__);
        }
        $this->ZoneLeftBound = $zoneLeftBound;
        return $this;
    }
    /**
     * Get ZoneRightBound value
     * @return int|null
     */
    public function getZoneRightBound()
    {
        return $this->ZoneRightBound;
    }
    /**
     * Set ZoneRightBound value
     * @param int $zoneRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
     */
    public function setZoneRightBound($zoneRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($zoneRightBound) && !is_numeric($zoneRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zoneRightBound)), __LINE__);
        }
        $this->ZoneRightBound = $zoneRightBound;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar
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
