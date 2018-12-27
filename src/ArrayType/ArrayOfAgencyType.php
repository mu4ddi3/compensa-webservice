<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAgencyType ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAgencyType
 * @subpackage Arrays
 */
class ArrayOfAgencyType extends AbstractStructArrayBase
{
    /**
     * The AgencyType
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $AgencyType;
    /**
     * Constructor method for ArrayOfAgencyType
     * @uses ArrayOfAgencyType::setAgencyType()
     * @param string[] $agencyType
     */
    public function __construct(array $agencyType = array())
    {
        $this
            ->setAgencyType($agencyType);
    }
    /**
     * Get AgencyType value
     * @return string[]|null
     */
    public function getAgencyType()
    {
        return $this->AgencyType;
    }
    /**
     * Set AgencyType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $agencyType
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType
     */
    public function setAgencyType(array $agencyType = array())
    {
        $invalidValues = array();
        foreach ($agencyType as $arrayOfAgencyTypeAgencyTypeItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::valueIsValid($arrayOfAgencyTypeAgencyTypeItem)) {
                $invalidValues[] = var_export($arrayOfAgencyTypeAgencyTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::getValidValues())), __LINE__);
        }
        $this->AgencyType = $agencyType;
        return $this;
    }
    /**
     * Add item to AgencyType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType
     */
    public function addToAgencyType($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::getValidValues())), __LINE__);
        }
        $this->AgencyType[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\AgencyType::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AgencyType
     */
    public function getAttributeName()
    {
        return 'AgencyType';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyType
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
