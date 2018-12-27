<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VehicleEquipment StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleEquipment
 * @subpackage Structs
 */
class VehicleEquipment extends AbstractStructBase
{
    /**
     * The AirBagsNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AirBagsNumber;
    /**
     * The IsAirBag
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAirBag;
    /**
     * The IsAirConditioning
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAirConditioning;
    /**
     * The IsAlloyWheels
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAlloyWheels;
    /**
     * The IsAutomaticTransmission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAutomaticTransmission;
    /**
     * The IsGasSystem
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGasSystem;
    /**
     * The IsLeatherInterior
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLeatherInterior;
    /**
     * The IsMetalic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsMetalic;
    /**
     * The IsOnBoardComputer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOnBoardComputer;
    /**
     * The IsOtherEquipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOtherEquipment;
    /**
     * The IsPermanentlyMountedAudio
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPermanentlyMountedAudio;
    /**
     * The OtherEquipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OtherEquipment;
    /**
     * Constructor method for VehicleEquipment
     * @uses VehicleEquipment::setAirBagsNumber()
     * @uses VehicleEquipment::setIsAirBag()
     * @uses VehicleEquipment::setIsAirConditioning()
     * @uses VehicleEquipment::setIsAlloyWheels()
     * @uses VehicleEquipment::setIsAutomaticTransmission()
     * @uses VehicleEquipment::setIsGasSystem()
     * @uses VehicleEquipment::setIsLeatherInterior()
     * @uses VehicleEquipment::setIsMetalic()
     * @uses VehicleEquipment::setIsOnBoardComputer()
     * @uses VehicleEquipment::setIsOtherEquipment()
     * @uses VehicleEquipment::setIsPermanentlyMountedAudio()
     * @uses VehicleEquipment::setOtherEquipment()
     * @param int $airBagsNumber
     * @param bool $isAirBag
     * @param bool $isAirConditioning
     * @param bool $isAlloyWheels
     * @param bool $isAutomaticTransmission
     * @param bool $isGasSystem
     * @param bool $isLeatherInterior
     * @param bool $isMetalic
     * @param bool $isOnBoardComputer
     * @param bool $isOtherEquipment
     * @param bool $isPermanentlyMountedAudio
     * @param string $otherEquipment
     */
    public function __construct($airBagsNumber = null, $isAirBag = null, $isAirConditioning = null, $isAlloyWheels = null, $isAutomaticTransmission = null, $isGasSystem = null, $isLeatherInterior = null, $isMetalic = null, $isOnBoardComputer = null, $isOtherEquipment = null, $isPermanentlyMountedAudio = null, $otherEquipment = null)
    {
        $this
            ->setAirBagsNumber($airBagsNumber)
            ->setIsAirBag($isAirBag)
            ->setIsAirConditioning($isAirConditioning)
            ->setIsAlloyWheels($isAlloyWheels)
            ->setIsAutomaticTransmission($isAutomaticTransmission)
            ->setIsGasSystem($isGasSystem)
            ->setIsLeatherInterior($isLeatherInterior)
            ->setIsMetalic($isMetalic)
            ->setIsOnBoardComputer($isOnBoardComputer)
            ->setIsOtherEquipment($isOtherEquipment)
            ->setIsPermanentlyMountedAudio($isPermanentlyMountedAudio)
            ->setOtherEquipment($otherEquipment);
    }
    /**
     * Get AirBagsNumber value
     * @return int|null
     */
    public function getAirBagsNumber()
    {
        return $this->AirBagsNumber;
    }
    /**
     * Set AirBagsNumber value
     * @param int $airBagsNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setAirBagsNumber($airBagsNumber = null)
    {
        // validation for constraint: int
        if (!is_null($airBagsNumber) && !is_numeric($airBagsNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($airBagsNumber)), __LINE__);
        }
        $this->AirBagsNumber = $airBagsNumber;
        return $this;
    }
    /**
     * Get IsAirBag value
     * @return bool|null
     */
    public function getIsAirBag()
    {
        return $this->IsAirBag;
    }
    /**
     * Set IsAirBag value
     * @param bool $isAirBag
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsAirBag($isAirBag = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAirBag) && !is_bool($isAirBag)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAirBag)), __LINE__);
        }
        $this->IsAirBag = $isAirBag;
        return $this;
    }
    /**
     * Get IsAirConditioning value
     * @return bool|null
     */
    public function getIsAirConditioning()
    {
        return $this->IsAirConditioning;
    }
    /**
     * Set IsAirConditioning value
     * @param bool $isAirConditioning
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsAirConditioning($isAirConditioning = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAirConditioning) && !is_bool($isAirConditioning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAirConditioning)), __LINE__);
        }
        $this->IsAirConditioning = $isAirConditioning;
        return $this;
    }
    /**
     * Get IsAlloyWheels value
     * @return bool|null
     */
    public function getIsAlloyWheels()
    {
        return $this->IsAlloyWheels;
    }
    /**
     * Set IsAlloyWheels value
     * @param bool $isAlloyWheels
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsAlloyWheels($isAlloyWheels = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAlloyWheels) && !is_bool($isAlloyWheels)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAlloyWheels)), __LINE__);
        }
        $this->IsAlloyWheels = $isAlloyWheels;
        return $this;
    }
    /**
     * Get IsAutomaticTransmission value
     * @return bool|null
     */
    public function getIsAutomaticTransmission()
    {
        return $this->IsAutomaticTransmission;
    }
    /**
     * Set IsAutomaticTransmission value
     * @param bool $isAutomaticTransmission
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsAutomaticTransmission($isAutomaticTransmission = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAutomaticTransmission) && !is_bool($isAutomaticTransmission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAutomaticTransmission)), __LINE__);
        }
        $this->IsAutomaticTransmission = $isAutomaticTransmission;
        return $this;
    }
    /**
     * Get IsGasSystem value
     * @return bool|null
     */
    public function getIsGasSystem()
    {
        return $this->IsGasSystem;
    }
    /**
     * Set IsGasSystem value
     * @param bool $isGasSystem
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsGasSystem($isGasSystem = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGasSystem) && !is_bool($isGasSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isGasSystem)), __LINE__);
        }
        $this->IsGasSystem = $isGasSystem;
        return $this;
    }
    /**
     * Get IsLeatherInterior value
     * @return bool|null
     */
    public function getIsLeatherInterior()
    {
        return $this->IsLeatherInterior;
    }
    /**
     * Set IsLeatherInterior value
     * @param bool $isLeatherInterior
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsLeatherInterior($isLeatherInterior = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLeatherInterior) && !is_bool($isLeatherInterior)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLeatherInterior)), __LINE__);
        }
        $this->IsLeatherInterior = $isLeatherInterior;
        return $this;
    }
    /**
     * Get IsMetalic value
     * @return bool|null
     */
    public function getIsMetalic()
    {
        return $this->IsMetalic;
    }
    /**
     * Set IsMetalic value
     * @param bool $isMetalic
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsMetalic($isMetalic = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMetalic) && !is_bool($isMetalic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMetalic)), __LINE__);
        }
        $this->IsMetalic = $isMetalic;
        return $this;
    }
    /**
     * Get IsOnBoardComputer value
     * @return bool|null
     */
    public function getIsOnBoardComputer()
    {
        return $this->IsOnBoardComputer;
    }
    /**
     * Set IsOnBoardComputer value
     * @param bool $isOnBoardComputer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsOnBoardComputer($isOnBoardComputer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOnBoardComputer) && !is_bool($isOnBoardComputer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOnBoardComputer)), __LINE__);
        }
        $this->IsOnBoardComputer = $isOnBoardComputer;
        return $this;
    }
    /**
     * Get IsOtherEquipment value
     * @return bool|null
     */
    public function getIsOtherEquipment()
    {
        return $this->IsOtherEquipment;
    }
    /**
     * Set IsOtherEquipment value
     * @param bool $isOtherEquipment
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsOtherEquipment($isOtherEquipment = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOtherEquipment) && !is_bool($isOtherEquipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOtherEquipment)), __LINE__);
        }
        $this->IsOtherEquipment = $isOtherEquipment;
        return $this;
    }
    /**
     * Get IsPermanentlyMountedAudio value
     * @return bool|null
     */
    public function getIsPermanentlyMountedAudio()
    {
        return $this->IsPermanentlyMountedAudio;
    }
    /**
     * Set IsPermanentlyMountedAudio value
     * @param bool $isPermanentlyMountedAudio
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setIsPermanentlyMountedAudio($isPermanentlyMountedAudio = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPermanentlyMountedAudio) && !is_bool($isPermanentlyMountedAudio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPermanentlyMountedAudio)), __LINE__);
        }
        $this->IsPermanentlyMountedAudio = $isPermanentlyMountedAudio;
        return $this;
    }
    /**
     * Get OtherEquipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtherEquipment()
    {
        return isset($this->OtherEquipment) ? $this->OtherEquipment : null;
    }
    /**
     * Set OtherEquipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otherEquipment
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
     */
    public function setOtherEquipment($otherEquipment = null)
    {
        // validation for constraint: string
        if (!is_null($otherEquipment) && !is_string($otherEquipment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherEquipment)), __LINE__);
        }
        if (is_null($otherEquipment) || (is_array($otherEquipment) && empty($otherEquipment))) {
            unset($this->OtherEquipment);
        } else {
            $this->OtherEquipment = $otherEquipment;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleEquipment
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
