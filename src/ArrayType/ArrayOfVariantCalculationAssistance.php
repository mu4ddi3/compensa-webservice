<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVariantCalculationAssistance ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVariantCalculationAssistance
 * @subpackage Arrays
 */
class ArrayOfVariantCalculationAssistance extends AbstractStructArrayBase
{
    /**
     * The VariantCalculationAssistance
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $VariantCalculationAssistance;
    /**
     * Constructor method for ArrayOfVariantCalculationAssistance
     * @uses ArrayOfVariantCalculationAssistance::setVariantCalculationAssistance()
     * @param string[] $variantCalculationAssistance
     */
    public function __construct(array $variantCalculationAssistance = array())
    {
        $this
            ->setVariantCalculationAssistance($variantCalculationAssistance);
    }
    /**
     * Get VariantCalculationAssistance value
     * @return string[]|null
     */
    public function getVariantCalculationAssistance()
    {
        return $this->VariantCalculationAssistance;
    }
    /**
     * Set VariantCalculationAssistance value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $variantCalculationAssistance
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVariantCalculationAssistance
     */
    public function setVariantCalculationAssistance(array $variantCalculationAssistance = array())
    {
        $invalidValues = array();
        foreach ($variantCalculationAssistance as $arrayOfVariantCalculationAssistanceVariantCalculationAssistanceItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::valueIsValid($arrayOfVariantCalculationAssistanceVariantCalculationAssistanceItem)) {
                $invalidValues[] = var_export($arrayOfVariantCalculationAssistanceVariantCalculationAssistanceItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::getValidValues())), __LINE__);
        }
        $this->VariantCalculationAssistance = $variantCalculationAssistance;
        return $this;
    }
    /**
     * Add item to VariantCalculationAssistance value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVariantCalculationAssistance
     */
    public function addToVariantCalculationAssistance($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::getValidValues())), __LINE__);
        }
        $this->VariantCalculationAssistance[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVariantCalculationAssistance
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\VariantCalculationAssistance::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VariantCalculationAssistance
     */
    public function getAttributeName()
    {
        return 'VariantCalculationAssistance';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVariantCalculationAssistance
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
