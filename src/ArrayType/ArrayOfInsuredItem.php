<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsuredItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInsuredItem
 * @subpackage Arrays
 */
class ArrayOfInsuredItem extends AbstractStructArrayBase
{
    /**
     * The InsuredItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem[]
     */
    public $InsuredItem;
    /**
     * Constructor method for ArrayOfInsuredItem
     * @uses ArrayOfInsuredItem::setInsuredItem()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem[] $insuredItem
     */
    public function __construct(array $insuredItem = array())
    {
        $this
            ->setInsuredItem($insuredItem);
    }
    /**
     * Get InsuredItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem[]|null
     */
    public function getInsuredItem()
    {
        return isset($this->InsuredItem) ? $this->InsuredItem : null;
    }
    /**
     * Set InsuredItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem[] $insuredItem
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredItem
     */
    public function setInsuredItem(array $insuredItem = array())
    {
        foreach ($insuredItem as $arrayOfInsuredItemInsuredItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfInsuredItemInsuredItemItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem) {
                throw new \InvalidArgumentException(sprintf('The InsuredItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem, "%s" given', is_object($arrayOfInsuredItemInsuredItemItem) ? get_class($arrayOfInsuredItemInsuredItemItem) : gettype($arrayOfInsuredItemInsuredItemItem)), __LINE__);
            }
        }
        if (is_null($insuredItem) || (is_array($insuredItem) && empty($insuredItem))) {
            unset($this->InsuredItem);
        } else {
            $this->InsuredItem = $insuredItem;
        }
        return $this;
    }
    /**
     * Add item to InsuredItem value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredItem
     */
    public function addToInsuredItem(\Mu4ddi3\Compensa\Webservice\StructType\InsuredItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem) {
            throw new \InvalidArgumentException(sprintf('The InsuredItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InsuredItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InsuredItem
     */
    public function getAttributeName()
    {
        return 'InsuredItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredItem
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
