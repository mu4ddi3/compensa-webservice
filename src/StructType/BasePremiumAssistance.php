<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePremiumAssistance StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePremiumAssistance
 * @subpackage Structs
 */
class BasePremiumAssistance extends BasePremium
{
    /**
     * The CapacityLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CapacityLeftBound;
    /**
     * The CapacityRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CapacityRightBound;
    /**
     * The IsAcSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsAcSelected;
    /**
     * The NumberOfSeatsLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSeatsLeftBound;
    /**
     * The NumberOfSeatsRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSeatsRightBound;
    /**
     * The VehicleAgeLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAgeLeftBound;
    /**
     * The VehicleAgeRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAgeRightBound;
    /**
     * Constructor method for BasePremiumAssistance
     * @uses BasePremiumAssistance::setCapacityLeftBound()
     * @uses BasePremiumAssistance::setCapacityRightBound()
     * @uses BasePremiumAssistance::setIsAcSelected()
     * @uses BasePremiumAssistance::setNumberOfSeatsLeftBound()
     * @uses BasePremiumAssistance::setNumberOfSeatsRightBound()
     * @uses BasePremiumAssistance::setVehicleAgeLeftBound()
     * @uses BasePremiumAssistance::setVehicleAgeRightBound()
     * @param int $capacityLeftBound
     * @param int $capacityRightBound
     * @param bool $isAcSelected
     * @param int $numberOfSeatsLeftBound
     * @param int $numberOfSeatsRightBound
     * @param int $vehicleAgeLeftBound
     * @param int $vehicleAgeRightBound
     */
    public function __construct($capacityLeftBound = null, $capacityRightBound = null, $isAcSelected = null, $numberOfSeatsLeftBound = null, $numberOfSeatsRightBound = null, $vehicleAgeLeftBound = null, $vehicleAgeRightBound = null)
    {
        $this
            ->setCapacityLeftBound($capacityLeftBound)
            ->setCapacityRightBound($capacityRightBound)
            ->setIsAcSelected($isAcSelected)
            ->setNumberOfSeatsLeftBound($numberOfSeatsLeftBound)
            ->setNumberOfSeatsRightBound($numberOfSeatsRightBound)
            ->setVehicleAgeLeftBound($vehicleAgeLeftBound)
            ->setVehicleAgeRightBound($vehicleAgeRightBound);
    }
    /**
     * Get CapacityLeftBound value
     * @return int|null
     */
    public function getCapacityLeftBound()
    {
        return $this->CapacityLeftBound;
    }
    /**
     * Set CapacityLeftBound value
     * @param int $capacityLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumAssistance
     */
    public function setCapacityLeftBound($capacityLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($capacityLeftBound) && !is_numeric($capacityLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacityLeftBound)), __LINE__);
        }
        $this->CapacityLeftBound = $capacityLeftBound;
        return $this;
    }
    /**
     * Get CapacityRightBound value
     * @return int|null
     */
    public function getCapacityRightBound()
    {
        return $this->CapacityRightBound;
    }
    /**
     * Set CapacityRightBound value
     * @param int $capacityRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumAssistance
     */
    public function setCapacityRightBound($capacityRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($capacityRightBound) && !is_numeric($capacityRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacityRightBound)), __LINE__);
        }
        $this->CapacityRightBound = $capacityRightBound;
        return $this;
    }
    /**
     * Get IsAcSelected value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsAcSelected()
    {
        return isset($this->IsAcSelected) ? $this->IsAcSelected : null;
    }
    /**
     * Set IsAcSelected value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isAcSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumAssistance
     */
    public function setIsAcSelected($isAcSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAcSelected) && !is_bool($isAcSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAcSelected)), __LINE__);
        }
        if (is_null($isAcSelected) || (is_array($isAcSelected) && empty($isAcSelected))) {
            unset($this->IsAcSelected);
        } else {
            $this->IsAcSelected = $isAcSelected;
        }
        return $this;
    }
    /**
     * Get NumberOfSeatsLeftBound value
     * @return int|null
     */
    public function getNumberOfSeatsLeftBound()
    {
        return $this->NumberOfSeatsLeftBound;
    }
    /**
     * Set NumberOfSeatsLeftBound value
     * @param int $numberOfSeatsLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumAssistance
     */
    public function setNumberOfSeatsLeftBound($numberOfSeatsLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfSeatsLeftBound) && !is_numeric($numberOfSeatsLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeatsLeftBound)), __LINE__);
        }
        $this->NumberOfSeatsLeftBound = $numberOfSeatsLeftBound;
        return $this;
    }
    /**
     * Get NumberOfSeatsRightBound value
     * @return int|null
     */
    public function getNumberOfSeatsRightBound()
    {
        return $this->NumberOfSeatsRightBound;
    }
    /**
     * Set NumberOfSeatsRightBound value
     * @param int $numberOfSeatsRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumAssistance
     */
    public function setNumberOfSeatsRightBound($numberOfSeatsRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfSeatsRightBound) && !is_numeric($numberOfSeatsRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeatsRightBound)), __LINE__);
        }
        $this->NumberOfSeatsRightBound = $numberOfSeatsRightBound;
        return $this;
    }
    /**
     * Get VehicleAgeLeftBound value
     * @return int|null
     */
    public function getVehicleAgeLeftBound()
    {
        return $this->VehicleAgeLeftBound;
    }
    /**
     * Set VehicleAgeLeftBound value
     * @param int $vehicleAgeLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumAssistance
     */
    public function setVehicleAgeLeftBound($vehicleAgeLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeLeftBound) && !is_numeric($vehicleAgeLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeLeftBound)), __LINE__);
        }
        $this->VehicleAgeLeftBound = $vehicleAgeLeftBound;
        return $this;
    }
    /**
     * Get VehicleAgeRightBound value
     * @return int|null
     */
    public function getVehicleAgeRightBound()
    {
        return $this->VehicleAgeRightBound;
    }
    /**
     * Set VehicleAgeRightBound value
     * @param int $vehicleAgeRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumAssistance
     */
    public function setVehicleAgeRightBound($vehicleAgeRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeRightBound) && !is_numeric($vehicleAgeRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeRightBound)), __LINE__);
        }
        $this->VehicleAgeRightBound = $vehicleAgeRightBound;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumAssistance
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
