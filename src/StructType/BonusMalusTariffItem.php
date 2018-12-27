<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusMalusTariffItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BonusMalusTariffItem
 * @subpackage Structs
 */
class BonusMalusTariffItem extends AbstractStructBase
{
    /**
     * The ClaimWeight
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal
     */
    public $ClaimWeight;
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Factor;
    /**
     * The NumberOfPolicyYears
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal
     */
    public $NumberOfPolicyYears;
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RiskCode;
    /**
     * Constructor method for BonusMalusTariffItem
     * @uses BonusMalusTariffItem::setClaimWeight()
     * @uses BonusMalusTariffItem::setFactor()
     * @uses BonusMalusTariffItem::setNumberOfPolicyYears()
     * @uses BonusMalusTariffItem::setRiskCode()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $claimWeight
     * @param float $factor
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYears
     * @param string $riskCode
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $claimWeight = null, $factor = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYears = null, $riskCode = null)
    {
        $this
            ->setClaimWeight($claimWeight)
            ->setFactor($factor)
            ->setNumberOfPolicyYears($numberOfPolicyYears)
            ->setRiskCode($riskCode);
    }
    /**
     * Get ClaimWeight value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function getClaimWeight()
    {
        return isset($this->ClaimWeight) ? $this->ClaimWeight : null;
    }
    /**
     * Set ClaimWeight value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $claimWeight
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem
     */
    public function setClaimWeight(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $claimWeight = null)
    {
        if (is_null($claimWeight) || (is_array($claimWeight) && empty($claimWeight))) {
            unset($this->ClaimWeight);
        } else {
            $this->ClaimWeight = $claimWeight;
        }
        return $this;
    }
    /**
     * Get Factor value
     * @return float|null
     */
    public function getFactor()
    {
        return $this->Factor;
    }
    /**
     * Set Factor value
     * @param float $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem
     */
    public function setFactor($factor = null)
    {
        $this->Factor = $factor;
        return $this;
    }
    /**
     * Get NumberOfPolicyYears value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal|null
     */
    public function getNumberOfPolicyYears()
    {
        return isset($this->NumberOfPolicyYears) ? $this->NumberOfPolicyYears : null;
    }
    /**
     * Set NumberOfPolicyYears value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYears
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem
     */
    public function setNumberOfPolicyYears(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfdecimal $numberOfPolicyYears = null)
    {
        if (is_null($numberOfPolicyYears) || (is_array($numberOfPolicyYears) && empty($numberOfPolicyYears))) {
            unset($this->NumberOfPolicyYears);
        } else {
            $this->NumberOfPolicyYears = $numberOfPolicyYears;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffItem
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
