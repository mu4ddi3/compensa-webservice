<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorPriceTest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorPriceTest
 * @subpackage Structs
 */
class MotorPriceTest extends PriceTest
{
    /**
     * The CorrectionValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $CorrectionValue;
    /**
     * The DeltaBM
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaBM;
    /**
     * The DeltaWU
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWU;
    /**
     * The PartnerBirthDay
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PartnerBirthDay;
    /**
     * The PremiumAfterPriceTestApplied
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $PremiumAfterPriceTestApplied;
    /**
     * Constructor method for MotorPriceTest
     * @uses MotorPriceTest::setCorrectionValue()
     * @uses MotorPriceTest::setDeltaBM()
     * @uses MotorPriceTest::setDeltaWU()
     * @uses MotorPriceTest::setPartnerBirthDay()
     * @uses MotorPriceTest::setPremiumAfterPriceTestApplied()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $correctionValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU
     * @param int $partnerBirthDay
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumAfterPriceTestApplied
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $correctionValue = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU = null, $partnerBirthDay = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumAfterPriceTestApplied = null)
    {
        $this
            ->setCorrectionValue($correctionValue)
            ->setDeltaBM($deltaBM)
            ->setDeltaWU($deltaWU)
            ->setPartnerBirthDay($partnerBirthDay)
            ->setPremiumAfterPriceTestApplied($premiumAfterPriceTestApplied);
    }
    /**
     * Get CorrectionValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getCorrectionValue()
    {
        return isset($this->CorrectionValue) ? $this->CorrectionValue : null;
    }
    /**
     * Set CorrectionValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $correctionValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPriceTest
     */
    public function setCorrectionValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $correctionValue = null)
    {
        if (is_null($correctionValue) || (is_array($correctionValue) && empty($correctionValue))) {
            unset($this->CorrectionValue);
        } else {
            $this->CorrectionValue = $correctionValue;
        }
        return $this;
    }
    /**
     * Get DeltaBM value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaBM()
    {
        return isset($this->DeltaBM) ? $this->DeltaBM : null;
    }
    /**
     * Set DeltaBM value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPriceTest
     */
    public function setDeltaBM(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaBM = null)
    {
        if (is_null($deltaBM) || (is_array($deltaBM) && empty($deltaBM))) {
            unset($this->DeltaBM);
        } else {
            $this->DeltaBM = $deltaBM;
        }
        return $this;
    }
    /**
     * Get DeltaWU value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWU()
    {
        return isset($this->DeltaWU) ? $this->DeltaWU : null;
    }
    /**
     * Set DeltaWU value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPriceTest
     */
    public function setDeltaWU(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWU = null)
    {
        if (is_null($deltaWU) || (is_array($deltaWU) && empty($deltaWU))) {
            unset($this->DeltaWU);
        } else {
            $this->DeltaWU = $deltaWU;
        }
        return $this;
    }
    /**
     * Get PartnerBirthDay value
     * @return int|null
     */
    public function getPartnerBirthDay()
    {
        return $this->PartnerBirthDay;
    }
    /**
     * Set PartnerBirthDay value
     * @param int $partnerBirthDay
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPriceTest
     */
    public function setPartnerBirthDay($partnerBirthDay = null)
    {
        // validation for constraint: int
        if (!is_null($partnerBirthDay) && !is_numeric($partnerBirthDay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($partnerBirthDay)), __LINE__);
        }
        $this->PartnerBirthDay = $partnerBirthDay;
        return $this;
    }
    /**
     * Get PremiumAfterPriceTestApplied value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremiumAfterPriceTestApplied()
    {
        return isset($this->PremiumAfterPriceTestApplied) ? $this->PremiumAfterPriceTestApplied : null;
    }
    /**
     * Set PremiumAfterPriceTestApplied value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumAfterPriceTestApplied
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPriceTest
     */
    public function setPremiumAfterPriceTestApplied(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumAfterPriceTestApplied = null)
    {
        if (is_null($premiumAfterPriceTestApplied) || (is_array($premiumAfterPriceTestApplied) && empty($premiumAfterPriceTestApplied))) {
            unset($this->PremiumAfterPriceTestApplied);
        } else {
            $this->PremiumAfterPriceTestApplied = $premiumAfterPriceTestApplied;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorPriceTest
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
