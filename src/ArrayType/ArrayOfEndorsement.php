<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEndorsement ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEndorsement
 * @subpackage Arrays
 */
class ArrayOfEndorsement extends AbstractStructArrayBase
{
    /**
     * The Endorsement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Endorsement[]
     */
    public $Endorsement;
    /**
     * Constructor method for ArrayOfEndorsement
     * @uses ArrayOfEndorsement::setEndorsement()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Endorsement[] $endorsement
     */
    public function __construct(array $endorsement = array())
    {
        $this
            ->setEndorsement($endorsement);
    }
    /**
     * Get Endorsement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Endorsement[]|null
     */
    public function getEndorsement()
    {
        return isset($this->Endorsement) ? $this->Endorsement : null;
    }
    /**
     * Set Endorsement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Endorsement[] $endorsement
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEndorsement
     */
    public function setEndorsement(array $endorsement = array())
    {
        foreach ($endorsement as $arrayOfEndorsementEndorsementItem) {
            // validation for constraint: itemType
            if (!$arrayOfEndorsementEndorsementItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Endorsement) {
                throw new \InvalidArgumentException(sprintf('The Endorsement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Endorsement, "%s" given', is_object($arrayOfEndorsementEndorsementItem) ? get_class($arrayOfEndorsementEndorsementItem) : gettype($arrayOfEndorsementEndorsementItem)), __LINE__);
            }
        }
        if (is_null($endorsement) || (is_array($endorsement) && empty($endorsement))) {
            unset($this->Endorsement);
        } else {
            $this->Endorsement = $endorsement;
        }
        return $this;
    }
    /**
     * Add item to Endorsement value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Endorsement $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEndorsement
     */
    public function addToEndorsement(\Mu4ddi3\Compensa\Webservice\StructType\Endorsement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Endorsement) {
            throw new \InvalidArgumentException(sprintf('The Endorsement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Endorsement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Endorsement[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Endorsement|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Endorsement|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Endorsement|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Endorsement|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Endorsement|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Endorsement
     */
    public function getAttributeName()
    {
        return 'Endorsement';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEndorsement
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
