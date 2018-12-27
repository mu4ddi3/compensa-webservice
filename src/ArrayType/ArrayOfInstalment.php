<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInstalment ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInstalment
 * @subpackage Arrays
 */
class ArrayOfInstalment extends AbstractStructArrayBase
{
    /**
     * The Instalment
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Instalment[]
     */
    public $Instalment;
    /**
     * Constructor method for ArrayOfInstalment
     * @uses ArrayOfInstalment::setInstalment()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Instalment[] $instalment
     */
    public function __construct(array $instalment = array())
    {
        $this
            ->setInstalment($instalment);
    }
    /**
     * Get Instalment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment[]|null
     */
    public function getInstalment()
    {
        return isset($this->Instalment) ? $this->Instalment : null;
    }
    /**
     * Set Instalment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Instalment[] $instalment
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstalment
     */
    public function setInstalment(array $instalment = array())
    {
        foreach ($instalment as $arrayOfInstalmentInstalmentItem) {
            // validation for constraint: itemType
            if (!$arrayOfInstalmentInstalmentItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\Instalment) {
                throw new \InvalidArgumentException(sprintf('The Instalment property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Instalment, "%s" given', is_object($arrayOfInstalmentInstalmentItem) ? get_class($arrayOfInstalmentInstalmentItem) : gettype($arrayOfInstalmentInstalmentItem)), __LINE__);
            }
        }
        if (is_null($instalment) || (is_array($instalment) && empty($instalment))) {
            unset($this->Instalment);
        } else {
            $this->Instalment = $instalment;
        }
        return $this;
    }
    /**
     * Add item to Instalment value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Instalment $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstalment
     */
    public function addToInstalment(\Mu4ddi3\Compensa\Webservice\StructType\Instalment $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\Instalment) {
            throw new \InvalidArgumentException(sprintf('The Instalment property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\Instalment, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Instalment[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Instalment|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Instalment
     */
    public function getAttributeName()
    {
        return 'Instalment';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstalment
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
