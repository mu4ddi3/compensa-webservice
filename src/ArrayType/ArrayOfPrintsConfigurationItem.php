<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPrintsConfigurationItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPrintsConfigurationItem
 * @subpackage Arrays
 */
class ArrayOfPrintsConfigurationItem extends AbstractStructArrayBase
{
    /**
     * The PrintsConfigurationItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem[]
     */
    public $PrintsConfigurationItem;
    /**
     * Constructor method for ArrayOfPrintsConfigurationItem
     * @uses ArrayOfPrintsConfigurationItem::setPrintsConfigurationItem()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem[] $printsConfigurationItem
     */
    public function __construct(array $printsConfigurationItem = array())
    {
        $this
            ->setPrintsConfigurationItem($printsConfigurationItem);
    }
    /**
     * Get PrintsConfigurationItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem[]|null
     */
    public function getPrintsConfigurationItem()
    {
        return isset($this->PrintsConfigurationItem) ? $this->PrintsConfigurationItem : null;
    }
    /**
     * Set PrintsConfigurationItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem[] $printsConfigurationItem
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPrintsConfigurationItem
     */
    public function setPrintsConfigurationItem(array $printsConfigurationItem = array())
    {
        foreach ($printsConfigurationItem as $arrayOfPrintsConfigurationItemPrintsConfigurationItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfPrintsConfigurationItemPrintsConfigurationItemItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem) {
                throw new \InvalidArgumentException(sprintf('The PrintsConfigurationItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem, "%s" given', is_object($arrayOfPrintsConfigurationItemPrintsConfigurationItemItem) ? get_class($arrayOfPrintsConfigurationItemPrintsConfigurationItemItem) : gettype($arrayOfPrintsConfigurationItemPrintsConfigurationItemItem)), __LINE__);
            }
        }
        if (is_null($printsConfigurationItem) || (is_array($printsConfigurationItem) && empty($printsConfigurationItem))) {
            unset($this->PrintsConfigurationItem);
        } else {
            $this->PrintsConfigurationItem = $printsConfigurationItem;
        }
        return $this;
    }
    /**
     * Add item to PrintsConfigurationItem value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPrintsConfigurationItem
     */
    public function addToPrintsConfigurationItem(\Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem) {
            throw new \InvalidArgumentException(sprintf('The PrintsConfigurationItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PrintsConfigurationItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintsConfigurationItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PrintsConfigurationItem
     */
    public function getAttributeName()
    {
        return 'PrintsConfigurationItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPrintsConfigurationItem
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
