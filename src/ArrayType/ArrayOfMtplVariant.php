<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMtplVariant ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMtplVariant
 * @subpackage Arrays
 */
class ArrayOfMtplVariant extends AbstractStructArrayBase
{
    /**
     * The MtplVariant
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $MtplVariant;
    /**
     * Constructor method for ArrayOfMtplVariant
     * @uses ArrayOfMtplVariant::setMtplVariant()
     * @param string[] $mtplVariant
     */
    public function __construct(array $mtplVariant = array())
    {
        $this
            ->setMtplVariant($mtplVariant);
    }
    /**
     * Get MtplVariant value
     * @return string[]|null
     */
    public function getMtplVariant()
    {
        return $this->MtplVariant;
    }
    /**
     * Set MtplVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $mtplVariant
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant
     */
    public function setMtplVariant(array $mtplVariant = array())
    {
        $invalidValues = array();
        foreach ($mtplVariant as $arrayOfMtplVariantMtplVariantItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::valueIsValid($arrayOfMtplVariantMtplVariantItem)) {
                $invalidValues[] = var_export($arrayOfMtplVariantMtplVariantItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::getValidValues())), __LINE__);
        }
        $this->MtplVariant = $mtplVariant;
        return $this;
    }
    /**
     * Add item to MtplVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant
     */
    public function addToMtplVariant($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::getValidValues())), __LINE__);
        }
        $this->MtplVariant[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\MtplVariant::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MtplVariant
     */
    public function getAttributeName()
    {
        return 'MtplVariant';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMtplVariant
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
