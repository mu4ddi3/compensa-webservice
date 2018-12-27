<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyDurationCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PolicyDurationCondition
 * @subpackage Structs
 */
class PolicyDurationCondition extends AvailabilityConditionBase
{
    /**
     * The PolicyDurations
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyDuration
     */
    public $PolicyDurations;
    /**
     * Constructor method for PolicyDurationCondition
     * @uses PolicyDurationCondition::setPolicyDurations()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyDuration $policyDurations
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyDuration $policyDurations = null)
    {
        $this
            ->setPolicyDurations($policyDurations);
    }
    /**
     * Get PolicyDurations value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyDuration|null
     */
    public function getPolicyDurations()
    {
        return isset($this->PolicyDurations) ? $this->PolicyDurations : null;
    }
    /**
     * Set PolicyDurations value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyDuration $policyDurations
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationCondition
     */
    public function setPolicyDurations(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyDuration $policyDurations = null)
    {
        if (is_null($policyDurations) || (is_array($policyDurations) && empty($policyDurations))) {
            unset($this->PolicyDurations);
        } else {
            $this->PolicyDurations = $policyDurations;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyDurationCondition
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
