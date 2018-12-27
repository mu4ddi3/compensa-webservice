<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetVehicleOriginCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetVehicleOriginCorrectionResponse
 * @subpackage Structs
 */
class GetVehicleOriginCorrectionResponse extends AbstractStructBase
{
    /**
     * The VehicleOriginCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrection
     */
    public $VehicleOriginCorrection;
    /**
     * Constructor method for GetVehicleOriginCorrectionResponse
     * @uses GetVehicleOriginCorrectionResponse::setVehicleOriginCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrection $vehicleOriginCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrection $vehicleOriginCorrection = null)
    {
        $this
            ->setVehicleOriginCorrection($vehicleOriginCorrection);
    }
    /**
     * Get VehicleOriginCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrection|null
     */
    public function getVehicleOriginCorrection()
    {
        return isset($this->VehicleOriginCorrection) ? $this->VehicleOriginCorrection : null;
    }
    /**
     * Set VehicleOriginCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrection $vehicleOriginCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetVehicleOriginCorrectionResponse
     */
    public function setVehicleOriginCorrection(\Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrection $vehicleOriginCorrection = null)
    {
        if (is_null($vehicleOriginCorrection) || (is_array($vehicleOriginCorrection) && empty($vehicleOriginCorrection))) {
            unset($this->VehicleOriginCorrection);
        } else {
            $this->VehicleOriginCorrection = $vehicleOriginCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetVehicleOriginCorrectionResponse
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
