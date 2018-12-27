<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusMalusCorrectionBlackRiskRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BonusMalusCorrectionBlackRiskRule
 * @subpackage Structs
 */
class BonusMalusCorrectionBlackRiskRule extends BlackRiskRule
{
    /**
     * The CorrectionReason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CorrectionReason;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * Constructor method for BonusMalusCorrectionBlackRiskRule
     * @uses BonusMalusCorrectionBlackRiskRule::setCorrectionReason()
     * @uses BonusMalusCorrectionBlackRiskRule::setRiskCode()
     * @param string $correctionReason
     * @param string $riskCode
     */
    public function __construct($correctionReason = null, $riskCode = null)
    {
        $this
            ->setCorrectionReason($correctionReason)
            ->setRiskCode($riskCode);
    }
    /**
     * Get CorrectionReason value
     * @return string|null
     */
    public function getCorrectionReason()
    {
        return $this->CorrectionReason;
    }
    /**
     * Set CorrectionReason value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $correctionReason
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCorrectionBlackRiskRule
     */
    public function setCorrectionReason($correctionReason = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::valueIsValid($correctionReason)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $correctionReason, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CorrectionReason::getValidValues())), __LINE__);
        }
        $this->CorrectionReason = $correctionReason;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCorrectionBlackRiskRule
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusCorrectionBlackRiskRule
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
