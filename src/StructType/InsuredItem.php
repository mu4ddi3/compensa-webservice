<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuredItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuredItem
 * @subpackage Structs
 */
class InsuredItem extends AbstractStructBase
{
    /**
     * The Age
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Age;
    /**
     * The EmploymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EmploymentType;
    /**
     * The ItemsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ItemsCount;
    /**
     * Constructor method for InsuredItem
     * @uses InsuredItem::setAge()
     * @uses InsuredItem::setEmploymentType()
     * @uses InsuredItem::setItemsCount()
     * @param string $age
     * @param string $employmentType
     * @param int $itemsCount
     */
    public function __construct($age = null, $employmentType = null, $itemsCount = null)
    {
        $this
            ->setAge($age)
            ->setEmploymentType($employmentType)
            ->setItemsCount($itemsCount);
    }
    /**
     * Get Age value
     * @return string|null
     */
    public function getAge()
    {
        return $this->Age;
    }
    /**
     * Set Age value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredAge::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredAge::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $age
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem
     */
    public function setAge($age = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuredAge::valueIsValid($age)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $age, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuredAge::getValidValues())), __LINE__);
        }
        $this->Age = $age;
        return $this;
    }
    /**
     * Get EmploymentType value
     * @return string|null
     */
    public function getEmploymentType()
    {
        return $this->EmploymentType;
    }
    /**
     * Set EmploymentType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\EmploymentType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\EmploymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $employmentType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem
     */
    public function setEmploymentType($employmentType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\EmploymentType::valueIsValid($employmentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $employmentType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\EmploymentType::getValidValues())), __LINE__);
        }
        $this->EmploymentType = $employmentType;
        return $this;
    }
    /**
     * Get ItemsCount value
     * @return int|null
     */
    public function getItemsCount()
    {
        return $this->ItemsCount;
    }
    /**
     * Set ItemsCount value
     * @param int $itemsCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem
     */
    public function setItemsCount($itemsCount = null)
    {
        // validation for constraint: int
        if (!is_null($itemsCount) && !is_numeric($itemsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($itemsCount)), __LINE__);
        }
        $this->ItemsCount = $itemsCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredItem
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
