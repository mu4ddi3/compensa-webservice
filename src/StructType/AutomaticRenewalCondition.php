<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AutomaticRenewalCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AutomaticRenewalCondition
 * @subpackage Structs
 */
class AutomaticRenewalCondition extends AvailabilityConditionBase
{
    /**
     * The IsAutomaticRenewal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAutomaticRenewal;
    /**
     * Constructor method for AutomaticRenewalCondition
     * @uses AutomaticRenewalCondition::setIsAutomaticRenewal()
     * @param bool $isAutomaticRenewal
     */
    public function __construct($isAutomaticRenewal = null)
    {
        $this
            ->setIsAutomaticRenewal($isAutomaticRenewal);
    }
    /**
     * Get IsAutomaticRenewal value
     * @return bool|null
     */
    public function getIsAutomaticRenewal()
    {
        return $this->IsAutomaticRenewal;
    }
    /**
     * Set IsAutomaticRenewal value
     * @param bool $isAutomaticRenewal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AutomaticRenewalCondition
     */
    public function setIsAutomaticRenewal($isAutomaticRenewal = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAutomaticRenewal) && !is_bool($isAutomaticRenewal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAutomaticRenewal)), __LINE__);
        }
        $this->IsAutomaticRenewal = $isAutomaticRenewal;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AutomaticRenewalCondition
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
