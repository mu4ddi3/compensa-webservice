<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTerritorialScope ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTerritorialScope
 * @subpackage Arrays
 */
class ArrayOfTerritorialScope extends AbstractStructArrayBase
{
    /**
     * The TerritorialScope
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $TerritorialScope;
    /**
     * Constructor method for ArrayOfTerritorialScope
     * @uses ArrayOfTerritorialScope::setTerritorialScope()
     * @param string[] $territorialScope
     */
    public function __construct(array $territorialScope = array())
    {
        $this
            ->setTerritorialScope($territorialScope);
    }
    /**
     * Get TerritorialScope value
     * @return string[]|null
     */
    public function getTerritorialScope()
    {
        return $this->TerritorialScope;
    }
    /**
     * Set TerritorialScope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $territorialScope
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope
     */
    public function setTerritorialScope(array $territorialScope = array())
    {
        $invalidValues = array();
        foreach ($territorialScope as $arrayOfTerritorialScopeTerritorialScopeItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::valueIsValid($arrayOfTerritorialScopeTerritorialScopeItem)) {
                $invalidValues[] = var_export($arrayOfTerritorialScopeTerritorialScopeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::getValidValues())), __LINE__);
        }
        $this->TerritorialScope = $territorialScope;
        return $this;
    }
    /**
     * Add item to TerritorialScope value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope
     */
    public function addToTerritorialScope($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::getValidValues())), __LINE__);
        }
        $this->TerritorialScope[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TerritorialScope::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TerritorialScope
     */
    public function getAttributeName()
    {
        return 'TerritorialScope';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritorialScope
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
