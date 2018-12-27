<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfStatement ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfStatement
 * @subpackage Arrays
 */
class ArrayOfStatement extends AbstractStructArrayBase
{
    /**
     * The Statement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Statement[]
     */
    public $Statement;
    /**
     * Constructor method for ArrayOfStatement
     * @uses ArrayOfStatement::setStatement()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Statement[] $statement
     */
    public function __construct(array $statement = array())
    {
        $this
            ->setStatement($statement);
    }
    /**
     * Get Statement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Statement[]|null
     */
    public function getStatement()
    {
        return isset($this->Statement) ? $this->Statement : null;
    }
    /**
     * Set Statement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Statement[] $statement
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfStatement
     */
    public function setStatement(array $statement = array())
    {
        foreach ($statement as $arrayOfStatementStatementItem) {
            // validation for constraint: itemType
            if (!$arrayOfStatementStatementItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Statement) {
                throw new \InvalidArgumentException(sprintf('The Statement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Statement, "%s" given', is_object($arrayOfStatementStatementItem) ? get_class($arrayOfStatementStatementItem) : gettype($arrayOfStatementStatementItem)), __LINE__);
            }
        }
        if (is_null($statement) || (is_array($statement) && empty($statement))) {
            unset($this->Statement);
        } else {
            $this->Statement = $statement;
        }
        return $this;
    }
    /**
     * Add item to Statement value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Statement $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfStatement
     */
    public function addToStatement(\Mu4ddi3\Compensa\Webservice\StructType\Statement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Statement) {
            throw new \InvalidArgumentException(sprintf('The Statement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Statement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Statement[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Statement|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Statement|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Statement|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Statement|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Statement|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Statement
     */
    public function getAttributeName()
    {
        return 'Statement';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfStatement
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
