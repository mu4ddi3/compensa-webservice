<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfQueriedEntity ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfQueriedEntity
 * @subpackage Arrays
 */
class ArrayOfQueriedEntity extends AbstractStructArrayBase
{
    /**
     * The QueriedEntity
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity[]
     */
    public $QueriedEntity;
    /**
     * Constructor method for ArrayOfQueriedEntity
     * @uses ArrayOfQueriedEntity::setQueriedEntity()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity[] $queriedEntity
     */
    public function __construct(array $queriedEntity = array())
    {
        $this
            ->setQueriedEntity($queriedEntity);
    }
    /**
     * Get QueriedEntity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity[]|null
     */
    public function getQueriedEntity()
    {
        return isset($this->QueriedEntity) ? $this->QueriedEntity : null;
    }
    /**
     * Set QueriedEntity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity[] $queriedEntity
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQueriedEntity
     */
    public function setQueriedEntity(array $queriedEntity = array())
    {
        foreach ($queriedEntity as $arrayOfQueriedEntityQueriedEntityItem) {
            // validation for constraint: itemType
            if (!$arrayOfQueriedEntityQueriedEntityItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity) {
                throw new \InvalidArgumentException(sprintf('The QueriedEntity property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity, "%s" given', is_object($arrayOfQueriedEntityQueriedEntityItem) ? get_class($arrayOfQueriedEntityQueriedEntityItem) : gettype($arrayOfQueriedEntityQueriedEntityItem)), __LINE__);
            }
        }
        if (is_null($queriedEntity) || (is_array($queriedEntity) && empty($queriedEntity))) {
            unset($this->QueriedEntity);
        } else {
            $this->QueriedEntity = $queriedEntity;
        }
        return $this;
    }
    /**
     * Add item to QueriedEntity value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQueriedEntity
     */
    public function addToQueriedEntity(\Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity) {
            throw new \InvalidArgumentException(sprintf('The QueriedEntity property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->QueriedEntity[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QueriedEntity|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string QueriedEntity
     */
    public function getAttributeName()
    {
        return 'QueriedEntity';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfQueriedEntity
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
