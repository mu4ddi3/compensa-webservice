<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfScalpelFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfScalpelFactor
 * @subpackage Arrays
 */
class ArrayOfScalpelFactor extends AbstractStructArrayBase
{
    /**
     * The ScalpelFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor[]
     */
    public $ScalpelFactor;
    /**
     * Constructor method for ArrayOfScalpelFactor
     * @uses ArrayOfScalpelFactor::setScalpelFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor[] $scalpelFactor
     */
    public function __construct(array $scalpelFactor = array())
    {
        $this
            ->setScalpelFactor($scalpelFactor);
    }
    /**
     * Get ScalpelFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor[]|null
     */
    public function getScalpelFactor()
    {
        return isset($this->ScalpelFactor) ? $this->ScalpelFactor : null;
    }
    /**
     * Set ScalpelFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor[] $scalpelFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelFactor
     */
    public function setScalpelFactor(array $scalpelFactor = array())
    {
        foreach ($scalpelFactor as $arrayOfScalpelFactorScalpelFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfScalpelFactorScalpelFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor) {
                throw new \InvalidArgumentException(sprintf('The ScalpelFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor, "%s" given', is_object($arrayOfScalpelFactorScalpelFactorItem) ? get_class($arrayOfScalpelFactorScalpelFactorItem) : gettype($arrayOfScalpelFactorScalpelFactorItem)), __LINE__);
            }
        }
        if (is_null($scalpelFactor) || (is_array($scalpelFactor) && empty($scalpelFactor))) {
            unset($this->ScalpelFactor);
        } else {
            $this->ScalpelFactor = $scalpelFactor;
        }
        return $this;
    }
    /**
     * Add item to ScalpelFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelFactor
     */
    public function addToScalpelFactor(\Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor) {
            throw new \InvalidArgumentException(sprintf('The ScalpelFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ScalpelFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ScalpelFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ScalpelFactor
     */
    public function getAttributeName()
    {
        return 'ScalpelFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelFactor
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
