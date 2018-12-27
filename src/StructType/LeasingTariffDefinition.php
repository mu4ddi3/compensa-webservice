<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeasingTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LeasingTariffDefinition
 * @subpackage Structs
 */
class LeasingTariffDefinition extends CommonTariffDefinition
{
    /**
     * The LeasingRulesDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LeasingRulesDefinitionId;
    /**
     * Constructor method for LeasingTariffDefinition
     * @uses LeasingTariffDefinition::setLeasingRulesDefinitionId()
     * @param int $leasingRulesDefinitionId
     */
    public function __construct($leasingRulesDefinitionId = null)
    {
        $this
            ->setLeasingRulesDefinitionId($leasingRulesDefinitionId);
    }
    /**
     * Get LeasingRulesDefinitionId value
     * @return int|null
     */
    public function getLeasingRulesDefinitionId()
    {
        return $this->LeasingRulesDefinitionId;
    }
    /**
     * Set LeasingRulesDefinitionId value
     * @param int $leasingRulesDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingTariffDefinition
     */
    public function setLeasingRulesDefinitionId($leasingRulesDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($leasingRulesDefinitionId) && !is_numeric($leasingRulesDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($leasingRulesDefinitionId)), __LINE__);
        }
        $this->LeasingRulesDefinitionId = $leasingRulesDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingTariffDefinition
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
