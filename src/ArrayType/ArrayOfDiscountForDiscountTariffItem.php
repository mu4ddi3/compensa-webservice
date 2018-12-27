<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDiscountForDiscountTariffItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDiscountForDiscountTariffItem
 * @subpackage Arrays
 */
class ArrayOfDiscountForDiscountTariffItem extends AbstractStructArrayBase
{
    /**
     * The DiscountForDiscountTariffItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem[]
     */
    public $DiscountForDiscountTariffItem;
    /**
     * Constructor method for ArrayOfDiscountForDiscountTariffItem
     * @uses ArrayOfDiscountForDiscountTariffItem::setDiscountForDiscountTariffItem()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem[] $discountForDiscountTariffItem
     */
    public function __construct(array $discountForDiscountTariffItem = array())
    {
        $this
            ->setDiscountForDiscountTariffItem($discountForDiscountTariffItem);
    }
    /**
     * Get DiscountForDiscountTariffItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem[]|null
     */
    public function getDiscountForDiscountTariffItem()
    {
        return isset($this->DiscountForDiscountTariffItem) ? $this->DiscountForDiscountTariffItem : null;
    }
    /**
     * Set DiscountForDiscountTariffItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem[] $discountForDiscountTariffItem
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountForDiscountTariffItem
     */
    public function setDiscountForDiscountTariffItem(array $discountForDiscountTariffItem = array())
    {
        foreach ($discountForDiscountTariffItem as $arrayOfDiscountForDiscountTariffItemDiscountForDiscountTariffItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfDiscountForDiscountTariffItemDiscountForDiscountTariffItemItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem) {
                throw new \InvalidArgumentException(sprintf('The DiscountForDiscountTariffItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem, "%s" given', is_object($arrayOfDiscountForDiscountTariffItemDiscountForDiscountTariffItemItem) ? get_class($arrayOfDiscountForDiscountTariffItemDiscountForDiscountTariffItemItem) : gettype($arrayOfDiscountForDiscountTariffItemDiscountForDiscountTariffItemItem)), __LINE__);
            }
        }
        if (is_null($discountForDiscountTariffItem) || (is_array($discountForDiscountTariffItem) && empty($discountForDiscountTariffItem))) {
            unset($this->DiscountForDiscountTariffItem);
        } else {
            $this->DiscountForDiscountTariffItem = $discountForDiscountTariffItem;
        }
        return $this;
    }
    /**
     * Add item to DiscountForDiscountTariffItem value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountForDiscountTariffItem
     */
    public function addToDiscountForDiscountTariffItem(\Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem) {
            throw new \InvalidArgumentException(sprintf('The DiscountForDiscountTariffItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DiscountForDiscountTariffItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountForDiscountTariffItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DiscountForDiscountTariffItem
     */
    public function getAttributeName()
    {
        return 'DiscountForDiscountTariffItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountForDiscountTariffItem
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
