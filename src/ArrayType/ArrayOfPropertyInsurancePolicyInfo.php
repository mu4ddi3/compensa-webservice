<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPropertyInsurancePolicyInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPropertyInsurancePolicyInfo
 * @subpackage Arrays
 */
class ArrayOfPropertyInsurancePolicyInfo extends AbstractStructArrayBase
{
    /**
     * The PropertyInsurancePolicyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo[]
     */
    public $PropertyInsurancePolicyInfo;
    /**
     * Constructor method for ArrayOfPropertyInsurancePolicyInfo
     * @uses ArrayOfPropertyInsurancePolicyInfo::setPropertyInsurancePolicyInfo()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo[] $propertyInsurancePolicyInfo
     */
    public function __construct(array $propertyInsurancePolicyInfo = array())
    {
        $this
            ->setPropertyInsurancePolicyInfo($propertyInsurancePolicyInfo);
    }
    /**
     * Get PropertyInsurancePolicyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo[]|null
     */
    public function getPropertyInsurancePolicyInfo()
    {
        return isset($this->PropertyInsurancePolicyInfo) ? $this->PropertyInsurancePolicyInfo : null;
    }
    /**
     * Set PropertyInsurancePolicyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo[] $propertyInsurancePolicyInfo
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsurancePolicyInfo
     */
    public function setPropertyInsurancePolicyInfo(array $propertyInsurancePolicyInfo = array())
    {
        foreach ($propertyInsurancePolicyInfo as $arrayOfPropertyInsurancePolicyInfoPropertyInsurancePolicyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPropertyInsurancePolicyInfoPropertyInsurancePolicyInfoItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo) {
                throw new \InvalidArgumentException(sprintf('The PropertyInsurancePolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo, "%s" given', is_object($arrayOfPropertyInsurancePolicyInfoPropertyInsurancePolicyInfoItem) ? get_class($arrayOfPropertyInsurancePolicyInfoPropertyInsurancePolicyInfoItem) : gettype($arrayOfPropertyInsurancePolicyInfoPropertyInsurancePolicyInfoItem)), __LINE__);
            }
        }
        if (is_null($propertyInsurancePolicyInfo) || (is_array($propertyInsurancePolicyInfo) && empty($propertyInsurancePolicyInfo))) {
            unset($this->PropertyInsurancePolicyInfo);
        } else {
            $this->PropertyInsurancePolicyInfo = $propertyInsurancePolicyInfo;
        }
        return $this;
    }
    /**
     * Add item to PropertyInsurancePolicyInfo value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsurancePolicyInfo
     */
    public function addToPropertyInsurancePolicyInfo(\Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo) {
            throw new \InvalidArgumentException(sprintf('The PropertyInsurancePolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PropertyInsurancePolicyInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PropertyInsurancePolicyInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PropertyInsurancePolicyInfo
     */
    public function getAttributeName()
    {
        return 'PropertyInsurancePolicyInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPropertyInsurancePolicyInfo
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
