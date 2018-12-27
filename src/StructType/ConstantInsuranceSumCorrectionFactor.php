<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConstantInsuranceSumCorrectionFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ConstantInsuranceSumCorrectionFactor
 * @subpackage Structs
 */
class ConstantInsuranceSumCorrectionFactor extends AbstractStructBase
{
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Factor;
    /**
     * The VehicleAgeLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAgeLeftBound;
    /**
     * The VehicleAgeRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleAgeRightBound;
    /**
     * Constructor method for ConstantInsuranceSumCorrectionFactor
     * @uses ConstantInsuranceSumCorrectionFactor::setFactor()
     * @uses ConstantInsuranceSumCorrectionFactor::setVehicleAgeLeftBound()
     * @uses ConstantInsuranceSumCorrectionFactor::setVehicleAgeRightBound()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @param int $vehicleAgeLeftBound
     * @param int $vehicleAgeRightBound
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null, $vehicleAgeLeftBound = null, $vehicleAgeRightBound = null)
    {
        $this
            ->setFactor($factor)
            ->setVehicleAgeLeftBound($vehicleAgeLeftBound)
            ->setVehicleAgeRightBound($vehicleAgeRightBound);
    }
    /**
     * Get Factor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactor()
    {
        return isset($this->Factor) ? $this->Factor : null;
    }
    /**
     * Set Factor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor
     */
    public function setFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        if (is_null($factor) || (is_array($factor) && empty($factor))) {
            unset($this->Factor);
        } else {
            $this->Factor = $factor;
        }
        return $this;
    }
    /**
     * Get VehicleAgeLeftBound value
     * @return int|null
     */
    public function getVehicleAgeLeftBound()
    {
        return $this->VehicleAgeLeftBound;
    }
    /**
     * Set VehicleAgeLeftBound value
     * @param int $vehicleAgeLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor
     */
    public function setVehicleAgeLeftBound($vehicleAgeLeftBound = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeLeftBound) && !is_numeric($vehicleAgeLeftBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeLeftBound)), __LINE__);
        }
        $this->VehicleAgeLeftBound = $vehicleAgeLeftBound;
        return $this;
    }
    /**
     * Get VehicleAgeRightBound value
     * @return int|null
     */
    public function getVehicleAgeRightBound()
    {
        return $this->VehicleAgeRightBound;
    }
    /**
     * Set VehicleAgeRightBound value
     * @param int $vehicleAgeRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor
     */
    public function setVehicleAgeRightBound($vehicleAgeRightBound = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleAgeRightBound) && !is_numeric($vehicleAgeRightBound)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleAgeRightBound)), __LINE__);
        }
        $this->VehicleAgeRightBound = $vehicleAgeRightBound;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor
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
