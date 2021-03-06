<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WdInsurancePolicyDurationBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:WdInsurancePolicyDurationBlackRiskDefinition
 * @subpackage Structs
 */
class WdInsurancePolicyDurationBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The WdInsurancePolicyDurationBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfWdInsurancePolicyDurationBlackRiskRule
     */
    public $WdInsurancePolicyDurationBlackRiskRules;
    /**
     * Constructor method for WdInsurancePolicyDurationBlackRiskDefinition
     * @uses WdInsurancePolicyDurationBlackRiskDefinition::setWdInsurancePolicyDurationBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfWdInsurancePolicyDurationBlackRiskRule $wdInsurancePolicyDurationBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfWdInsurancePolicyDurationBlackRiskRule $wdInsurancePolicyDurationBlackRiskRules = null)
    {
        $this
            ->setWdInsurancePolicyDurationBlackRiskRules($wdInsurancePolicyDurationBlackRiskRules);
    }
    /**
     * Get WdInsurancePolicyDurationBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfWdInsurancePolicyDurationBlackRiskRule|null
     */
    public function getWdInsurancePolicyDurationBlackRiskRules()
    {
        return isset($this->WdInsurancePolicyDurationBlackRiskRules) ? $this->WdInsurancePolicyDurationBlackRiskRules : null;
    }
    /**
     * Set WdInsurancePolicyDurationBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfWdInsurancePolicyDurationBlackRiskRule $wdInsurancePolicyDurationBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskDefinition
     */
    public function setWdInsurancePolicyDurationBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfWdInsurancePolicyDurationBlackRiskRule $wdInsurancePolicyDurationBlackRiskRules = null)
    {
        if (is_null($wdInsurancePolicyDurationBlackRiskRules) || (is_array($wdInsurancePolicyDurationBlackRiskRules) && empty($wdInsurancePolicyDurationBlackRiskRules))) {
            unset($this->WdInsurancePolicyDurationBlackRiskRules);
        } else {
            $this->WdInsurancePolicyDurationBlackRiskRules = $wdInsurancePolicyDurationBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WdInsurancePolicyDurationBlackRiskDefinition
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
