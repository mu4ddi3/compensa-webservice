<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnginePowerBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EnginePowerBlackRiskDefinition
 * @subpackage Structs
 */
class EnginePowerBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The EnginePowerBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerBlackRiskRule
     */
    public $EnginePowerBlackRiskRules;
    /**
     * Constructor method for EnginePowerBlackRiskDefinition
     * @uses EnginePowerBlackRiskDefinition::setEnginePowerBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerBlackRiskRule $enginePowerBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerBlackRiskRule $enginePowerBlackRiskRules = null)
    {
        $this
            ->setEnginePowerBlackRiskRules($enginePowerBlackRiskRules);
    }
    /**
     * Get EnginePowerBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerBlackRiskRule|null
     */
    public function getEnginePowerBlackRiskRules()
    {
        return isset($this->EnginePowerBlackRiskRules) ? $this->EnginePowerBlackRiskRules : null;
    }
    /**
     * Set EnginePowerBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerBlackRiskRule $enginePowerBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskDefinition
     */
    public function setEnginePowerBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerBlackRiskRule $enginePowerBlackRiskRules = null)
    {
        if (is_null($enginePowerBlackRiskRules) || (is_array($enginePowerBlackRiskRules) && empty($enginePowerBlackRiskRules))) {
            unset($this->EnginePowerBlackRiskRules);
        } else {
            $this->EnginePowerBlackRiskRules = $enginePowerBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerBlackRiskDefinition
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
