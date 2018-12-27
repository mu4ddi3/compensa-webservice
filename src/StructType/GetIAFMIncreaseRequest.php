<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIAFMIncreaseRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIAFMIncreaseRequest
 * @subpackage Structs
 */
class GetIAFMIncreaseRequest extends AbstractStructBase
{
    /**
     * The IsDenyClaim
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDenyClaim;
    /**
     * The IsDenyFleet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDenyFleet;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for GetIAFMIncreaseRequest
     * @uses GetIAFMIncreaseRequest::setIsDenyClaim()
     * @uses GetIAFMIncreaseRequest::setIsDenyFleet()
     * @uses GetIAFMIncreaseRequest::setVehicleGroupId()
     * @param bool $isDenyClaim
     * @param bool $isDenyFleet
     * @param int $vehicleGroupId
     */
    public function __construct($isDenyClaim = null, $isDenyFleet = null, $vehicleGroupId = null)
    {
        $this
            ->setIsDenyClaim($isDenyClaim)
            ->setIsDenyFleet($isDenyFleet)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get IsDenyClaim value
     * @return bool|null
     */
    public function getIsDenyClaim()
    {
        return $this->IsDenyClaim;
    }
    /**
     * Set IsDenyClaim value
     * @param bool $isDenyClaim
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIAFMIncreaseRequest
     */
    public function setIsDenyClaim($isDenyClaim = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDenyClaim) && !is_bool($isDenyClaim)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDenyClaim)), __LINE__);
        }
        $this->IsDenyClaim = $isDenyClaim;
        return $this;
    }
    /**
     * Get IsDenyFleet value
     * @return bool|null
     */
    public function getIsDenyFleet()
    {
        return $this->IsDenyFleet;
    }
    /**
     * Set IsDenyFleet value
     * @param bool $isDenyFleet
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIAFMIncreaseRequest
     */
    public function setIsDenyFleet($isDenyFleet = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDenyFleet) && !is_bool($isDenyFleet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDenyFleet)), __LINE__);
        }
        $this->IsDenyFleet = $isDenyFleet;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIAFMIncreaseRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIAFMIncreaseRequest
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
