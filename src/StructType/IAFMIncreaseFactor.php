<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IAFMIncreaseFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IAFMIncreaseFactor
 * @subpackage Structs
 */
class IAFMIncreaseFactor extends BaseFactorDefinition
{
    /**
     * The DenyClaim
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DenyClaim;
    /**
     * The DenyFleet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DenyFleet;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for IAFMIncreaseFactor
     * @uses IAFMIncreaseFactor::setDenyClaim()
     * @uses IAFMIncreaseFactor::setDenyFleet()
     * @uses IAFMIncreaseFactor::setVehicleGroupId()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $denyClaim
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $denyFleet
     * @param int $vehicleGroupId
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $denyClaim = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $denyFleet = null, $vehicleGroupId = null)
    {
        $this
            ->setDenyClaim($denyClaim)
            ->setDenyFleet($denyFleet)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get DenyClaim value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDenyClaim()
    {
        return isset($this->DenyClaim) ? $this->DenyClaim : null;
    }
    /**
     * Set DenyClaim value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $denyClaim
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor
     */
    public function setDenyClaim(\Mu4ddi3\Compensa\Webservice\StructType\Factor $denyClaim = null)
    {
        if (is_null($denyClaim) || (is_array($denyClaim) && empty($denyClaim))) {
            unset($this->DenyClaim);
        } else {
            $this->DenyClaim = $denyClaim;
        }
        return $this;
    }
    /**
     * Get DenyFleet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDenyFleet()
    {
        return isset($this->DenyFleet) ? $this->DenyFleet : null;
    }
    /**
     * Set DenyFleet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $denyFleet
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor
     */
    public function setDenyFleet(\Mu4ddi3\Compensa\Webservice\StructType\Factor $denyFleet = null)
    {
        if (is_null($denyFleet) || (is_array($denyFleet) && empty($denyFleet))) {
            unset($this->DenyFleet);
        } else {
            $this->DenyFleet = $denyFleet;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor
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
