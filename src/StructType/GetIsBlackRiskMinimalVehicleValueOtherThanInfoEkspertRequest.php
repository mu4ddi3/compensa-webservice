<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest
 * @subpackage Structs
 */
class GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest extends GetIsBlackRiskRequest
{
    /**
     * The IsAcContinuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAcContinuation;
    /**
     * The VehicleValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $VehicleValue;
    /**
     * The VehicleValueSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleValueSource;
    /**
     * Constructor method for
     * GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest
     * @uses GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest::setIsAcContinuation()
     * @uses GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest::setVehicleValue()
     * @uses GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest::setVehicleValueSource()
     * @param bool $isAcContinuation
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue
     * @param string $vehicleValueSource
     */
    public function __construct($isAcContinuation = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue = null, $vehicleValueSource = null)
    {
        $this
            ->setIsAcContinuation($isAcContinuation)
            ->setVehicleValue($vehicleValue)
            ->setVehicleValueSource($vehicleValueSource);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest
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
     * Get VehicleValueSource value
     * @return string|null
     */
    public function getVehicleValueSource()
    {
        return $this->VehicleValueSource;
    }
    /**
     * Set VehicleValueSource value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleValueSource::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VehicleValueSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $vehicleValueSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest
     */
    public function setVehicleValueSource($vehicleValueSource = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VehicleValueSource::valueIsValid($vehicleValueSource)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $vehicleValueSource, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VehicleValueSource::getValidValues())), __LINE__);
        }
        $this->VehicleValueSource = $vehicleValueSource;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsBlackRiskMinimalVehicleValueOtherThanInfoEkspertRequest
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
