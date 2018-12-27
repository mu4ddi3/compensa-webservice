<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndorsementsTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EndorsementsTariffDefinition
 * @subpackage Structs
 */
class EndorsementsTariffDefinition extends CommonTariffDefinition
{
    /**
     * The EndorsementsTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $EndorsementsTariffDefinitionId;
    /**
     * Constructor method for EndorsementsTariffDefinition
     * @uses EndorsementsTariffDefinition::setEndorsementsTariffDefinitionId()
     * @param int $endorsementsTariffDefinitionId
     */
    public function __construct($endorsementsTariffDefinitionId = null)
    {
        $this
            ->setEndorsementsTariffDefinitionId($endorsementsTariffDefinitionId);
    }
    /**
     * Get EndorsementsTariffDefinitionId value
     * @return int|null
     */
    public function getEndorsementsTariffDefinitionId()
    {
        return $this->EndorsementsTariffDefinitionId;
    }
    /**
     * Set EndorsementsTariffDefinitionId value
     * @param int $endorsementsTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsTariffDefinition
     */
    public function setEndorsementsTariffDefinitionId($endorsementsTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($endorsementsTariffDefinitionId) && !is_numeric($endorsementsTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($endorsementsTariffDefinitionId)), __LINE__);
        }
        $this->EndorsementsTariffDefinitionId = $endorsementsTariffDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EndorsementsTariffDefinition
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
