<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCentralCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCentralCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfCentralCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The CentralCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor[]
     */
    public $CentralCorrectionFactor;
    /**
     * Constructor method for ArrayOfCentralCorrectionFactor
     * @uses ArrayOfCentralCorrectionFactor::setCentralCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor[] $centralCorrectionFactor
     */
    public function __construct(array $centralCorrectionFactor = array())
    {
        $this
            ->setCentralCorrectionFactor($centralCorrectionFactor);
    }
    /**
     * Get CentralCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor[]|null
     */
    public function getCentralCorrectionFactor()
    {
        return isset($this->CentralCorrectionFactor) ? $this->CentralCorrectionFactor : null;
    }
    /**
     * Set CentralCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor[] $centralCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralCorrectionFactor
     */
    public function setCentralCorrectionFactor(array $centralCorrectionFactor = array())
    {
        foreach ($centralCorrectionFactor as $arrayOfCentralCorrectionFactorCentralCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfCentralCorrectionFactorCentralCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The CentralCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor, "%s" given', is_object($arrayOfCentralCorrectionFactorCentralCorrectionFactorItem) ? get_class($arrayOfCentralCorrectionFactorCentralCorrectionFactorItem) : gettype($arrayOfCentralCorrectionFactorCentralCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($centralCorrectionFactor) || (is_array($centralCorrectionFactor) && empty($centralCorrectionFactor))) {
            unset($this->CentralCorrectionFactor);
        } else {
            $this->CentralCorrectionFactor = $centralCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to CentralCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralCorrectionFactor
     */
    public function addToCentralCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The CentralCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CentralCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CentralCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'CentralCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralCorrectionFactor
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
