<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasePremiumAssistanceRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasePremiumAssistanceRequest
 * @subpackage Structs
 */
class GetBasePremiumAssistanceRequest extends GetBasePremiumRequest
{
    /**
     * The Capacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Capacity;
    /**
     * The IsAcSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcSelected;
    /**
     * The NumberOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSeats;
    /**
     * The Variant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Variant;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAge;
    /**
     * Constructor method for GetBasePremiumAssistanceRequest
     * @uses GetBasePremiumAssistanceRequest::setCapacity()
     * @uses GetBasePremiumAssistanceRequest::setIsAcSelected()
     * @uses GetBasePremiumAssistanceRequest::setNumberOfSeats()
     * @uses GetBasePremiumAssistanceRequest::setVariant()
     * @uses GetBasePremiumAssistanceRequest::setVehicleAge()
     * @param int $capacity
     * @param bool $isAcSelected
     * @param int $numberOfSeats
     * @param string $variant
     * @param int $vehicleAge
     */
    public function __construct($capacity = null, $isAcSelected = null, $numberOfSeats = null, $variant = null, $vehicleAge = null)
    {
        $this
            ->setCapacity($capacity)
            ->setIsAcSelected($isAcSelected)
            ->setNumberOfSeats($numberOfSeats)
            ->setVariant($variant)
            ->setVehicleAge($vehicleAge);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumAssistanceRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumAssistanceRequest
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
     * Get NumberOfSeats value
     * @return int|null
     */
    public function getNumberOfSeats()
    {
        return $this->NumberOfSeats;
    }
    /**
     * Set NumberOfSeats value
     * @param int $numberOfSeats
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumAssistanceRequest
     */
    public function setNumberOfSeats($numberOfSeats = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfSeats) && !is_numeric($numberOfSeats)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfSeats)), __LINE__);
        }
        $this->NumberOfSeats = $numberOfSeats;
        return $this;
    }
    /**
     * Get Variant value
     * @return string|null
     */
    public function getVariant()
    {
        return $this->Variant;
    }
    /**
     * Set Variant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumAssistanceRequest
     */
    public function setVariant($variant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($variant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
        }
        $this->Variant = $variant;
        return $this;
    }
    /**
     * Get VehicleAge value
     * @return int|null
     */
    public function getVehicleAge()
    {
        return $this->VehicleAge;
    }
    /**
     * Set VehicleAge value
     * @param int $vehicleAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumAssistanceRequest
     */
    public function setVehicleAge($vehicleAge = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAge) && !is_numeric($vehicleAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAge)), __LINE__);
        }
        $this->VehicleAge = $vehicleAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumAssistanceRequest
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
