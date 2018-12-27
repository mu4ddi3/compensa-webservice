<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalClauseCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AdditionalClauseCondition
 * @subpackage Structs
 */
class AdditionalClauseCondition extends AvailabilityConditionBase
{
    /**
     * The IsAdditionalClause
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAdditionalClause;
    /**
     * Constructor method for AdditionalClauseCondition
     * @uses AdditionalClauseCondition::setIsAdditionalClause()
     * @param bool $isAdditionalClause
     */
    public function __construct($isAdditionalClause = null)
    {
        $this
            ->setIsAdditionalClause($isAdditionalClause);
    }
    /**
     * Get IsAdditionalClause value
     * @return bool|null
     */
    public function getIsAdditionalClause()
    {
        return $this->IsAdditionalClause;
    }
    /**
     * Set IsAdditionalClause value
     * @param bool $isAdditionalClause
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClauseCondition
     */
    public function setIsAdditionalClause($isAdditionalClause = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAdditionalClause) && !is_bool($isAdditionalClause)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAdditionalClause)), __LINE__);
        }
        $this->IsAdditionalClause = $isAdditionalClause;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdditionalClauseCondition
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
