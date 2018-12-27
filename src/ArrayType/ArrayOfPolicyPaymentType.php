<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPolicyPaymentType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPolicyPaymentType
 * @subpackage Arrays
 */
class ArrayOfPolicyPaymentType extends AbstractStructArrayBase
{
    /**
     * The PolicyPaymentType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PolicyPaymentType;
    /**
     * Constructor method for ArrayOfPolicyPaymentType
     * @uses ArrayOfPolicyPaymentType::setPolicyPaymentType()
     * @param string[] $policyPaymentType
     */
    public function __construct(array $policyPaymentType = array())
    {
        $this
            ->setPolicyPaymentType($policyPaymentType);
    }
    /**
     * Get PolicyPaymentType value
     * @return string[]|null
     */
    public function getPolicyPaymentType()
    {
        return $this->PolicyPaymentType;
    }
    /**
     * Set PolicyPaymentType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $policyPaymentType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyPaymentType
     */
    public function setPolicyPaymentType(array $policyPaymentType = array())
    {
        $invalidValues = array();
        foreach ($policyPaymentType as $arrayOfPolicyPaymentTypePolicyPaymentTypeItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::valueIsValid($arrayOfPolicyPaymentTypePolicyPaymentTypeItem)) {
                $invalidValues[] = var_export($arrayOfPolicyPaymentTypePolicyPaymentTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::getValidValues())), __LINE__);
        }
        $this->PolicyPaymentType = $policyPaymentType;
        return $this;
    }
    /**
     * Add item to PolicyPaymentType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyPaymentType
     */
    public function addToPolicyPaymentType($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::getValidValues())), __LINE__);
        }
        $this->PolicyPaymentType[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyPaymentType
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PolicyPaymentType
     */
    public function getAttributeName()
    {
        return 'PolicyPaymentType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyPaymentType
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
