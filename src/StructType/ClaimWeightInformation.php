<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClaimWeightInformation StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ClaimWeightInformation
 * @subpackage Structs
 */
class ClaimWeightInformation extends AbstractStructBase
{
    /**
     * The ClaimDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimDate;
    /**
     * The ClaimId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ClaimId;
    /**
     * The ClaimWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ClaimWeight;
    /**
     * The FulfilledClaimWeightRuleNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FulfilledClaimWeightRuleNumber;
    /**
     * The FulfilledParametersNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FulfilledParametersNumber;
    /**
     * The IsCompensa
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCompensa;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * Constructor method for ClaimWeightInformation
     * @uses ClaimWeightInformation::setClaimDate()
     * @uses ClaimWeightInformation::setClaimId()
     * @uses ClaimWeightInformation::setClaimWeight()
     * @uses ClaimWeightInformation::setFulfilledClaimWeightRuleNumber()
     * @uses ClaimWeightInformation::setFulfilledParametersNumber()
     * @uses ClaimWeightInformation::setIsCompensa()
     * @uses ClaimWeightInformation::setRiskCode()
     * @param string $claimDate
     * @param string $claimId
     * @param float $claimWeight
     * @param int $fulfilledClaimWeightRuleNumber
     * @param int $fulfilledParametersNumber
     * @param bool $isCompensa
     * @param string $riskCode
     */
    public function __construct($claimDate = null, $claimId = null, $claimWeight = null, $fulfilledClaimWeightRuleNumber = null, $fulfilledParametersNumber = null, $isCompensa = null, $riskCode = null)
    {
        $this
            ->setClaimDate($claimDate)
            ->setClaimId($claimId)
            ->setClaimWeight($claimWeight)
            ->setFulfilledClaimWeightRuleNumber($fulfilledClaimWeightRuleNumber)
            ->setFulfilledParametersNumber($fulfilledParametersNumber)
            ->setIsCompensa($isCompensa)
            ->setRiskCode($riskCode);
    }
    /**
     * Get ClaimDate value
     * @return string|null
     */
    public function getClaimDate()
    {
        return $this->ClaimDate;
    }
    /**
     * Set ClaimDate value
     * @param string $claimDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightInformation
     */
    public function setClaimDate($claimDate = null)
    {
        // validation for constraint: string
        if (!is_null($claimDate) && !is_string($claimDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($claimDate)), __LINE__);
        }
        $this->ClaimDate = $claimDate;
        return $this;
    }
    /**
     * Get ClaimId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getClaimId()
    {
        return isset($this->ClaimId) ? $this->ClaimId : null;
    }
    /**
     * Set ClaimId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $claimId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightInformation
     */
    public function setClaimId($claimId = null)
    {
        // validation for constraint: string
        if (!is_null($claimId) && !is_string($claimId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($claimId)), __LINE__);
        }
        if (is_null($claimId) || (is_array($claimId) && empty($claimId))) {
            unset($this->ClaimId);
        } else {
            $this->ClaimId = $claimId;
        }
        return $this;
    }
    /**
     * Get ClaimWeight value
     * @return float|null
     */
    public function getClaimWeight()
    {
        return $this->ClaimWeight;
    }
    /**
     * Set ClaimWeight value
     * @param float $claimWeight
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightInformation
     */
    public function setClaimWeight($claimWeight = null)
    {
        $this->ClaimWeight = $claimWeight;
        return $this;
    }
    /**
     * Get FulfilledClaimWeightRuleNumber value
     * @return int|null
     */
    public function getFulfilledClaimWeightRuleNumber()
    {
        return $this->FulfilledClaimWeightRuleNumber;
    }
    /**
     * Set FulfilledClaimWeightRuleNumber value
     * @param int $fulfilledClaimWeightRuleNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightInformation
     */
    public function setFulfilledClaimWeightRuleNumber($fulfilledClaimWeightRuleNumber = null)
    {
        // validation for constraint: int
        if (!is_null($fulfilledClaimWeightRuleNumber) && !is_numeric($fulfilledClaimWeightRuleNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fulfilledClaimWeightRuleNumber)), __LINE__);
        }
        $this->FulfilledClaimWeightRuleNumber = $fulfilledClaimWeightRuleNumber;
        return $this;
    }
    /**
     * Get FulfilledParametersNumber value
     * @return int|null
     */
    public function getFulfilledParametersNumber()
    {
        return $this->FulfilledParametersNumber;
    }
    /**
     * Set FulfilledParametersNumber value
     * @param int $fulfilledParametersNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightInformation
     */
    public function setFulfilledParametersNumber($fulfilledParametersNumber = null)
    {
        // validation for constraint: int
        if (!is_null($fulfilledParametersNumber) && !is_numeric($fulfilledParametersNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($fulfilledParametersNumber)), __LINE__);
        }
        $this->FulfilledParametersNumber = $fulfilledParametersNumber;
        return $this;
    }
    /**
     * Get IsCompensa value
     * @return bool|null
     */
    public function getIsCompensa()
    {
        return $this->IsCompensa;
    }
    /**
     * Set IsCompensa value
     * @param bool $isCompensa
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightInformation
     */
    public function setIsCompensa($isCompensa = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCompensa) && !is_bool($isCompensa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCompensa)), __LINE__);
        }
        $this->IsCompensa = $isCompensa;
        return $this;
    }
    /**
     * Get RiskCode value
     * @return string|null
     */
    public function getRiskCode()
    {
        return $this->RiskCode;
    }
    /**
     * Set RiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $riskCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightInformation
     */
    public function setRiskCode($riskCode = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($riskCode)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $riskCode, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        $this->RiskCode = $riskCode;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClaimWeightInformation
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
