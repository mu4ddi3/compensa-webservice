<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LeasingCorrectionRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LeasingCorrectionRule
 * @subpackage Structs
 */
class LeasingCorrectionRule extends AbstractStructBase
{
    /**
     * The CorrectionFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $CorrectionFactor;
    /**
     * The IsCompensaLeasing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCompensaLeasing;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * The VehicleGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VehicleGroupId;
    /**
     * Constructor method for LeasingCorrectionRule
     * @uses LeasingCorrectionRule::setCorrectionFactor()
     * @uses LeasingCorrectionRule::setIsCompensaLeasing()
     * @uses LeasingCorrectionRule::setRiskCode()
     * @uses LeasingCorrectionRule::setVehicleGroupId()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $correctionFactor
     * @param bool $isCompensaLeasing
     * @param string $riskCode
     * @param int $vehicleGroupId
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $correctionFactor = null, $isCompensaLeasing = null, $riskCode = null, $vehicleGroupId = null)
    {
        $this
            ->setCorrectionFactor($correctionFactor)
            ->setIsCompensaLeasing($isCompensaLeasing)
            ->setRiskCode($riskCode)
            ->setVehicleGroupId($vehicleGroupId);
    }
    /**
     * Get CorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getCorrectionFactor()
    {
        return isset($this->CorrectionFactor) ? $this->CorrectionFactor : null;
    }
    /**
     * Set CorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $correctionFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule
     */
    public function setCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $correctionFactor = null)
    {
        if (is_null($correctionFactor) || (is_array($correctionFactor) && empty($correctionFactor))) {
            unset($this->CorrectionFactor);
        } else {
            $this->CorrectionFactor = $correctionFactor;
        }
        return $this;
    }
    /**
     * Get IsCompensaLeasing value
     * @return bool|null
     */
    public function getIsCompensaLeasing()
    {
        return $this->IsCompensaLeasing;
    }
    /**
     * Set IsCompensaLeasing value
     * @param bool $isCompensaLeasing
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule
     */
    public function setIsCompensaLeasing($isCompensaLeasing = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCompensaLeasing) && !is_bool($isCompensaLeasing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCompensaLeasing)), __LINE__);
        }
        $this->IsCompensaLeasing = $isCompensaLeasing;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule
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
     * Get VehicleGroupId value
     * @return int|null
     */
    public function getVehicleGroupId()
    {
        return $this->VehicleGroupId;
    }
    /**
     * Set VehicleGroupId value
     * @param int $vehicleGroupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule
     */
    public function setVehicleGroupId($vehicleGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($vehicleGroupId) && !is_numeric($vehicleGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($vehicleGroupId)), __LINE__);
        }
        $this->VehicleGroupId = $vehicleGroupId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LeasingCorrectionRule
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
