<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaimSettlementVariantDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfClaimSettlementVariantDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfClaimSettlementVariantDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The ClaimSettlementVariantDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor[]
     */
    public $ClaimSettlementVariantDiscountFactor;
    /**
     * Constructor method for ArrayOfClaimSettlementVariantDiscountFactor
     * @uses ArrayOfClaimSettlementVariantDiscountFactor::setClaimSettlementVariantDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor[] $claimSettlementVariantDiscountFactor
     */
    public function __construct(array $claimSettlementVariantDiscountFactor = array())
    {
        $this
            ->setClaimSettlementVariantDiscountFactor($claimSettlementVariantDiscountFactor);
    }
    /**
     * Get ClaimSettlementVariantDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor[]|null
     */
    public function getClaimSettlementVariantDiscountFactor()
    {
        return isset($this->ClaimSettlementVariantDiscountFactor) ? $this->ClaimSettlementVariantDiscountFactor : null;
    }
    /**
     * Set ClaimSettlementVariantDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor[] $claimSettlementVariantDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantDiscountFactor
     */
    public function setClaimSettlementVariantDiscountFactor(array $claimSettlementVariantDiscountFactor = array())
    {
        foreach ($claimSettlementVariantDiscountFactor as $arrayOfClaimSettlementVariantDiscountFactorClaimSettlementVariantDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaimSettlementVariantDiscountFactorClaimSettlementVariantDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The ClaimSettlementVariantDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor, "%s" given', is_object($arrayOfClaimSettlementVariantDiscountFactorClaimSettlementVariantDiscountFactorItem) ? get_class($arrayOfClaimSettlementVariantDiscountFactorClaimSettlementVariantDiscountFactorItem) : gettype($arrayOfClaimSettlementVariantDiscountFactorClaimSettlementVariantDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($claimSettlementVariantDiscountFactor) || (is_array($claimSettlementVariantDiscountFactor) && empty($claimSettlementVariantDiscountFactor))) {
            unset($this->ClaimSettlementVariantDiscountFactor);
        } else {
            $this->ClaimSettlementVariantDiscountFactor = $claimSettlementVariantDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to ClaimSettlementVariantDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantDiscountFactor
     */
    public function addToClaimSettlementVariantDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The ClaimSettlementVariantDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClaimSettlementVariantDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimSettlementVariantDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaimSettlementVariantDiscountFactor
     */
    public function getAttributeName()
    {
        return 'ClaimSettlementVariantDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimSettlementVariantDiscountFactor
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
