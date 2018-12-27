<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AssistanceInsuranceBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AssistanceInsuranceBlackRiskDefinition
 * @subpackage Structs
 */
class AssistanceInsuranceBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The AssistanceInsuranceBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceBlackRiskRule
     */
    public $AssistanceInsuranceBlackRiskRules;
    /**
     * Constructor method for AssistanceInsuranceBlackRiskDefinition
     * @uses AssistanceInsuranceBlackRiskDefinition::setAssistanceInsuranceBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceBlackRiskRule $assistanceInsuranceBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceBlackRiskRule $assistanceInsuranceBlackRiskRules = null)
    {
        $this
            ->setAssistanceInsuranceBlackRiskRules($assistanceInsuranceBlackRiskRules);
    }
    /**
     * Get AssistanceInsuranceBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceBlackRiskRule|null
     */
    public function getAssistanceInsuranceBlackRiskRules()
    {
        return isset($this->AssistanceInsuranceBlackRiskRules) ? $this->AssistanceInsuranceBlackRiskRules : null;
    }
    /**
     * Set AssistanceInsuranceBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceBlackRiskRule $assistanceInsuranceBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskDefinition
     */
    public function setAssistanceInsuranceBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAssistanceInsuranceBlackRiskRule $assistanceInsuranceBlackRiskRules = null)
    {
        if (is_null($assistanceInsuranceBlackRiskRules) || (is_array($assistanceInsuranceBlackRiskRules) && empty($assistanceInsuranceBlackRiskRules))) {
            unset($this->AssistanceInsuranceBlackRiskRules);
        } else {
            $this->AssistanceInsuranceBlackRiskRules = $assistanceInsuranceBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AssistanceInsuranceBlackRiskDefinition
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
