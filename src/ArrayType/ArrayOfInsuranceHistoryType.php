<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsuranceHistoryType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInsuranceHistoryType
 * @subpackage Arrays
 */
class ArrayOfInsuranceHistoryType extends AbstractStructArrayBase
{
    /**
     * The InsuranceHistoryType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InsuranceHistoryType;
    /**
     * Constructor method for ArrayOfInsuranceHistoryType
     * @uses ArrayOfInsuranceHistoryType::setInsuranceHistoryType()
     * @param string[] $insuranceHistoryType
     */
    public function __construct(array $insuranceHistoryType = array())
    {
        $this
            ->setInsuranceHistoryType($insuranceHistoryType);
    }
    /**
     * Get InsuranceHistoryType value
     * @return string[]|null
     */
    public function getInsuranceHistoryType()
    {
        return $this->InsuranceHistoryType;
    }
    /**
     * Set InsuranceHistoryType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $insuranceHistoryType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType
     */
    public function setInsuranceHistoryType(array $insuranceHistoryType = array())
    {
        $invalidValues = array();
        foreach ($insuranceHistoryType as $arrayOfInsuranceHistoryTypeInsuranceHistoryTypeItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::valueIsValid($arrayOfInsuranceHistoryTypeInsuranceHistoryTypeItem)) {
                $invalidValues[] = var_export($arrayOfInsuranceHistoryTypeInsuranceHistoryTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::getValidValues())), __LINE__);
        }
        $this->InsuranceHistoryType = $insuranceHistoryType;
        return $this;
    }
    /**
     * Add item to InsuranceHistoryType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType
     */
    public function addToInsuranceHistoryType($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::getValidValues())), __LINE__);
        }
        $this->InsuranceHistoryType[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InsuranceHistoryType
     */
    public function getAttributeName()
    {
        return 'InsuranceHistoryType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceHistoryType
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
