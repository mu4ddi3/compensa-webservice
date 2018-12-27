<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FireInsuranceRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FireInsuranceRisk
 * @subpackage Structs
 */
class FireInsuranceRisk extends InsuranceRisk
{
    /**
     * The ConstructionType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BuildingsFireRiskConstructionType
     */
    public $ConstructionType;
    /**
     * The FireAlarmDevicesSurveillanceRoom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FireAlarmDevicesSurveillanceRoom;
    /**
     * The FireAlarmFirefightersAlarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FireAlarmFirefightersAlarm;
    /**
     * The FireProtectionDiscountPercentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $FireProtectionDiscountPercentage;
    /**
     * The FireSprinklerDevices
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $FireSprinklerDevices;
    /**
     * The NumberOfFloods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfFloods;
    /**
     * The SuperviseService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SuperviseService;
    /**
     * Constructor method for FireInsuranceRisk
     * @uses FireInsuranceRisk::setConstructionType()
     * @uses FireInsuranceRisk::setFireAlarmDevicesSurveillanceRoom()
     * @uses FireInsuranceRisk::setFireAlarmFirefightersAlarm()
     * @uses FireInsuranceRisk::setFireProtectionDiscountPercentage()
     * @uses FireInsuranceRisk::setFireSprinklerDevices()
     * @uses FireInsuranceRisk::setNumberOfFloods()
     * @uses FireInsuranceRisk::setSuperviseService()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BuildingsFireRiskConstructionType $constructionType
     * @param bool $fireAlarmDevicesSurveillanceRoom
     * @param bool $fireAlarmFirefightersAlarm
     * @param float $fireProtectionDiscountPercentage
     * @param bool $fireSprinklerDevices
     * @param int $numberOfFloods
     * @param bool $superviseService
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\BuildingsFireRiskConstructionType $constructionType = null, $fireAlarmDevicesSurveillanceRoom = null, $fireAlarmFirefightersAlarm = null, $fireProtectionDiscountPercentage = null, $fireSprinklerDevices = null, $numberOfFloods = null, $superviseService = null)
    {
        $this
            ->setConstructionType($constructionType)
            ->setFireAlarmDevicesSurveillanceRoom($fireAlarmDevicesSurveillanceRoom)
            ->setFireAlarmFirefightersAlarm($fireAlarmFirefightersAlarm)
            ->setFireProtectionDiscountPercentage($fireProtectionDiscountPercentage)
            ->setFireSprinklerDevices($fireSprinklerDevices)
            ->setNumberOfFloods($numberOfFloods)
            ->setSuperviseService($superviseService);
    }
    /**
     * Get ConstructionType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BuildingsFireRiskConstructionType|null
     */
    public function getConstructionType()
    {
        return isset($this->ConstructionType) ? $this->ConstructionType : null;
    }
    /**
     * Set ConstructionType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BuildingsFireRiskConstructionType $constructionType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireInsuranceRisk
     */
    public function setConstructionType(\Mu4ddi3\Compensa\Webservice\StructType\BuildingsFireRiskConstructionType $constructionType = null)
    {
        if (is_null($constructionType) || (is_array($constructionType) && empty($constructionType))) {
            unset($this->ConstructionType);
        } else {
            $this->ConstructionType = $constructionType;
        }
        return $this;
    }
    /**
     * Get FireAlarmDevicesSurveillanceRoom value
     * @return bool|null
     */
    public function getFireAlarmDevicesSurveillanceRoom()
    {
        return $this->FireAlarmDevicesSurveillanceRoom;
    }
    /**
     * Set FireAlarmDevicesSurveillanceRoom value
     * @param bool $fireAlarmDevicesSurveillanceRoom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireInsuranceRisk
     */
    public function setFireAlarmDevicesSurveillanceRoom($fireAlarmDevicesSurveillanceRoom = null)
    {
        // validation for constraint: boolean
        if (!is_null($fireAlarmDevicesSurveillanceRoom) && !is_bool($fireAlarmDevicesSurveillanceRoom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fireAlarmDevicesSurveillanceRoom)), __LINE__);
        }
        $this->FireAlarmDevicesSurveillanceRoom = $fireAlarmDevicesSurveillanceRoom;
        return $this;
    }
    /**
     * Get FireAlarmFirefightersAlarm value
     * @return bool|null
     */
    public function getFireAlarmFirefightersAlarm()
    {
        return $this->FireAlarmFirefightersAlarm;
    }
    /**
     * Set FireAlarmFirefightersAlarm value
     * @param bool $fireAlarmFirefightersAlarm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireInsuranceRisk
     */
    public function setFireAlarmFirefightersAlarm($fireAlarmFirefightersAlarm = null)
    {
        // validation for constraint: boolean
        if (!is_null($fireAlarmFirefightersAlarm) && !is_bool($fireAlarmFirefightersAlarm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fireAlarmFirefightersAlarm)), __LINE__);
        }
        $this->FireAlarmFirefightersAlarm = $fireAlarmFirefightersAlarm;
        return $this;
    }
    /**
     * Get FireProtectionDiscountPercentage value
     * @return float|null
     */
    public function getFireProtectionDiscountPercentage()
    {
        return $this->FireProtectionDiscountPercentage;
    }
    /**
     * Set FireProtectionDiscountPercentage value
     * @param float $fireProtectionDiscountPercentage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireInsuranceRisk
     */
    public function setFireProtectionDiscountPercentage($fireProtectionDiscountPercentage = null)
    {
        $this->FireProtectionDiscountPercentage = $fireProtectionDiscountPercentage;
        return $this;
    }
    /**
     * Get FireSprinklerDevices value
     * @return bool|null
     */
    public function getFireSprinklerDevices()
    {
        return $this->FireSprinklerDevices;
    }
    /**
     * Set FireSprinklerDevices value
     * @param bool $fireSprinklerDevices
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireInsuranceRisk
     */
    public function setFireSprinklerDevices($fireSprinklerDevices = null)
    {
        // validation for constraint: boolean
        if (!is_null($fireSprinklerDevices) && !is_bool($fireSprinklerDevices)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($fireSprinklerDevices)), __LINE__);
        }
        $this->FireSprinklerDevices = $fireSprinklerDevices;
        return $this;
    }
    /**
     * Get NumberOfFloods value
     * @return int|null
     */
    public function getNumberOfFloods()
    {
        return $this->NumberOfFloods;
    }
    /**
     * Set NumberOfFloods value
     * @param int $numberOfFloods
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireInsuranceRisk
     */
    public function setNumberOfFloods($numberOfFloods = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFloods) && !is_numeric($numberOfFloods)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFloods)), __LINE__);
        }
        $this->NumberOfFloods = $numberOfFloods;
        return $this;
    }
    /**
     * Get SuperviseService value
     * @return bool|null
     */
    public function getSuperviseService()
    {
        return $this->SuperviseService;
    }
    /**
     * Set SuperviseService value
     * @param bool $superviseService
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireInsuranceRisk
     */
    public function setSuperviseService($superviseService = null)
    {
        // validation for constraint: boolean
        if (!is_null($superviseService) && !is_bool($superviseService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($superviseService)), __LINE__);
        }
        $this->SuperviseService = $superviseService;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireInsuranceRisk
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
