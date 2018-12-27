<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NoConsumtionInsuranceSumCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:NoConsumtionInsuranceSumCondition
 * @subpackage Structs
 */
class NoConsumtionInsuranceSumCondition extends AvailabilityConditionBase
{
    /**
     * The IsNoConsumptionInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsNoConsumptionInsuranceSum;
    /**
     * Constructor method for NoConsumtionInsuranceSumCondition
     * @uses NoConsumtionInsuranceSumCondition::setIsNoConsumptionInsuranceSum()
     * @param bool $isNoConsumptionInsuranceSum
     */
    public function __construct($isNoConsumptionInsuranceSum = null)
    {
        $this
            ->setIsNoConsumptionInsuranceSum($isNoConsumptionInsuranceSum);
    }
    /**
     * Get IsNoConsumptionInsuranceSum value
     * @return bool|null
     */
    public function getIsNoConsumptionInsuranceSum()
    {
        return $this->IsNoConsumptionInsuranceSum;
    }
    /**
     * Set IsNoConsumptionInsuranceSum value
     * @param bool $isNoConsumptionInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoConsumtionInsuranceSumCondition
     */
    public function setIsNoConsumptionInsuranceSum($isNoConsumptionInsuranceSum = null)
    {
        // validation for constraint: boolean
        if (!is_null($isNoConsumptionInsuranceSum) && !is_bool($isNoConsumptionInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isNoConsumptionInsuranceSum)), __LINE__);
        }
        $this->IsNoConsumptionInsuranceSum = $isNoConsumptionInsuranceSum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoConsumtionInsuranceSumCondition
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
