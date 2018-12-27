<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePremiumOp StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePremiumOp
 * @subpackage Structs
 */
class BasePremiumOp extends BasePremium
{
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSum;
    /**
     * The IsPersonPhysical
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPersonPhysical;
    /**
     * Constructor method for BasePremiumOp
     * @uses BasePremiumOp::setInsuranceSum()
     * @uses BasePremiumOp::setIsPersonPhysical()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @param bool $isPersonPhysical
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null, $isPersonPhysical = null)
    {
        $this
            ->setInsuranceSum($insuranceSum)
            ->setIsPersonPhysical($isPersonPhysical);
    }
    /**
     * Get InsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSum()
    {
        return isset($this->InsuranceSum) ? $this->InsuranceSum : null;
    }
    /**
     * Set InsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumOp
     */
    public function setInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null)
    {
        if (is_null($insuranceSum) || (is_array($insuranceSum) && empty($insuranceSum))) {
            unset($this->InsuranceSum);
        } else {
            $this->InsuranceSum = $insuranceSum;
        }
        return $this;
    }
    /**
     * Get IsPersonPhysical value
     * @return bool|null
     */
    public function getIsPersonPhysical()
    {
        return $this->IsPersonPhysical;
    }
    /**
     * Set IsPersonPhysical value
     * @param bool $isPersonPhysical
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumOp
     */
    public function setIsPersonPhysical($isPersonPhysical = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPersonPhysical) && !is_bool($isPersonPhysical)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPersonPhysical)), __LINE__);
        }
        $this->IsPersonPhysical = $isPersonPhysical;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumOp
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
