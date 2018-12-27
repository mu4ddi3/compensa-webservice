<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfClauseStatement ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfClauseStatement
 * @subpackage Arrays
 */
class ArrayOfClauseStatement extends AbstractStructArrayBase
{
    /**
     * The ClauseStatement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement[]
     */
    public $ClauseStatement;
    /**
     * Constructor method for ArrayOfClauseStatement
     * @uses ArrayOfClauseStatement::setClauseStatement()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement[] $clauseStatement
     */
    public function __construct(array $clauseStatement = array())
    {
        $this
            ->setClauseStatement($clauseStatement);
    }
    /**
     * Get ClauseStatement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement[]|null
     */
    public function getClauseStatement()
    {
        return isset($this->ClauseStatement) ? $this->ClauseStatement : null;
    }
    /**
     * Set ClauseStatement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement[] $clauseStatement
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement
     */
    public function setClauseStatement(array $clauseStatement = array())
    {
        foreach ($clauseStatement as $arrayOfClauseStatementClauseStatementItem) {
            // validation for constraint: itemType
            if (!$arrayOfClauseStatementClauseStatementItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement) {
                throw new \InvalidArgumentException(sprintf('The ClauseStatement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement, "%s" given', is_object($arrayOfClauseStatementClauseStatementItem) ? get_class($arrayOfClauseStatementClauseStatementItem) : gettype($arrayOfClauseStatementClauseStatementItem)), __LINE__);
            }
        }
        if (is_null($clauseStatement) || (is_array($clauseStatement) && empty($clauseStatement))) {
            unset($this->ClauseStatement);
        } else {
            $this->ClauseStatement = $clauseStatement;
        }
        return $this;
    }
    /**
     * Add item to ClauseStatement value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement
     */
    public function addToClauseStatement(\Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement) {
            throw new \InvalidArgumentException(sprintf('The ClauseStatement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ClauseStatement[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClauseStatement|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ClauseStatement
     */
    public function getAttributeName()
    {
        return 'ClauseStatement';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClauseStatement
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
