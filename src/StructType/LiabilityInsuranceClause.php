<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LiabilityInsuranceClause StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LiabilityInsuranceClause
 * @subpackage Structs
 */
class LiabilityInsuranceClause extends MyBusinessClause
{
    /**
     * The ClauseId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ClauseId;
    /**
     * Constructor method for LiabilityInsuranceClause
     * @uses LiabilityInsuranceClause::setClauseId()
     * @param int $clauseId
     */
    public function __construct($clauseId = null)
    {
        $this
            ->setClauseId($clauseId);
    }
    /**
     * Get ClauseId value
     * @return int|null
     */
    public function getClauseId()
    {
        return $this->ClauseId;
    }
    /**
     * Set ClauseId value
     * @param int $clauseId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LiabilityInsuranceClause
     */
    public function setClauseId($clauseId = null)
    {
        // validation for constraint: int
        if (!is_null($clauseId) && !is_numeric($clauseId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($clauseId)), __LINE__);
        }
        $this->ClauseId = $clauseId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LiabilityInsuranceClause
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
