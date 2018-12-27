<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPartnerRoleOnContract ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPartnerRoleOnContract
 * @subpackage Arrays
 */
class ArrayOfPartnerRoleOnContract extends AbstractStructArrayBase
{
    /**
     * The PartnerRoleOnContract
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PartnerRoleOnContract;
    /**
     * Constructor method for ArrayOfPartnerRoleOnContract
     * @uses ArrayOfPartnerRoleOnContract::setPartnerRoleOnContract()
     * @param string[] $partnerRoleOnContract
     */
    public function __construct(array $partnerRoleOnContract = array())
    {
        $this
            ->setPartnerRoleOnContract($partnerRoleOnContract);
    }
    /**
     * Get PartnerRoleOnContract value
     * @return string[]|null
     */
    public function getPartnerRoleOnContract()
    {
        return $this->PartnerRoleOnContract;
    }
    /**
     * Set PartnerRoleOnContract value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $partnerRoleOnContract
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract
     */
    public function setPartnerRoleOnContract(array $partnerRoleOnContract = array())
    {
        $invalidValues = array();
        foreach ($partnerRoleOnContract as $arrayOfPartnerRoleOnContractPartnerRoleOnContractItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::valueIsValid($arrayOfPartnerRoleOnContractPartnerRoleOnContractItem)) {
                $invalidValues[] = var_export($arrayOfPartnerRoleOnContractPartnerRoleOnContractItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::getValidValues())), __LINE__);
        }
        $this->PartnerRoleOnContract = $partnerRoleOnContract;
        return $this;
    }
    /**
     * Add item to PartnerRoleOnContract value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract
     */
    public function addToPartnerRoleOnContract($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::getValidValues())), __LINE__);
        }
        $this->PartnerRoleOnContract[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PartnerRoleOnContract::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PartnerRoleOnContract
     */
    public function getAttributeName()
    {
        return 'PartnerRoleOnContract';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartnerRoleOnContract
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
