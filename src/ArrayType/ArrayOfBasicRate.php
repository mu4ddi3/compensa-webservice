<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBasicRate ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBasicRate
 * @subpackage Arrays
 */
class ArrayOfBasicRate extends AbstractStructArrayBase
{
    /**
     * The BasicRate
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BasicRate[]
     */
    public $BasicRate;
    /**
     * Constructor method for ArrayOfBasicRate
     * @uses ArrayOfBasicRate::setBasicRate()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasicRate[] $basicRate
     */
    public function __construct(array $basicRate = array())
    {
        $this
            ->setBasicRate($basicRate);
    }
    /**
     * Get BasicRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRate[]|null
     */
    public function getBasicRate()
    {
        return isset($this->BasicRate) ? $this->BasicRate : null;
    }
    /**
     * Set BasicRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasicRate[] $basicRate
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasicRate
     */
    public function setBasicRate(array $basicRate = array())
    {
        foreach ($basicRate as $arrayOfBasicRateBasicRateItem) {
            // validation for constraint: itemType
            if (!$arrayOfBasicRateBasicRateItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\BasicRate) {
                throw new \InvalidArgumentException(sprintf('The BasicRate property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BasicRate, "%s" given', is_object($arrayOfBasicRateBasicRateItem) ? get_class($arrayOfBasicRateBasicRateItem) : gettype($arrayOfBasicRateBasicRateItem)), __LINE__);
            }
        }
        if (is_null($basicRate) || (is_array($basicRate) && empty($basicRate))) {
            unset($this->BasicRate);
        } else {
            $this->BasicRate = $basicRate;
        }
        return $this;
    }
    /**
     * Add item to BasicRate value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasicRate $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasicRate
     */
    public function addToBasicRate(\Mu4ddi3\Compensa\Webservice\StructType\BasicRate $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\BasicRate) {
            throw new \InvalidArgumentException(sprintf('The BasicRate property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BasicRate, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BasicRate[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRate|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRate|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRate|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRate|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRate|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BasicRate
     */
    public function getAttributeName()
    {
        return 'BasicRate';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasicRate
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
