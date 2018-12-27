<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPreviousInsuranceCompanyCorrectionRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPreviousInsuranceCompanyCorrectionRequest
 * @subpackage Structs
 */
class GetPreviousInsuranceCompanyCorrectionRequest extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Code;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for GetPreviousInsuranceCompanyCorrectionRequest
     * @uses GetPreviousInsuranceCompanyCorrectionRequest::setCode()
     * @uses GetPreviousInsuranceCompanyCorrectionRequest::setVehicleGroupId()
     * @param int $code
     * @param int $vehicleGroupId
     */
    public function __construct($code = null, $vehicleGroupId = null)
    {
        $this
            ->setCode($code)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPreviousInsuranceCompanyCorrectionRequest
     */
    public function setCode($code = null)
    {
        // validation for constraint: int
        if (!is_null($code) && !is_numeric($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPreviousInsuranceCompanyCorrectionRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPreviousInsuranceCompanyCorrectionRequest
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
