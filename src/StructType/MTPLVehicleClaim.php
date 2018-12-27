<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MTPLVehicleClaim StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MTPLVehicleClaim
 * @subpackage Structs
 */
class MTPLVehicleClaim extends MTPLClaim
{
    /**
     * The VehicleClaimType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleClaimType
     */
    public $VehicleClaimType;
    /**
     * The VictimDriver
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Partner
     */
    public $VictimDriver;
    /**
     * Constructor method for MTPLVehicleClaim
     * @uses MTPLVehicleClaim::setVehicleClaimType()
     * @uses MTPLVehicleClaim::setVictimDriver()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleClaimType $vehicleClaimType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Partner $victimDriver
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\VehicleClaimType $vehicleClaimType = null, \Mu4ddi3\Compensa\Webservice\StructType\Partner $victimDriver = null)
    {
        $this
            ->setVehicleClaimType($vehicleClaimType)
            ->setVictimDriver($victimDriver);
    }
    /**
     * Get VehicleClaimType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleClaimType|null
     */
    public function getVehicleClaimType()
    {
        return isset($this->VehicleClaimType) ? $this->VehicleClaimType : null;
    }
    /**
     * Set VehicleClaimType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleClaimType $vehicleClaimType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MTPLVehicleClaim
     */
    public function setVehicleClaimType(\Mu4ddi3\Compensa\Webservice\StructType\VehicleClaimType $vehicleClaimType = null)
    {
        if (is_null($vehicleClaimType) || (is_array($vehicleClaimType) && empty($vehicleClaimType))) {
            unset($this->VehicleClaimType);
        } else {
            $this->VehicleClaimType = $vehicleClaimType;
        }
        return $this;
    }
    /**
     * Get VictimDriver value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner|null
     */
    public function getVictimDriver()
    {
        return isset($this->VictimDriver) ? $this->VictimDriver : null;
    }
    /**
     * Set VictimDriver value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Partner $victimDriver
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MTPLVehicleClaim
     */
    public function setVictimDriver(\Mu4ddi3\Compensa\Webservice\StructType\Partner $victimDriver = null)
    {
        if (is_null($victimDriver) || (is_array($victimDriver) && empty($victimDriver))) {
            unset($this->VictimDriver);
        } else {
            $this->VictimDriver = $victimDriver;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MTPLVehicleClaim
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
