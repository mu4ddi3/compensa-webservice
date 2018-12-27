<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PomocInsuranceVehicleAgeBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PomocInsuranceVehicleAgeBlackRiskDefinition
 * @subpackage Structs
 */
class PomocInsuranceVehicleAgeBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The PomocInsuranceVehicleAgeBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPomocInsuranceVehicleAgeBlackRiskRule
     */
    public $PomocInsuranceVehicleAgeBlackRiskRules;
    /**
     * Constructor method for PomocInsuranceVehicleAgeBlackRiskDefinition
     * @uses PomocInsuranceVehicleAgeBlackRiskDefinition::setPomocInsuranceVehicleAgeBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPomocInsuranceVehicleAgeBlackRiskRule $pomocInsuranceVehicleAgeBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPomocInsuranceVehicleAgeBlackRiskRule $pomocInsuranceVehicleAgeBlackRiskRules = null)
    {
        $this
            ->setPomocInsuranceVehicleAgeBlackRiskRules($pomocInsuranceVehicleAgeBlackRiskRules);
    }
    /**
     * Get PomocInsuranceVehicleAgeBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPomocInsuranceVehicleAgeBlackRiskRule|null
     */
    public function getPomocInsuranceVehicleAgeBlackRiskRules()
    {
        return isset($this->PomocInsuranceVehicleAgeBlackRiskRules) ? $this->PomocInsuranceVehicleAgeBlackRiskRules : null;
    }
    /**
     * Set PomocInsuranceVehicleAgeBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPomocInsuranceVehicleAgeBlackRiskRule $pomocInsuranceVehicleAgeBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskDefinition
     */
    public function setPomocInsuranceVehicleAgeBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPomocInsuranceVehicleAgeBlackRiskRule $pomocInsuranceVehicleAgeBlackRiskRules = null)
    {
        if (is_null($pomocInsuranceVehicleAgeBlackRiskRules) || (is_array($pomocInsuranceVehicleAgeBlackRiskRules) && empty($pomocInsuranceVehicleAgeBlackRiskRules))) {
            unset($this->PomocInsuranceVehicleAgeBlackRiskRules);
        } else {
            $this->PomocInsuranceVehicleAgeBlackRiskRules = $pomocInsuranceVehicleAgeBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PomocInsuranceVehicleAgeBlackRiskDefinition
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
