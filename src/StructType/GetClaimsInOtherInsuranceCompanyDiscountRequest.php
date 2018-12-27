<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetClaimsInOtherInsuranceCompanyDiscountRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetClaimsInOtherInsuranceCompanyDiscountRequest
 * @subpackage Structs
 */
class GetClaimsInOtherInsuranceCompanyDiscountRequest extends AbstractStructBase
{
    /**
     * The claims
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $claims;
    /**
     * The vehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $vehicleGroupId;
    /**
     * Constructor method for GetClaimsInOtherInsuranceCompanyDiscountRequest
     * @uses GetClaimsInOtherInsuranceCompanyDiscountRequest::setClaims()
     * @uses GetClaimsInOtherInsuranceCompanyDiscountRequest::setVehicleGroupId()
     * @param int $claims
     * @param int $vehicleGroupId
     */
    public function __construct($claims = null, $vehicleGroupId = null)
    {
        $this
            ->setClaims($claims)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get claims value
     * @return int|null
     */
    public function getClaims()
    {
        return $this->claims;
    }
    /**
     * Set claims value
     * @param int $claims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetClaimsInOtherInsuranceCompanyDiscountRequest
     */
    public function setClaims($claims = null)
    {
        // validation for constraint: int
        if (!is_null($claims) && !is_numeric($claims)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($claims)), __LINE__);
        }
        $this->claims = $claims;
        return $this;
    }
    /**
     * Get vehicleGroupId value
     * @return int|null
     */
    public function getVehicleGroupId()
    {
        return $this->vehicleGroupId;
    }
    /**
     * Set vehicleGroupId value
     * @param int $vehicleGroupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetClaimsInOtherInsuranceCompanyDiscountRequest
     */
    public function setVehicleGroupId($vehicleGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleGroupId) && !is_numeric($vehicleGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleGroupId)), __LINE__);
        }
        $this->vehicleGroupId = $vehicleGroupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetClaimsInOtherInsuranceCompanyDiscountRequest
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
