<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaim ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfClaim
 * @subpackage Arrays
 */
class ArrayOfClaim extends AbstractStructArrayBase
{
    /**
     * The Claim
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Claim[]
     */
    public $Claim;
    /**
     * Constructor method for ArrayOfClaim
     * @uses ArrayOfClaim::setClaim()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Claim[] $claim
     */
    public function __construct(array $claim = array())
    {
        $this
            ->setClaim($claim);
    }
    /**
     * Get Claim value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim[]|null
     */
    public function getClaim()
    {
        return isset($this->Claim) ? $this->Claim : null;
    }
    /**
     * Set Claim value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Claim[] $claim
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim
     */
    public function setClaim(array $claim = array())
    {
        foreach ($claim as $arrayOfClaimClaimItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaimClaimItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Claim) {
                throw new \InvalidArgumentException(sprintf('The Claim property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Claim, "%s" given', is_object($arrayOfClaimClaimItem) ? get_class($arrayOfClaimClaimItem) : gettype($arrayOfClaimClaimItem)), __LINE__);
            }
        }
        if (is_null($claim) || (is_array($claim) && empty($claim))) {
            unset($this->Claim);
        } else {
            $this->Claim = $claim;
        }
        return $this;
    }
    /**
     * Add item to Claim value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Claim $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim
     */
    public function addToClaim(\Mu4ddi3\Compensa\Webservice\StructType\Claim $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Claim) {
            throw new \InvalidArgumentException(sprintf('The Claim property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Claim, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Claim[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Claim|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Claim
     */
    public function getAttributeName()
    {
        return 'Claim';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim
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
