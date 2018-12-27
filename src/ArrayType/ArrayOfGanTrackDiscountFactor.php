<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGanTrackDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfGanTrackDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfGanTrackDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The GanTrackDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor[]
     */
    public $GanTrackDiscountFactor;
    /**
     * Constructor method for ArrayOfGanTrackDiscountFactor
     * @uses ArrayOfGanTrackDiscountFactor::setGanTrackDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor[] $ganTrackDiscountFactor
     */
    public function __construct(array $ganTrackDiscountFactor = array())
    {
        $this
            ->setGanTrackDiscountFactor($ganTrackDiscountFactor);
    }
    /**
     * Get GanTrackDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor[]|null
     */
    public function getGanTrackDiscountFactor()
    {
        return isset($this->GanTrackDiscountFactor) ? $this->GanTrackDiscountFactor : null;
    }
    /**
     * Set GanTrackDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor[] $ganTrackDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfGanTrackDiscountFactor
     */
    public function setGanTrackDiscountFactor(array $ganTrackDiscountFactor = array())
    {
        foreach ($ganTrackDiscountFactor as $arrayOfGanTrackDiscountFactorGanTrackDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfGanTrackDiscountFactorGanTrackDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The GanTrackDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor, "%s" given', is_object($arrayOfGanTrackDiscountFactorGanTrackDiscountFactorItem) ? get_class($arrayOfGanTrackDiscountFactorGanTrackDiscountFactorItem) : gettype($arrayOfGanTrackDiscountFactorGanTrackDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($ganTrackDiscountFactor) || (is_array($ganTrackDiscountFactor) && empty($ganTrackDiscountFactor))) {
            unset($this->GanTrackDiscountFactor);
        } else {
            $this->GanTrackDiscountFactor = $ganTrackDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to GanTrackDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfGanTrackDiscountFactor
     */
    public function addToGanTrackDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The GanTrackDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->GanTrackDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GanTrackDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GanTrackDiscountFactor
     */
    public function getAttributeName()
    {
        return 'GanTrackDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfGanTrackDiscountFactor
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
