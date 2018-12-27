<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEnginePowerCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEnginePowerCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfEnginePowerCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The EnginePowerCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor[]
     */
    public $EnginePowerCorrectionFactor;
    /**
     * Constructor method for ArrayOfEnginePowerCorrectionFactor
     * @uses ArrayOfEnginePowerCorrectionFactor::setEnginePowerCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor[] $enginePowerCorrectionFactor
     */
    public function __construct(array $enginePowerCorrectionFactor = array())
    {
        $this
            ->setEnginePowerCorrectionFactor($enginePowerCorrectionFactor);
    }
    /**
     * Get EnginePowerCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor[]|null
     */
    public function getEnginePowerCorrectionFactor()
    {
        return isset($this->EnginePowerCorrectionFactor) ? $this->EnginePowerCorrectionFactor : null;
    }
    /**
     * Set EnginePowerCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor[] $enginePowerCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerCorrectionFactor
     */
    public function setEnginePowerCorrectionFactor(array $enginePowerCorrectionFactor = array())
    {
        foreach ($enginePowerCorrectionFactor as $arrayOfEnginePowerCorrectionFactorEnginePowerCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfEnginePowerCorrectionFactorEnginePowerCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The EnginePowerCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor, "%s" given', is_object($arrayOfEnginePowerCorrectionFactorEnginePowerCorrectionFactorItem) ? get_class($arrayOfEnginePowerCorrectionFactorEnginePowerCorrectionFactorItem) : gettype($arrayOfEnginePowerCorrectionFactorEnginePowerCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($enginePowerCorrectionFactor) || (is_array($enginePowerCorrectionFactor) && empty($enginePowerCorrectionFactor))) {
            unset($this->EnginePowerCorrectionFactor);
        } else {
            $this->EnginePowerCorrectionFactor = $enginePowerCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to EnginePowerCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerCorrectionFactor
     */
    public function addToEnginePowerCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The EnginePowerCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EnginePowerCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EnginePowerCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EnginePowerCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'EnginePowerCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEnginePowerCorrectionFactor
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
