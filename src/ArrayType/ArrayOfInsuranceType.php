<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsuranceType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInsuranceType
 * @subpackage Arrays
 */
class ArrayOfInsuranceType extends AbstractStructArrayBase
{
    /**
     * The InsuranceType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType[]
     */
    public $InsuranceType;
    /**
     * Constructor method for ArrayOfInsuranceType
     * @uses ArrayOfInsuranceType::setInsuranceType()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType[] $insuranceType
     */
    public function __construct(array $insuranceType = array())
    {
        $this
            ->setInsuranceType($insuranceType);
    }
    /**
     * Get InsuranceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType[]|null
     */
    public function getInsuranceType()
    {
        return isset($this->InsuranceType) ? $this->InsuranceType : null;
    }
    /**
     * Set InsuranceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType[] $insuranceType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceType
     */
    public function setInsuranceType(array $insuranceType = array())
    {
        foreach ($insuranceType as $arrayOfInsuranceTypeInsuranceTypeItem) {
            // validation for constraint: itemType
            if (!$arrayOfInsuranceTypeInsuranceTypeItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType) {
                throw new \InvalidArgumentException(sprintf('The InsuranceType property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType, "%s" given', is_object($arrayOfInsuranceTypeInsuranceTypeItem) ? get_class($arrayOfInsuranceTypeInsuranceTypeItem) : gettype($arrayOfInsuranceTypeInsuranceTypeItem)), __LINE__);
            }
        }
        if (is_null($insuranceType) || (is_array($insuranceType) && empty($insuranceType))) {
            unset($this->InsuranceType);
        } else {
            $this->InsuranceType = $insuranceType;
        }
        return $this;
    }
    /**
     * Add item to InsuranceType value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceType
     */
    public function addToInsuranceType(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType) {
            throw new \InvalidArgumentException(sprintf('The InsuranceType property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InsuranceType[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InsuranceType
     */
    public function getAttributeName()
    {
        return 'InsuranceType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceType
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
