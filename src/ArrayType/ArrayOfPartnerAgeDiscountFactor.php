<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPartnerAgeDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPartnerAgeDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfPartnerAgeDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The PartnerAgeDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor[]
     */
    public $PartnerAgeDiscountFactor;
    /**
     * Constructor method for ArrayOfPartnerAgeDiscountFactor
     * @uses ArrayOfPartnerAgeDiscountFactor::setPartnerAgeDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor[] $partnerAgeDiscountFactor
     */
    public function __construct(array $partnerAgeDiscountFactor = array())
    {
        $this
            ->setPartnerAgeDiscountFactor($partnerAgeDiscountFactor);
    }
    /**
     * Get PartnerAgeDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor[]|null
     */
    public function getPartnerAgeDiscountFactor()
    {
        return isset($this->PartnerAgeDiscountFactor) ? $this->PartnerAgeDiscountFactor : null;
    }
    /**
     * Set PartnerAgeDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor[] $partnerAgeDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeDiscountFactor
     */
    public function setPartnerAgeDiscountFactor(array $partnerAgeDiscountFactor = array())
    {
        foreach ($partnerAgeDiscountFactor as $arrayOfPartnerAgeDiscountFactorPartnerAgeDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfPartnerAgeDiscountFactorPartnerAgeDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The PartnerAgeDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor, "%s" given', is_object($arrayOfPartnerAgeDiscountFactorPartnerAgeDiscountFactorItem) ? get_class($arrayOfPartnerAgeDiscountFactorPartnerAgeDiscountFactorItem) : gettype($arrayOfPartnerAgeDiscountFactorPartnerAgeDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($partnerAgeDiscountFactor) || (is_array($partnerAgeDiscountFactor) && empty($partnerAgeDiscountFactor))) {
            unset($this->PartnerAgeDiscountFactor);
        } else {
            $this->PartnerAgeDiscountFactor = $partnerAgeDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to PartnerAgeDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeDiscountFactor
     */
    public function addToPartnerAgeDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The PartnerAgeDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PartnerAgeDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PartnerAgeDiscountFactor
     */
    public function getAttributeName()
    {
        return 'PartnerAgeDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeDiscountFactor
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
