<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfConstantInsuranceSumCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfConstantInsuranceSumCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfConstantInsuranceSumCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The ConstantInsuranceSumCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor[]
     */
    public $ConstantInsuranceSumCorrectionFactor;
    /**
     * Constructor method for ArrayOfConstantInsuranceSumCorrectionFactor
     * @uses ArrayOfConstantInsuranceSumCorrectionFactor::setConstantInsuranceSumCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor[] $constantInsuranceSumCorrectionFactor
     */
    public function __construct(array $constantInsuranceSumCorrectionFactor = array())
    {
        $this
            ->setConstantInsuranceSumCorrectionFactor($constantInsuranceSumCorrectionFactor);
    }
    /**
     * Get ConstantInsuranceSumCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor[]|null
     */
    public function getConstantInsuranceSumCorrectionFactor()
    {
        return isset($this->ConstantInsuranceSumCorrectionFactor) ? $this->ConstantInsuranceSumCorrectionFactor : null;
    }
    /**
     * Set ConstantInsuranceSumCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor[] $constantInsuranceSumCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfConstantInsuranceSumCorrectionFactor
     */
    public function setConstantInsuranceSumCorrectionFactor(array $constantInsuranceSumCorrectionFactor = array())
    {
        foreach ($constantInsuranceSumCorrectionFactor as $arrayOfConstantInsuranceSumCorrectionFactorConstantInsuranceSumCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfConstantInsuranceSumCorrectionFactorConstantInsuranceSumCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The ConstantInsuranceSumCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor, "%s" given', is_object($arrayOfConstantInsuranceSumCorrectionFactorConstantInsuranceSumCorrectionFactorItem) ? get_class($arrayOfConstantInsuranceSumCorrectionFactorConstantInsuranceSumCorrectionFactorItem) : gettype($arrayOfConstantInsuranceSumCorrectionFactorConstantInsuranceSumCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($constantInsuranceSumCorrectionFactor) || (is_array($constantInsuranceSumCorrectionFactor) && empty($constantInsuranceSumCorrectionFactor))) {
            unset($this->ConstantInsuranceSumCorrectionFactor);
        } else {
            $this->ConstantInsuranceSumCorrectionFactor = $constantInsuranceSumCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to ConstantInsuranceSumCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfConstantInsuranceSumCorrectionFactor
     */
    public function addToConstantInsuranceSumCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The ConstantInsuranceSumCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ConstantInsuranceSumCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ConstantInsuranceSumCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'ConstantInsuranceSumCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfConstantInsuranceSumCorrectionFactor
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
