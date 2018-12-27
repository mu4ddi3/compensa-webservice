<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmployeeDiscountFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmployeeDiscountFactor
 * @subpackage Arrays
 */
class ArrayOfEmployeeDiscountFactor extends AbstractStructArrayBase
{
    /**
     * The EmployeeDiscountFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor[]
     */
    public $EmployeeDiscountFactor;
    /**
     * Constructor method for ArrayOfEmployeeDiscountFactor
     * @uses ArrayOfEmployeeDiscountFactor::setEmployeeDiscountFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor[] $employeeDiscountFactor
     */
    public function __construct(array $employeeDiscountFactor = array())
    {
        $this
            ->setEmployeeDiscountFactor($employeeDiscountFactor);
    }
    /**
     * Get EmployeeDiscountFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor[]|null
     */
    public function getEmployeeDiscountFactor()
    {
        return isset($this->EmployeeDiscountFactor) ? $this->EmployeeDiscountFactor : null;
    }
    /**
     * Set EmployeeDiscountFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor[] $employeeDiscountFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEmployeeDiscountFactor
     */
    public function setEmployeeDiscountFactor(array $employeeDiscountFactor = array())
    {
        foreach ($employeeDiscountFactor as $arrayOfEmployeeDiscountFactorEmployeeDiscountFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmployeeDiscountFactorEmployeeDiscountFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor) {
                throw new \InvalidArgumentException(sprintf('The EmployeeDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor, "%s" given', is_object($arrayOfEmployeeDiscountFactorEmployeeDiscountFactorItem) ? get_class($arrayOfEmployeeDiscountFactorEmployeeDiscountFactorItem) : gettype($arrayOfEmployeeDiscountFactorEmployeeDiscountFactorItem)), __LINE__);
            }
        }
        if (is_null($employeeDiscountFactor) || (is_array($employeeDiscountFactor) && empty($employeeDiscountFactor))) {
            unset($this->EmployeeDiscountFactor);
        } else {
            $this->EmployeeDiscountFactor = $employeeDiscountFactor;
        }
        return $this;
    }
    /**
     * Add item to EmployeeDiscountFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEmployeeDiscountFactor
     */
    public function addToEmployeeDiscountFactor(\Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor) {
            throw new \InvalidArgumentException(sprintf('The EmployeeDiscountFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->EmployeeDiscountFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\EmployeeDiscountFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmployeeDiscountFactor
     */
    public function getAttributeName()
    {
        return 'EmployeeDiscountFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEmployeeDiscountFactor
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
