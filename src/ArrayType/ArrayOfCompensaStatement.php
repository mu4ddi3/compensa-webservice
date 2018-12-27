<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCompensaStatement ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCompensaStatement
 * @subpackage Arrays
 */
class ArrayOfCompensaStatement extends AbstractStructArrayBase
{
    /**
     * The CompensaStatement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement[]
     */
    public $CompensaStatement;
    /**
     * Constructor method for ArrayOfCompensaStatement
     * @uses ArrayOfCompensaStatement::setCompensaStatement()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement[] $compensaStatement
     */
    public function __construct(array $compensaStatement = array())
    {
        $this
            ->setCompensaStatement($compensaStatement);
    }
    /**
     * Get CompensaStatement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement[]|null
     */
    public function getCompensaStatement()
    {
        return isset($this->CompensaStatement) ? $this->CompensaStatement : null;
    }
    /**
     * Set CompensaStatement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement[] $compensaStatement
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement
     */
    public function setCompensaStatement(array $compensaStatement = array())
    {
        foreach ($compensaStatement as $arrayOfCompensaStatementCompensaStatementItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompensaStatementCompensaStatementItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement) {
                throw new \InvalidArgumentException(sprintf('The CompensaStatement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement, "%s" given', is_object($arrayOfCompensaStatementCompensaStatementItem) ? get_class($arrayOfCompensaStatementCompensaStatementItem) : gettype($arrayOfCompensaStatementCompensaStatementItem)), __LINE__);
            }
        }
        if (is_null($compensaStatement) || (is_array($compensaStatement) && empty($compensaStatement))) {
            unset($this->CompensaStatement);
        } else {
            $this->CompensaStatement = $compensaStatement;
        }
        return $this;
    }
    /**
     * Add item to CompensaStatement value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement
     */
    public function addToCompensaStatement(\Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement) {
            throw new \InvalidArgumentException(sprintf('The CompensaStatement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->CompensaStatement[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaStatement|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CompensaStatement
     */
    public function getAttributeName()
    {
        return 'CompensaStatement';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaStatement
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
