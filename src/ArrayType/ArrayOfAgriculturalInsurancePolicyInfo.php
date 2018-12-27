<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAgriculturalInsurancePolicyInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAgriculturalInsurancePolicyInfo
 * @subpackage Arrays
 */
class ArrayOfAgriculturalInsurancePolicyInfo extends AbstractStructArrayBase
{
    /**
     * The AgriculturalInsurancePolicyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo[]
     */
    public $AgriculturalInsurancePolicyInfo;
    /**
     * Constructor method for ArrayOfAgriculturalInsurancePolicyInfo
     * @uses ArrayOfAgriculturalInsurancePolicyInfo::setAgriculturalInsurancePolicyInfo()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo[] $agriculturalInsurancePolicyInfo
     */
    public function __construct(array $agriculturalInsurancePolicyInfo = array())
    {
        $this
            ->setAgriculturalInsurancePolicyInfo($agriculturalInsurancePolicyInfo);
    }
    /**
     * Get AgriculturalInsurancePolicyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo[]|null
     */
    public function getAgriculturalInsurancePolicyInfo()
    {
        return isset($this->AgriculturalInsurancePolicyInfo) ? $this->AgriculturalInsurancePolicyInfo : null;
    }
    /**
     * Set AgriculturalInsurancePolicyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo[] $agriculturalInsurancePolicyInfo
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsurancePolicyInfo
     */
    public function setAgriculturalInsurancePolicyInfo(array $agriculturalInsurancePolicyInfo = array())
    {
        foreach ($agriculturalInsurancePolicyInfo as $arrayOfAgriculturalInsurancePolicyInfoAgriculturalInsurancePolicyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAgriculturalInsurancePolicyInfoAgriculturalInsurancePolicyInfoItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo) {
                throw new \InvalidArgumentException(sprintf('The AgriculturalInsurancePolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo, "%s" given', is_object($arrayOfAgriculturalInsurancePolicyInfoAgriculturalInsurancePolicyInfoItem) ? get_class($arrayOfAgriculturalInsurancePolicyInfoAgriculturalInsurancePolicyInfoItem) : gettype($arrayOfAgriculturalInsurancePolicyInfoAgriculturalInsurancePolicyInfoItem)), __LINE__);
            }
        }
        if (is_null($agriculturalInsurancePolicyInfo) || (is_array($agriculturalInsurancePolicyInfo) && empty($agriculturalInsurancePolicyInfo))) {
            unset($this->AgriculturalInsurancePolicyInfo);
        } else {
            $this->AgriculturalInsurancePolicyInfo = $agriculturalInsurancePolicyInfo;
        }
        return $this;
    }
    /**
     * Add item to AgriculturalInsurancePolicyInfo value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsurancePolicyInfo
     */
    public function addToAgriculturalInsurancePolicyInfo(\Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo) {
            throw new \InvalidArgumentException(sprintf('The AgriculturalInsurancePolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AgriculturalInsurancePolicyInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AgriculturalInsurancePolicyInfo
     */
    public function getAttributeName()
    {
        return 'AgriculturalInsurancePolicyInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgriculturalInsurancePolicyInfo
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
