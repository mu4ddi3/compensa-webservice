<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageElementOptionOfOwnContributionVariantCNFcyd1N
 * StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageElementOptionOfOwnContributionVariantCNFcyd1N
 * @subpackage Structs
 */
class PackageElementOptionOfOwnContributionVariantCNFcyd1N extends AbstractStructBase
{
    /**
     * The ElementValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
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
     * Constructor method for PackageElementOptionOfOwnContributionVariantCNFcyd1N
     * @uses PackageElementOptionOfOwnContributionVariantCNFcyd1N::setElementValue()
     * @uses PackageElementOptionOfOwnContributionVariantCNFcyd1N::setOption()
     * @param string $elementValue
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
     * @return string|null
     */
    public function getElementValue()
    {
        return $this->ElementValue;
    }
    /**
     * Set ElementValue value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $elementValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElementOptionOfOwnContributionVariantCNFcyd1N
     */
    public function setElementValue($elementValue = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::valueIsValid($elementValue)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $elementValue, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\OwnContributionVariant::getValidValues())), __LINE__);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElementOptionOfOwnContributionVariantCNFcyd1N
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElementOptionOfOwnContributionVariantCNFcyd1N
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
