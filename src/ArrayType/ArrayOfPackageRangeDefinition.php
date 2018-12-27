<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPackageRangeDefinition ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPackageRangeDefinition
 * @subpackage Arrays
 */
class ArrayOfPackageRangeDefinition extends AbstractStructArrayBase
{
    /**
     * The PackageRangeDefinition
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition[]
     */
    public $PackageRangeDefinition;
    /**
     * Constructor method for ArrayOfPackageRangeDefinition
     * @uses ArrayOfPackageRangeDefinition::setPackageRangeDefinition()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition[] $packageRangeDefinition
     */
    public function __construct(array $packageRangeDefinition = array())
    {
        $this
            ->setPackageRangeDefinition($packageRangeDefinition);
    }
    /**
     * Get PackageRangeDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition[]|null
     */
    public function getPackageRangeDefinition()
    {
        return isset($this->PackageRangeDefinition) ? $this->PackageRangeDefinition : null;
    }
    /**
     * Set PackageRangeDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition[] $packageRangeDefinition
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRangeDefinition
     */
    public function setPackageRangeDefinition(array $packageRangeDefinition = array())
    {
        foreach ($packageRangeDefinition as $arrayOfPackageRangeDefinitionPackageRangeDefinitionItem) {
            // validation for constraint: itemType
            if (!$arrayOfPackageRangeDefinitionPackageRangeDefinitionItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition) {
                throw new \InvalidArgumentException(sprintf('The PackageRangeDefinition property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition, "%s" given', is_object($arrayOfPackageRangeDefinitionPackageRangeDefinitionItem) ? get_class($arrayOfPackageRangeDefinitionPackageRangeDefinitionItem) : gettype($arrayOfPackageRangeDefinitionPackageRangeDefinitionItem)), __LINE__);
            }
        }
        if (is_null($packageRangeDefinition) || (is_array($packageRangeDefinition) && empty($packageRangeDefinition))) {
            unset($this->PackageRangeDefinition);
        } else {
            $this->PackageRangeDefinition = $packageRangeDefinition;
        }
        return $this;
    }
    /**
     * Add item to PackageRangeDefinition value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRangeDefinition
     */
    public function addToPackageRangeDefinition(\Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition) {
            throw new \InvalidArgumentException(sprintf('The PackageRangeDefinition property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageRangeDefinition[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRangeDefinition|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PackageRangeDefinition
     */
    public function getAttributeName()
    {
        return 'PackageRangeDefinition';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRangeDefinition
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
