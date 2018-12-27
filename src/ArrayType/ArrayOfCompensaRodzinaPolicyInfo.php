<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCompensaRodzinaPolicyInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCompensaRodzinaPolicyInfo
 * @subpackage Arrays
 */
class ArrayOfCompensaRodzinaPolicyInfo extends AbstractStructArrayBase
{
    /**
     * The CompensaRodzinaPolicyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo[]
     */
    public $CompensaRodzinaPolicyInfo;
    /**
     * Constructor method for ArrayOfCompensaRodzinaPolicyInfo
     * @uses ArrayOfCompensaRodzinaPolicyInfo::setCompensaRodzinaPolicyInfo()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo[] $compensaRodzinaPolicyInfo
     */
    public function __construct(array $compensaRodzinaPolicyInfo = array())
    {
        $this
            ->setCompensaRodzinaPolicyInfo($compensaRodzinaPolicyInfo);
    }
    /**
     * Get CompensaRodzinaPolicyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo[]|null
     */
    public function getCompensaRodzinaPolicyInfo()
    {
        return isset($this->CompensaRodzinaPolicyInfo) ? $this->CompensaRodzinaPolicyInfo : null;
    }
    /**
     * Set CompensaRodzinaPolicyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo[] $compensaRodzinaPolicyInfo
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaRodzinaPolicyInfo
     */
    public function setCompensaRodzinaPolicyInfo(array $compensaRodzinaPolicyInfo = array())
    {
        foreach ($compensaRodzinaPolicyInfo as $arrayOfCompensaRodzinaPolicyInfoCompensaRodzinaPolicyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompensaRodzinaPolicyInfoCompensaRodzinaPolicyInfoItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo) {
                throw new \InvalidArgumentException(sprintf('The CompensaRodzinaPolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo, "%s" given', is_object($arrayOfCompensaRodzinaPolicyInfoCompensaRodzinaPolicyInfoItem) ? get_class($arrayOfCompensaRodzinaPolicyInfoCompensaRodzinaPolicyInfoItem) : gettype($arrayOfCompensaRodzinaPolicyInfoCompensaRodzinaPolicyInfoItem)), __LINE__);
            }
        }
        if (is_null($compensaRodzinaPolicyInfo) || (is_array($compensaRodzinaPolicyInfo) && empty($compensaRodzinaPolicyInfo))) {
            unset($this->CompensaRodzinaPolicyInfo);
        } else {
            $this->CompensaRodzinaPolicyInfo = $compensaRodzinaPolicyInfo;
        }
        return $this;
    }
    /**
     * Add item to CompensaRodzinaPolicyInfo value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaRodzinaPolicyInfo
     */
    public function addToCompensaRodzinaPolicyInfo(\Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo) {
            throw new \InvalidArgumentException(sprintf('The CompensaRodzinaPolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CompensaRodzinaPolicyInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRodzinaPolicyInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CompensaRodzinaPolicyInfo
     */
    public function getAttributeName()
    {
        return 'CompensaRodzinaPolicyInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaRodzinaPolicyInfo
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
