<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasePremiumDnaRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasePremiumDnaRequest
 * @subpackage Structs
 */
class GetBasePremiumDnaRequest extends GetBasePremiumRequest
{
    /**
     * The IsDnaMarked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsDnaMarked;
    /**
     * The VehicleValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $VehicleValue;
    /**
     * Constructor method for GetBasePremiumDnaRequest
     * @uses GetBasePremiumDnaRequest::setIsDnaMarked()
     * @uses GetBasePremiumDnaRequest::setVehicleValue()
     * @param bool $isDnaMarked
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue
     */
    public function __construct($isDnaMarked = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $vehicleValue = null)
    {
        $this
            ->setIsDnaMarked($isDnaMarked)
            ->setVehicleValue($vehicleValue);
    }
    /**
     * Get IsDnaMarked value
     * @return bool|null
     */
    public function getIsDnaMarked()
    {
        return $this->IsDnaMarked;
    }
    /**
     * Set IsDnaMarked value
     * @param bool $isDnaMarked
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumDnaRequest
     */
    public function setIsDnaMarked($isDnaMarked = null)
    {
        // validation for constraint: boolean
        if (!is_null($isDnaMarked) && !is_bool($isDnaMarked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isDnaMarked)), __LINE__);
        }
        $this->IsDnaMarked = $isDnaMarked;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumDnaRequest
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumDnaRequest
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
