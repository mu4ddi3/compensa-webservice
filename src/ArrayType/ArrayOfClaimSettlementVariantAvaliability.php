<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaimSettlementVariantAvaliability ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfClaimSettlementVariantAvaliability
 * @subpackage Arrays
 */
class ArrayOfClaimSettlementVariantAvaliability extends AbstractStructArrayBase
{
    /**
     * The ClaimSettlementVariantAvaliability
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability[]
     */
    public $ClaimSettlementVariantAvaliability;
    /**
     * Constructor method for ArrayOfClaimSettlementVariantAvaliability
     * @uses ArrayOfClaimSettlementVariantAvaliability::setClaimSettlementVariantAvaliability()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability[] $claimSettlementVariantAvaliability
     */
    public function __construct(array $claimSettlementVariantAvaliability = array())
    {
        $this
            ->setClaimSettlementVariantAvaliability($claimSettlementVariantAvaliability);
    }
    /**
     * Get ClaimSettlementVariantAvaliability value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability[]|null
     */
    public function getClaimSettlementVariantAvaliability()
    {
        return isset($this->ClaimSettlementVariantAvaliability) ? $this->ClaimSettlementVariantAvaliability : null;
    }
    /**
     * Set ClaimSettlementVariantAvaliability value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability[] $claimSettlementVariantAvaliability
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantAvaliability
     */
    public function setClaimSettlementVariantAvaliability(array $claimSettlementVariantAvaliability = array())
    {
        foreach ($claimSettlementVariantAvaliability as $arrayOfClaimSettlementVariantAvaliabilityClaimSettlementVariantAvaliabilityItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaimSettlementVariantAvaliabilityClaimSettlementVariantAvaliabilityItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability) {
                throw new \InvalidArgumentException(sprintf('The ClaimSettlementVariantAvaliability property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability, "%s" given', is_object($arrayOfClaimSettlementVariantAvaliabilityClaimSettlementVariantAvaliabilityItem) ? get_class($arrayOfClaimSettlementVariantAvaliabilityClaimSettlementVariantAvaliabilityItem) : gettype($arrayOfClaimSettlementVariantAvaliabilityClaimSettlementVariantAvaliabilityItem)), __LINE__);
            }
        }
        if (is_null($claimSettlementVariantAvaliability) || (is_array($claimSettlementVariantAvaliability) && empty($claimSettlementVariantAvaliability))) {
            unset($this->ClaimSettlementVariantAvaliability);
        } else {
            $this->ClaimSettlementVariantAvaliability = $claimSettlementVariantAvaliability;
        }
        return $this;
    }
    /**
     * Add item to ClaimSettlementVariantAvaliability value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantAvaliability
     */
    public function addToClaimSettlementVariantAvaliability(\Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability) {
            throw new \InvalidArgumentException(sprintf('The ClaimSettlementVariantAvaliability property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClaimSettlementVariantAvaliability[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantAvaliability|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaimSettlementVariantAvaliability
     */
    public function getAttributeName()
    {
        return 'ClaimSettlementVariantAvaliability';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantAvaliability
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
