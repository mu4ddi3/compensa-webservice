<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContinuationCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ContinuationCondition
 * @subpackage Structs
 */
class ContinuationCondition extends AvailabilityConditionBase
{
    /**
     * The IsContinuation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsContinuation;
    /**
     * Constructor method for ContinuationCondition
     * @uses ContinuationCondition::setIsContinuation()
     * @param bool $isContinuation
     */
    public function __construct($isContinuation = null)
    {
        $this
            ->setIsContinuation($isContinuation);
    }
    /**
     * Get IsContinuation value
     * @return bool|null
     */
    public function getIsContinuation()
    {
        return $this->IsContinuation;
    }
    /**
     * Set IsContinuation value
     * @param bool $isContinuation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationCondition
     */
    public function setIsContinuation($isContinuation = null)
    {
        // validation for constraint: boolean
        if (!is_null($isContinuation) && !is_bool($isContinuation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isContinuation)), __LINE__);
        }
        $this->IsContinuation = $isContinuation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContinuationCondition
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
