<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeductibleVariantPolicyDurationBlackRiskDefinition
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DeductibleVariantPolicyDurationBlackRiskDefinition
 * @subpackage Structs
 */
class DeductibleVariantPolicyDurationBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The DeductibleVariantPolicyDurationBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantPolicyDurationBlackRiskRule
     */
    public $DeductibleVariantPolicyDurationBlackRiskRules;
    /**
     * Constructor method for DeductibleVariantPolicyDurationBlackRiskDefinition
     * @uses DeductibleVariantPolicyDurationBlackRiskDefinition::setDeductibleVariantPolicyDurationBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantPolicyDurationBlackRiskRule $deductibleVariantPolicyDurationBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantPolicyDurationBlackRiskRule $deductibleVariantPolicyDurationBlackRiskRules = null)
    {
        $this
            ->setDeductibleVariantPolicyDurationBlackRiskRules($deductibleVariantPolicyDurationBlackRiskRules);
    }
    /**
     * Get DeductibleVariantPolicyDurationBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantPolicyDurationBlackRiskRule|null
     */
    public function getDeductibleVariantPolicyDurationBlackRiskRules()
    {
        return isset($this->DeductibleVariantPolicyDurationBlackRiskRules) ? $this->DeductibleVariantPolicyDurationBlackRiskRules : null;
    }
    /**
     * Set DeductibleVariantPolicyDurationBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantPolicyDurationBlackRiskRule $deductibleVariantPolicyDurationBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskDefinition
     */
    public function setDeductibleVariantPolicyDurationBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantPolicyDurationBlackRiskRule $deductibleVariantPolicyDurationBlackRiskRules = null)
    {
        if (is_null($deductibleVariantPolicyDurationBlackRiskRules) || (is_array($deductibleVariantPolicyDurationBlackRiskRules) && empty($deductibleVariantPolicyDurationBlackRiskRules))) {
            unset($this->DeductibleVariantPolicyDurationBlackRiskRules);
        } else {
            $this->DeductibleVariantPolicyDurationBlackRiskRules = $deductibleVariantPolicyDurationBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantPolicyDurationBlackRiskDefinition
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
