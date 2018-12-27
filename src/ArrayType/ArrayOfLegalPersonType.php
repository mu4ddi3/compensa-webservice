<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLegalPersonType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLegalPersonType
 * @subpackage Arrays
 */
class ArrayOfLegalPersonType extends AbstractStructArrayBase
{
    /**
     * The LegalPersonType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $LegalPersonType;
    /**
     * Constructor method for ArrayOfLegalPersonType
     * @uses ArrayOfLegalPersonType::setLegalPersonType()
     * @param string[] $legalPersonType
     */
    public function __construct(array $legalPersonType = array())
    {
        $this
            ->setLegalPersonType($legalPersonType);
    }
    /**
     * Get LegalPersonType value
     * @return string[]|null
     */
    public function getLegalPersonType()
    {
        return $this->LegalPersonType;
    }
    /**
     * Set LegalPersonType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $legalPersonType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType
     */
    public function setLegalPersonType(array $legalPersonType = array())
    {
        $invalidValues = array();
        foreach ($legalPersonType as $arrayOfLegalPersonTypeLegalPersonTypeItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid($arrayOfLegalPersonTypeLegalPersonTypeItem)) {
                $invalidValues[] = var_export($arrayOfLegalPersonTypeLegalPersonTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues())), __LINE__);
        }
        $this->LegalPersonType = $legalPersonType;
        return $this;
    }
    /**
     * Add item to LegalPersonType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType
     */
    public function addToLegalPersonType($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues())), __LINE__);
        }
        $this->LegalPersonType[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LegalPersonType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LegalPersonType
     */
    public function getAttributeName()
    {
        return 'LegalPersonType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfLegalPersonType
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
