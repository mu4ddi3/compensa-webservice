<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCorrection ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCorrection
 * @subpackage Arrays
 */
class ArrayOfCorrection extends AbstractStructArrayBase
{
    /**
     * The Correction
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Correction[]
     */
    public $Correction;
    /**
     * Constructor method for ArrayOfCorrection
     * @uses ArrayOfCorrection::setCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Correction[] $correction
     */
    public function __construct(array $correction = array())
    {
        $this
            ->setCorrection($correction);
    }
    /**
     * Get Correction value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction[]|null
     */
    public function getCorrection()
    {
        return isset($this->Correction) ? $this->Correction : null;
    }
    /**
     * Set Correction value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Correction[] $correction
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCorrection
     */
    public function setCorrection(array $correction = array())
    {
        foreach ($correction as $arrayOfCorrectionCorrectionItem) {
            // validation for constraint: itemType
            if (!$arrayOfCorrectionCorrectionItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Correction) {
                throw new \InvalidArgumentException(sprintf('The Correction property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Correction, "%s" given', is_object($arrayOfCorrectionCorrectionItem) ? get_class($arrayOfCorrectionCorrectionItem) : gettype($arrayOfCorrectionCorrectionItem)), __LINE__);
            }
        }
        if (is_null($correction) || (is_array($correction) && empty($correction))) {
            unset($this->Correction);
        } else {
            $this->Correction = $correction;
        }
        return $this;
    }
    /**
     * Add item to Correction value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Correction $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCorrection
     */
    public function addToCorrection(\Mu4ddi3\Compensa\Webservice\StructType\Correction $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Correction) {
            throw new \InvalidArgumentException(sprintf('The Correction property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Correction, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Correction[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Correction
     */
    public function getAttributeName()
    {
        return 'Correction';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCorrection
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
