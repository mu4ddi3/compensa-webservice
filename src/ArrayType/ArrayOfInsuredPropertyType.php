<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsuredPropertyType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInsuredPropertyType
 * @subpackage Arrays
 */
class ArrayOfInsuredPropertyType extends AbstractStructArrayBase
{
    /**
     * The InsuredPropertyType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InsuredPropertyType;
    /**
     * Constructor method for ArrayOfInsuredPropertyType
     * @uses ArrayOfInsuredPropertyType::setInsuredPropertyType()
     * @param string[] $insuredPropertyType
     */
    public function __construct(array $insuredPropertyType = array())
    {
        $this
            ->setInsuredPropertyType($insuredPropertyType);
    }
    /**
     * Get InsuredPropertyType value
     * @return string[]|null
     */
    public function getInsuredPropertyType()
    {
        return $this->InsuredPropertyType;
    }
    /**
     * Set InsuredPropertyType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $insuredPropertyType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType
     */
    public function setInsuredPropertyType(array $insuredPropertyType = array())
    {
        $invalidValues = array();
        foreach ($insuredPropertyType as $arrayOfInsuredPropertyTypeInsuredPropertyTypeItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::valueIsValid($arrayOfInsuredPropertyTypeInsuredPropertyTypeItem)) {
                $invalidValues[] = var_export($arrayOfInsuredPropertyTypeInsuredPropertyTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::getValidValues())), __LINE__);
        }
        $this->InsuredPropertyType = $insuredPropertyType;
        return $this;
    }
    /**
     * Add item to InsuredPropertyType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType
     */
    public function addToInsuredPropertyType($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::getValidValues())), __LINE__);
        }
        $this->InsuredPropertyType[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InsuredPropertyType
     */
    public function getAttributeName()
    {
        return 'InsuredPropertyType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredPropertyType
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
