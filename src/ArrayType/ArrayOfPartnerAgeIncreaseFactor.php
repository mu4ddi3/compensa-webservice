<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPartnerAgeIncreaseFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPartnerAgeIncreaseFactor
 * @subpackage Arrays
 */
class ArrayOfPartnerAgeIncreaseFactor extends AbstractStructArrayBase
{
    /**
     * The PartnerAgeIncreaseFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor[]
     */
    public $PartnerAgeIncreaseFactor;
    /**
     * Constructor method for ArrayOfPartnerAgeIncreaseFactor
     * @uses ArrayOfPartnerAgeIncreaseFactor::setPartnerAgeIncreaseFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor[] $partnerAgeIncreaseFactor
     */
    public function __construct(array $partnerAgeIncreaseFactor = array())
    {
        $this
            ->setPartnerAgeIncreaseFactor($partnerAgeIncreaseFactor);
    }
    /**
     * Get PartnerAgeIncreaseFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor[]|null
     */
    public function getPartnerAgeIncreaseFactor()
    {
        return isset($this->PartnerAgeIncreaseFactor) ? $this->PartnerAgeIncreaseFactor : null;
    }
    /**
     * Set PartnerAgeIncreaseFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor[] $partnerAgeIncreaseFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeIncreaseFactor
     */
    public function setPartnerAgeIncreaseFactor(array $partnerAgeIncreaseFactor = array())
    {
        foreach ($partnerAgeIncreaseFactor as $arrayOfPartnerAgeIncreaseFactorPartnerAgeIncreaseFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfPartnerAgeIncreaseFactorPartnerAgeIncreaseFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor) {
                throw new \InvalidArgumentException(sprintf('The PartnerAgeIncreaseFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor, "%s" given', is_object($arrayOfPartnerAgeIncreaseFactorPartnerAgeIncreaseFactorItem) ? get_class($arrayOfPartnerAgeIncreaseFactorPartnerAgeIncreaseFactorItem) : gettype($arrayOfPartnerAgeIncreaseFactorPartnerAgeIncreaseFactorItem)), __LINE__);
            }
        }
        if (is_null($partnerAgeIncreaseFactor) || (is_array($partnerAgeIncreaseFactor) && empty($partnerAgeIncreaseFactor))) {
            unset($this->PartnerAgeIncreaseFactor);
        } else {
            $this->PartnerAgeIncreaseFactor = $partnerAgeIncreaseFactor;
        }
        return $this;
    }
    /**
     * Add item to PartnerAgeIncreaseFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeIncreaseFactor
     */
    public function addToPartnerAgeIncreaseFactor(\Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor) {
            throw new \InvalidArgumentException(sprintf('The PartnerAgeIncreaseFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PartnerAgeIncreaseFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeIncreaseFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PartnerAgeIncreaseFactor
     */
    public function getAttributeName()
    {
        return 'PartnerAgeIncreaseFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerAgeIncreaseFactor
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
