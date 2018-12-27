<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPolicy ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPolicy
 * @subpackage Arrays
 */
class ArrayOfPolicy extends AbstractStructArrayBase
{
    /**
     * The Policy
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Policy[]
     */
    public $Policy;
    /**
     * Constructor method for ArrayOfPolicy
     * @uses ArrayOfPolicy::setPolicy()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Policy[] $policy
     */
    public function __construct(array $policy = array())
    {
        $this
            ->setPolicy($policy);
    }
    /**
     * Get Policy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy[]|null
     */
    public function getPolicy()
    {
        return isset($this->Policy) ? $this->Policy : null;
    }
    /**
     * Set Policy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Policy[] $policy
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicy
     */
    public function setPolicy(array $policy = array())
    {
        foreach ($policy as $arrayOfPolicyPolicyItem) {
            // validation for constraint: itemType
            if (!$arrayOfPolicyPolicyItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Policy) {
                throw new \InvalidArgumentException(sprintf('The Policy property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Policy, "%s" given', is_object($arrayOfPolicyPolicyItem) ? get_class($arrayOfPolicyPolicyItem) : gettype($arrayOfPolicyPolicyItem)), __LINE__);
            }
        }
        if (is_null($policy) || (is_array($policy) && empty($policy))) {
            unset($this->Policy);
        } else {
            $this->Policy = $policy;
        }
        return $this;
    }
    /**
     * Add item to Policy value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Policy $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicy
     */
    public function addToPolicy(\Mu4ddi3\Compensa\Webservice\StructType\Policy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Policy) {
            throw new \InvalidArgumentException(sprintf('The Policy property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Policy, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Policy[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Policy|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Policy
     */
    public function getAttributeName()
    {
        return 'Policy';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicy
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
