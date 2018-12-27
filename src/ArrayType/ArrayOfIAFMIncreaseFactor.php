<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIAFMIncreaseFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIAFMIncreaseFactor
 * @subpackage Arrays
 */
class ArrayOfIAFMIncreaseFactor extends AbstractStructArrayBase
{
    /**
     * The IAFMIncreaseFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor[]
     */
    public $IAFMIncreaseFactor;
    /**
     * Constructor method for ArrayOfIAFMIncreaseFactor
     * @uses ArrayOfIAFMIncreaseFactor::setIAFMIncreaseFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor[] $iAFMIncreaseFactor
     */
    public function __construct(array $iAFMIncreaseFactor = array())
    {
        $this
            ->setIAFMIncreaseFactor($iAFMIncreaseFactor);
    }
    /**
     * Get IAFMIncreaseFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor[]|null
     */
    public function getIAFMIncreaseFactor()
    {
        return isset($this->IAFMIncreaseFactor) ? $this->IAFMIncreaseFactor : null;
    }
    /**
     * Set IAFMIncreaseFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor[] $iAFMIncreaseFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfIAFMIncreaseFactor
     */
    public function setIAFMIncreaseFactor(array $iAFMIncreaseFactor = array())
    {
        foreach ($iAFMIncreaseFactor as $arrayOfIAFMIncreaseFactorIAFMIncreaseFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfIAFMIncreaseFactorIAFMIncreaseFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor) {
                throw new \InvalidArgumentException(sprintf('The IAFMIncreaseFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor, "%s" given', is_object($arrayOfIAFMIncreaseFactorIAFMIncreaseFactorItem) ? get_class($arrayOfIAFMIncreaseFactorIAFMIncreaseFactorItem) : gettype($arrayOfIAFMIncreaseFactorIAFMIncreaseFactorItem)), __LINE__);
            }
        }
        if (is_null($iAFMIncreaseFactor) || (is_array($iAFMIncreaseFactor) && empty($iAFMIncreaseFactor))) {
            unset($this->IAFMIncreaseFactor);
        } else {
            $this->IAFMIncreaseFactor = $iAFMIncreaseFactor;
        }
        return $this;
    }
    /**
     * Add item to IAFMIncreaseFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfIAFMIncreaseFactor
     */
    public function addToIAFMIncreaseFactor(\Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor) {
            throw new \InvalidArgumentException(sprintf('The IAFMIncreaseFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->IAFMIncreaseFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncreaseFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IAFMIncreaseFactor
     */
    public function getAttributeName()
    {
        return 'IAFMIncreaseFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfIAFMIncreaseFactor
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
