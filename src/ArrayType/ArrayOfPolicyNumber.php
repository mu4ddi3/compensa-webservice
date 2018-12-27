<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPolicyNumber ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPolicyNumber
 * @subpackage Arrays
 */
class ArrayOfPolicyNumber extends AbstractStructArrayBase
{
    /**
     * The PolicyNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber[]
     */
    public $PolicyNumber;
    /**
     * Constructor method for ArrayOfPolicyNumber
     * @uses ArrayOfPolicyNumber::setPolicyNumber()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber[] $policyNumber
     */
    public function __construct(array $policyNumber = array())
    {
        $this
            ->setPolicyNumber($policyNumber);
    }
    /**
     * Get PolicyNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber[]|null
     */
    public function getPolicyNumber()
    {
        return isset($this->PolicyNumber) ? $this->PolicyNumber : null;
    }
    /**
     * Set PolicyNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber[] $policyNumber
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyNumber
     */
    public function setPolicyNumber(array $policyNumber = array())
    {
        foreach ($policyNumber as $arrayOfPolicyNumberPolicyNumberItem) {
            // validation for constraint: itemType
            if (!$arrayOfPolicyNumberPolicyNumberItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber) {
                throw new \InvalidArgumentException(sprintf('The PolicyNumber property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber, "%s" given', is_object($arrayOfPolicyNumberPolicyNumberItem) ? get_class($arrayOfPolicyNumberPolicyNumberItem) : gettype($arrayOfPolicyNumberPolicyNumberItem)), __LINE__);
            }
        }
        if (is_null($policyNumber) || (is_array($policyNumber) && empty($policyNumber))) {
            unset($this->PolicyNumber);
        } else {
            $this->PolicyNumber = $policyNumber;
        }
        return $this;
    }
    /**
     * Add item to PolicyNumber value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyNumber
     */
    public function addToPolicyNumber(\Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber) {
            throw new \InvalidArgumentException(sprintf('The PolicyNumber property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PolicyNumber[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PolicyNumber
     */
    public function getAttributeName()
    {
        return 'PolicyNumber';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPolicyNumber
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
