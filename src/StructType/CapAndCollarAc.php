<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CapAndCollarAc StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CapAndCollarAc
 * @subpackage Structs
 */
class CapAndCollarAc extends CapAndCollar
{
    /**
     * The ClaimSettlementVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaimSettlementVariant;
    /**
     * The DeltaWARLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWARLeftBound;
    /**
     * The DeltaWARRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $DeltaWARRightBound;
    /**
     * The InsuranceSumLeftBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumLeftBound;
    /**
     * The InsuranceSumRightBound
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $InsuranceSumRightBound;
    /**
     * Constructor method for CapAndCollarAc
     * @uses CapAndCollarAc::setClaimSettlementVariant()
     * @uses CapAndCollarAc::setDeltaWARLeftBound()
     * @uses CapAndCollarAc::setDeltaWARRightBound()
     * @uses CapAndCollarAc::setInsuranceSumLeftBound()
     * @uses CapAndCollarAc::setInsuranceSumRightBound()
     * @param string $claimSettlementVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWARLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWARRightBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound
     */
    public function __construct($claimSettlementVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWARLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWARRightBound = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound = null)
    {
        $this
            ->setClaimSettlementVariant($claimSettlementVariant)
            ->setDeltaWARLeftBound($deltaWARLeftBound)
            ->setDeltaWARRightBound($deltaWARRightBound)
            ->setInsuranceSumLeftBound($insuranceSumLeftBound)
            ->setInsuranceSumRightBound($insuranceSumRightBound);
    }
    /**
     * Get ClaimSettlementVariant value
     * @return string|null
     */
    public function getClaimSettlementVariant()
    {
        return $this->ClaimSettlementVariant;
    }
    /**
     * Set ClaimSettlementVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claimSettlementVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarAc
     */
    public function setClaimSettlementVariant($claimSettlementVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid($claimSettlementVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $claimSettlementVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues())), __LINE__);
        }
        $this->ClaimSettlementVariant = $claimSettlementVariant;
        return $this;
    }
    /**
     * Get DeltaWARLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWARLeftBound()
    {
        return isset($this->DeltaWARLeftBound) ? $this->DeltaWARLeftBound : null;
    }
    /**
     * Set DeltaWARLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWARLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarAc
     */
    public function setDeltaWARLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWARLeftBound = null)
    {
        if (is_null($deltaWARLeftBound) || (is_array($deltaWARLeftBound) && empty($deltaWARLeftBound))) {
            unset($this->DeltaWARLeftBound);
        } else {
            $this->DeltaWARLeftBound = $deltaWARLeftBound;
        }
        return $this;
    }
    /**
     * Get DeltaWARRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getDeltaWARRightBound()
    {
        return isset($this->DeltaWARRightBound) ? $this->DeltaWARRightBound : null;
    }
    /**
     * Set DeltaWARRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWARRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarAc
     */
    public function setDeltaWARRightBound(\Mu4ddi3\Compensa\Webservice\StructType\Factor $deltaWARRightBound = null)
    {
        if (is_null($deltaWARRightBound) || (is_array($deltaWARRightBound) && empty($deltaWARRightBound))) {
            unset($this->DeltaWARRightBound);
        } else {
            $this->DeltaWARRightBound = $deltaWARRightBound;
        }
        return $this;
    }
    /**
     * Get InsuranceSumLeftBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumLeftBound()
    {
        return isset($this->InsuranceSumLeftBound) ? $this->InsuranceSumLeftBound : null;
    }
    /**
     * Set InsuranceSumLeftBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarAc
     */
    public function setInsuranceSumLeftBound(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumLeftBound = null)
    {
        if (is_null($insuranceSumLeftBound) || (is_array($insuranceSumLeftBound) && empty($insuranceSumLeftBound))) {
            unset($this->InsuranceSumLeftBound);
        } else {
            $this->InsuranceSumLeftBound = $insuranceSumLeftBound;
        }
        return $this;
    }
    /**
     * Get InsuranceSumRightBound value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getInsuranceSumRightBound()
    {
        return isset($this->InsuranceSumRightBound) ? $this->InsuranceSumRightBound : null;
    }
    /**
     * Set InsuranceSumRightBound value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarAc
     */
    public function setInsuranceSumRightBound(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSumRightBound = null)
    {
        if (is_null($insuranceSumRightBound) || (is_array($insuranceSumRightBound) && empty($insuranceSumRightBound))) {
            unset($this->InsuranceSumRightBound);
        } else {
            $this->InsuranceSumRightBound = $insuranceSumRightBound;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CapAndCollarAc
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
