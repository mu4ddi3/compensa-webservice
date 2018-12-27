<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPkdCode ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPkdCode
 * @subpackage Arrays
 */
class ArrayOfPkdCode extends AbstractStructArrayBase
{
    /**
     * The PkdCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PkdCode[]
     */
    public $PkdCode;
    /**
     * Constructor method for ArrayOfPkdCode
     * @uses ArrayOfPkdCode::setPkdCode()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCode[] $pkdCode
     */
    public function __construct(array $pkdCode = array())
    {
        $this
            ->setPkdCode($pkdCode);
    }
    /**
     * Get PkdCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode[]|null
     */
    public function getPkdCode()
    {
        return isset($this->PkdCode) ? $this->PkdCode : null;
    }
    /**
     * Set PkdCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCode[] $pkdCode
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCode
     */
    public function setPkdCode(array $pkdCode = array())
    {
        foreach ($pkdCode as $arrayOfPkdCodePkdCodeItem) {
            // validation for constraint: itemType
            if (!$arrayOfPkdCodePkdCodeItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PkdCode) {
                throw new \InvalidArgumentException(sprintf('The PkdCode property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PkdCode, "%s" given', is_object($arrayOfPkdCodePkdCodeItem) ? get_class($arrayOfPkdCodePkdCodeItem) : gettype($arrayOfPkdCodePkdCodeItem)), __LINE__);
            }
        }
        if (is_null($pkdCode) || (is_array($pkdCode) && empty($pkdCode))) {
            unset($this->PkdCode);
        } else {
            $this->PkdCode = $pkdCode;
        }
        return $this;
    }
    /**
     * Add item to PkdCode value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCode $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCode
     */
    public function addToPkdCode(\Mu4ddi3\Compensa\Webservice\StructType\PkdCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PkdCode) {
            throw new \InvalidArgumentException(sprintf('The PkdCode property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PkdCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PkdCode[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PkdCode
     */
    public function getAttributeName()
    {
        return 'PkdCode';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPkdCode
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
