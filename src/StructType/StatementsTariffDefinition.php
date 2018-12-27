<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatementsTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:StatementsTariffDefinition
 * @subpackage Structs
 */
class StatementsTariffDefinition extends CommonTariffDefinition
{
    /**
     * The StatementsTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StatementsTariffDefinitionId;
    /**
     * Constructor method for StatementsTariffDefinition
     * @uses StatementsTariffDefinition::setStatementsTariffDefinitionId()
     * @param int $statementsTariffDefinitionId
     */
    public function __construct($statementsTariffDefinitionId = null)
    {
        $this
            ->setStatementsTariffDefinitionId($statementsTariffDefinitionId);
    }
    /**
     * Get StatementsTariffDefinitionId value
     * @return int|null
     */
    public function getStatementsTariffDefinitionId()
    {
        return $this->StatementsTariffDefinitionId;
    }
    /**
     * Set StatementsTariffDefinitionId value
     * @param int $statementsTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\StatementsTariffDefinition
     */
    public function setStatementsTariffDefinitionId($statementsTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($statementsTariffDefinitionId) && !is_numeric($statementsTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($statementsTariffDefinitionId)), __LINE__);
        }
        $this->StatementsTariffDefinitionId = $statementsTariffDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\StatementsTariffDefinition
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
