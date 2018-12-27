<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInstallmentsNumber ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInstallmentsNumber
 * @subpackage Arrays
 */
class ArrayOfInstallmentsNumber extends AbstractStructArrayBase
{
    /**
     * The InstallmentsNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InstallmentsNumber;
    /**
     * Constructor method for ArrayOfInstallmentsNumber
     * @uses ArrayOfInstallmentsNumber::setInstallmentsNumber()
     * @param string[] $installmentsNumber
     */
    public function __construct(array $installmentsNumber = array())
    {
        $this
            ->setInstallmentsNumber($installmentsNumber);
    }
    /**
     * Get InstallmentsNumber value
     * @return string[]|null
     */
    public function getInstallmentsNumber()
    {
        return $this->InstallmentsNumber;
    }
    /**
     * Set InstallmentsNumber value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $installmentsNumber
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber
     */
    public function setInstallmentsNumber(array $installmentsNumber = array())
    {
        $invalidValues = array();
        foreach ($installmentsNumber as $arrayOfInstallmentsNumberInstallmentsNumberItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid($arrayOfInstallmentsNumberInstallmentsNumberItem)) {
                $invalidValues[] = var_export($arrayOfInstallmentsNumberInstallmentsNumberItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues())), __LINE__);
        }
        $this->InstallmentsNumber = $installmentsNumber;
        return $this;
    }
    /**
     * Add item to InstallmentsNumber value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber
     */
    public function addToInstallmentsNumber($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues())), __LINE__);
        }
        $this->InstallmentsNumber[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InstallmentsNumber
     */
    public function getAttributeName()
    {
        return 'InstallmentsNumber';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber
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
