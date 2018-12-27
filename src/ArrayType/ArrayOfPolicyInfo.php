<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPolicyInfo ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPolicyInfo
 * @subpackage Arrays
 */
class ArrayOfPolicyInfo extends AbstractStructArrayBase
{
    /**
     * The PolicyInfo
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo[]
     */
    public $PolicyInfo;
    /**
     * Constructor method for ArrayOfPolicyInfo
     * @uses ArrayOfPolicyInfo::setPolicyInfo()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo[] $policyInfo
     */
    public function __construct(array $policyInfo = array())
    {
        $this
            ->setPolicyInfo($policyInfo);
    }
    /**
     * Get PolicyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo[]|null
     */
    public function getPolicyInfo()
    {
        return isset($this->PolicyInfo) ? $this->PolicyInfo : null;
    }
    /**
     * Set PolicyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo[] $policyInfo
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo
     */
    public function setPolicyInfo(array $policyInfo = array())
    {
        foreach ($policyInfo as $arrayOfPolicyInfoPolicyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPolicyInfoPolicyInfoItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo) {
                throw new \InvalidArgumentException(sprintf('The PolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo, "%s" given', is_object($arrayOfPolicyInfoPolicyInfoItem) ? get_class($arrayOfPolicyInfoPolicyInfoItem) : gettype($arrayOfPolicyInfoPolicyInfoItem)), __LINE__);
            }
        }
        if (is_null($policyInfo) || (is_array($policyInfo) && empty($policyInfo))) {
            unset($this->PolicyInfo);
        } else {
            $this->PolicyInfo = $policyInfo;
        }
        return $this;
    }
    /**
     * Add item to PolicyInfo value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo
     */
    public function addToPolicyInfo(\Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo) {
            throw new \InvalidArgumentException(sprintf('The PolicyInfo property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PolicyInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PolicyInfo
     */
    public function getAttributeName()
    {
        return 'PolicyInfo';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyInfo
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
