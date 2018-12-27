<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePremiumSzyby StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePremiumSzyby
 * @subpackage Structs
 */
class BasePremiumSzyby extends BasePremium
{
    /**
     * The IsOnlyOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOnlyOc;
    /**
     * Constructor method for BasePremiumSzyby
     * @uses BasePremiumSzyby::setIsOnlyOc()
     * @param bool $isOnlyOc
     */
    public function __construct($isOnlyOc = null)
    {
        $this
            ->setIsOnlyOc($isOnlyOc);
    }
    /**
     * Get IsOnlyOc value
     * @return bool|null
     */
    public function getIsOnlyOc()
    {
        return $this->IsOnlyOc;
    }
    /**
     * Set IsOnlyOc value
     * @param bool $isOnlyOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumSzyby
     */
    public function setIsOnlyOc($isOnlyOc = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOnlyOc) && !is_bool($isOnlyOc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOnlyOc)), __LINE__);
        }
        $this->IsOnlyOc = $isOnlyOc;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumSzyby
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
