<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
 * @subpackage Structs
 */
class MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule extends BlackRiskRule
{
    /**
     * The MinInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $MinInsuranceSum;
    /**
     * The VehicleValueSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VehicleValueSource;
    /**
     * Constructor method for MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     * @uses MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule::setMinInsuranceSum()
     * @uses MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule::setVehicleValueSource()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minInsuranceSum
     * @param string $vehicleValueSource
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minInsuranceSum = null, $vehicleValueSource = null)
    {
        $this
            ->setMinInsuranceSum($minInsuranceSum)
            ->setVehicleValueSource($vehicleValueSource);
    }
    /**
     * Get MinInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getMinInsuranceSum()
    {
        return isset($this->MinInsuranceSum) ? $this->MinInsuranceSum : null;
    }
    /**
     * Set MinInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     */
    public function setMinInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $minInsuranceSum = null)
    {
        if (is_null($minInsuranceSum) || (is_array($minInsuranceSum) && empty($minInsuranceSum))) {
            unset($this->MinInsuranceSum);
        } else {
            $this->MinInsuranceSum = $minInsuranceSum;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
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
