<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConstantInsuranceSumCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ConstantInsuranceSumCondition
 * @subpackage Structs
 */
class ConstantInsuranceSumCondition extends AvailabilityConditionBase
{
    /**
     * The IsConstantInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsConstantInsuranceSum;
    /**
     * Constructor method for ConstantInsuranceSumCondition
     * @uses ConstantInsuranceSumCondition::setIsConstantInsuranceSum()
     * @param bool $isConstantInsuranceSum
     */
    public function __construct($isConstantInsuranceSum = null)
    {
        $this
            ->setIsConstantInsuranceSum($isConstantInsuranceSum);
    }
    /**
     * Get IsConstantInsuranceSum value
     * @return bool|null
     */
    public function getIsConstantInsuranceSum()
    {
        return $this->IsConstantInsuranceSum;
    }
    /**
     * Set IsConstantInsuranceSum value
     * @param bool $isConstantInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCondition
     */
    public function setIsConstantInsuranceSum($isConstantInsuranceSum = null)
    {
        // validation for constraint: boolean
        if (!is_null($isConstantInsuranceSum) && !is_bool($isConstantInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isConstantInsuranceSum)), __LINE__);
        }
        $this->IsConstantInsuranceSum = $isConstantInsuranceSum;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCondition
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
