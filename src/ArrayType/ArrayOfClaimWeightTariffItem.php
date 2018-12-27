<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaimWeightTariffItem ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfClaimWeightTariffItem
 * @subpackage Arrays
 */
class ArrayOfClaimWeightTariffItem extends AbstractStructArrayBase
{
    /**
     * The ClaimWeightTariffItem
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem[]
     */
    public $ClaimWeightTariffItem;
    /**
     * Constructor method for ArrayOfClaimWeightTariffItem
     * @uses ArrayOfClaimWeightTariffItem::setClaimWeightTariffItem()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem[] $claimWeightTariffItem
     */
    public function __construct(array $claimWeightTariffItem = array())
    {
        $this
            ->setClaimWeightTariffItem($claimWeightTariffItem);
    }
    /**
     * Get ClaimWeightTariffItem value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem[]|null
     */
    public function getClaimWeightTariffItem()
    {
        return isset($this->ClaimWeightTariffItem) ? $this->ClaimWeightTariffItem : null;
    }
    /**
     * Set ClaimWeightTariffItem value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem[] $claimWeightTariffItem
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem
     */
    public function setClaimWeightTariffItem(array $claimWeightTariffItem = array())
    {
        foreach ($claimWeightTariffItem as $arrayOfClaimWeightTariffItemClaimWeightTariffItemItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaimWeightTariffItemClaimWeightTariffItemItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem) {
                throw new \InvalidArgumentException(sprintf('The ClaimWeightTariffItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem, "%s" given', is_object($arrayOfClaimWeightTariffItemClaimWeightTariffItemItem) ? get_class($arrayOfClaimWeightTariffItemClaimWeightTariffItemItem) : gettype($arrayOfClaimWeightTariffItemClaimWeightTariffItemItem)), __LINE__);
            }
        }
        if (is_null($claimWeightTariffItem) || (is_array($claimWeightTariffItem) && empty($claimWeightTariffItem))) {
            unset($this->ClaimWeightTariffItem);
        } else {
            $this->ClaimWeightTariffItem = $claimWeightTariffItem;
        }
        return $this;
    }
    /**
     * Add item to ClaimWeightTariffItem value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem
     */
    public function addToClaimWeightTariffItem(\Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem) {
            throw new \InvalidArgumentException(sprintf('The ClaimWeightTariffItem property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClaimWeightTariffItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightTariffItem|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaimWeightTariffItem
     */
    public function getAttributeName()
    {
        return 'ClaimWeightTariffItem';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem
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
