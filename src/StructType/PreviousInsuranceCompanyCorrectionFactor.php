<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PreviousInsuranceCompanyCorrectionFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PreviousInsuranceCompanyCorrectionFactor
 * @subpackage Structs
 */
class PreviousInsuranceCompanyCorrectionFactor extends BaseFactorDefinition
{
    /**
     * The InsuranceCompanyCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsuranceCompanyCode;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for PreviousInsuranceCompanyCorrectionFactor
     * @uses PreviousInsuranceCompanyCorrectionFactor::setInsuranceCompanyCode()
     * @uses PreviousInsuranceCompanyCorrectionFactor::setVehicleGroupId()
     * @param int $insuranceCompanyCode
     * @param int $vehicleGroupId
     */
    public function __construct($insuranceCompanyCode = null, $vehicleGroupId = null)
    {
        $this
            ->setInsuranceCompanyCode($insuranceCompanyCode)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get InsuranceCompanyCode value
     * @return int|null
     */
    public function getInsuranceCompanyCode()
    {
        return $this->InsuranceCompanyCode;
    }
    /**
     * Set InsuranceCompanyCode value
     * @param int $insuranceCompanyCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor
     */
    public function setInsuranceCompanyCode($insuranceCompanyCode = null)
    {
        // validation for constraint: int
        if (!is_null($insuranceCompanyCode) && !is_numeric($insuranceCompanyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuranceCompanyCode)), __LINE__);
        }
        $this->InsuranceCompanyCode = $insuranceCompanyCode;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor
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
