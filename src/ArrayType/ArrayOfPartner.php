<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPartner ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPartner
 * @subpackage Arrays
 */
class ArrayOfPartner extends AbstractStructArrayBase
{
    /**
     * The Partner
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Partner[]
     */
    public $Partner;
    /**
     * Constructor method for ArrayOfPartner
     * @uses ArrayOfPartner::setPartner()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Partner[] $partner
     */
    public function __construct(array $partner = array())
    {
        $this
            ->setPartner($partner);
    }
    /**
     * Get Partner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner[]|null
     */
    public function getPartner()
    {
        return isset($this->Partner) ? $this->Partner : null;
    }
    /**
     * Set Partner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Partner[] $partner
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner
     */
    public function setPartner(array $partner = array())
    {
        foreach ($partner as $arrayOfPartnerPartnerItem) {
            // validation for constraint: itemType
            if (!$arrayOfPartnerPartnerItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Partner) {
                throw new \InvalidArgumentException(sprintf('The Partner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Partner, "%s" given', is_object($arrayOfPartnerPartnerItem) ? get_class($arrayOfPartnerPartnerItem) : gettype($arrayOfPartnerPartnerItem)), __LINE__);
            }
        }
        if (is_null($partner) || (is_array($partner) && empty($partner))) {
            unset($this->Partner);
        } else {
            $this->Partner = $partner;
        }
        return $this;
    }
    /**
     * Add item to Partner value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Partner $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner
     */
    public function addToPartner(\Mu4ddi3\Compensa\Webservice\StructType\Partner $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Partner) {
            throw new \InvalidArgumentException(sprintf('The Partner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Partner, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Partner[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Partner|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Partner
     */
    public function getAttributeName()
    {
        return 'Partner';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner
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
