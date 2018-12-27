<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BurglaryCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BurglaryCondition
 * @subpackage Structs
 */
class BurglaryCondition extends AvailabilityConditionBase
{
    /**
     * The IsBurglaryExtended
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBurglaryExtended;
    /**
     * The IsBurglaryExcluded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsBurglaryExcluded;
    /**
     * Constructor method for BurglaryCondition
     * @uses BurglaryCondition::setIsBurglaryExtended()
     * @uses BurglaryCondition::setIsBurglaryExcluded()
     * @param bool $isBurglaryExtended
     * @param bool $isBurglaryExcluded
     */
    public function __construct($isBurglaryExtended = null, $isBurglaryExcluded = null)
    {
        $this
            ->setIsBurglaryExtended($isBurglaryExtended)
            ->setIsBurglaryExcluded($isBurglaryExcluded);
    }
    /**
     * Get IsBurglaryExtended value
     * @return bool|null
     */
    public function getIsBurglaryExtended()
    {
        return $this->IsBurglaryExtended;
    }
    /**
     * Set IsBurglaryExtended value
     * @param bool $isBurglaryExtended
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryCondition
     */
    public function setIsBurglaryExtended($isBurglaryExtended = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBurglaryExtended) && !is_bool($isBurglaryExtended)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBurglaryExtended)), __LINE__);
        }
        $this->IsBurglaryExtended = $isBurglaryExtended;
        return $this;
    }
    /**
     * Get IsBurglaryExcluded value
     * @return bool|null
     */
    public function getIsBurglaryExcluded()
    {
        return $this->IsBurglaryExcluded;
    }
    /**
     * Set IsBurglaryExcluded value
     * @param bool $isBurglaryExcluded
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryCondition
     */
    public function setIsBurglaryExcluded($isBurglaryExcluded = null)
    {
        // validation for constraint: boolean
        if (!is_null($isBurglaryExcluded) && !is_bool($isBurglaryExcluded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isBurglaryExcluded)), __LINE__);
        }
        $this->IsBurglaryExcluded = $isBurglaryExcluded;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryCondition
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
