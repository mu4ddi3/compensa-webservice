<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MotorRenewalContract StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MotorRenewalContract
 * @subpackage Structs
 */
class MotorRenewalContract extends RenewalContract
{
    /**
     * The CentralPolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CentralPolicyId;
    /**
     * The CompensaOcClaimsCountLastYearForOfferCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $CompensaOcClaimsCountLastYearForOfferCalculation;
    /**
     * The IsOfferFileSaved
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOfferFileSaved;
    /**
     * The IsPolicyRenewed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPolicyRenewed;
    /**
     * The NonCompensaOcClaimsCountLastYearForOfferCalculation
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $NonCompensaOcClaimsCountLastYearForOfferCalculation;
    /**
     * The OcPremiumFixedValue
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $OcPremiumFixedValue;
    /**
     * The OcPremiumSentValueinCSOU
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $OcPremiumSentValueinCSOU;
    /**
     * The OfferSendType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OfferSendType;
    /**
     * The OfferSentTime
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OfferSentTime;
    /**
     * The WasOfferSent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WasOfferSent;
    /**
     * The WasOfferSentInCSOU
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WasOfferSentInCSOU;
    /**
     * Constructor method for MotorRenewalContract
     * @uses MotorRenewalContract::setCentralPolicyId()
     * @uses MotorRenewalContract::setCompensaOcClaimsCountLastYearForOfferCalculation()
     * @uses MotorRenewalContract::setIsOfferFileSaved()
     * @uses MotorRenewalContract::setIsPolicyRenewed()
     * @uses MotorRenewalContract::setNonCompensaOcClaimsCountLastYearForOfferCalculation()
     * @uses MotorRenewalContract::setOcPremiumFixedValue()
     * @uses MotorRenewalContract::setOcPremiumSentValueinCSOU()
     * @uses MotorRenewalContract::setOfferSendType()
     * @uses MotorRenewalContract::setOfferSentTime()
     * @uses MotorRenewalContract::setWasOfferSent()
     * @uses MotorRenewalContract::setWasOfferSentInCSOU()
     * @param int $centralPolicyId
     * @param int $compensaOcClaimsCountLastYearForOfferCalculation
     * @param bool $isOfferFileSaved
     * @param bool $isPolicyRenewed
     * @param int $nonCompensaOcClaimsCountLastYearForOfferCalculation
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumFixedValue
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumSentValueinCSOU
     * @param string $offerSendType
     * @param string $offerSentTime
     * @param bool $wasOfferSent
     * @param bool $wasOfferSentInCSOU
     */
    public function __construct($centralPolicyId = null, $compensaOcClaimsCountLastYearForOfferCalculation = null, $isOfferFileSaved = null, $isPolicyRenewed = null, $nonCompensaOcClaimsCountLastYearForOfferCalculation = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumFixedValue = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumSentValueinCSOU = null, $offerSendType = null, $offerSentTime = null, $wasOfferSent = null, $wasOfferSentInCSOU = null)
    {
        $this
            ->setCentralPolicyId($centralPolicyId)
            ->setCompensaOcClaimsCountLastYearForOfferCalculation($compensaOcClaimsCountLastYearForOfferCalculation)
            ->setIsOfferFileSaved($isOfferFileSaved)
            ->setIsPolicyRenewed($isPolicyRenewed)
            ->setNonCompensaOcClaimsCountLastYearForOfferCalculation($nonCompensaOcClaimsCountLastYearForOfferCalculation)
            ->setOcPremiumFixedValue($ocPremiumFixedValue)
            ->setOcPremiumSentValueinCSOU($ocPremiumSentValueinCSOU)
            ->setOfferSendType($offerSendType)
            ->setOfferSentTime($offerSentTime)
            ->setWasOfferSent($wasOfferSent)
            ->setWasOfferSentInCSOU($wasOfferSentInCSOU);
    }
    /**
     * Get CentralPolicyId value
     * @return int|null
     */
    public function getCentralPolicyId()
    {
        return $this->CentralPolicyId;
    }
    /**
     * Set CentralPolicyId value
     * @param int $centralPolicyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setCentralPolicyId($centralPolicyId = null)
    {
        // validation for constraint: int
        if (!is_null($centralPolicyId) && !is_numeric($centralPolicyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($centralPolicyId)), __LINE__);
        }
        $this->CentralPolicyId = $centralPolicyId;
        return $this;
    }
    /**
     * Get CompensaOcClaimsCountLastYearForOfferCalculation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getCompensaOcClaimsCountLastYearForOfferCalculation()
    {
        return isset($this->CompensaOcClaimsCountLastYearForOfferCalculation) ? $this->CompensaOcClaimsCountLastYearForOfferCalculation : null;
    }
    /**
     * Set CompensaOcClaimsCountLastYearForOfferCalculation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $compensaOcClaimsCountLastYearForOfferCalculation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setCompensaOcClaimsCountLastYearForOfferCalculation($compensaOcClaimsCountLastYearForOfferCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($compensaOcClaimsCountLastYearForOfferCalculation) && !is_numeric($compensaOcClaimsCountLastYearForOfferCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($compensaOcClaimsCountLastYearForOfferCalculation)), __LINE__);
        }
        if (is_null($compensaOcClaimsCountLastYearForOfferCalculation) || (is_array($compensaOcClaimsCountLastYearForOfferCalculation) && empty($compensaOcClaimsCountLastYearForOfferCalculation))) {
            unset($this->CompensaOcClaimsCountLastYearForOfferCalculation);
        } else {
            $this->CompensaOcClaimsCountLastYearForOfferCalculation = $compensaOcClaimsCountLastYearForOfferCalculation;
        }
        return $this;
    }
    /**
     * Get IsOfferFileSaved value
     * @return bool|null
     */
    public function getIsOfferFileSaved()
    {
        return $this->IsOfferFileSaved;
    }
    /**
     * Set IsOfferFileSaved value
     * @param bool $isOfferFileSaved
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setIsOfferFileSaved($isOfferFileSaved = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOfferFileSaved) && !is_bool($isOfferFileSaved)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOfferFileSaved)), __LINE__);
        }
        $this->IsOfferFileSaved = $isOfferFileSaved;
        return $this;
    }
    /**
     * Get IsPolicyRenewed value
     * @return bool|null
     */
    public function getIsPolicyRenewed()
    {
        return $this->IsPolicyRenewed;
    }
    /**
     * Set IsPolicyRenewed value
     * @param bool $isPolicyRenewed
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setIsPolicyRenewed($isPolicyRenewed = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPolicyRenewed) && !is_bool($isPolicyRenewed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPolicyRenewed)), __LINE__);
        }
        $this->IsPolicyRenewed = $isPolicyRenewed;
        return $this;
    }
    /**
     * Get NonCompensaOcClaimsCountLastYearForOfferCalculation value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getNonCompensaOcClaimsCountLastYearForOfferCalculation()
    {
        return isset($this->NonCompensaOcClaimsCountLastYearForOfferCalculation) ? $this->NonCompensaOcClaimsCountLastYearForOfferCalculation : null;
    }
    /**
     * Set NonCompensaOcClaimsCountLastYearForOfferCalculation value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $nonCompensaOcClaimsCountLastYearForOfferCalculation
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setNonCompensaOcClaimsCountLastYearForOfferCalculation($nonCompensaOcClaimsCountLastYearForOfferCalculation = null)
    {
        // validation for constraint: int
        if (!is_null($nonCompensaOcClaimsCountLastYearForOfferCalculation) && !is_numeric($nonCompensaOcClaimsCountLastYearForOfferCalculation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($nonCompensaOcClaimsCountLastYearForOfferCalculation)), __LINE__);
        }
        if (is_null($nonCompensaOcClaimsCountLastYearForOfferCalculation) || (is_array($nonCompensaOcClaimsCountLastYearForOfferCalculation) && empty($nonCompensaOcClaimsCountLastYearForOfferCalculation))) {
            unset($this->NonCompensaOcClaimsCountLastYearForOfferCalculation);
        } else {
            $this->NonCompensaOcClaimsCountLastYearForOfferCalculation = $nonCompensaOcClaimsCountLastYearForOfferCalculation;
        }
        return $this;
    }
    /**
     * Get OcPremiumFixedValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getOcPremiumFixedValue()
    {
        return isset($this->OcPremiumFixedValue) ? $this->OcPremiumFixedValue : null;
    }
    /**
     * Set OcPremiumFixedValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumFixedValue
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setOcPremiumFixedValue(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumFixedValue = null)
    {
        if (is_null($ocPremiumFixedValue) || (is_array($ocPremiumFixedValue) && empty($ocPremiumFixedValue))) {
            unset($this->OcPremiumFixedValue);
        } else {
            $this->OcPremiumFixedValue = $ocPremiumFixedValue;
        }
        return $this;
    }
    /**
     * Get OcPremiumSentValueinCSOU value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getOcPremiumSentValueinCSOU()
    {
        return isset($this->OcPremiumSentValueinCSOU) ? $this->OcPremiumSentValueinCSOU : null;
    }
    /**
     * Set OcPremiumSentValueinCSOU value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumSentValueinCSOU
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setOcPremiumSentValueinCSOU(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $ocPremiumSentValueinCSOU = null)
    {
        if (is_null($ocPremiumSentValueinCSOU) || (is_array($ocPremiumSentValueinCSOU) && empty($ocPremiumSentValueinCSOU))) {
            unset($this->OcPremiumSentValueinCSOU);
        } else {
            $this->OcPremiumSentValueinCSOU = $ocPremiumSentValueinCSOU;
        }
        return $this;
    }
    /**
     * Get OfferSendType value
     * @return string|null
     */
    public function getOfferSendType()
    {
        return $this->OfferSendType;
    }
    /**
     * Set OfferSendType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\OfferSendType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\OfferSendType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $offerSendType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setOfferSendType($offerSendType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\OfferSendType::valueIsValid($offerSendType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $offerSendType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\OfferSendType::getValidValues())), __LINE__);
        }
        $this->OfferSendType = $offerSendType;
        return $this;
    }
    /**
     * Get OfferSentTime value
     * @return string|null
     */
    public function getOfferSentTime()
    {
        return $this->OfferSentTime;
    }
    /**
     * Set OfferSentTime value
     * @param string $offerSentTime
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setOfferSentTime($offerSentTime = null)
    {
        // validation for constraint: string
        if (!is_null($offerSentTime) && !is_string($offerSentTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerSentTime)), __LINE__);
        }
        $this->OfferSentTime = $offerSentTime;
        return $this;
    }
    /**
     * Get WasOfferSent value
     * @return bool|null
     */
    public function getWasOfferSent()
    {
        return $this->WasOfferSent;
    }
    /**
     * Set WasOfferSent value
     * @param bool $wasOfferSent
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setWasOfferSent($wasOfferSent = null)
    {
        // validation for constraint: boolean
        if (!is_null($wasOfferSent) && !is_bool($wasOfferSent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($wasOfferSent)), __LINE__);
        }
        $this->WasOfferSent = $wasOfferSent;
        return $this;
    }
    /**
     * Get WasOfferSentInCSOU value
     * @return bool|null
     */
    public function getWasOfferSentInCSOU()
    {
        return $this->WasOfferSentInCSOU;
    }
    /**
     * Set WasOfferSentInCSOU value
     * @param bool $wasOfferSentInCSOU
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
     */
    public function setWasOfferSentInCSOU($wasOfferSentInCSOU = null)
    {
        // validation for constraint: boolean
        if (!is_null($wasOfferSentInCSOU) && !is_bool($wasOfferSentInCSOU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($wasOfferSentInCSOU)), __LINE__);
        }
        $this->WasOfferSentInCSOU = $wasOfferSentInCSOU;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorRenewalContract
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
