<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPackageElement ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPackageElement
 * @subpackage Arrays
 */
class ArrayOfPackageElement extends AbstractStructArrayBase
{
    /**
     * The PackageElement
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PackageElement[]
     */
    public $PackageElement;
    /**
     * Constructor method for ArrayOfPackageElement
     * @uses ArrayOfPackageElement::setPackageElement()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageElement[] $packageElement
     */
    public function __construct(array $packageElement = array())
    {
        $this
            ->setPackageElement($packageElement);
    }
    /**
     * Get PackageElement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElement[]|null
     */
    public function getPackageElement()
    {
        return isset($this->PackageElement) ? $this->PackageElement : null;
    }
    /**
     * Set PackageElement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageElement[] $packageElement
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageElement
     */
    public function setPackageElement(array $packageElement = array())
    {
        foreach ($packageElement as $arrayOfPackageElementPackageElementItem) {
            // validation for constraint: itemType
            if (!$arrayOfPackageElementPackageElementItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\PackageElement) {
                throw new \InvalidArgumentException(sprintf('The PackageElement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PackageElement, "%s" given', is_object($arrayOfPackageElementPackageElementItem) ? get_class($arrayOfPackageElementPackageElementItem) : gettype($arrayOfPackageElementPackageElementItem)), __LINE__);
            }
        }
        if (is_null($packageElement) || (is_array($packageElement) && empty($packageElement))) {
            unset($this->PackageElement);
        } else {
            $this->PackageElement = $packageElement;
        }
        return $this;
    }
    /**
     * Add item to PackageElement value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageElement $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageElement
     */
    public function addToPackageElement(\Mu4ddi3\Compensa\Webservice\StructType\PackageElement $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\PackageElement) {
            throw new \InvalidArgumentException(sprintf('The PackageElement property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\PackageElement, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PackageElement[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElement|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElement|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElement|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElement|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageElement|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PackageElement
     */
    public function getAttributeName()
    {
        return 'PackageElement';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageElement
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
