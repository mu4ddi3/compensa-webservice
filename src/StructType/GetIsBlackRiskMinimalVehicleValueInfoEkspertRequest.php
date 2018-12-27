<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest
 * @subpackage Structs
 */
class GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest extends GetIsBlackRiskRequest
{
    /**
     * The IsAcContinuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcContinuation;
    /**
     * The MinimalVehicleValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $MinimalVehicleValue;
    /**
     * The VehicleValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $VehicleValue;
    /**
     * Constructor method for GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest
     * @uses GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest::setIsAcContinuation()
     * @uses GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest::setMinimalVehicleValue()
     * @uses GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest::setVehicleValue()
     * @param bool $isAcContinuation
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalVehicleValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue
     */
    public function __construct($isAcContinuation = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalVehicleValue = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue = null)
    {
        $this
            ->setIsAcContinuation($isAcContinuation)
            ->setMinimalVehicleValue($minimalVehicleValue)
            ->setVehicleValue($vehicleValue);
    }
    /**
     * Get IsAcContinuation value
     * @return bool|null
     */
    public function getIsAcContinuation()
    {
        return $this->IsAcContinuation;
    }
    /**
     * Set IsAcContinuation value
     * @param bool $isAcContinuation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest
     */
    public function setIsAcContinuation($isAcContinuation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAcContinuation) && !is_bool($isAcContinuation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAcContinuation)), __LINE__);
        }
        $this->IsAcContinuation = $isAcContinuation;
        return $this;
    }
    /**
     * Get MinimalVehicleValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getMinimalVehicleValue()
    {
        return isset($this->MinimalVehicleValue) ? $this->MinimalVehicleValue : null;
    }
    /**
     * Set MinimalVehicleValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalVehicleValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest
     */
    public function setMinimalVehicleValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minimalVehicleValue = null)
    {
        if (is_null($minimalVehicleValue) || (is_array($minimalVehicleValue) && empty($minimalVehicleValue))) {
            unset($this->MinimalVehicleValue);
        } else {
            $this->MinimalVehicleValue = $minimalVehicleValue;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMinimalVehicleValueInfoEkspertRequest
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
