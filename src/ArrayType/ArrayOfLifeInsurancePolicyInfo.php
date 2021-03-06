<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLifeInsurancePolicyInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLifeInsurancePolicyInfo
 * @subpackage Arrays
 */
class ArrayOfLifeInsurancePolicyInfo extends AbstractStructArrayBase
{
    /**
     * The LifeInsurancePolicyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo[]
     */
    public $LifeInsurancePolicyInfo;
    /**
     * Constructor method for ArrayOfLifeInsurancePolicyInfo
     * @uses ArrayOfLifeInsurancePolicyInfo::setLifeInsurancePolicyInfo()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo[] $lifeInsurancePolicyInfo
     */
    public function __construct(array $lifeInsurancePolicyInfo = array())
    {
        $this
            ->setLifeInsurancePolicyInfo($lifeInsurancePolicyInfo);
    }
    /**
     * Get LifeInsurancePolicyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo[]|null
     */
    public function getLifeInsurancePolicyInfo()
    {
        return isset($this->LifeInsurancePolicyInfo) ? $this->LifeInsurancePolicyInfo : null;
    }
    /**
     * Set LifeInsurancePolicyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo[] $lifeInsurancePolicyInfo
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsurancePolicyInfo
     */
    public function setLifeInsurancePolicyInfo(array $lifeInsurancePolicyInfo = array())
    {
        foreach ($lifeInsurancePolicyInfo as $arrayOfLifeInsurancePolicyInfoLifeInsurancePolicyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLifeInsurancePolicyInfoLifeInsurancePolicyInfoItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo) {
                throw new \InvalidArgumentException(sprintf('The LifeInsurancePolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo, "%s" given', is_object($arrayOfLifeInsurancePolicyInfoLifeInsurancePolicyInfoItem) ? get_class($arrayOfLifeInsurancePolicyInfoLifeInsurancePolicyInfoItem) : gettype($arrayOfLifeInsurancePolicyInfoLifeInsurancePolicyInfoItem)), __LINE__);
            }
        }
        if (is_null($lifeInsurancePolicyInfo) || (is_array($lifeInsurancePolicyInfo) && empty($lifeInsurancePolicyInfo))) {
            unset($this->LifeInsurancePolicyInfo);
        } else {
            $this->LifeInsurancePolicyInfo = $lifeInsurancePolicyInfo;
        }
        return $this;
    }
    /**
     * Add item to LifeInsurancePolicyInfo value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsurancePolicyInfo
     */
    public function addToLifeInsurancePolicyInfo(\Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo) {
            throw new \InvalidArgumentException(sprintf('The LifeInsurancePolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LifeInsurancePolicyInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LifeInsurancePolicyInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LifeInsurancePolicyInfo
     */
    public function getAttributeName()
    {
        return 'LifeInsurancePolicyInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLifeInsurancePolicyInfo
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
