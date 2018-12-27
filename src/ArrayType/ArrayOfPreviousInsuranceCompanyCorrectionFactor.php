<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPreviousInsuranceCompanyCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPreviousInsuranceCompanyCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfPreviousInsuranceCompanyCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The PreviousInsuranceCompanyCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor[]
     */
    public $PreviousInsuranceCompanyCorrectionFactor;
    /**
     * Constructor method for ArrayOfPreviousInsuranceCompanyCorrectionFactor
     * @uses ArrayOfPreviousInsuranceCompanyCorrectionFactor::setPreviousInsuranceCompanyCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor[] $previousInsuranceCompanyCorrectionFactor
     */
    public function __construct(array $previousInsuranceCompanyCorrectionFactor = array())
    {
        $this
            ->setPreviousInsuranceCompanyCorrectionFactor($previousInsuranceCompanyCorrectionFactor);
    }
    /**
     * Get PreviousInsuranceCompanyCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor[]|null
     */
    public function getPreviousInsuranceCompanyCorrectionFactor()
    {
        return isset($this->PreviousInsuranceCompanyCorrectionFactor) ? $this->PreviousInsuranceCompanyCorrectionFactor : null;
    }
    /**
     * Set PreviousInsuranceCompanyCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor[] $previousInsuranceCompanyCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPreviousInsuranceCompanyCorrectionFactor
     */
    public function setPreviousInsuranceCompanyCorrectionFactor(array $previousInsuranceCompanyCorrectionFactor = array())
    {
        foreach ($previousInsuranceCompanyCorrectionFactor as $arrayOfPreviousInsuranceCompanyCorrectionFactorPreviousInsuranceCompanyCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfPreviousInsuranceCompanyCorrectionFactorPreviousInsuranceCompanyCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The PreviousInsuranceCompanyCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor, "%s" given', is_object($arrayOfPreviousInsuranceCompanyCorrectionFactorPreviousInsuranceCompanyCorrectionFactorItem) ? get_class($arrayOfPreviousInsuranceCompanyCorrectionFactorPreviousInsuranceCompanyCorrectionFactorItem) : gettype($arrayOfPreviousInsuranceCompanyCorrectionFactorPreviousInsuranceCompanyCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($previousInsuranceCompanyCorrectionFactor) || (is_array($previousInsuranceCompanyCorrectionFactor) && empty($previousInsuranceCompanyCorrectionFactor))) {
            unset($this->PreviousInsuranceCompanyCorrectionFactor);
        } else {
            $this->PreviousInsuranceCompanyCorrectionFactor = $previousInsuranceCompanyCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to PreviousInsuranceCompanyCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPreviousInsuranceCompanyCorrectionFactor
     */
    public function addToPreviousInsuranceCompanyCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The PreviousInsuranceCompanyCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PreviousInsuranceCompanyCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PreviousInsuranceCompanyCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'PreviousInsuranceCompanyCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPreviousInsuranceCompanyCorrectionFactor
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
