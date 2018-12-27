<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCapAndCollar ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCapAndCollar
 * @subpackage Arrays
 */
class ArrayOfCapAndCollar extends AbstractStructArrayBase
{
    /**
     * The CapAndCollar
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar[]
     */
    public $CapAndCollar;
    /**
     * Constructor method for ArrayOfCapAndCollar
     * @uses ArrayOfCapAndCollar::setCapAndCollar()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar[] $capAndCollar
     */
    public function __construct(array $capAndCollar = array())
    {
        $this
            ->setCapAndCollar($capAndCollar);
    }
    /**
     * Get CapAndCollar value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar[]|null
     */
    public function getCapAndCollar()
    {
        return isset($this->CapAndCollar) ? $this->CapAndCollar : null;
    }
    /**
     * Set CapAndCollar value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar[] $capAndCollar
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCapAndCollar
     */
    public function setCapAndCollar(array $capAndCollar = array())
    {
        foreach ($capAndCollar as $arrayOfCapAndCollarCapAndCollarItem) {
            // validation for constraint: itemType
            if (!$arrayOfCapAndCollarCapAndCollarItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar) {
                throw new \InvalidArgumentException(sprintf('The CapAndCollar property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar, "%s" given', is_object($arrayOfCapAndCollarCapAndCollarItem) ? get_class($arrayOfCapAndCollarCapAndCollarItem) : gettype($arrayOfCapAndCollarCapAndCollarItem)), __LINE__);
            }
        }
        if (is_null($capAndCollar) || (is_array($capAndCollar) && empty($capAndCollar))) {
            unset($this->CapAndCollar);
        } else {
            $this->CapAndCollar = $capAndCollar;
        }
        return $this;
    }
    /**
     * Add item to CapAndCollar value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCapAndCollar
     */
    public function addToCapAndCollar(\Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar) {
            throw new \InvalidArgumentException(sprintf('The CapAndCollar property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CapAndCollar[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollar|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CapAndCollar
     */
    public function getAttributeName()
    {
        return 'CapAndCollar';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCapAndCollar
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
