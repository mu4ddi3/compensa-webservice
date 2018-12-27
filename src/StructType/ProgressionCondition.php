<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProgressionCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ProgressionCondition
 * @subpackage Structs
 */
class ProgressionCondition extends AvailabilityConditionBase
{
    /**
     * The IsProgression
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsProgression;
    /**
     * Constructor method for ProgressionCondition
     * @uses ProgressionCondition::setIsProgression()
     * @param bool $isProgression
     */
    public function __construct($isProgression = null)
    {
        $this
            ->setIsProgression($isProgression);
    }
    /**
     * Get IsProgression value
     * @return bool|null
     */
    public function getIsProgression()
    {
        return $this->IsProgression;
    }
    /**
     * Set IsProgression value
     * @param bool $isProgression
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition
     */
    public function setIsProgression($isProgression = null)
    {
        // validation for constraint: boolean
        if (!is_null($isProgression) && !is_bool($isProgression)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isProgression)), __LINE__);
        }
        $this->IsProgression = $isProgression;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProgressionCondition
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
