<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShortTermTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ShortTermTariffDefinition
 * @subpackage Structs
 */
class ShortTermTariffDefinition extends CommonTariffDefinition
{
    /**
     * The ShortTermFactorsAcWdDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ShortTermFactorsAcWdDefinitionId;
    /**
     * The ShortTermFactorsOcDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ShortTermFactorsOcDefinitionId;
    /**
     * Constructor method for ShortTermTariffDefinition
     * @uses ShortTermTariffDefinition::setShortTermFactorsAcWdDefinitionId()
     * @uses ShortTermTariffDefinition::setShortTermFactorsOcDefinitionId()
     * @param int $shortTermFactorsAcWdDefinitionId
     * @param int $shortTermFactorsOcDefinitionId
     */
    public function __construct($shortTermFactorsAcWdDefinitionId = null, $shortTermFactorsOcDefinitionId = null)
    {
        $this
            ->setShortTermFactorsAcWdDefinitionId($shortTermFactorsAcWdDefinitionId)
            ->setShortTermFactorsOcDefinitionId($shortTermFactorsOcDefinitionId);
    }
    /**
     * Get ShortTermFactorsAcWdDefinitionId value
     * @return int|null
     */
    public function getShortTermFactorsAcWdDefinitionId()
    {
        return $this->ShortTermFactorsAcWdDefinitionId;
    }
    /**
     * Set ShortTermFactorsAcWdDefinitionId value
     * @param int $shortTermFactorsAcWdDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermTariffDefinition
     */
    public function setShortTermFactorsAcWdDefinitionId($shortTermFactorsAcWdDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($shortTermFactorsAcWdDefinitionId) && !is_numeric($shortTermFactorsAcWdDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shortTermFactorsAcWdDefinitionId)), __LINE__);
        }
        $this->ShortTermFactorsAcWdDefinitionId = $shortTermFactorsAcWdDefinitionId;
        return $this;
    }
    /**
     * Get ShortTermFactorsOcDefinitionId value
     * @return int|null
     */
    public function getShortTermFactorsOcDefinitionId()
    {
        return $this->ShortTermFactorsOcDefinitionId;
    }
    /**
     * Set ShortTermFactorsOcDefinitionId value
     * @param int $shortTermFactorsOcDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermTariffDefinition
     */
    public function setShortTermFactorsOcDefinitionId($shortTermFactorsOcDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($shortTermFactorsOcDefinitionId) && !is_numeric($shortTermFactorsOcDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($shortTermFactorsOcDefinitionId)), __LINE__);
        }
        $this->ShortTermFactorsOcDefinitionId = $shortTermFactorsOcDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ShortTermTariffDefinition
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
