<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPriceTestGroup ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPriceTestGroup
 * @subpackage Arrays
 */
class ArrayOfPriceTestGroup extends AbstractStructArrayBase
{
    /**
     * The PriceTestGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup[]
     */
    public $PriceTestGroup;
    /**
     * Constructor method for ArrayOfPriceTestGroup
     * @uses ArrayOfPriceTestGroup::setPriceTestGroup()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup[] $priceTestGroup
     */
    public function __construct(array $priceTestGroup = array())
    {
        $this
            ->setPriceTestGroup($priceTestGroup);
    }
    /**
     * Get PriceTestGroup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup[]|null
     */
    public function getPriceTestGroup()
    {
        return isset($this->PriceTestGroup) ? $this->PriceTestGroup : null;
    }
    /**
     * Set PriceTestGroup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup[] $priceTestGroup
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTestGroup
     */
    public function setPriceTestGroup(array $priceTestGroup = array())
    {
        foreach ($priceTestGroup as $arrayOfPriceTestGroupPriceTestGroupItem) {
            // validation for constraint: itemType
            if (!$arrayOfPriceTestGroupPriceTestGroupItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup) {
                throw new \InvalidArgumentException(sprintf('The PriceTestGroup property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup, "%s" given', is_object($arrayOfPriceTestGroupPriceTestGroupItem) ? get_class($arrayOfPriceTestGroupPriceTestGroupItem) : gettype($arrayOfPriceTestGroupPriceTestGroupItem)), __LINE__);
            }
        }
        if (is_null($priceTestGroup) || (is_array($priceTestGroup) && empty($priceTestGroup))) {
            unset($this->PriceTestGroup);
        } else {
            $this->PriceTestGroup = $priceTestGroup;
        }
        return $this;
    }
    /**
     * Add item to PriceTestGroup value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTestGroup
     */
    public function addToPriceTestGroup(\Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup) {
            throw new \InvalidArgumentException(sprintf('The PriceTestGroup property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PriceTestGroup[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PriceTestGroup|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PriceTestGroup
     */
    public function getAttributeName()
    {
        return 'PriceTestGroup';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPriceTestGroup
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
