<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBonusMalusTariffItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBonusMalusTariffItem
 * @subpackage Arrays
 */
class ArrayOfBonusMalusTariffItem extends AbstractStructArrayBase
{
    /**
     * The BonusMalusTariffItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem[]
     */
    public $BonusMalusTariffItem;
    /**
     * Constructor method for ArrayOfBonusMalusTariffItem
     * @uses ArrayOfBonusMalusTariffItem::setBonusMalusTariffItem()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem[] $bonusMalusTariffItem
     */
    public function __construct(array $bonusMalusTariffItem = array())
    {
        $this
            ->setBonusMalusTariffItem($bonusMalusTariffItem);
    }
    /**
     * Get BonusMalusTariffItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem[]|null
     */
    public function getBonusMalusTariffItem()
    {
        return isset($this->BonusMalusTariffItem) ? $this->BonusMalusTariffItem : null;
    }
    /**
     * Set BonusMalusTariffItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem[] $bonusMalusTariffItem
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBonusMalusTariffItem
     */
    public function setBonusMalusTariffItem(array $bonusMalusTariffItem = array())
    {
        foreach ($bonusMalusTariffItem as $arrayOfBonusMalusTariffItemBonusMalusTariffItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfBonusMalusTariffItemBonusMalusTariffItemItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem) {
                throw new \InvalidArgumentException(sprintf('The BonusMalusTariffItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem, "%s" given', is_object($arrayOfBonusMalusTariffItemBonusMalusTariffItemItem) ? get_class($arrayOfBonusMalusTariffItemBonusMalusTariffItemItem) : gettype($arrayOfBonusMalusTariffItemBonusMalusTariffItemItem)), __LINE__);
            }
        }
        if (is_null($bonusMalusTariffItem) || (is_array($bonusMalusTariffItem) && empty($bonusMalusTariffItem))) {
            unset($this->BonusMalusTariffItem);
        } else {
            $this->BonusMalusTariffItem = $bonusMalusTariffItem;
        }
        return $this;
    }
    /**
     * Add item to BonusMalusTariffItem value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBonusMalusTariffItem
     */
    public function addToBonusMalusTariffItem(\Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem) {
            throw new \InvalidArgumentException(sprintf('The BonusMalusTariffItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BonusMalusTariffItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BonusMalusTariffItem
     */
    public function getAttributeName()
    {
        return 'BonusMalusTariffItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBonusMalusTariffItem
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
