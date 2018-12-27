<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCompensaPartner ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCompensaPartner
 * @subpackage Arrays
 */
class ArrayOfCompensaPartner extends AbstractStructArrayBase
{
    /**
     * The CompensaPartner
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner[]
     */
    public $CompensaPartner;
    /**
     * Constructor method for ArrayOfCompensaPartner
     * @uses ArrayOfCompensaPartner::setCompensaPartner()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner[] $compensaPartner
     */
    public function __construct(array $compensaPartner = array())
    {
        $this
            ->setCompensaPartner($compensaPartner);
    }
    /**
     * Get CompensaPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner[]|null
     */
    public function getCompensaPartner()
    {
        return isset($this->CompensaPartner) ? $this->CompensaPartner : null;
    }
    /**
     * Set CompensaPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner[] $compensaPartner
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPartner
     */
    public function setCompensaPartner(array $compensaPartner = array())
    {
        foreach ($compensaPartner as $arrayOfCompensaPartnerCompensaPartnerItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompensaPartnerCompensaPartnerItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner) {
                throw new \InvalidArgumentException(sprintf('The CompensaPartner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner, "%s" given', is_object($arrayOfCompensaPartnerCompensaPartnerItem) ? get_class($arrayOfCompensaPartnerCompensaPartnerItem) : gettype($arrayOfCompensaPartnerCompensaPartnerItem)), __LINE__);
            }
        }
        if (is_null($compensaPartner) || (is_array($compensaPartner) && empty($compensaPartner))) {
            unset($this->CompensaPartner);
        } else {
            $this->CompensaPartner = $compensaPartner;
        }
        return $this;
    }
    /**
     * Add item to CompensaPartner value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPartner
     */
    public function addToCompensaPartner(\Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner) {
            throw new \InvalidArgumentException(sprintf('The CompensaPartner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CompensaPartner[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPartner|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CompensaPartner
     */
    public function getAttributeName()
    {
        return 'CompensaPartner';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPartner
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
