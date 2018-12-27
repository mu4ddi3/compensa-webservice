<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskMaximalInsuranceSumAcRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskMaximalInsuranceSumAcRequest
 * @subpackage Structs
 */
class GetIsBlackRiskMaximalInsuranceSumAcRequest extends GetIsBlackRiskRequest
{
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * The VehicleValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $VehicleValue;
    /**
     * Constructor method for GetIsBlackRiskMaximalInsuranceSumAcRequest
     * @uses GetIsBlackRiskMaximalInsuranceSumAcRequest::setVehicleGroupId()
     * @uses GetIsBlackRiskMaximalInsuranceSumAcRequest::setVehicleValue()
     * @param int $vehicleGroupId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue
     */
    public function __construct($vehicleGroupId = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue = null)
    {
        $this
            ->setVehicleGroupId($vehicleGroupId)
            ->setVehicleValue($vehicleValue);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMaximalInsuranceSumAcRequest
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
     * Get VehicleValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getVehicleValue()
    {
        return isset($this->VehicleValue) ? $this->VehicleValue : null;
    }
    /**
     * Set VehicleValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMaximalInsuranceSumAcRequest
     */
    public function setVehicleValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue = null)
    {
        if (is_null($vehicleValue) || (is_array($vehicleValue) && empty($vehicleValue))) {
            unset($this->VehicleValue);
        } else {
            $this->VehicleValue = $vehicleValue;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMaximalInsuranceSumAcRequest
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
