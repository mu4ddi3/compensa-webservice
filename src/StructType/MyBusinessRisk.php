<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessRisk
 * @subpackage Structs
 */
class MyBusinessRisk extends CompensaRisk
{
    /**
     * The IsSkipMinimalPremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSkipMinimalPremium;
    /**
     * Constructor method for MyBusinessRisk
     * @uses MyBusinessRisk::setIsSkipMinimalPremium()
     * @param bool $isSkipMinimalPremium
     */
    public function __construct($isSkipMinimalPremium = null)
    {
        $this
            ->setIsSkipMinimalPremium($isSkipMinimalPremium);
    }
    /**
     * Get IsSkipMinimalPremium value
     * @return bool|null
     */
    public function getIsSkipMinimalPremium()
    {
        return $this->IsSkipMinimalPremium;
    }
    /**
     * Set IsSkipMinimalPremium value
     * @param bool $isSkipMinimalPremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessRisk
     */
    public function setIsSkipMinimalPremium($isSkipMinimalPremium = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSkipMinimalPremium) && !is_bool($isSkipMinimalPremium)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSkipMinimalPremium)), __LINE__);
        }
        $this->IsSkipMinimalPremium = $isSkipMinimalPremium;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessRisk
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
