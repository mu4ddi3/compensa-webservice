<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimalVehicleValueOtherThanInfoEkspertBlackRiskDefinition
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MinimalVehicleValueOtherThanInfoEkspertBlackRiskDefinition
 * @subpackage Structs
 */
class MinimalVehicleValueOtherThanInfoEkspertBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The MinimalVehicleValueOtherThanInfoEkspertBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule
     */
    public $MinimalVehicleValueOtherThanInfoEkspertBlackRiskRules;
    /**
     * Constructor method for
     * MinimalVehicleValueOtherThanInfoEkspertBlackRiskDefinition
     * @uses MinimalVehicleValueOtherThanInfoEkspertBlackRiskDefinition::setMinimalVehicleValueOtherThanInfoEkspertBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule $minimalVehicleValueOtherThanInfoEkspertBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule $minimalVehicleValueOtherThanInfoEkspertBlackRiskRules = null)
    {
        $this
            ->setMinimalVehicleValueOtherThanInfoEkspertBlackRiskRules($minimalVehicleValueOtherThanInfoEkspertBlackRiskRules);
    }
    /**
     * Get MinimalVehicleValueOtherThanInfoEkspertBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule|null
     */
    public function getMinimalVehicleValueOtherThanInfoEkspertBlackRiskRules()
    {
        return isset($this->MinimalVehicleValueOtherThanInfoEkspertBlackRiskRules) ? $this->MinimalVehicleValueOtherThanInfoEkspertBlackRiskRules : null;
    }
    /**
     * Set MinimalVehicleValueOtherThanInfoEkspertBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule $minimalVehicleValueOtherThanInfoEkspertBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskDefinition
     */
    public function setMinimalVehicleValueOtherThanInfoEkspertBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMinimalVehicleValueOtherThanInfoEkspertBlackRiskRule $minimalVehicleValueOtherThanInfoEkspertBlackRiskRules = null)
    {
        if (is_null($minimalVehicleValueOtherThanInfoEkspertBlackRiskRules) || (is_array($minimalVehicleValueOtherThanInfoEkspertBlackRiskRules) && empty($minimalVehicleValueOtherThanInfoEkspertBlackRiskRules))) {
            unset($this->MinimalVehicleValueOtherThanInfoEkspertBlackRiskRules);
        } else {
            $this->MinimalVehicleValueOtherThanInfoEkspertBlackRiskRules = $minimalVehicleValueOtherThanInfoEkspertBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalVehicleValueOtherThanInfoEkspertBlackRiskDefinition
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
