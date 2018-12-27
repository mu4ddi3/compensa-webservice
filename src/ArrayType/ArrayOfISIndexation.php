<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfISIndexation ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfISIndexation
 * @subpackage Arrays
 */
class ArrayOfISIndexation extends AbstractStructArrayBase
{
    /**
     * The ISIndexation
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation[]
     */
    public $ISIndexation;
    /**
     * Constructor method for ArrayOfISIndexation
     * @uses ArrayOfISIndexation::setISIndexation()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation[] $iSIndexation
     */
    public function __construct(array $iSIndexation = array())
    {
        $this
            ->setISIndexation($iSIndexation);
    }
    /**
     * Get ISIndexation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation[]|null
     */
    public function getISIndexation()
    {
        return isset($this->ISIndexation) ? $this->ISIndexation : null;
    }
    /**
     * Set ISIndexation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation[] $iSIndexation
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfISIndexation
     */
    public function setISIndexation(array $iSIndexation = array())
    {
        foreach ($iSIndexation as $arrayOfISIndexationISIndexationItem) {
            // validation for constraint: itemType
            if (!$arrayOfISIndexationISIndexationItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation) {
                throw new \InvalidArgumentException(sprintf('The ISIndexation property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation, "%s" given', is_object($arrayOfISIndexationISIndexationItem) ? get_class($arrayOfISIndexationISIndexationItem) : gettype($arrayOfISIndexationISIndexationItem)), __LINE__);
            }
        }
        if (is_null($iSIndexation) || (is_array($iSIndexation) && empty($iSIndexation))) {
            unset($this->ISIndexation);
        } else {
            $this->ISIndexation = $iSIndexation;
        }
        return $this;
    }
    /**
     * Add item to ISIndexation value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfISIndexation
     */
    public function addToISIndexation(\Mu4ddi3\Compensa\Webservice\StructType\ISIndexation $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation) {
            throw new \InvalidArgumentException(sprintf('The ISIndexation property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ISIndexation[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ISIndexation|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ISIndexation
     */
    public function getAttributeName()
    {
        return 'ISIndexation';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfISIndexation
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
