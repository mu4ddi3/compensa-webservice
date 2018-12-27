<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidationData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ValidationData
 * @subpackage Structs
 */
class ValidationData extends AbstractStructBase
{
    /**
     * The Conditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ConditionsBase
     */
    public $Conditions;
    /**
     * The Contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public $Contract;
    /**
     * The ContractProduct
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ContractProduct;
    /**
     * The InsuranceHistoryType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InsuranceHistoryType;
    /**
     * The InsuredPropertyType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InsuredPropertyType;
    /**
     * The IssuerInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public $IssuerInfo;
    /**
     * The MotorInsurerDocumentForPromotion
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ClientCode
     */
    public $MotorInsurerDocumentForPromotion;
    /**
     * The MotorYoungestUserAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MotorYoungestUserAge;
    /**
     * The Partners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner
     */
    public $Partners;
    /**
     * The PolicyDurationInDays
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolicyDurationInDays;
    /**
     * The PolicyDurationType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PolicyDurationType;
    /**
     * The PolicyPaymentType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PolicyPaymentType;
    /**
     * The PolicyPremiumWithoutPromotionDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $PolicyPremiumWithoutPromotionDiscount;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCode;
    /**
     * The PreviousPolicyNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $PreviousPolicyNumber;
    /**
     * The PromotionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PromotionId;
    /**
     * The PromotionProduct
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PromotionProduct;
    /**
     * The SurfaceArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $SurfaceArea;
    /**
     * The VoyageInsuredAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VoyageInsuredAge;
    /**
     * Constructor method for ValidationData
     * @uses ValidationData::setConditions()
     * @uses ValidationData::setContract()
     * @uses ValidationData::setContractProduct()
     * @uses ValidationData::setInsuranceHistoryType()
     * @uses ValidationData::setInsuredPropertyType()
     * @uses ValidationData::setIssuerInfo()
     * @uses ValidationData::setMotorInsurerDocumentForPromotion()
     * @uses ValidationData::setMotorYoungestUserAge()
     * @uses ValidationData::setPartners()
     * @uses ValidationData::setPolicyDurationInDays()
     * @uses ValidationData::setPolicyDurationType()
     * @uses ValidationData::setPolicyPaymentType()
     * @uses ValidationData::setPolicyPremiumWithoutPromotionDiscount()
     * @uses ValidationData::setPostalCode()
     * @uses ValidationData::setPreviousPolicyNumber()
     * @uses ValidationData::setPromotionId()
     * @uses ValidationData::setPromotionProduct()
     * @uses ValidationData::setSurfaceArea()
     * @uses ValidationData::setVoyageInsuredAge()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConditionsBase $conditions
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Contract $contract
     * @param int $contractProduct
     * @param string $insuranceHistoryType
     * @param string $insuredPropertyType
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo $issuerInfo
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientCode $motorInsurerDocumentForPromotion
     * @param int $motorYoungestUserAge
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner $partners
     * @param int $policyDurationInDays
     * @param string $policyDurationType
     * @param string $policyPaymentType
     * @param float $policyPremiumWithoutPromotionDiscount
     * @param string $postalCode
     * @param int $previousPolicyNumber
     * @param int $promotionId
     * @param int $promotionProduct
     * @param float $surfaceArea
     * @param string $voyageInsuredAge
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ConditionsBase $conditions = null, \Mu4ddi3\Compensa\Webservice\StructType\Contract $contract = null, $contractProduct = null, $insuranceHistoryType = null, $insuredPropertyType = null, \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo $issuerInfo = null, \Mu4ddi3\Compensa\Webservice\StructType\ClientCode $motorInsurerDocumentForPromotion = null, $motorYoungestUserAge = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner $partners = null, $policyDurationInDays = null, $policyDurationType = null, $policyPaymentType = null, $policyPremiumWithoutPromotionDiscount = null, $postalCode = null, $previousPolicyNumber = null, $promotionId = null, $promotionProduct = null, $surfaceArea = null, $voyageInsuredAge = null)
    {
        $this
            ->setConditions($conditions)
            ->setContract($contract)
            ->setContractProduct($contractProduct)
            ->setInsuranceHistoryType($insuranceHistoryType)
            ->setInsuredPropertyType($insuredPropertyType)
            ->setIssuerInfo($issuerInfo)
            ->setMotorInsurerDocumentForPromotion($motorInsurerDocumentForPromotion)
            ->setMotorYoungestUserAge($motorYoungestUserAge)
            ->setPartners($partners)
            ->setPolicyDurationInDays($policyDurationInDays)
            ->setPolicyDurationType($policyDurationType)
            ->setPolicyPaymentType($policyPaymentType)
            ->setPolicyPremiumWithoutPromotionDiscount($policyPremiumWithoutPromotionDiscount)
            ->setPostalCode($postalCode)
            ->setPreviousPolicyNumber($previousPolicyNumber)
            ->setPromotionId($promotionId)
            ->setPromotionProduct($promotionProduct)
            ->setSurfaceArea($surfaceArea)
            ->setVoyageInsuredAge($voyageInsuredAge);
    }
    /**
     * Get Conditions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConditionsBase|null
     */
    public function getConditions()
    {
        return isset($this->Conditions) ? $this->Conditions : null;
    }
    /**
     * Set Conditions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConditionsBase $conditions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setConditions(\Mu4ddi3\Compensa\Webservice\StructType\ConditionsBase $conditions = null)
    {
        if (is_null($conditions) || (is_array($conditions) && empty($conditions))) {
            unset($this->Conditions);
        } else {
            $this->Conditions = $conditions;
        }
        return $this;
    }
    /**
     * Get Contract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract|null
     */
    public function getContract()
    {
        return isset($this->Contract) ? $this->Contract : null;
    }
    /**
     * Set Contract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Contract $contract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setContract(\Mu4ddi3\Compensa\Webservice\StructType\Contract $contract = null)
    {
        if (is_null($contract) || (is_array($contract) && empty($contract))) {
            unset($this->Contract);
        } else {
            $this->Contract = $contract;
        }
        return $this;
    }
    /**
     * Get ContractProduct value
     * @return int|null
     */
    public function getContractProduct()
    {
        return $this->ContractProduct;
    }
    /**
     * Set ContractProduct value
     * @param int $contractProduct
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setContractProduct($contractProduct = null)
    {
        // validation for constraint: int
        if (!is_null($contractProduct) && !is_numeric($contractProduct)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($contractProduct)), __LINE__);
        }
        $this->ContractProduct = $contractProduct;
        return $this;
    }
    /**
     * Get InsuranceHistoryType value
     * @return string|null
     */
    public function getInsuranceHistoryType()
    {
        return $this->InsuranceHistoryType;
    }
    /**
     * Set InsuranceHistoryType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuranceHistoryType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setInsuranceHistoryType($insuranceHistoryType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::valueIsValid($insuranceHistoryType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $insuranceHistoryType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceHistoryType::getValidValues())), __LINE__);
        }
        $this->InsuranceHistoryType = $insuranceHistoryType;
        return $this;
    }
    /**
     * Get InsuredPropertyType value
     * @return string|null
     */
    public function getInsuredPropertyType()
    {
        return $this->InsuredPropertyType;
    }
    /**
     * Set InsuredPropertyType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $insuredPropertyType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setInsuredPropertyType($insuredPropertyType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::valueIsValid($insuredPropertyType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $insuredPropertyType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuredPropertyType::getValidValues())), __LINE__);
        }
        $this->InsuredPropertyType = $insuredPropertyType;
        return $this;
    }
    /**
     * Get IssuerInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo|null
     */
    public function getIssuerInfo()
    {
        return isset($this->IssuerInfo) ? $this->IssuerInfo : null;
    }
    /**
     * Set IssuerInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo $issuerInfo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setIssuerInfo(\Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo $issuerInfo = null)
    {
        if (is_null($issuerInfo) || (is_array($issuerInfo) && empty($issuerInfo))) {
            unset($this->IssuerInfo);
        } else {
            $this->IssuerInfo = $issuerInfo;
        }
        return $this;
    }
    /**
     * Get MotorInsurerDocumentForPromotion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ClientCode|null
     */
    public function getMotorInsurerDocumentForPromotion()
    {
        return isset($this->MotorInsurerDocumentForPromotion) ? $this->MotorInsurerDocumentForPromotion : null;
    }
    /**
     * Set MotorInsurerDocumentForPromotion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ClientCode $motorInsurerDocumentForPromotion
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setMotorInsurerDocumentForPromotion(\Mu4ddi3\Compensa\Webservice\StructType\ClientCode $motorInsurerDocumentForPromotion = null)
    {
        if (is_null($motorInsurerDocumentForPromotion) || (is_array($motorInsurerDocumentForPromotion) && empty($motorInsurerDocumentForPromotion))) {
            unset($this->MotorInsurerDocumentForPromotion);
        } else {
            $this->MotorInsurerDocumentForPromotion = $motorInsurerDocumentForPromotion;
        }
        return $this;
    }
    /**
     * Get MotorYoungestUserAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMotorYoungestUserAge()
    {
        return isset($this->MotorYoungestUserAge) ? $this->MotorYoungestUserAge : null;
    }
    /**
     * Set MotorYoungestUserAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $motorYoungestUserAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setMotorYoungestUserAge($motorYoungestUserAge = null)
    {
        // validation for constraint: int
        if (!is_null($motorYoungestUserAge) && !is_numeric($motorYoungestUserAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($motorYoungestUserAge)), __LINE__);
        }
        if (is_null($motorYoungestUserAge) || (is_array($motorYoungestUserAge) && empty($motorYoungestUserAge))) {
            unset($this->MotorYoungestUserAge);
        } else {
            $this->MotorYoungestUserAge = $motorYoungestUserAge;
        }
        return $this;
    }
    /**
     * Get Partners value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner|null
     */
    public function getPartners()
    {
        return isset($this->Partners) ? $this->Partners : null;
    }
    /**
     * Set Partners value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner $partners
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setPartners(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner $partners = null)
    {
        if (is_null($partners) || (is_array($partners) && empty($partners))) {
            unset($this->Partners);
        } else {
            $this->Partners = $partners;
        }
        return $this;
    }
    /**
     * Get PolicyDurationInDays value
     * @return int|null
     */
    public function getPolicyDurationInDays()
    {
        return $this->PolicyDurationInDays;
    }
    /**
     * Set PolicyDurationInDays value
     * @param int $policyDurationInDays
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setPolicyDurationInDays($policyDurationInDays = null)
    {
        // validation for constraint: int
        if (!is_null($policyDurationInDays) && !is_numeric($policyDurationInDays)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyDurationInDays)), __LINE__);
        }
        $this->PolicyDurationInDays = $policyDurationInDays;
        return $this;
    }
    /**
     * Get PolicyDurationType value
     * @return string|null
     */
    public function getPolicyDurationType()
    {
        return $this->PolicyDurationType;
    }
    /**
     * Set PolicyDurationType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyDurationType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyDurationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $policyDurationType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setPolicyDurationType($policyDurationType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PolicyDurationType::valueIsValid($policyDurationType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $policyDurationType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PolicyDurationType::getValidValues())), __LINE__);
        }
        $this->PolicyDurationType = $policyDurationType;
        return $this;
    }
    /**
     * Get PolicyPaymentType value
     * @return string|null
     */
    public function getPolicyPaymentType()
    {
        return $this->PolicyPaymentType;
    }
    /**
     * Set PolicyPaymentType value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $policyPaymentType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setPolicyPaymentType($policyPaymentType = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::valueIsValid($policyPaymentType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $policyPaymentType, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PolicyPaymentType::getValidValues())), __LINE__);
        }
        $this->PolicyPaymentType = $policyPaymentType;
        return $this;
    }
    /**
     * Get PolicyPremiumWithoutPromotionDiscount value
     * @return float|null
     */
    public function getPolicyPremiumWithoutPromotionDiscount()
    {
        return $this->PolicyPremiumWithoutPromotionDiscount;
    }
    /**
     * Set PolicyPremiumWithoutPromotionDiscount value
     * @param float $policyPremiumWithoutPromotionDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setPolicyPremiumWithoutPromotionDiscount($policyPremiumWithoutPromotionDiscount = null)
    {
        $this->PolicyPremiumWithoutPromotionDiscount = $policyPremiumWithoutPromotionDiscount;
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCode()
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode;
        }
        return $this;
    }
    /**
     * Get PreviousPolicyNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPreviousPolicyNumber()
    {
        return isset($this->PreviousPolicyNumber) ? $this->PreviousPolicyNumber : null;
    }
    /**
     * Set PreviousPolicyNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $previousPolicyNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setPreviousPolicyNumber($previousPolicyNumber = null)
    {
        // validation for constraint: int
        if (!is_null($previousPolicyNumber) && !is_numeric($previousPolicyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($previousPolicyNumber)), __LINE__);
        }
        if (is_null($previousPolicyNumber) || (is_array($previousPolicyNumber) && empty($previousPolicyNumber))) {
            unset($this->PreviousPolicyNumber);
        } else {
            $this->PreviousPolicyNumber = $previousPolicyNumber;
        }
        return $this;
    }
    /**
     * Get PromotionId value
     * @return int|null
     */
    public function getPromotionId()
    {
        return $this->PromotionId;
    }
    /**
     * Set PromotionId value
     * @param int $promotionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setPromotionId($promotionId = null)
    {
        // validation for constraint: int
        if (!is_null($promotionId) && !is_numeric($promotionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($promotionId)), __LINE__);
        }
        $this->PromotionId = $promotionId;
        return $this;
    }
    /**
     * Get PromotionProduct value
     * @return int|null
     */
    public function getPromotionProduct()
    {
        return $this->PromotionProduct;
    }
    /**
     * Set PromotionProduct value
     * @param int $promotionProduct
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setPromotionProduct($promotionProduct = null)
    {
        // validation for constraint: int
        if (!is_null($promotionProduct) && !is_numeric($promotionProduct)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($promotionProduct)), __LINE__);
        }
        $this->PromotionProduct = $promotionProduct;
        return $this;
    }
    /**
     * Get SurfaceArea value
     * @return float|null
     */
    public function getSurfaceArea()
    {
        return $this->SurfaceArea;
    }
    /**
     * Set SurfaceArea value
     * @param float $surfaceArea
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setSurfaceArea($surfaceArea = null)
    {
        $this->SurfaceArea = $surfaceArea;
        return $this;
    }
    /**
     * Get VoyageInsuredAge value
     * @return string|null
     */
    public function getVoyageInsuredAge()
    {
        return $this->VoyageInsuredAge;
    }
    /**
     * Set VoyageInsuredAge value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredAge::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuredAge::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $voyageInsuredAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
     */
    public function setVoyageInsuredAge($voyageInsuredAge = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuredAge::valueIsValid($voyageInsuredAge)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $voyageInsuredAge, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuredAge::getValidValues())), __LINE__);
        }
        $this->VoyageInsuredAge = $voyageInsuredAge;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ValidationData
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
