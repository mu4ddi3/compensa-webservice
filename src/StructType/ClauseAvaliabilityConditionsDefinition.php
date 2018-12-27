<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClauseAvaliabilityConditionsDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClauseAvaliabilityConditionsDefinition
 * @subpackage Structs
 */
class ClauseAvaliabilityConditionsDefinition extends AvaliabilityConditionsDefinition
{
    /**
     * The RiskExistenceAvaliabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RiskExistenceAvaliabilityCondition
     */
    public $RiskExistenceAvaliabilityCondition;
    /**
     * Constructor method for ClauseAvaliabilityConditionsDefinition
     * @uses ClauseAvaliabilityConditionsDefinition::setRiskExistenceAvaliabilityCondition()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskExistenceAvaliabilityCondition $riskExistenceAvaliabilityCondition
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\RiskExistenceAvaliabilityCondition $riskExistenceAvaliabilityCondition = null)
    {
        $this
            ->setRiskExistenceAvaliabilityCondition($riskExistenceAvaliabilityCondition);
    }
    /**
     * Get RiskExistenceAvaliabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskExistenceAvaliabilityCondition|null
     */
    public function getRiskExistenceAvaliabilityCondition()
    {
        return isset($this->RiskExistenceAvaliabilityCondition) ? $this->RiskExistenceAvaliabilityCondition : null;
    }
    /**
     * Set RiskExistenceAvaliabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskExistenceAvaliabilityCondition $riskExistenceAvaliabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseAvaliabilityConditionsDefinition
     */
    public function setRiskExistenceAvaliabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\RiskExistenceAvaliabilityCondition $riskExistenceAvaliabilityCondition = null)
    {
        if (is_null($riskExistenceAvaliabilityCondition) || (is_array($riskExistenceAvaliabilityCondition) && empty($riskExistenceAvaliabilityCondition))) {
            unset($this->RiskExistenceAvaliabilityCondition);
        } else {
            $this->RiskExistenceAvaliabilityCondition = $riskExistenceAvaliabilityCondition;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseAvaliabilityConditionsDefinition
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
