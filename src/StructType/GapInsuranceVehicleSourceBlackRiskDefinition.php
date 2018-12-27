<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GapInsuranceVehicleSourceBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GapInsuranceVehicleSourceBlackRiskDefinition
 * @subpackage Structs
 */
class GapInsuranceVehicleSourceBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The GapInsuranceVehicleSourceBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfGapInsuranceVehicleSourceBlackRiskRule
     */
    public $GapInsuranceVehicleSourceBlackRiskRules;
    /**
     * Constructor method for GapInsuranceVehicleSourceBlackRiskDefinition
     * @uses GapInsuranceVehicleSourceBlackRiskDefinition::setGapInsuranceVehicleSourceBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfGapInsuranceVehicleSourceBlackRiskRule $gapInsuranceVehicleSourceBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfGapInsuranceVehicleSourceBlackRiskRule $gapInsuranceVehicleSourceBlackRiskRules = null)
    {
        $this
            ->setGapInsuranceVehicleSourceBlackRiskRules($gapInsuranceVehicleSourceBlackRiskRules);
    }
    /**
     * Get GapInsuranceVehicleSourceBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfGapInsuranceVehicleSourceBlackRiskRule|null
     */
    public function getGapInsuranceVehicleSourceBlackRiskRules()
    {
        return isset($this->GapInsuranceVehicleSourceBlackRiskRules) ? $this->GapInsuranceVehicleSourceBlackRiskRules : null;
    }
    /**
     * Set GapInsuranceVehicleSourceBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfGapInsuranceVehicleSourceBlackRiskRule $gapInsuranceVehicleSourceBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GapInsuranceVehicleSourceBlackRiskDefinition
     */
    public function setGapInsuranceVehicleSourceBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfGapInsuranceVehicleSourceBlackRiskRule $gapInsuranceVehicleSourceBlackRiskRules = null)
    {
        if (is_null($gapInsuranceVehicleSourceBlackRiskRules) || (is_array($gapInsuranceVehicleSourceBlackRiskRules) && empty($gapInsuranceVehicleSourceBlackRiskRules))) {
            unset($this->GapInsuranceVehicleSourceBlackRiskRules);
        } else {
            $this->GapInsuranceVehicleSourceBlackRiskRules = $gapInsuranceVehicleSourceBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GapInsuranceVehicleSourceBlackRiskDefinition
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
