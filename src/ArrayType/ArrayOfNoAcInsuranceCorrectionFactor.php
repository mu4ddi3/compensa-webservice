<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfNoAcInsuranceCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfNoAcInsuranceCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfNoAcInsuranceCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The NoAcInsuranceCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor[]
     */
    public $NoAcInsuranceCorrectionFactor;
    /**
     * Constructor method for ArrayOfNoAcInsuranceCorrectionFactor
     * @uses ArrayOfNoAcInsuranceCorrectionFactor::setNoAcInsuranceCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor[] $noAcInsuranceCorrectionFactor
     */
    public function __construct(array $noAcInsuranceCorrectionFactor = array())
    {
        $this
            ->setNoAcInsuranceCorrectionFactor($noAcInsuranceCorrectionFactor);
    }
    /**
     * Get NoAcInsuranceCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor[]|null
     */
    public function getNoAcInsuranceCorrectionFactor()
    {
        return isset($this->NoAcInsuranceCorrectionFactor) ? $this->NoAcInsuranceCorrectionFactor : null;
    }
    /**
     * Set NoAcInsuranceCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor[] $noAcInsuranceCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNoAcInsuranceCorrectionFactor
     */
    public function setNoAcInsuranceCorrectionFactor(array $noAcInsuranceCorrectionFactor = array())
    {
        foreach ($noAcInsuranceCorrectionFactor as $arrayOfNoAcInsuranceCorrectionFactorNoAcInsuranceCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfNoAcInsuranceCorrectionFactorNoAcInsuranceCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The NoAcInsuranceCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor, "%s" given', is_object($arrayOfNoAcInsuranceCorrectionFactorNoAcInsuranceCorrectionFactorItem) ? get_class($arrayOfNoAcInsuranceCorrectionFactorNoAcInsuranceCorrectionFactorItem) : gettype($arrayOfNoAcInsuranceCorrectionFactorNoAcInsuranceCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($noAcInsuranceCorrectionFactor) || (is_array($noAcInsuranceCorrectionFactor) && empty($noAcInsuranceCorrectionFactor))) {
            unset($this->NoAcInsuranceCorrectionFactor);
        } else {
            $this->NoAcInsuranceCorrectionFactor = $noAcInsuranceCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to NoAcInsuranceCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNoAcInsuranceCorrectionFactor
     */
    public function addToNoAcInsuranceCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The NoAcInsuranceCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->NoAcInsuranceCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string NoAcInsuranceCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'NoAcInsuranceCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfNoAcInsuranceCorrectionFactor
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
