<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPartnerType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPartnerType
 * @subpackage Arrays
 */
class ArrayOfPartnerType extends AbstractStructArrayBase
{
    /**
     * The PartnerType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType[]
     */
    public $PartnerType;
    /**
     * Constructor method for ArrayOfPartnerType
     * @uses ArrayOfPartnerType::setPartnerType()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType[] $partnerType
     */
    public function __construct(array $partnerType = array())
    {
        $this
            ->setPartnerType($partnerType);
    }
    /**
     * Get PartnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType[]|null
     */
    public function getPartnerType()
    {
        return isset($this->PartnerType) ? $this->PartnerType : null;
    }
    /**
     * Set PartnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType[] $partnerType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerType
     */
    public function setPartnerType(array $partnerType = array())
    {
        foreach ($partnerType as $arrayOfPartnerTypePartnerTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfPartnerTypePartnerTypeItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PartnerType) {
                throw new \InvalidArgumentException(sprintf('The PartnerType property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PartnerType, "%s" given', is_object($arrayOfPartnerTypePartnerTypeItem) ? get_class($arrayOfPartnerTypePartnerTypeItem) : gettype($arrayOfPartnerTypePartnerTypeItem)), __LINE__);
            }
        }
        if (is_null($partnerType) || (is_array($partnerType) && empty($partnerType))) {
            unset($this->PartnerType);
        } else {
            $this->PartnerType = $partnerType;
        }
        return $this;
    }
    /**
     * Add item to PartnerType value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerType
     */
    public function addToPartnerType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PartnerType) {
            throw new \InvalidArgumentException(sprintf('The PartnerType property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PartnerType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PartnerType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PartnerType
     */
    public function getAttributeName()
    {
        return 'PartnerType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerType
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
