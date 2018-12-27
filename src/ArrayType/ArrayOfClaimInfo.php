<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClaimInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfClaimInfo
 * @subpackage Arrays
 */
class ArrayOfClaimInfo extends AbstractStructArrayBase
{
    /**
     * The ClaimInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo[]
     */
    public $ClaimInfo;
    /**
     * Constructor method for ArrayOfClaimInfo
     * @uses ArrayOfClaimInfo::setClaimInfo()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo[] $claimInfo
     */
    public function __construct(array $claimInfo = array())
    {
        $this
            ->setClaimInfo($claimInfo);
    }
    /**
     * Get ClaimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo[]|null
     */
    public function getClaimInfo()
    {
        return isset($this->ClaimInfo) ? $this->ClaimInfo : null;
    }
    /**
     * Set ClaimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo[] $claimInfo
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo
     */
    public function setClaimInfo(array $claimInfo = array())
    {
        foreach ($claimInfo as $arrayOfClaimInfoClaimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfClaimInfoClaimInfoItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo) {
                throw new \InvalidArgumentException(sprintf('The ClaimInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo, "%s" given', is_object($arrayOfClaimInfoClaimInfoItem) ? get_class($arrayOfClaimInfoClaimInfoItem) : gettype($arrayOfClaimInfoClaimInfoItem)), __LINE__);
            }
        }
        if (is_null($claimInfo) || (is_array($claimInfo) && empty($claimInfo))) {
            unset($this->ClaimInfo);
        } else {
            $this->ClaimInfo = $claimInfo;
        }
        return $this;
    }
    /**
     * Add item to ClaimInfo value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo
     */
    public function addToClaimInfo(\Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo) {
            throw new \InvalidArgumentException(sprintf('The ClaimInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClaimInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClaimInfo
     */
    public function getAttributeName()
    {
        return 'ClaimInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimInfo
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
