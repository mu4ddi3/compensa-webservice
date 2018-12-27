<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBonusMalusDiscountRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBonusMalusDiscountRequest
 * @subpackage Structs
 */
class GetBonusMalusDiscountRequest extends AbstractStructBase
{
    /**
     * The DiscountFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DiscountFactor;
    /**
     * The NumberOfClaims
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfClaims;
    /**
     * The NumberOfFullInsurancePeriods
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfFullInsurancePeriods;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for GetBonusMalusDiscountRequest
     * @uses GetBonusMalusDiscountRequest::setDiscountFactor()
     * @uses GetBonusMalusDiscountRequest::setNumberOfClaims()
     * @uses GetBonusMalusDiscountRequest::setNumberOfFullInsurancePeriods()
     * @uses GetBonusMalusDiscountRequest::setVehicleGroupId()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $discountFactor
     * @param int $numberOfClaims
     * @param int $numberOfFullInsurancePeriods
     * @param int $vehicleGroupId
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $discountFactor = null, $numberOfClaims = null, $numberOfFullInsurancePeriods = null, $vehicleGroupId = null)
    {
        $this
            ->setDiscountFactor($discountFactor)
            ->setNumberOfClaims($numberOfClaims)
            ->setNumberOfFullInsurancePeriods($numberOfFullInsurancePeriods)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get DiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDiscountFactor()
    {
        return isset($this->DiscountFactor) ? $this->DiscountFactor : null;
    }
    /**
     * Set DiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $discountFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBonusMalusDiscountRequest
     */
    public function setDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $discountFactor = null)
    {
        if (is_null($discountFactor) || (is_array($discountFactor) && empty($discountFactor))) {
            unset($this->DiscountFactor);
        } else {
            $this->DiscountFactor = $discountFactor;
        }
        return $this;
    }
    /**
     * Get NumberOfClaims value
     * @return int|null
     */
    public function getNumberOfClaims()
    {
        return $this->NumberOfClaims;
    }
    /**
     * Set NumberOfClaims value
     * @param int $numberOfClaims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBonusMalusDiscountRequest
     */
    public function setNumberOfClaims($numberOfClaims = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfClaims) && !is_numeric($numberOfClaims)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfClaims)), __LINE__);
        }
        $this->NumberOfClaims = $numberOfClaims;
        return $this;
    }
    /**
     * Get NumberOfFullInsurancePeriods value
     * @return int|null
     */
    public function getNumberOfFullInsurancePeriods()
    {
        return $this->NumberOfFullInsurancePeriods;
    }
    /**
     * Set NumberOfFullInsurancePeriods value
     * @param int $numberOfFullInsurancePeriods
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBonusMalusDiscountRequest
     */
    public function setNumberOfFullInsurancePeriods($numberOfFullInsurancePeriods = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfFullInsurancePeriods) && !is_numeric($numberOfFullInsurancePeriods)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfFullInsurancePeriods)), __LINE__);
        }
        $this->NumberOfFullInsurancePeriods = $numberOfFullInsurancePeriods;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBonusMalusDiscountRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBonusMalusDiscountRequest
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
