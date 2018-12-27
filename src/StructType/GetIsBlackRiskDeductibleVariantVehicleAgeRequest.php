<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskDeductibleVariantVehicleAgeRequest
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskDeductibleVariantVehicleAgeRequest
 * @subpackage Structs
 */
class GetIsBlackRiskDeductibleVariantVehicleAgeRequest extends GetIsBlackRiskRequest
{
    /**
     * The DeductibleVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeductibleVariant;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAge;
    /**
     * Constructor method for GetIsBlackRiskDeductibleVariantVehicleAgeRequest
     * @uses GetIsBlackRiskDeductibleVariantVehicleAgeRequest::setDeductibleVariant()
     * @uses GetIsBlackRiskDeductibleVariantVehicleAgeRequest::setVehicleAge()
     * @param string $deductibleVariant
     * @param int $vehicleAge
     */
    public function __construct($deductibleVariant = null, $vehicleAge = null)
    {
        $this
            ->setDeductibleVariant($deductibleVariant)
            ->setVehicleAge($vehicleAge);
    }
    /**
     * Get DeductibleVariant value
     * @return string|null
     */
    public function getDeductibleVariant()
    {
        return $this->DeductibleVariant;
    }
    /**
     * Set DeductibleVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $deductibleVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskDeductibleVariantVehicleAgeRequest
     */
    public function setDeductibleVariant($deductibleVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid($deductibleVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $deductibleVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues())), __LINE__);
        }
        $this->DeductibleVariant = $deductibleVariant;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskDeductibleVariantVehicleAgeRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskDeductibleVariantVehicleAgeRequest
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
