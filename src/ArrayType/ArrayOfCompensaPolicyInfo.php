<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCompensaPolicyInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCompensaPolicyInfo
 * @subpackage Arrays
 */
class ArrayOfCompensaPolicyInfo extends AbstractStructArrayBase
{
    /**
     * The CompensaPolicyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo[]
     */
    public $CompensaPolicyInfo;
    /**
     * Constructor method for ArrayOfCompensaPolicyInfo
     * @uses ArrayOfCompensaPolicyInfo::setCompensaPolicyInfo()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo[] $compensaPolicyInfo
     */
    public function __construct(array $compensaPolicyInfo = array())
    {
        $this
            ->setCompensaPolicyInfo($compensaPolicyInfo);
    }
    /**
     * Get CompensaPolicyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo[]|null
     */
    public function getCompensaPolicyInfo()
    {
        return isset($this->CompensaPolicyInfo) ? $this->CompensaPolicyInfo : null;
    }
    /**
     * Set CompensaPolicyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo[] $compensaPolicyInfo
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPolicyInfo
     */
    public function setCompensaPolicyInfo(array $compensaPolicyInfo = array())
    {
        foreach ($compensaPolicyInfo as $arrayOfCompensaPolicyInfoCompensaPolicyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompensaPolicyInfoCompensaPolicyInfoItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo) {
                throw new \InvalidArgumentException(sprintf('The CompensaPolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo, "%s" given', is_object($arrayOfCompensaPolicyInfoCompensaPolicyInfoItem) ? get_class($arrayOfCompensaPolicyInfoCompensaPolicyInfoItem) : gettype($arrayOfCompensaPolicyInfoCompensaPolicyInfoItem)), __LINE__);
            }
        }
        if (is_null($compensaPolicyInfo) || (is_array($compensaPolicyInfo) && empty($compensaPolicyInfo))) {
            unset($this->CompensaPolicyInfo);
        } else {
            $this->CompensaPolicyInfo = $compensaPolicyInfo;
        }
        return $this;
    }
    /**
     * Add item to CompensaPolicyInfo value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPolicyInfo
     */
    public function addToCompensaPolicyInfo(\Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo) {
            throw new \InvalidArgumentException(sprintf('The CompensaPolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CompensaPolicyInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaPolicyInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CompensaPolicyInfo
     */
    public function getAttributeName()
    {
        return 'CompensaPolicyInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPolicyInfo
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
