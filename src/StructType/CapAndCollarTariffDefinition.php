<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CapAndCollarTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CapAndCollarTariffDefinition
 * @subpackage Structs
 */
class CapAndCollarTariffDefinition extends AbstractStructBase
{
    /**
     * The CapAndCollarAcDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CapAndCollarAcDefinitionId;
    /**
     * The CapAndCollarOcDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CapAndCollarOcDefinitionId;
    /**
     * Constructor method for CapAndCollarTariffDefinition
     * @uses CapAndCollarTariffDefinition::setCapAndCollarAcDefinitionId()
     * @uses CapAndCollarTariffDefinition::setCapAndCollarOcDefinitionId()
     * @param int $capAndCollarAcDefinitionId
     * @param int $capAndCollarOcDefinitionId
     */
    public function __construct($capAndCollarAcDefinitionId = null, $capAndCollarOcDefinitionId = null)
    {
        $this
            ->setCapAndCollarAcDefinitionId($capAndCollarAcDefinitionId)
            ->setCapAndCollarOcDefinitionId($capAndCollarOcDefinitionId);
    }
    /**
     * Get CapAndCollarAcDefinitionId value
     * @return int|null
     */
    public function getCapAndCollarAcDefinitionId()
    {
        return $this->CapAndCollarAcDefinitionId;
    }
    /**
     * Set CapAndCollarAcDefinitionId value
     * @param int $capAndCollarAcDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarTariffDefinition
     */
    public function setCapAndCollarAcDefinitionId($capAndCollarAcDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($capAndCollarAcDefinitionId) && !is_numeric($capAndCollarAcDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capAndCollarAcDefinitionId)), __LINE__);
        }
        $this->CapAndCollarAcDefinitionId = $capAndCollarAcDefinitionId;
        return $this;
    }
    /**
     * Get CapAndCollarOcDefinitionId value
     * @return int|null
     */
    public function getCapAndCollarOcDefinitionId()
    {
        return $this->CapAndCollarOcDefinitionId;
    }
    /**
     * Set CapAndCollarOcDefinitionId value
     * @param int $capAndCollarOcDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarTariffDefinition
     */
    public function setCapAndCollarOcDefinitionId($capAndCollarOcDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($capAndCollarOcDefinitionId) && !is_numeric($capAndCollarOcDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capAndCollarOcDefinitionId)), __LINE__);
        }
        $this->CapAndCollarOcDefinitionId = $capAndCollarOcDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarTariffDefinition
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
