<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPackageRiskRangeDefinition ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPackageRiskRangeDefinition
 * @subpackage Arrays
 */
class ArrayOfPackageRiskRangeDefinition extends AbstractStructArrayBase
{
    /**
     * The PackageRiskRangeDefinition
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition[]
     */
    public $PackageRiskRangeDefinition;
    /**
     * Constructor method for ArrayOfPackageRiskRangeDefinition
     * @uses ArrayOfPackageRiskRangeDefinition::setPackageRiskRangeDefinition()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition[] $packageRiskRangeDefinition
     */
    public function __construct(array $packageRiskRangeDefinition = array())
    {
        $this
            ->setPackageRiskRangeDefinition($packageRiskRangeDefinition);
    }
    /**
     * Get PackageRiskRangeDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition[]|null
     */
    public function getPackageRiskRangeDefinition()
    {
        return isset($this->PackageRiskRangeDefinition) ? $this->PackageRiskRangeDefinition : null;
    }
    /**
     * Set PackageRiskRangeDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition[] $packageRiskRangeDefinition
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRiskRangeDefinition
     */
    public function setPackageRiskRangeDefinition(array $packageRiskRangeDefinition = array())
    {
        foreach ($packageRiskRangeDefinition as $arrayOfPackageRiskRangeDefinitionPackageRiskRangeDefinitionItem) {
            // validation for constraint: itemType
            if (!$arrayOfPackageRiskRangeDefinitionPackageRiskRangeDefinitionItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition) {
                throw new \InvalidArgumentException(sprintf('The PackageRiskRangeDefinition property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition, "%s" given', is_object($arrayOfPackageRiskRangeDefinitionPackageRiskRangeDefinitionItem) ? get_class($arrayOfPackageRiskRangeDefinitionPackageRiskRangeDefinitionItem) : gettype($arrayOfPackageRiskRangeDefinitionPackageRiskRangeDefinitionItem)), __LINE__);
            }
        }
        if (is_null($packageRiskRangeDefinition) || (is_array($packageRiskRangeDefinition) && empty($packageRiskRangeDefinition))) {
            unset($this->PackageRiskRangeDefinition);
        } else {
            $this->PackageRiskRangeDefinition = $packageRiskRangeDefinition;
        }
        return $this;
    }
    /**
     * Add item to PackageRiskRangeDefinition value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRiskRangeDefinition
     */
    public function addToPackageRiskRangeDefinition(\Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition) {
            throw new \InvalidArgumentException(sprintf('The PackageRiskRangeDefinition property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageRiskRangeDefinition[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PackageRiskRangeDefinition
     */
    public function getAttributeName()
    {
        return 'PackageRiskRangeDefinition';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageRiskRangeDefinition
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
