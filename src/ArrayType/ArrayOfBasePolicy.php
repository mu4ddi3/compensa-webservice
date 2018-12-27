<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBasePolicy ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBasePolicy
 * @subpackage Arrays
 */
class ArrayOfBasePolicy extends AbstractStructArrayBase
{
    /**
     * The BasePolicy
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy[]
     */
    public $BasePolicy;
    /**
     * Constructor method for ArrayOfBasePolicy
     * @uses ArrayOfBasePolicy::setBasePolicy()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy[] $basePolicy
     */
    public function __construct(array $basePolicy = array())
    {
        $this
            ->setBasePolicy($basePolicy);
    }
    /**
     * Get BasePolicy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy[]|null
     */
    public function getBasePolicy()
    {
        return isset($this->BasePolicy) ? $this->BasePolicy : null;
    }
    /**
     * Set BasePolicy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy[] $basePolicy
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePolicy
     */
    public function setBasePolicy(array $basePolicy = array())
    {
        foreach ($basePolicy as $arrayOfBasePolicyBasePolicyItem) {
            // validation for constraint: itemType
            if (!$arrayOfBasePolicyBasePolicyItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy) {
                throw new \InvalidArgumentException(sprintf('The BasePolicy property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy, "%s" given', is_object($arrayOfBasePolicyBasePolicyItem) ? get_class($arrayOfBasePolicyBasePolicyItem) : gettype($arrayOfBasePolicyBasePolicyItem)), __LINE__);
            }
        }
        if (is_null($basePolicy) || (is_array($basePolicy) && empty($basePolicy))) {
            unset($this->BasePolicy);
        } else {
            $this->BasePolicy = $basePolicy;
        }
        return $this;
    }
    /**
     * Add item to BasePolicy value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePolicy
     */
    public function addToBasePolicy(\Mu4ddi3\Compensa\Webservice\StructType\BasePolicy $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy) {
            throw new \InvalidArgumentException(sprintf('The BasePolicy property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BasePolicy[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BasePolicy
     */
    public function getAttributeName()
    {
        return 'BasePolicy';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBasePolicy
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
