<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUnusualVehicleUsageCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUnusualVehicleUsageCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfUnusualVehicleUsageCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The UnusualVehicleUsageCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor[]
     */
    public $UnusualVehicleUsageCorrectionFactor;
    /**
     * Constructor method for ArrayOfUnusualVehicleUsageCorrectionFactor
     * @uses ArrayOfUnusualVehicleUsageCorrectionFactor::setUnusualVehicleUsageCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor[] $unusualVehicleUsageCorrectionFactor
     */
    public function __construct(array $unusualVehicleUsageCorrectionFactor = array())
    {
        $this
            ->setUnusualVehicleUsageCorrectionFactor($unusualVehicleUsageCorrectionFactor);
    }
    /**
     * Get UnusualVehicleUsageCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor[]|null
     */
    public function getUnusualVehicleUsageCorrectionFactor()
    {
        return isset($this->UnusualVehicleUsageCorrectionFactor) ? $this->UnusualVehicleUsageCorrectionFactor : null;
    }
    /**
     * Set UnusualVehicleUsageCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor[] $unusualVehicleUsageCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageCorrectionFactor
     */
    public function setUnusualVehicleUsageCorrectionFactor(array $unusualVehicleUsageCorrectionFactor = array())
    {
        foreach ($unusualVehicleUsageCorrectionFactor as $arrayOfUnusualVehicleUsageCorrectionFactorUnusualVehicleUsageCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfUnusualVehicleUsageCorrectionFactorUnusualVehicleUsageCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The UnusualVehicleUsageCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor, "%s" given', is_object($arrayOfUnusualVehicleUsageCorrectionFactorUnusualVehicleUsageCorrectionFactorItem) ? get_class($arrayOfUnusualVehicleUsageCorrectionFactorUnusualVehicleUsageCorrectionFactorItem) : gettype($arrayOfUnusualVehicleUsageCorrectionFactorUnusualVehicleUsageCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($unusualVehicleUsageCorrectionFactor) || (is_array($unusualVehicleUsageCorrectionFactor) && empty($unusualVehicleUsageCorrectionFactor))) {
            unset($this->UnusualVehicleUsageCorrectionFactor);
        } else {
            $this->UnusualVehicleUsageCorrectionFactor = $unusualVehicleUsageCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to UnusualVehicleUsageCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageCorrectionFactor
     */
    public function addToUnusualVehicleUsageCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The UnusualVehicleUsageCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UnusualVehicleUsageCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UnusualVehicleUsageCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UnusualVehicleUsageCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'UnusualVehicleUsageCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUnusualVehicleUsageCorrectionFactor
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
