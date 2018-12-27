<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuredAgeCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuredAgeCondition
 * @subpackage Structs
 */
class InsuredAgeCondition extends AvailabilityConditionBase
{
    /**
     * The MiddleAgedPeopleCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MiddleAgedPeopleCount;
    /**
     * The OldPeopleCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OldPeopleCount;
    /**
     * The YoungPeopleCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $YoungPeopleCount;
    /**
     * Constructor method for InsuredAgeCondition
     * @uses InsuredAgeCondition::setMiddleAgedPeopleCount()
     * @uses InsuredAgeCondition::setOldPeopleCount()
     * @uses InsuredAgeCondition::setYoungPeopleCount()
     * @param int $middleAgedPeopleCount
     * @param int $oldPeopleCount
     * @param int $youngPeopleCount
     */
    public function __construct($middleAgedPeopleCount = null, $oldPeopleCount = null, $youngPeopleCount = null)
    {
        $this
            ->setMiddleAgedPeopleCount($middleAgedPeopleCount)
            ->setOldPeopleCount($oldPeopleCount)
            ->setYoungPeopleCount($youngPeopleCount);
    }
    /**
     * Get MiddleAgedPeopleCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMiddleAgedPeopleCount()
    {
        return isset($this->MiddleAgedPeopleCount) ? $this->MiddleAgedPeopleCount : null;
    }
    /**
     * Set MiddleAgedPeopleCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $middleAgedPeopleCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition
     */
    public function setMiddleAgedPeopleCount($middleAgedPeopleCount = null)
    {
        // validation for constraint: int
        if (!is_null($middleAgedPeopleCount) && !is_numeric($middleAgedPeopleCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($middleAgedPeopleCount)), __LINE__);
        }
        if (is_null($middleAgedPeopleCount) || (is_array($middleAgedPeopleCount) && empty($middleAgedPeopleCount))) {
            unset($this->MiddleAgedPeopleCount);
        } else {
            $this->MiddleAgedPeopleCount = $middleAgedPeopleCount;
        }
        return $this;
    }
    /**
     * Get OldPeopleCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOldPeopleCount()
    {
        return isset($this->OldPeopleCount) ? $this->OldPeopleCount : null;
    }
    /**
     * Set OldPeopleCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $oldPeopleCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition
     */
    public function setOldPeopleCount($oldPeopleCount = null)
    {
        // validation for constraint: int
        if (!is_null($oldPeopleCount) && !is_numeric($oldPeopleCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($oldPeopleCount)), __LINE__);
        }
        if (is_null($oldPeopleCount) || (is_array($oldPeopleCount) && empty($oldPeopleCount))) {
            unset($this->OldPeopleCount);
        } else {
            $this->OldPeopleCount = $oldPeopleCount;
        }
        return $this;
    }
    /**
     * Get YoungPeopleCount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getYoungPeopleCount()
    {
        return isset($this->YoungPeopleCount) ? $this->YoungPeopleCount : null;
    }
    /**
     * Set YoungPeopleCount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $youngPeopleCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition
     */
    public function setYoungPeopleCount($youngPeopleCount = null)
    {
        // validation for constraint: int
        if (!is_null($youngPeopleCount) && !is_numeric($youngPeopleCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($youngPeopleCount)), __LINE__);
        }
        if (is_null($youngPeopleCount) || (is_array($youngPeopleCount) && empty($youngPeopleCount))) {
            unset($this->YoungPeopleCount);
        } else {
            $this->YoungPeopleCount = $youngPeopleCount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredAgeCondition
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
