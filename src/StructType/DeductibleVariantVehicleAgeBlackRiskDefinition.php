<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeductibleVariantVehicleAgeBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DeductibleVariantVehicleAgeBlackRiskDefinition
 * @subpackage Structs
 */
class DeductibleVariantVehicleAgeBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The DeductibleVariantVehicleAgeBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantVehicleAgeBlackRiskRule
     */
    public $DeductibleVariantVehicleAgeBlackRiskRules;
    /**
     * Constructor method for DeductibleVariantVehicleAgeBlackRiskDefinition
     * @uses DeductibleVariantVehicleAgeBlackRiskDefinition::setDeductibleVariantVehicleAgeBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantVehicleAgeBlackRiskRule $deductibleVariantVehicleAgeBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantVehicleAgeBlackRiskRule $deductibleVariantVehicleAgeBlackRiskRules = null)
    {
        $this
            ->setDeductibleVariantVehicleAgeBlackRiskRules($deductibleVariantVehicleAgeBlackRiskRules);
    }
    /**
     * Get DeductibleVariantVehicleAgeBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantVehicleAgeBlackRiskRule|null
     */
    public function getDeductibleVariantVehicleAgeBlackRiskRules()
    {
        return isset($this->DeductibleVariantVehicleAgeBlackRiskRules) ? $this->DeductibleVariantVehicleAgeBlackRiskRules : null;
    }
    /**
     * Set DeductibleVariantVehicleAgeBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantVehicleAgeBlackRiskRule $deductibleVariantVehicleAgeBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskDefinition
     */
    public function setDeductibleVariantVehicleAgeBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDeductibleVariantVehicleAgeBlackRiskRule $deductibleVariantVehicleAgeBlackRiskRules = null)
    {
        if (is_null($deductibleVariantVehicleAgeBlackRiskRules) || (is_array($deductibleVariantVehicleAgeBlackRiskRules) && empty($deductibleVariantVehicleAgeBlackRiskRules))) {
            unset($this->DeductibleVariantVehicleAgeBlackRiskRules);
        } else {
            $this->DeductibleVariantVehicleAgeBlackRiskRules = $deductibleVariantVehicleAgeBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DeductibleVariantVehicleAgeBlackRiskDefinition
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
