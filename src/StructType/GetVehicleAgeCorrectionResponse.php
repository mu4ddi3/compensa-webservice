<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehicleAgeCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetVehicleAgeCorrectionResponse
 * @subpackage Structs
 */
class GetVehicleAgeCorrectionResponse extends AbstractStructBase
{
    /**
     * The VehicleAgeCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCorrection
     */
    public $VehicleAgeCorrection;
    /**
     * Constructor method for GetVehicleAgeCorrectionResponse
     * @uses GetVehicleAgeCorrectionResponse::setVehicleAgeCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCorrection $vehicleAgeCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCorrection $vehicleAgeCorrection = null)
    {
        $this
            ->setVehicleAgeCorrection($vehicleAgeCorrection);
    }
    /**
     * Get VehicleAgeCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCorrection|null
     */
    public function getVehicleAgeCorrection()
    {
        return isset($this->VehicleAgeCorrection) ? $this->VehicleAgeCorrection : null;
    }
    /**
     * Set VehicleAgeCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCorrection $vehicleAgeCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetVehicleAgeCorrectionResponse
     */
    public function setVehicleAgeCorrection(\Mu4ddi3\Compensa\Webservice\StructType\VehicleAgeCorrection $vehicleAgeCorrection = null)
    {
        if (is_null($vehicleAgeCorrection) || (is_array($vehicleAgeCorrection) && empty($vehicleAgeCorrection))) {
            unset($this->VehicleAgeCorrection);
        } else {
            $this->VehicleAgeCorrection = $vehicleAgeCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetVehicleAgeCorrectionResponse
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
