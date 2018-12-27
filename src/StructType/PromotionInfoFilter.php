<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionInfoFilter StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionInfoFilter
 * @subpackage Structs
 */
class PromotionInfoFilter extends AbstractStructBase
{
    /**
     * The ActiveToAscending
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $ActiveToAscending;
    /**
     * The AgencyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AgencyId;
    /**
     * The DepartmentNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DepartmentNumber;
    /**
     * The DepartmentWorkerId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DepartmentWorkerId;
    /**
     * The EndDateForm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EndDateForm;
    /**
     * The EndDateTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EndDateTo;
    /**
     * The ProductId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $ProductId;
    /**
     * The UserFilter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter
     */
    public $UserFilter;
    /**
     * The WorkerId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $WorkerId;
    /**
     * Constructor method for PromotionInfoFilter
     * @uses PromotionInfoFilter::setActiveToAscending()
     * @uses PromotionInfoFilter::setAgencyId()
     * @uses PromotionInfoFilter::setDepartmentNumber()
     * @uses PromotionInfoFilter::setDepartmentWorkerId()
     * @uses PromotionInfoFilter::setEndDateForm()
     * @uses PromotionInfoFilter::setEndDateTo()
     * @uses PromotionInfoFilter::setProductId()
     * @uses PromotionInfoFilter::setUserFilter()
     * @uses PromotionInfoFilter::setWorkerId()
     * @param bool $activeToAscending
     * @param int $agencyId
     * @param int $departmentNumber
     * @param int $departmentWorkerId
     * @param string $endDateForm
     * @param string $endDateTo
     * @param int $productId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter $userFilter
     * @param int $workerId
     */
    public function __construct($activeToAscending = null, $agencyId = null, $departmentNumber = null, $departmentWorkerId = null, $endDateForm = null, $endDateTo = null, $productId = null, \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter $userFilter = null, $workerId = null)
    {
        $this
            ->setActiveToAscending($activeToAscending)
            ->setAgencyId($agencyId)
            ->setDepartmentNumber($departmentNumber)
            ->setDepartmentWorkerId($departmentWorkerId)
            ->setEndDateForm($endDateForm)
            ->setEndDateTo($endDateTo)
            ->setProductId($productId)
            ->setUserFilter($userFilter)
            ->setWorkerId($workerId);
    }
    /**
     * Get ActiveToAscending value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getActiveToAscending()
    {
        return isset($this->ActiveToAscending) ? $this->ActiveToAscending : null;
    }
    /**
     * Set ActiveToAscending value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $activeToAscending
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public function setActiveToAscending($activeToAscending = null)
    {
        // validation for constraint: boolean
        if (!is_null($activeToAscending) && !is_bool($activeToAscending)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($activeToAscending)), __LINE__);
        }
        if (is_null($activeToAscending) || (is_array($activeToAscending) && empty($activeToAscending))) {
            unset($this->ActiveToAscending);
        } else {
            $this->ActiveToAscending = $activeToAscending;
        }
        return $this;
    }
    /**
     * Get AgencyId value
     * @return int|null
     */
    public function getAgencyId()
    {
        return $this->AgencyId;
    }
    /**
     * Set AgencyId value
     * @param int $agencyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public function setAgencyId($agencyId = null)
    {
        // validation for constraint: int
        if (!is_null($agencyId) && !is_numeric($agencyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($agencyId)), __LINE__);
        }
        $this->AgencyId = $agencyId;
        return $this;
    }
    /**
     * Get DepartmentNumber value
     * @return int|null
     */
    public function getDepartmentNumber()
    {
        return $this->DepartmentNumber;
    }
    /**
     * Set DepartmentNumber value
     * @param int $departmentNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public function setDepartmentNumber($departmentNumber = null)
    {
        // validation for constraint: int
        if (!is_null($departmentNumber) && !is_numeric($departmentNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($departmentNumber)), __LINE__);
        }
        $this->DepartmentNumber = $departmentNumber;
        return $this;
    }
    /**
     * Get DepartmentWorkerId value
     * @return int|null
     */
    public function getDepartmentWorkerId()
    {
        return $this->DepartmentWorkerId;
    }
    /**
     * Set DepartmentWorkerId value
     * @param int $departmentWorkerId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public function setDepartmentWorkerId($departmentWorkerId = null)
    {
        // validation for constraint: int
        if (!is_null($departmentWorkerId) && !is_numeric($departmentWorkerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($departmentWorkerId)), __LINE__);
        }
        $this->DepartmentWorkerId = $departmentWorkerId;
        return $this;
    }
    /**
     * Get EndDateForm value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDateForm()
    {
        return isset($this->EndDateForm) ? $this->EndDateForm : null;
    }
    /**
     * Set EndDateForm value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDateForm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public function setEndDateForm($endDateForm = null)
    {
        // validation for constraint: string
        if (!is_null($endDateForm) && !is_string($endDateForm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDateForm)), __LINE__);
        }
        if (is_null($endDateForm) || (is_array($endDateForm) && empty($endDateForm))) {
            unset($this->EndDateForm);
        } else {
            $this->EndDateForm = $endDateForm;
        }
        return $this;
    }
    /**
     * Get EndDateTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDateTo()
    {
        return isset($this->EndDateTo) ? $this->EndDateTo : null;
    }
    /**
     * Set EndDateTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDateTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public function setEndDateTo($endDateTo = null)
    {
        // validation for constraint: string
        if (!is_null($endDateTo) && !is_string($endDateTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDateTo)), __LINE__);
        }
        if (is_null($endDateTo) || (is_array($endDateTo) && empty($endDateTo))) {
            unset($this->EndDateTo);
        } else {
            $this->EndDateTo = $endDateTo;
        }
        return $this;
    }
    /**
     * Get ProductId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getProductId()
    {
        return isset($this->ProductId) ? $this->ProductId : null;
    }
    /**
     * Set ProductId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $productId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public function setProductId($productId = null)
    {
        // validation for constraint: int
        if (!is_null($productId) && !is_numeric($productId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productId)), __LINE__);
        }
        if (is_null($productId) || (is_array($productId) && empty($productId))) {
            unset($this->ProductId);
        } else {
            $this->ProductId = $productId;
        }
        return $this;
    }
    /**
     * Get UserFilter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter|null
     */
    public function getUserFilter()
    {
        return isset($this->UserFilter) ? $this->UserFilter : null;
    }
    /**
     * Set UserFilter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter $userFilter
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public function setUserFilter(\Mu4ddi3\Compensa\Webservice\StructType\DocumentSearchingForStructureFilter $userFilter = null)
    {
        if (is_null($userFilter) || (is_array($userFilter) && empty($userFilter))) {
            unset($this->UserFilter);
        } else {
            $this->UserFilter = $userFilter;
        }
        return $this;
    }
    /**
     * Get WorkerId value
     * @return int|null
     */
    public function getWorkerId()
    {
        return $this->WorkerId;
    }
    /**
     * Set WorkerId value
     * @param int $workerId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public function setWorkerId($workerId = null)
    {
        // validation for constraint: int
        if (!is_null($workerId) && !is_numeric($workerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($workerId)), __LINE__);
        }
        $this->WorkerId = $workerId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
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
