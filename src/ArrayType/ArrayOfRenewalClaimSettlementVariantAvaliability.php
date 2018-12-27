<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRenewalClaimSettlementVariantAvaliability ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRenewalClaimSettlementVariantAvaliability
 * @subpackage Arrays
 */
class ArrayOfRenewalClaimSettlementVariantAvaliability extends AbstractStructArrayBase
{
    /**
     * The RenewalClaimSettlementVariantAvaliability
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability[]
     */
    public $RenewalClaimSettlementVariantAvaliability;
    /**
     * Constructor method for ArrayOfRenewalClaimSettlementVariantAvaliability
     * @uses ArrayOfRenewalClaimSettlementVariantAvaliability::setRenewalClaimSettlementVariantAvaliability()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability[] $renewalClaimSettlementVariantAvaliability
     */
    public function __construct(array $renewalClaimSettlementVariantAvaliability = array())
    {
        $this
            ->setRenewalClaimSettlementVariantAvaliability($renewalClaimSettlementVariantAvaliability);
    }
    /**
     * Get RenewalClaimSettlementVariantAvaliability value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability[]|null
     */
    public function getRenewalClaimSettlementVariantAvaliability()
    {
        return isset($this->RenewalClaimSettlementVariantAvaliability) ? $this->RenewalClaimSettlementVariantAvaliability : null;
    }
    /**
     * Set RenewalClaimSettlementVariantAvaliability value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability[] $renewalClaimSettlementVariantAvaliability
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRenewalClaimSettlementVariantAvaliability
     */
    public function setRenewalClaimSettlementVariantAvaliability(array $renewalClaimSettlementVariantAvaliability = array())
    {
        foreach ($renewalClaimSettlementVariantAvaliability as $arrayOfRenewalClaimSettlementVariantAvaliabilityRenewalClaimSettlementVariantAvaliabilityItem) {
            // validation for constraint: itemType
            if (!$arrayOfRenewalClaimSettlementVariantAvaliabilityRenewalClaimSettlementVariantAvaliabilityItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability) {
                throw new \InvalidArgumentException(sprintf('The RenewalClaimSettlementVariantAvaliability property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability, "%s" given', is_object($arrayOfRenewalClaimSettlementVariantAvaliabilityRenewalClaimSettlementVariantAvaliabilityItem) ? get_class($arrayOfRenewalClaimSettlementVariantAvaliabilityRenewalClaimSettlementVariantAvaliabilityItem) : gettype($arrayOfRenewalClaimSettlementVariantAvaliabilityRenewalClaimSettlementVariantAvaliabilityItem)), __LINE__);
            }
        }
        if (is_null($renewalClaimSettlementVariantAvaliability) || (is_array($renewalClaimSettlementVariantAvaliability) && empty($renewalClaimSettlementVariantAvaliability))) {
            unset($this->RenewalClaimSettlementVariantAvaliability);
        } else {
            $this->RenewalClaimSettlementVariantAvaliability = $renewalClaimSettlementVariantAvaliability;
        }
        return $this;
    }
    /**
     * Add item to RenewalClaimSettlementVariantAvaliability value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRenewalClaimSettlementVariantAvaliability
     */
    public function addToRenewalClaimSettlementVariantAvaliability(\Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability) {
            throw new \InvalidArgumentException(sprintf('The RenewalClaimSettlementVariantAvaliability property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->RenewalClaimSettlementVariantAvaliability[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RenewalClaimSettlementVariantAvaliability|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RenewalClaimSettlementVariantAvaliability
     */
    public function getAttributeName()
    {
        return 'RenewalClaimSettlementVariantAvaliability';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRenewalClaimSettlementVariantAvaliability
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
