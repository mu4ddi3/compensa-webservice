<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BlackRiskRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BlackRiskRule
 * @subpackage Structs
 */
class BlackRiskRule extends AbstractStructBase
{
    /**
     * The IsBlackRisk
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBlackRisk;
    /**
     * Constructor method for BlackRiskRule
     * @uses BlackRiskRule::setIsBlackRisk()
     * @param bool $isBlackRisk
     */
    public function __construct($isBlackRisk = null)
    {
        $this
            ->setIsBlackRisk($isBlackRisk);
    }
    /**
     * Get IsBlackRisk value
     * @return bool|null
     */
    public function getIsBlackRisk()
    {
        return $this->IsBlackRisk;
    }
    /**
     * Set IsBlackRisk value
     * @param bool $isBlackRisk
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskRule
     */
    public function setIsBlackRisk($isBlackRisk = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBlackRisk) && !is_bool($isBlackRisk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBlackRisk)), __LINE__);
        }
        $this->IsBlackRisk = $isBlackRisk;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BlackRiskRule
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
