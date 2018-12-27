<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessCondition
 * @subpackage Structs
 */
class MyBusinessCondition extends AvailabilityConditionBase
{
    /**
     * The IsMyBusinessSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsMyBusinessSelected;
    /**
     * Constructor method for MyBusinessCondition
     * @uses MyBusinessCondition::setIsMyBusinessSelected()
     * @param bool $isMyBusinessSelected
     */
    public function __construct($isMyBusinessSelected = null)
    {
        $this
            ->setIsMyBusinessSelected($isMyBusinessSelected);
    }
    /**
     * Get IsMyBusinessSelected value
     * @return bool|null
     */
    public function getIsMyBusinessSelected()
    {
        return $this->IsMyBusinessSelected;
    }
    /**
     * Set IsMyBusinessSelected value
     * @param bool $isMyBusinessSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCondition
     */
    public function setIsMyBusinessSelected($isMyBusinessSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isMyBusinessSelected) && !is_bool($isMyBusinessSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isMyBusinessSelected)), __LINE__);
        }
        $this->IsMyBusinessSelected = $isMyBusinessSelected;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCondition
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
