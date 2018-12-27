<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMZPPartner ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMZPPartner
 * @subpackage Arrays
 */
class ArrayOfMZPPartner extends AbstractStructArrayBase
{
    /**
     * The MZPPartner
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner[]
     */
    public $MZPPartner;
    /**
     * Constructor method for ArrayOfMZPPartner
     * @uses ArrayOfMZPPartner::setMZPPartner()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner[] $mZPPartner
     */
    public function __construct(array $mZPPartner = array())
    {
        $this
            ->setMZPPartner($mZPPartner);
    }
    /**
     * Get MZPPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner[]|null
     */
    public function getMZPPartner()
    {
        return isset($this->MZPPartner) ? $this->MZPPartner : null;
    }
    /**
     * Set MZPPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner[] $mZPPartner
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner
     */
    public function setMZPPartner(array $mZPPartner = array())
    {
        foreach ($mZPPartner as $arrayOfMZPPartnerMZPPartnerItem) {
            // validation for constraint: itemType
            if (!$arrayOfMZPPartnerMZPPartnerItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner) {
                throw new \InvalidArgumentException(sprintf('The MZPPartner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner, "%s" given', is_object($arrayOfMZPPartnerMZPPartnerItem) ? get_class($arrayOfMZPPartnerMZPPartnerItem) : gettype($arrayOfMZPPartnerMZPPartnerItem)), __LINE__);
            }
        }
        if (is_null($mZPPartner) || (is_array($mZPPartner) && empty($mZPPartner))) {
            unset($this->MZPPartner);
        } else {
            $this->MZPPartner = $mZPPartner;
        }
        return $this;
    }
    /**
     * Add item to MZPPartner value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner
     */
    public function addToMZPPartner(\Mu4ddi3\Compensa\Webservice\StructType\MZPPartner $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner) {
            throw new \InvalidArgumentException(sprintf('The MZPPartner property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MZPPartner[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPartner|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MZPPartner
     */
    public function getAttributeName()
    {
        return 'MZPPartner';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner
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
