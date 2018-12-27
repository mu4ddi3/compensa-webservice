<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModelTypeBlackRiskRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModelTypeBlackRiskRule
 * @subpackage Structs
 */
class ModelTypeBlackRiskRule extends BlackRiskRule
{
    /**
     * The ModelTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ModelTypeId;
    /**
     * Constructor method for ModelTypeBlackRiskRule
     * @uses ModelTypeBlackRiskRule::setModelTypeId()
     * @param int $modelTypeId
     */
    public function __construct($modelTypeId = null)
    {
        $this
            ->setModelTypeId($modelTypeId);
    }
    /**
     * Get ModelTypeId value
     * @return int|null
     */
    public function getModelTypeId()
    {
        return $this->ModelTypeId;
    }
    /**
     * Set ModelTypeId value
     * @param int $modelTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ModelTypeBlackRiskRule
     */
    public function setModelTypeId($modelTypeId = null)
    {
        // validation for constraint: int
        if (!is_null($modelTypeId) && !is_numeric($modelTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($modelTypeId)), __LINE__);
        }
        $this->ModelTypeId = $modelTypeId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ModelTypeBlackRiskRule
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
