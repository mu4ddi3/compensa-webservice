<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageElementOptionOfint StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageElementOptionOfint
 * @subpackage Structs
 */
class PackageElementOptionOfint extends AbstractStructBase
{
    /**
     * The ElementValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ElementValue;
    /**
     * The Option
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Option;
    /**
     * Constructor method for PackageElementOptionOfint
     * @uses PackageElementOptionOfint::setElementValue()
     * @uses PackageElementOptionOfint::setOption()
     * @param int $elementValue
     * @param string $option
     */
    public function __construct($elementValue = null, $option = null)
    {
        $this
            ->setElementValue($elementValue)
            ->setOption($option);
    }
    /**
     * Get ElementValue value
     * @return int|null
     */
    public function getElementValue()
    {
        return $this->ElementValue;
    }
    /**
     * Set ElementValue value
     * @param int $elementValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElementOptionOfint
     */
    public function setElementValue($elementValue = null)
    {
        // validation for constraint: int
        if (!is_null($elementValue) && !is_numeric($elementValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($elementValue)), __LINE__);
        }
        $this->ElementValue = $elementValue;
        return $this;
    }
    /**
     * Get Option value
     * @return string|null
     */
    public function getOption()
    {
        return $this->Option;
    }
    /**
     * Set Option value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PackageElementOptions::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PackageElementOptions::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $option
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElementOptionOfint
     */
    public function setOption($option = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PackageElementOptions::valueIsValid($option)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $option, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PackageElementOptions::getValidValues())), __LINE__);
        }
        $this->Option = $option;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElementOptionOfint
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
