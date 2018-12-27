<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskGapInsuranceVehicleSourceRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskGapInsuranceVehicleSourceRequest
 * @subpackage Structs
 */
class GetIsBlackRiskGapInsuranceVehicleSourceRequest extends GetIsBlackRiskRequest
{
    /**
     * The VehicleSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleSource;
    /**
     * Constructor method for GetIsBlackRiskGapInsuranceVehicleSourceRequest
     * @uses GetIsBlackRiskGapInsuranceVehicleSourceRequest::setVehicleSource()
     * @param string $vehicleSource
     */
    public function __construct($vehicleSource = null)
    {
        $this
            ->setVehicleSource($vehicleSource);
    }
    /**
     * Get VehicleSource value
     * @return string|null
     */
    public function getVehicleSource()
    {
        return $this->VehicleSource;
    }
    /**
     * Set VehicleSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskGapInsuranceVehicleSourceRequest
     */
    public function setVehicleSource($vehicleSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleSource::valueIsValid($vehicleSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleSource::getValidValues())), __LINE__);
        }
        $this->VehicleSource = $vehicleSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskGapInsuranceVehicleSourceRequest
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
