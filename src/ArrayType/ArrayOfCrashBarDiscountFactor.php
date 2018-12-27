<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCrashBarDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCrashBarDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfCrashBarDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The CrashBarDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor[]
     */
    public $CrashBarDiscountFactor;
    /**
     * Constructor method for ArrayOfCrashBarDiscountFactor
     * @uses ArrayOfCrashBarDiscountFactor::setCrashBarDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor[] $crashBarDiscountFactor
     */
    public function __construct(array $crashBarDiscountFactor = array())
    {
        $this
            ->setCrashBarDiscountFactor($crashBarDiscountFactor);
    }
    /**
     * Get CrashBarDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor[]|null
     */
    public function getCrashBarDiscountFactor()
    {
        return isset($this->CrashBarDiscountFactor) ? $this->CrashBarDiscountFactor : null;
    }
    /**
     * Set CrashBarDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor[] $crashBarDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCrashBarDiscountFactor
     */
    public function setCrashBarDiscountFactor(array $crashBarDiscountFactor = array())
    {
        foreach ($crashBarDiscountFactor as $arrayOfCrashBarDiscountFactorCrashBarDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfCrashBarDiscountFactorCrashBarDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The CrashBarDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor, "%s" given', is_object($arrayOfCrashBarDiscountFactorCrashBarDiscountFactorItem) ? get_class($arrayOfCrashBarDiscountFactorCrashBarDiscountFactorItem) : gettype($arrayOfCrashBarDiscountFactorCrashBarDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($crashBarDiscountFactor) || (is_array($crashBarDiscountFactor) && empty($crashBarDiscountFactor))) {
            unset($this->CrashBarDiscountFactor);
        } else {
            $this->CrashBarDiscountFactor = $crashBarDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to CrashBarDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCrashBarDiscountFactor
     */
    public function addToCrashBarDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The CrashBarDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CrashBarDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CrashBarDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CrashBarDiscountFactor
     */
    public function getAttributeName()
    {
        return 'CrashBarDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCrashBarDiscountFactor
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
