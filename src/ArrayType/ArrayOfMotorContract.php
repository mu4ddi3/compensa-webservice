<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMotorContract ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMotorContract
 * @subpackage Arrays
 */
class ArrayOfMotorContract extends AbstractStructArrayBase
{
    /**
     * The MotorContract
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorContract[]
     */
    public $MotorContract;
    /**
     * Constructor method for ArrayOfMotorContract
     * @uses ArrayOfMotorContract::setMotorContract()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract[] $motorContract
     */
    public function __construct(array $motorContract = array())
    {
        $this
            ->setMotorContract($motorContract);
    }
    /**
     * Get MotorContract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract[]|null
     */
    public function getMotorContract()
    {
        return isset($this->MotorContract) ? $this->MotorContract : null;
    }
    /**
     * Set MotorContract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract[] $motorContract
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract
     */
    public function setMotorContract(array $motorContract = array())
    {
        foreach ($motorContract as $arrayOfMotorContractMotorContractItem) {
            // validation for constraint: itemType
            if (!$arrayOfMotorContractMotorContractItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\MotorContract) {
                throw new \InvalidArgumentException(sprintf('The MotorContract property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MotorContract, "%s" given', is_object($arrayOfMotorContractMotorContractItem) ? get_class($arrayOfMotorContractMotorContractItem) : gettype($arrayOfMotorContractMotorContractItem)), __LINE__);
            }
        }
        if (is_null($motorContract) || (is_array($motorContract) && empty($motorContract))) {
            unset($this->MotorContract);
        } else {
            $this->MotorContract = $motorContract;
        }
        return $this;
    }
    /**
     * Add item to MotorContract value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract
     */
    public function addToMotorContract(\Mu4ddi3\Compensa\Webservice\StructType\MotorContract $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\MotorContract) {
            throw new \InvalidArgumentException(sprintf('The MotorContract property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\MotorContract, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->MotorContract[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MotorContract
     */
    public function getAttributeName()
    {
        return 'MotorContract';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMotorContract
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
