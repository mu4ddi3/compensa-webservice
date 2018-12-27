<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAccidentInsuredPerson ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAccidentInsuredPerson
 * @subpackage Arrays
 */
class ArrayOfAccidentInsuredPerson extends AbstractStructArrayBase
{
    /**
     * The AccidentInsuredPerson
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson[]
     */
    public $AccidentInsuredPerson;
    /**
     * Constructor method for ArrayOfAccidentInsuredPerson
     * @uses ArrayOfAccidentInsuredPerson::setAccidentInsuredPerson()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson[] $accidentInsuredPerson
     */
    public function __construct(array $accidentInsuredPerson = array())
    {
        $this
            ->setAccidentInsuredPerson($accidentInsuredPerson);
    }
    /**
     * Get AccidentInsuredPerson value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson[]|null
     */
    public function getAccidentInsuredPerson()
    {
        return isset($this->AccidentInsuredPerson) ? $this->AccidentInsuredPerson : null;
    }
    /**
     * Set AccidentInsuredPerson value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson[] $accidentInsuredPerson
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAccidentInsuredPerson
     */
    public function setAccidentInsuredPerson(array $accidentInsuredPerson = array())
    {
        foreach ($accidentInsuredPerson as $arrayOfAccidentInsuredPersonAccidentInsuredPersonItem) {
            // validation for constraint: itemType
            if (!$arrayOfAccidentInsuredPersonAccidentInsuredPersonItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson) {
                throw new \InvalidArgumentException(sprintf('The AccidentInsuredPerson property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson, "%s" given', is_object($arrayOfAccidentInsuredPersonAccidentInsuredPersonItem) ? get_class($arrayOfAccidentInsuredPersonAccidentInsuredPersonItem) : gettype($arrayOfAccidentInsuredPersonAccidentInsuredPersonItem)), __LINE__);
            }
        }
        if (is_null($accidentInsuredPerson) || (is_array($accidentInsuredPerson) && empty($accidentInsuredPerson))) {
            unset($this->AccidentInsuredPerson);
        } else {
            $this->AccidentInsuredPerson = $accidentInsuredPerson;
        }
        return $this;
    }
    /**
     * Add item to AccidentInsuredPerson value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAccidentInsuredPerson
     */
    public function addToAccidentInsuredPerson(\Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson) {
            throw new \InvalidArgumentException(sprintf('The AccidentInsuredPerson property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AccidentInsuredPerson[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AccidentInsuredPerson|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AccidentInsuredPerson
     */
    public function getAttributeName()
    {
        return 'AccidentInsuredPerson';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAccidentInsuredPerson
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
