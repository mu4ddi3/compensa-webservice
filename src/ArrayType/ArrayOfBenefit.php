<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBenefit ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBenefit
 * @subpackage Arrays
 */
class ArrayOfBenefit extends AbstractStructArrayBase
{
    /**
     * The Benefit
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Benefit[]
     */
    public $Benefit;
    /**
     * Constructor method for ArrayOfBenefit
     * @uses ArrayOfBenefit::setBenefit()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Benefit[] $benefit
     */
    public function __construct(array $benefit = array())
    {
        $this
            ->setBenefit($benefit);
    }
    /**
     * Get Benefit value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit[]|null
     */
    public function getBenefit()
    {
        return isset($this->Benefit) ? $this->Benefit : null;
    }
    /**
     * Set Benefit value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Benefit[] $benefit
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBenefit
     */
    public function setBenefit(array $benefit = array())
    {
        foreach ($benefit as $arrayOfBenefitBenefitItem) {
            // validation for constraint: itemType
            if (!$arrayOfBenefitBenefitItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Benefit) {
                throw new \InvalidArgumentException(sprintf('The Benefit property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Benefit, "%s" given', is_object($arrayOfBenefitBenefitItem) ? get_class($arrayOfBenefitBenefitItem) : gettype($arrayOfBenefitBenefitItem)), __LINE__);
            }
        }
        if (is_null($benefit) || (is_array($benefit) && empty($benefit))) {
            unset($this->Benefit);
        } else {
            $this->Benefit = $benefit;
        }
        return $this;
    }
    /**
     * Add item to Benefit value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Benefit $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBenefit
     */
    public function addToBenefit(\Mu4ddi3\Compensa\Webservice\StructType\Benefit $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Benefit) {
            throw new \InvalidArgumentException(sprintf('The Benefit property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Benefit, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Benefit[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Benefit|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Benefit
     */
    public function getAttributeName()
    {
        return 'Benefit';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBenefit
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
