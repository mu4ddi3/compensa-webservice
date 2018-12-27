<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBusiness19035ContractVariant ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBusiness19035ContractVariant
 * @subpackage Arrays
 */
class ArrayOfBusiness19035ContractVariant extends AbstractStructArrayBase
{
    /**
     * The Business19035ContractVariant
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Business19035ContractVariant;
    /**
     * Constructor method for ArrayOfBusiness19035ContractVariant
     * @uses ArrayOfBusiness19035ContractVariant::setBusiness19035ContractVariant()
     * @param string[] $business19035ContractVariant
     */
    public function __construct(array $business19035ContractVariant = array())
    {
        $this
            ->setBusiness19035ContractVariant($business19035ContractVariant);
    }
    /**
     * Get Business19035ContractVariant value
     * @return string[]|null
     */
    public function getBusiness19035ContractVariant()
    {
        return $this->Business19035ContractVariant;
    }
    /**
     * Set Business19035ContractVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $business19035ContractVariant
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant
     */
    public function setBusiness19035ContractVariant(array $business19035ContractVariant = array())
    {
        $invalidValues = array();
        foreach ($business19035ContractVariant as $arrayOfBusiness19035ContractVariantBusiness19035ContractVariantItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::valueIsValid($arrayOfBusiness19035ContractVariantBusiness19035ContractVariantItem)) {
                $invalidValues[] = var_export($arrayOfBusiness19035ContractVariantBusiness19035ContractVariantItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::getValidValues())), __LINE__);
        }
        $this->Business19035ContractVariant = $business19035ContractVariant;
        return $this;
    }
    /**
     * Add item to Business19035ContractVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant
     */
    public function addToBusiness19035ContractVariant($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::getValidValues())), __LINE__);
        }
        $this->Business19035ContractVariant[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Business19035ContractVariant
     */
    public function getAttributeName()
    {
        return 'Business19035ContractVariant';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant
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
