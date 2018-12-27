<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNoConsumptionInsuranceSumDiscountRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetNoConsumptionInsuranceSumDiscountRequest
 * @subpackage Structs
 */
class GetNoConsumptionInsuranceSumDiscountRequest extends AbstractStructBase
{
    /**
     * The IsLeasing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLeasing;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for GetNoConsumptionInsuranceSumDiscountRequest
     * @uses GetNoConsumptionInsuranceSumDiscountRequest::setIsLeasing()
     * @uses GetNoConsumptionInsuranceSumDiscountRequest::setVehicleGroupId()
     * @param bool $isLeasing
     * @param int $vehicleGroupId
     */
    public function __construct($isLeasing = null, $vehicleGroupId = null)
    {
        $this
            ->setIsLeasing($isLeasing)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get IsLeasing value
     * @return bool|null
     */
    public function getIsLeasing()
    {
        return $this->IsLeasing;
    }
    /**
     * Set IsLeasing value
     * @param bool $isLeasing
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetNoConsumptionInsuranceSumDiscountRequest
     */
    public function setIsLeasing($isLeasing = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLeasing) && !is_bool($isLeasing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLeasing)), __LINE__);
        }
        $this->IsLeasing = $isLeasing;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetNoConsumptionInsuranceSumDiscountRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetNoConsumptionInsuranceSumDiscountRequest
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
