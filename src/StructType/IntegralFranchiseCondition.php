<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IntegralFranchiseCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IntegralFranchiseCondition
 * @subpackage Structs
 */
class IntegralFranchiseCondition extends AvailabilityConditionBase
{
    /**
     * The FranchiseValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FranchiseValue;
    /**
     * The IsIntegralFranchise
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsIntegralFranchise;
    /**
     * Constructor method for IntegralFranchiseCondition
     * @uses IntegralFranchiseCondition::setFranchiseValue()
     * @uses IntegralFranchiseCondition::setIsIntegralFranchise()
     * @param int $franchiseValue
     * @param bool $isIntegralFranchise
     */
    public function __construct($franchiseValue = null, $isIntegralFranchise = null)
    {
        $this
            ->setFranchiseValue($franchiseValue)
            ->setIsIntegralFranchise($isIntegralFranchise);
    }
    /**
     * Get FranchiseValue value
     * @return int|null
     */
    public function getFranchiseValue()
    {
        return $this->FranchiseValue;
    }
    /**
     * Set FranchiseValue value
     * @param int $franchiseValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IntegralFranchiseCondition
     */
    public function setFranchiseValue($franchiseValue = null)
    {
        // validation for constraint: int
        if (!is_null($franchiseValue) && !is_numeric($franchiseValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($franchiseValue)), __LINE__);
        }
        $this->FranchiseValue = $franchiseValue;
        return $this;
    }
    /**
     * Get IsIntegralFranchise value
     * @return bool|null
     */
    public function getIsIntegralFranchise()
    {
        return $this->IsIntegralFranchise;
    }
    /**
     * Set IsIntegralFranchise value
     * @param bool $isIntegralFranchise
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IntegralFranchiseCondition
     */
    public function setIsIntegralFranchise($isIntegralFranchise = null)
    {
        // validation for constraint: boolean
        if (!is_null($isIntegralFranchise) && !is_bool($isIntegralFranchise)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isIntegralFranchise)), __LINE__);
        }
        $this->IsIntegralFranchise = $isIntegralFranchise;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IntegralFranchiseCondition
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
