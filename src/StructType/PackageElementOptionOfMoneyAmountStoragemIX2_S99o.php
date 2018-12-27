<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageElementOptionOfMoneyAmountStoragemIX2_S99o
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageElementOptionOfMoneyAmountStoragemIX2_S99o
 * @subpackage Structs
 */
class PackageElementOptionOfMoneyAmountStoragemIX2_S99o extends AbstractStructBase
{
    /**
     * The ElementValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
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
     * Constructor method for PackageElementOptionOfMoneyAmountStoragemIX2_S99o
     * @uses PackageElementOptionOfMoneyAmountStoragemIX2_S99o::setElementValue()
     * @uses PackageElementOptionOfMoneyAmountStoragemIX2_S99o::setOption()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $elementValue
     * @param string $option
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $elementValue = null, $option = null)
    {
        $this
            ->setElementValue($elementValue)
            ->setOption($option);
    }
    /**
     * Get ElementValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getElementValue()
    {
        return isset($this->ElementValue) ? $this->ElementValue : null;
    }
    /**
     * Set ElementValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $elementValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElementOptionOfMoneyAmountStoragemIX2_S99o
     */
    public function setElementValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $elementValue = null)
    {
        if (is_null($elementValue) || (is_array($elementValue) && empty($elementValue))) {
            unset($this->ElementValue);
        } else {
            $this->ElementValue = $elementValue;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElementOptionOfMoneyAmountStoragemIX2_S99o
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElementOptionOfMoneyAmountStoragemIX2_S99o
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
