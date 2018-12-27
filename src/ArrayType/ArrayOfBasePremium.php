<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBasePremium ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBasePremium
 * @subpackage Arrays
 */
class ArrayOfBasePremium extends AbstractStructArrayBase
{
    /**
     * The BasePremium
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BasePremium[]
     */
    public $BasePremium;
    /**
     * Constructor method for ArrayOfBasePremium
     * @uses ArrayOfBasePremium::setBasePremium()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePremium[] $basePremium
     */
    public function __construct(array $basePremium = array())
    {
        $this
            ->setBasePremium($basePremium);
    }
    /**
     * Get BasePremium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremium[]|null
     */
    public function getBasePremium()
    {
        return isset($this->BasePremium) ? $this->BasePremium : null;
    }
    /**
     * Set BasePremium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePremium[] $basePremium
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePremium
     */
    public function setBasePremium(array $basePremium = array())
    {
        foreach ($basePremium as $arrayOfBasePremiumBasePremiumItem) {
            // validation for constraint: itemType
            if (!$arrayOfBasePremiumBasePremiumItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\BasePremium) {
                throw new \InvalidArgumentException(sprintf('The BasePremium property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BasePremium, "%s" given', is_object($arrayOfBasePremiumBasePremiumItem) ? get_class($arrayOfBasePremiumBasePremiumItem) : gettype($arrayOfBasePremiumBasePremiumItem)), __LINE__);
            }
        }
        if (is_null($basePremium) || (is_array($basePremium) && empty($basePremium))) {
            unset($this->BasePremium);
        } else {
            $this->BasePremium = $basePremium;
        }
        return $this;
    }
    /**
     * Add item to BasePremium value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePremium $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePremium
     */
    public function addToBasePremium(\Mu4ddi3\Compensa\Webservice\StructType\BasePremium $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\BasePremium) {
            throw new \InvalidArgumentException(sprintf('The BasePremium property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BasePremium, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BasePremium[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremium|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremium|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremium|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremium|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremium|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BasePremium
     */
    public function getAttributeName()
    {
        return 'BasePremium';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePremium
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
