<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTerritoryUsageType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTerritoryUsageType
 * @subpackage Arrays
 */
class ArrayOfTerritoryUsageType extends AbstractStructArrayBase
{
    /**
     * The TerritoryUsageType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $TerritoryUsageType;
    /**
     * Constructor method for ArrayOfTerritoryUsageType
     * @uses ArrayOfTerritoryUsageType::setTerritoryUsageType()
     * @param string[] $territoryUsageType
     */
    public function __construct(array $territoryUsageType = array())
    {
        $this
            ->setTerritoryUsageType($territoryUsageType);
    }
    /**
     * Get TerritoryUsageType value
     * @return string[]|null
     */
    public function getTerritoryUsageType()
    {
        return $this->TerritoryUsageType;
    }
    /**
     * Set TerritoryUsageType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $territoryUsageType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType
     */
    public function setTerritoryUsageType(array $territoryUsageType = array())
    {
        $invalidValues = array();
        foreach ($territoryUsageType as $arrayOfTerritoryUsageTypeTerritoryUsageTypeItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid($arrayOfTerritoryUsageTypeTerritoryUsageTypeItem)) {
                $invalidValues[] = var_export($arrayOfTerritoryUsageTypeTerritoryUsageTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::getValidValues())), __LINE__);
        }
        $this->TerritoryUsageType = $territoryUsageType;
        return $this;
    }
    /**
     * Add item to TerritoryUsageType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType
     */
    public function addToTerritoryUsageType($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::getValidValues())), __LINE__);
        }
        $this->TerritoryUsageType[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TerritoryUsageType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TerritoryUsageType
     */
    public function getAttributeName()
    {
        return 'TerritoryUsageType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTerritoryUsageType
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
