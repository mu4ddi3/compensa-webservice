<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePremiumGap StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePremiumGap
 * @subpackage Structs
 */
class BasePremiumGap extends BasePremium
{
    /**
     * The InsurancePeriod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $InsurancePeriod;
    /**
     * The InsuranceSumFrom
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumFrom;
    /**
     * The InsuranceSumTo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumTo;
    /**
     * The ValueNet
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $ValueNet;
    /**
     * Constructor method for BasePremiumGap
     * @uses BasePremiumGap::setInsurancePeriod()
     * @uses BasePremiumGap::setInsuranceSumFrom()
     * @uses BasePremiumGap::setInsuranceSumTo()
     * @uses BasePremiumGap::setValueNet()
     * @param int $insurancePeriod
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumFrom
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumTo
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $valueNet
     */
    public function __construct($insurancePeriod = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumFrom = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumTo = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $valueNet = null)
    {
        $this
            ->setInsurancePeriod($insurancePeriod)
            ->setInsuranceSumFrom($insuranceSumFrom)
            ->setInsuranceSumTo($insuranceSumTo)
            ->setValueNet($valueNet);
    }
    /**
     * Get InsurancePeriod value
     * @return int|null
     */
    public function getInsurancePeriod()
    {
        return $this->InsurancePeriod;
    }
    /**
     * Set InsurancePeriod value
     * @param int $insurancePeriod
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumGap
     */
    public function setInsurancePeriod($insurancePeriod = null)
    {
        // validation for constraint: int
        if (!is_null($insurancePeriod) && !is_numeric($insurancePeriod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insurancePeriod)), __LINE__);
        }
        $this->InsurancePeriod = $insurancePeriod;
        return $this;
    }
    /**
     * Get InsuranceSumFrom value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumFrom()
    {
        return isset($this->InsuranceSumFrom) ? $this->InsuranceSumFrom : null;
    }
    /**
     * Set InsuranceSumFrom value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumFrom
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumGap
     */
    public function setInsuranceSumFrom(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumFrom = null)
    {
        if (is_null($insuranceSumFrom) || (is_array($insuranceSumFrom) && empty($insuranceSumFrom))) {
            unset($this->InsuranceSumFrom);
        } else {
            $this->InsuranceSumFrom = $insuranceSumFrom;
        }
        return $this;
    }
    /**
     * Get InsuranceSumTo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumTo()
    {
        return isset($this->InsuranceSumTo) ? $this->InsuranceSumTo : null;
    }
    /**
     * Set InsuranceSumTo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumTo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumGap
     */
    public function setInsuranceSumTo(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumTo = null)
    {
        if (is_null($insuranceSumTo) || (is_array($insuranceSumTo) && empty($insuranceSumTo))) {
            unset($this->InsuranceSumTo);
        } else {
            $this->InsuranceSumTo = $insuranceSumTo;
        }
        return $this;
    }
    /**
     * Get ValueNet value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getValueNet()
    {
        return isset($this->ValueNet) ? $this->ValueNet : null;
    }
    /**
     * Set ValueNet value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $valueNet
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumGap
     */
    public function setValueNet(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $valueNet = null)
    {
        if (is_null($valueNet) || (is_array($valueNet) && empty($valueNet))) {
            unset($this->ValueNet);
        } else {
            $this->ValueNet = $valueNet;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumGap
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
