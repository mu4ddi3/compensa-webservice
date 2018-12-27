<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskAssistanceInsuranceRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskAssistanceInsuranceRequest
 * @subpackage Structs
 */
class GetIsBlackRiskAssistanceInsuranceRequest extends GetIsBlackRiskRequest
{
    /**
     * The NumberOfSeats
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfSeats;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAge;
    /**
     * Constructor method for GetIsBlackRiskAssistanceInsuranceRequest
     * @uses GetIsBlackRiskAssistanceInsuranceRequest::setNumberOfSeats()
     * @uses GetIsBlackRiskAssistanceInsuranceRequest::setVehicleAge()
     * @param int $numberOfSeats
     * @param int $vehicleAge
     */
    public function __construct($numberOfSeats = null, $vehicleAge = null)
    {
        $this
            ->setNumberOfSeats($numberOfSeats)
            ->setVehicleAge($vehicleAge);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskAssistanceInsuranceRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskAssistanceInsuranceRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskAssistanceInsuranceRequest
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
