<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EnhancedEnum StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:EnhancedEnum
 * @subpackage Structs
 */
class EnhancedEnum extends AbstractStructBase
{
    /**
     * The InternalValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InternalValue;
    /**
     * Constructor method for EnhancedEnum
     * @uses EnhancedEnum::setInternalValue()
     * @param int $internalValue
     */
    public function __construct($internalValue = null)
    {
        $this
            ->setInternalValue($internalValue);
    }
    /**
     * Get InternalValue value
     * @return int|null
     */
    public function getInternalValue()
    {
        return $this->InternalValue;
    }
    /**
     * Set InternalValue value
     * @param int $internalValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnhancedEnum
     */
    public function setInternalValue($internalValue = null)
    {
        // validation for constraint: int
        if (!is_null($internalValue) && !is_numeric($internalValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($internalValue)), __LINE__);
        }
        $this->InternalValue = $internalValue;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnhancedEnum
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
