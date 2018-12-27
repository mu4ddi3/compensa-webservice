<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SeriousInjuryCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SeriousInjuryCondition
 * @subpackage Structs
 */
class SeriousInjuryCondition extends AvailabilityConditionBase
{
    /**
     * The IsBrokeBone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBrokeBone;
    /**
     * Constructor method for SeriousInjuryCondition
     * @uses SeriousInjuryCondition::setIsBrokeBone()
     * @param bool $isBrokeBone
     */
    public function __construct($isBrokeBone = null)
    {
        $this
            ->setIsBrokeBone($isBrokeBone);
    }
    /**
     * Get IsBrokeBone value
     * @return bool|null
     */
    public function getIsBrokeBone()
    {
        return $this->IsBrokeBone;
    }
    /**
     * Set IsBrokeBone value
     * @param bool $isBrokeBone
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SeriousInjuryCondition
     */
    public function setIsBrokeBone($isBrokeBone = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBrokeBone) && !is_bool($isBrokeBone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBrokeBone)), __LINE__);
        }
        $this->IsBrokeBone = $isBrokeBone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SeriousInjuryCondition
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
