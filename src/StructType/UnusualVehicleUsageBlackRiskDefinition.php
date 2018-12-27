<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnusualVehicleUsageBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UnusualVehicleUsageBlackRiskDefinition
 * @subpackage Structs
 */
class UnusualVehicleUsageBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The UnusualVehicleUsageBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageBlackRiskRule
     */
    public $UnusualVehicleUsageBlackRiskRules;
    /**
     * Constructor method for UnusualVehicleUsageBlackRiskDefinition
     * @uses UnusualVehicleUsageBlackRiskDefinition::setUnusualVehicleUsageBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageBlackRiskRule $unusualVehicleUsageBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageBlackRiskRule $unusualVehicleUsageBlackRiskRules = null)
    {
        $this
            ->setUnusualVehicleUsageBlackRiskRules($unusualVehicleUsageBlackRiskRules);
    }
    /**
     * Get UnusualVehicleUsageBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageBlackRiskRule|null
     */
    public function getUnusualVehicleUsageBlackRiskRules()
    {
        return isset($this->UnusualVehicleUsageBlackRiskRules) ? $this->UnusualVehicleUsageBlackRiskRules : null;
    }
    /**
     * Set UnusualVehicleUsageBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageBlackRiskRule $unusualVehicleUsageBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskDefinition
     */
    public function setUnusualVehicleUsageBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageBlackRiskRule $unusualVehicleUsageBlackRiskRules = null)
    {
        if (is_null($unusualVehicleUsageBlackRiskRules) || (is_array($unusualVehicleUsageBlackRiskRules) && empty($unusualVehicleUsageBlackRiskRules))) {
            unset($this->UnusualVehicleUsageBlackRiskRules);
        } else {
            $this->UnusualVehicleUsageBlackRiskRules = $unusualVehicleUsageBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageBlackRiskDefinition
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
