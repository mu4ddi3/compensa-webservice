<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimsInOtherInsuranceCompanyIncreaseFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimsInOtherInsuranceCompanyIncreaseFactor
 * @subpackage Structs
 */
class ClaimsInOtherInsuranceCompanyIncreaseFactor extends BaseFactorDefinition
{
    /**
     * The ClaimsLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ClaimsLeftBound;
    /**
     * The ClaimsRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ClaimsRightBound;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for ClaimsInOtherInsuranceCompanyIncreaseFactor
     * @uses ClaimsInOtherInsuranceCompanyIncreaseFactor::setClaimsLeftBound()
     * @uses ClaimsInOtherInsuranceCompanyIncreaseFactor::setClaimsRightBound()
     * @uses ClaimsInOtherInsuranceCompanyIncreaseFactor::setVehicleGroupId()
     * @param int $claimsLeftBound
     * @param int $claimsRightBound
     * @param int $vehicleGroupId
     */
    public function __construct($claimsLeftBound = null, $claimsRightBound = null, $vehicleGroupId = null)
    {
        $this
            ->setClaimsLeftBound($claimsLeftBound)
            ->setClaimsRightBound($claimsRightBound)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get ClaimsLeftBound value
     * @return int|null
     */
    public function getClaimsLeftBound()
    {
        return $this->ClaimsLeftBound;
    }
    /**
     * Set ClaimsLeftBound value
     * @param int $claimsLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor
     */
    public function setClaimsLeftBound($claimsLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($claimsLeftBound) && !is_numeric($claimsLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($claimsLeftBound)), __LINE__);
        }
        $this->ClaimsLeftBound = $claimsLeftBound;
        return $this;
    }
    /**
     * Get ClaimsRightBound value
     * @return int|null
     */
    public function getClaimsRightBound()
    {
        return $this->ClaimsRightBound;
    }
    /**
     * Set ClaimsRightBound value
     * @param int $claimsRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor
     */
    public function setClaimsRightBound($claimsRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($claimsRightBound) && !is_numeric($claimsRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($claimsRightBound)), __LINE__);
        }
        $this->ClaimsRightBound = $claimsRightBound;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimsInOtherInsuranceCompanyIncreaseFactor
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
