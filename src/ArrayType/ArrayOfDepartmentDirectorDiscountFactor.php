<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDepartmentDirectorDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDepartmentDirectorDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfDepartmentDirectorDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The DepartmentDirectorDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor[]
     */
    public $DepartmentDirectorDiscountFactor;
    /**
     * Constructor method for ArrayOfDepartmentDirectorDiscountFactor
     * @uses ArrayOfDepartmentDirectorDiscountFactor::setDepartmentDirectorDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor[] $departmentDirectorDiscountFactor
     */
    public function __construct(array $departmentDirectorDiscountFactor = array())
    {
        $this
            ->setDepartmentDirectorDiscountFactor($departmentDirectorDiscountFactor);
    }
    /**
     * Get DepartmentDirectorDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor[]|null
     */
    public function getDepartmentDirectorDiscountFactor()
    {
        return isset($this->DepartmentDirectorDiscountFactor) ? $this->DepartmentDirectorDiscountFactor : null;
    }
    /**
     * Set DepartmentDirectorDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor[] $departmentDirectorDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDepartmentDirectorDiscountFactor
     */
    public function setDepartmentDirectorDiscountFactor(array $departmentDirectorDiscountFactor = array())
    {
        foreach ($departmentDirectorDiscountFactor as $arrayOfDepartmentDirectorDiscountFactorDepartmentDirectorDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfDepartmentDirectorDiscountFactorDepartmentDirectorDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The DepartmentDirectorDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor, "%s" given', is_object($arrayOfDepartmentDirectorDiscountFactorDepartmentDirectorDiscountFactorItem) ? get_class($arrayOfDepartmentDirectorDiscountFactorDepartmentDirectorDiscountFactorItem) : gettype($arrayOfDepartmentDirectorDiscountFactorDepartmentDirectorDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($departmentDirectorDiscountFactor) || (is_array($departmentDirectorDiscountFactor) && empty($departmentDirectorDiscountFactor))) {
            unset($this->DepartmentDirectorDiscountFactor);
        } else {
            $this->DepartmentDirectorDiscountFactor = $departmentDirectorDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to DepartmentDirectorDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDepartmentDirectorDiscountFactor
     */
    public function addToDepartmentDirectorDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The DepartmentDirectorDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DepartmentDirectorDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DepartmentDirectorDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DepartmentDirectorDiscountFactor
     */
    public function getAttributeName()
    {
        return 'DepartmentDirectorDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDepartmentDirectorDiscountFactor
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
