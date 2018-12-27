<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfExclusion ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfExclusion
 * @subpackage Arrays
 */
class ArrayOfExclusion extends AbstractStructArrayBase
{
    /**
     * The Exclusion
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Exclusion[]
     */
    public $Exclusion;
    /**
     * Constructor method for ArrayOfExclusion
     * @uses ArrayOfExclusion::setExclusion()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Exclusion[] $exclusion
     */
    public function __construct(array $exclusion = array())
    {
        $this
            ->setExclusion($exclusion);
    }
    /**
     * Get Exclusion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Exclusion[]|null
     */
    public function getExclusion()
    {
        return isset($this->Exclusion) ? $this->Exclusion : null;
    }
    /**
     * Set Exclusion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Exclusion[] $exclusion
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfExclusion
     */
    public function setExclusion(array $exclusion = array())
    {
        foreach ($exclusion as $arrayOfExclusionExclusionItem) {
            // validation for constraint: itemType
            if (!$arrayOfExclusionExclusionItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Exclusion) {
                throw new \InvalidArgumentException(sprintf('The Exclusion property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Exclusion, "%s" given', is_object($arrayOfExclusionExclusionItem) ? get_class($arrayOfExclusionExclusionItem) : gettype($arrayOfExclusionExclusionItem)), __LINE__);
            }
        }
        if (is_null($exclusion) || (is_array($exclusion) && empty($exclusion))) {
            unset($this->Exclusion);
        } else {
            $this->Exclusion = $exclusion;
        }
        return $this;
    }
    /**
     * Add item to Exclusion value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Exclusion $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfExclusion
     */
    public function addToExclusion(\Mu4ddi3\Compensa\Webservice\StructType\Exclusion $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Exclusion) {
            throw new \InvalidArgumentException(sprintf('The Exclusion property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Exclusion, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Exclusion[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Exclusion|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Exclusion|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Exclusion|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Exclusion|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Exclusion|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Exclusion
     */
    public function getAttributeName()
    {
        return 'Exclusion';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfExclusion
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
