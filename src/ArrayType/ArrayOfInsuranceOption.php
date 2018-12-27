<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsuranceOption ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInsuranceOption
 * @subpackage Arrays
 */
class ArrayOfInsuranceOption extends AbstractStructArrayBase
{
    /**
     * The InsuranceOption
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InsuranceOption;
    /**
     * Constructor method for ArrayOfInsuranceOption
     * @uses ArrayOfInsuranceOption::setInsuranceOption()
     * @param string[] $insuranceOption
     */
    public function __construct(array $insuranceOption = array())
    {
        $this
            ->setInsuranceOption($insuranceOption);
    }
    /**
     * Get InsuranceOption value
     * @return string[]|null
     */
    public function getInsuranceOption()
    {
        return $this->InsuranceOption;
    }
    /**
     * Set InsuranceOption value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $insuranceOption
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption
     */
    public function setInsuranceOption(array $insuranceOption = array())
    {
        $invalidValues = array();
        foreach ($insuranceOption as $arrayOfInsuranceOptionInsuranceOptionItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::valueIsValid($arrayOfInsuranceOptionInsuranceOptionItem)) {
                $invalidValues[] = var_export($arrayOfInsuranceOptionInsuranceOptionItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::getValidValues())), __LINE__);
        }
        $this->InsuranceOption = $insuranceOption;
        return $this;
    }
    /**
     * Add item to InsuranceOption value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption
     */
    public function addToInsuranceOption($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::getValidValues())), __LINE__);
        }
        $this->InsuranceOption[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceOption::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InsuranceOption
     */
    public function getAttributeName()
    {
        return 'InsuranceOption';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceOption
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
