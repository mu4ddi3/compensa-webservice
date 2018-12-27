<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AntiTheftSecurity StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AntiTheftSecurity
 * @subpackage Structs
 */
class AntiTheftSecurity extends AbstractStructBase
{
    /**
     * The AutoAlarmBrand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AutoAlarmBrand;
    /**
     * The AutoAlarmKeyCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AutoAlarmKeyCount;
    /**
     * The GanTrackSystemBrand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GanTrackSystemBrand;
    /**
     * The ImmobilizerBrand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ImmobilizerBrand;
    /**
     * The IsAutoAlarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAutoAlarm;
    /**
     * The IsDnaMarking
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDnaMarking;
    /**
     * The IsGanTrackSystem
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGanTrackSystem;
    /**
     * The IsImmobilizer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsImmobilizer;
    /**
     * The IsOtherAntiTheftSecurity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOtherAntiTheftSecurity;
    /**
     * The IsSteeringWheelLock
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSteeringWheelLock;
    /**
     * The IsTransmisionLock
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsTransmisionLock;
    /**
     * The OtherAntiTheftSecurityBrand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OtherAntiTheftSecurityBrand;
    /**
     * The SteeringWheelLockBrand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SteeringWheelLockBrand;
    /**
     * The SteeringWheelLockKeyCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SteeringWheelLockKeyCount;
    /**
     * The TransmisionLockBrand
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TransmisionLockBrand;
    /**
     * The TransmisionLockKeyCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TransmisionLockKeyCount;
    /**
     * Constructor method for AntiTheftSecurity
     * @uses AntiTheftSecurity::setAutoAlarmBrand()
     * @uses AntiTheftSecurity::setAutoAlarmKeyCount()
     * @uses AntiTheftSecurity::setGanTrackSystemBrand()
     * @uses AntiTheftSecurity::setImmobilizerBrand()
     * @uses AntiTheftSecurity::setIsAutoAlarm()
     * @uses AntiTheftSecurity::setIsDnaMarking()
     * @uses AntiTheftSecurity::setIsGanTrackSystem()
     * @uses AntiTheftSecurity::setIsImmobilizer()
     * @uses AntiTheftSecurity::setIsOtherAntiTheftSecurity()
     * @uses AntiTheftSecurity::setIsSteeringWheelLock()
     * @uses AntiTheftSecurity::setIsTransmisionLock()
     * @uses AntiTheftSecurity::setOtherAntiTheftSecurityBrand()
     * @uses AntiTheftSecurity::setSteeringWheelLockBrand()
     * @uses AntiTheftSecurity::setSteeringWheelLockKeyCount()
     * @uses AntiTheftSecurity::setTransmisionLockBrand()
     * @uses AntiTheftSecurity::setTransmisionLockKeyCount()
     * @param string $autoAlarmBrand
     * @param int $autoAlarmKeyCount
     * @param string $ganTrackSystemBrand
     * @param string $immobilizerBrand
     * @param bool $isAutoAlarm
     * @param bool $isDnaMarking
     * @param bool $isGanTrackSystem
     * @param bool $isImmobilizer
     * @param bool $isOtherAntiTheftSecurity
     * @param bool $isSteeringWheelLock
     * @param bool $isTransmisionLock
     * @param string $otherAntiTheftSecurityBrand
     * @param string $steeringWheelLockBrand
     * @param int $steeringWheelLockKeyCount
     * @param string $transmisionLockBrand
     * @param int $transmisionLockKeyCount
     */
    public function __construct($autoAlarmBrand = null, $autoAlarmKeyCount = null, $ganTrackSystemBrand = null, $immobilizerBrand = null, $isAutoAlarm = null, $isDnaMarking = null, $isGanTrackSystem = null, $isImmobilizer = null, $isOtherAntiTheftSecurity = null, $isSteeringWheelLock = null, $isTransmisionLock = null, $otherAntiTheftSecurityBrand = null, $steeringWheelLockBrand = null, $steeringWheelLockKeyCount = null, $transmisionLockBrand = null, $transmisionLockKeyCount = null)
    {
        $this
            ->setAutoAlarmBrand($autoAlarmBrand)
            ->setAutoAlarmKeyCount($autoAlarmKeyCount)
            ->setGanTrackSystemBrand($ganTrackSystemBrand)
            ->setImmobilizerBrand($immobilizerBrand)
            ->setIsAutoAlarm($isAutoAlarm)
            ->setIsDnaMarking($isDnaMarking)
            ->setIsGanTrackSystem($isGanTrackSystem)
            ->setIsImmobilizer($isImmobilizer)
            ->setIsOtherAntiTheftSecurity($isOtherAntiTheftSecurity)
            ->setIsSteeringWheelLock($isSteeringWheelLock)
            ->setIsTransmisionLock($isTransmisionLock)
            ->setOtherAntiTheftSecurityBrand($otherAntiTheftSecurityBrand)
            ->setSteeringWheelLockBrand($steeringWheelLockBrand)
            ->setSteeringWheelLockKeyCount($steeringWheelLockKeyCount)
            ->setTransmisionLockBrand($transmisionLockBrand)
            ->setTransmisionLockKeyCount($transmisionLockKeyCount);
    }
    /**
     * Get AutoAlarmBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAutoAlarmBrand()
    {
        return isset($this->AutoAlarmBrand) ? $this->AutoAlarmBrand : null;
    }
    /**
     * Set AutoAlarmBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $autoAlarmBrand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setAutoAlarmBrand($autoAlarmBrand = null)
    {
        // validation for constraint: string
        if (!is_null($autoAlarmBrand) && !is_string($autoAlarmBrand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($autoAlarmBrand)), __LINE__);
        }
        if (is_null($autoAlarmBrand) || (is_array($autoAlarmBrand) && empty($autoAlarmBrand))) {
            unset($this->AutoAlarmBrand);
        } else {
            $this->AutoAlarmBrand = $autoAlarmBrand;
        }
        return $this;
    }
    /**
     * Get AutoAlarmKeyCount value
     * @return int|null
     */
    public function getAutoAlarmKeyCount()
    {
        return $this->AutoAlarmKeyCount;
    }
    /**
     * Set AutoAlarmKeyCount value
     * @param int $autoAlarmKeyCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setAutoAlarmKeyCount($autoAlarmKeyCount = null)
    {
        // validation for constraint: int
        if (!is_null($autoAlarmKeyCount) && !is_numeric($autoAlarmKeyCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($autoAlarmKeyCount)), __LINE__);
        }
        $this->AutoAlarmKeyCount = $autoAlarmKeyCount;
        return $this;
    }
    /**
     * Get GanTrackSystemBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGanTrackSystemBrand()
    {
        return isset($this->GanTrackSystemBrand) ? $this->GanTrackSystemBrand : null;
    }
    /**
     * Set GanTrackSystemBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $ganTrackSystemBrand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setGanTrackSystemBrand($ganTrackSystemBrand = null)
    {
        // validation for constraint: string
        if (!is_null($ganTrackSystemBrand) && !is_string($ganTrackSystemBrand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($ganTrackSystemBrand)), __LINE__);
        }
        if (is_null($ganTrackSystemBrand) || (is_array($ganTrackSystemBrand) && empty($ganTrackSystemBrand))) {
            unset($this->GanTrackSystemBrand);
        } else {
            $this->GanTrackSystemBrand = $ganTrackSystemBrand;
        }
        return $this;
    }
    /**
     * Get ImmobilizerBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImmobilizerBrand()
    {
        return isset($this->ImmobilizerBrand) ? $this->ImmobilizerBrand : null;
    }
    /**
     * Set ImmobilizerBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $immobilizerBrand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setImmobilizerBrand($immobilizerBrand = null)
    {
        // validation for constraint: string
        if (!is_null($immobilizerBrand) && !is_string($immobilizerBrand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($immobilizerBrand)), __LINE__);
        }
        if (is_null($immobilizerBrand) || (is_array($immobilizerBrand) && empty($immobilizerBrand))) {
            unset($this->ImmobilizerBrand);
        } else {
            $this->ImmobilizerBrand = $immobilizerBrand;
        }
        return $this;
    }
    /**
     * Get IsAutoAlarm value
     * @return bool|null
     */
    public function getIsAutoAlarm()
    {
        return $this->IsAutoAlarm;
    }
    /**
     * Set IsAutoAlarm value
     * @param bool $isAutoAlarm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setIsAutoAlarm($isAutoAlarm = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAutoAlarm) && !is_bool($isAutoAlarm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAutoAlarm)), __LINE__);
        }
        $this->IsAutoAlarm = $isAutoAlarm;
        return $this;
    }
    /**
     * Get IsDnaMarking value
     * @return bool|null
     */
    public function getIsDnaMarking()
    {
        return $this->IsDnaMarking;
    }
    /**
     * Set IsDnaMarking value
     * @param bool $isDnaMarking
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setIsDnaMarking($isDnaMarking = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDnaMarking) && !is_bool($isDnaMarking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDnaMarking)), __LINE__);
        }
        $this->IsDnaMarking = $isDnaMarking;
        return $this;
    }
    /**
     * Get IsGanTrackSystem value
     * @return bool|null
     */
    public function getIsGanTrackSystem()
    {
        return $this->IsGanTrackSystem;
    }
    /**
     * Set IsGanTrackSystem value
     * @param bool $isGanTrackSystem
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setIsGanTrackSystem($isGanTrackSystem = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGanTrackSystem) && !is_bool($isGanTrackSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGanTrackSystem)), __LINE__);
        }
        $this->IsGanTrackSystem = $isGanTrackSystem;
        return $this;
    }
    /**
     * Get IsImmobilizer value
     * @return bool|null
     */
    public function getIsImmobilizer()
    {
        return $this->IsImmobilizer;
    }
    /**
     * Set IsImmobilizer value
     * @param bool $isImmobilizer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setIsImmobilizer($isImmobilizer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isImmobilizer) && !is_bool($isImmobilizer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isImmobilizer)), __LINE__);
        }
        $this->IsImmobilizer = $isImmobilizer;
        return $this;
    }
    /**
     * Get IsOtherAntiTheftSecurity value
     * @return bool|null
     */
    public function getIsOtherAntiTheftSecurity()
    {
        return $this->IsOtherAntiTheftSecurity;
    }
    /**
     * Set IsOtherAntiTheftSecurity value
     * @param bool $isOtherAntiTheftSecurity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setIsOtherAntiTheftSecurity($isOtherAntiTheftSecurity = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOtherAntiTheftSecurity) && !is_bool($isOtherAntiTheftSecurity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOtherAntiTheftSecurity)), __LINE__);
        }
        $this->IsOtherAntiTheftSecurity = $isOtherAntiTheftSecurity;
        return $this;
    }
    /**
     * Get IsSteeringWheelLock value
     * @return bool|null
     */
    public function getIsSteeringWheelLock()
    {
        return $this->IsSteeringWheelLock;
    }
    /**
     * Set IsSteeringWheelLock value
     * @param bool $isSteeringWheelLock
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setIsSteeringWheelLock($isSteeringWheelLock = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSteeringWheelLock) && !is_bool($isSteeringWheelLock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSteeringWheelLock)), __LINE__);
        }
        $this->IsSteeringWheelLock = $isSteeringWheelLock;
        return $this;
    }
    /**
     * Get IsTransmisionLock value
     * @return bool|null
     */
    public function getIsTransmisionLock()
    {
        return $this->IsTransmisionLock;
    }
    /**
     * Set IsTransmisionLock value
     * @param bool $isTransmisionLock
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setIsTransmisionLock($isTransmisionLock = null)
    {
        // validation for constraint: boolean
        if (!is_null($isTransmisionLock) && !is_bool($isTransmisionLock)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isTransmisionLock)), __LINE__);
        }
        $this->IsTransmisionLock = $isTransmisionLock;
        return $this;
    }
    /**
     * Get OtherAntiTheftSecurityBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtherAntiTheftSecurityBrand()
    {
        return isset($this->OtherAntiTheftSecurityBrand) ? $this->OtherAntiTheftSecurityBrand : null;
    }
    /**
     * Set OtherAntiTheftSecurityBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otherAntiTheftSecurityBrand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setOtherAntiTheftSecurityBrand($otherAntiTheftSecurityBrand = null)
    {
        // validation for constraint: string
        if (!is_null($otherAntiTheftSecurityBrand) && !is_string($otherAntiTheftSecurityBrand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherAntiTheftSecurityBrand)), __LINE__);
        }
        if (is_null($otherAntiTheftSecurityBrand) || (is_array($otherAntiTheftSecurityBrand) && empty($otherAntiTheftSecurityBrand))) {
            unset($this->OtherAntiTheftSecurityBrand);
        } else {
            $this->OtherAntiTheftSecurityBrand = $otherAntiTheftSecurityBrand;
        }
        return $this;
    }
    /**
     * Get SteeringWheelLockBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSteeringWheelLockBrand()
    {
        return isset($this->SteeringWheelLockBrand) ? $this->SteeringWheelLockBrand : null;
    }
    /**
     * Set SteeringWheelLockBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $steeringWheelLockBrand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setSteeringWheelLockBrand($steeringWheelLockBrand = null)
    {
        // validation for constraint: string
        if (!is_null($steeringWheelLockBrand) && !is_string($steeringWheelLockBrand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($steeringWheelLockBrand)), __LINE__);
        }
        if (is_null($steeringWheelLockBrand) || (is_array($steeringWheelLockBrand) && empty($steeringWheelLockBrand))) {
            unset($this->SteeringWheelLockBrand);
        } else {
            $this->SteeringWheelLockBrand = $steeringWheelLockBrand;
        }
        return $this;
    }
    /**
     * Get SteeringWheelLockKeyCount value
     * @return int|null
     */
    public function getSteeringWheelLockKeyCount()
    {
        return $this->SteeringWheelLockKeyCount;
    }
    /**
     * Set SteeringWheelLockKeyCount value
     * @param int $steeringWheelLockKeyCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setSteeringWheelLockKeyCount($steeringWheelLockKeyCount = null)
    {
        // validation for constraint: int
        if (!is_null($steeringWheelLockKeyCount) && !is_numeric($steeringWheelLockKeyCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($steeringWheelLockKeyCount)), __LINE__);
        }
        $this->SteeringWheelLockKeyCount = $steeringWheelLockKeyCount;
        return $this;
    }
    /**
     * Get TransmisionLockBrand value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTransmisionLockBrand()
    {
        return isset($this->TransmisionLockBrand) ? $this->TransmisionLockBrand : null;
    }
    /**
     * Set TransmisionLockBrand value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $transmisionLockBrand
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setTransmisionLockBrand($transmisionLockBrand = null)
    {
        // validation for constraint: string
        if (!is_null($transmisionLockBrand) && !is_string($transmisionLockBrand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($transmisionLockBrand)), __LINE__);
        }
        if (is_null($transmisionLockBrand) || (is_array($transmisionLockBrand) && empty($transmisionLockBrand))) {
            unset($this->TransmisionLockBrand);
        } else {
            $this->TransmisionLockBrand = $transmisionLockBrand;
        }
        return $this;
    }
    /**
     * Get TransmisionLockKeyCount value
     * @return int|null
     */
    public function getTransmisionLockKeyCount()
    {
        return $this->TransmisionLockKeyCount;
    }
    /**
     * Set TransmisionLockKeyCount value
     * @param int $transmisionLockKeyCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
     */
    public function setTransmisionLockKeyCount($transmisionLockKeyCount = null)
    {
        // validation for constraint: int
        if (!is_null($transmisionLockKeyCount) && !is_numeric($transmisionLockKeyCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($transmisionLockKeyCount)), __LINE__);
        }
        $this->TransmisionLockKeyCount = $transmisionLockKeyCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AntiTheftSecurity
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
