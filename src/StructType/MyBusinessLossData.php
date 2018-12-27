<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessLossData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessLossData
 * @subpackage Structs
 */
class MyBusinessLossData extends AbstractStructBase
{
    /**
     * The Date
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Date;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The InsuranceType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType
     */
    public $InsuranceType;
    /**
     * The IsObligatory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsObligatory;
    /**
     * The PaidInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PaidInsuranceSum;
    /**
     * The Place
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Place;
    /**
     * Constructor method for MyBusinessLossData
     * @uses MyBusinessLossData::setDate()
     * @uses MyBusinessLossData::setDescription()
     * @uses MyBusinessLossData::setInsuranceType()
     * @uses MyBusinessLossData::setIsObligatory()
     * @uses MyBusinessLossData::setPaidInsuranceSum()
     * @uses MyBusinessLossData::setPlace()
     * @param string $date
     * @param string $description
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType $insuranceType
     * @param bool $isObligatory
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $paidInsuranceSum
     * @param string $place
     */
    public function __construct($date = null, $description = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType $insuranceType = null, $isObligatory = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $paidInsuranceSum = null, $place = null)
    {
        $this
            ->setDate($date)
            ->setDescription($description)
            ->setInsuranceType($insuranceType)
            ->setIsObligatory($isObligatory)
            ->setPaidInsuranceSum($paidInsuranceSum)
            ->setPlace($place);
    }
    /**
     * Get Date value
     * @return string|null
     */
    public function getDate()
    {
        return $this->Date;
    }
    /**
     * Set Date value
     * @param string $date
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessLossData
     */
    public function setDate($date = null)
    {
        // validation for constraint: string
        if (!is_null($date) && !is_string($date)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($date)), __LINE__);
        }
        $this->Date = $date;
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessLossData
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get InsuranceType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType|null
     */
    public function getInsuranceType()
    {
        return isset($this->InsuranceType) ? $this->InsuranceType : null;
    }
    /**
     * Set InsuranceType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceType $insuranceType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessLossData
     */
    public function setInsuranceType(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceType $insuranceType = null)
    {
        if (is_null($insuranceType) || (is_array($insuranceType) && empty($insuranceType))) {
            unset($this->InsuranceType);
        } else {
            $this->InsuranceType = $insuranceType;
        }
        return $this;
    }
    /**
     * Get IsObligatory value
     * @return bool|null
     */
    public function getIsObligatory()
    {
        return $this->IsObligatory;
    }
    /**
     * Set IsObligatory value
     * @param bool $isObligatory
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessLossData
     */
    public function setIsObligatory($isObligatory = null)
    {
        // validation for constraint: boolean
        if (!is_null($isObligatory) && !is_bool($isObligatory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isObligatory)), __LINE__);
        }
        $this->IsObligatory = $isObligatory;
        return $this;
    }
    /**
     * Get PaidInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPaidInsuranceSum()
    {
        return isset($this->PaidInsuranceSum) ? $this->PaidInsuranceSum : null;
    }
    /**
     * Set PaidInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $paidInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessLossData
     */
    public function setPaidInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $paidInsuranceSum = null)
    {
        if (is_null($paidInsuranceSum) || (is_array($paidInsuranceSum) && empty($paidInsuranceSum))) {
            unset($this->PaidInsuranceSum);
        } else {
            $this->PaidInsuranceSum = $paidInsuranceSum;
        }
        return $this;
    }
    /**
     * Get Place value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPlace()
    {
        return isset($this->Place) ? $this->Place : null;
    }
    /**
     * Set Place value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $place
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessLossData
     */
    public function setPlace($place = null)
    {
        // validation for constraint: string
        if (!is_null($place) && !is_string($place)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($place)), __LINE__);
        }
        if (is_null($place) || (is_array($place) && empty($place))) {
            unset($this->Place);
        } else {
            $this->Place = $place;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessLossData
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
