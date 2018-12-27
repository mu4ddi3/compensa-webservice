<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPkdCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPkdCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfPkdCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The PkdCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor[]
     */
    public $PkdCorrectionFactor;
    /**
     * Constructor method for ArrayOfPkdCorrectionFactor
     * @uses ArrayOfPkdCorrectionFactor::setPkdCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor[] $pkdCorrectionFactor
     */
    public function __construct(array $pkdCorrectionFactor = array())
    {
        $this
            ->setPkdCorrectionFactor($pkdCorrectionFactor);
    }
    /**
     * Get PkdCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor[]|null
     */
    public function getPkdCorrectionFactor()
    {
        return isset($this->PkdCorrectionFactor) ? $this->PkdCorrectionFactor : null;
    }
    /**
     * Set PkdCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor[] $pkdCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCorrectionFactor
     */
    public function setPkdCorrectionFactor(array $pkdCorrectionFactor = array())
    {
        foreach ($pkdCorrectionFactor as $arrayOfPkdCorrectionFactorPkdCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfPkdCorrectionFactorPkdCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The PkdCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor, "%s" given', is_object($arrayOfPkdCorrectionFactorPkdCorrectionFactorItem) ? get_class($arrayOfPkdCorrectionFactorPkdCorrectionFactorItem) : gettype($arrayOfPkdCorrectionFactorPkdCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($pkdCorrectionFactor) || (is_array($pkdCorrectionFactor) && empty($pkdCorrectionFactor))) {
            unset($this->PkdCorrectionFactor);
        } else {
            $this->PkdCorrectionFactor = $pkdCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to PkdCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCorrectionFactor
     */
    public function addToPkdCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The PkdCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PkdCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PkdCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'PkdCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCorrectionFactor
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
