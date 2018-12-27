<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AmortizationCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AmortizationCondition
 * @subpackage Structs
 */
class AmortizationCondition extends AvailabilityConditionBase
{
    /**
     * The IsAmortizationCancelled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAmortizationCancelled;
    /**
     * Constructor method for AmortizationCondition
     * @uses AmortizationCondition::setIsAmortizationCancelled()
     * @param bool $isAmortizationCancelled
     */
    public function __construct($isAmortizationCancelled = null)
    {
        $this
            ->setIsAmortizationCancelled($isAmortizationCancelled);
    }
    /**
     * Get IsAmortizationCancelled value
     * @return bool|null
     */
    public function getIsAmortizationCancelled()
    {
        return $this->IsAmortizationCancelled;
    }
    /**
     * Set IsAmortizationCancelled value
     * @param bool $isAmortizationCancelled
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AmortizationCondition
     */
    public function setIsAmortizationCancelled($isAmortizationCancelled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAmortizationCancelled) && !is_bool($isAmortizationCancelled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAmortizationCancelled)), __LINE__);
        }
        $this->IsAmortizationCancelled = $isAmortizationCancelled;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AmortizationCondition
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
