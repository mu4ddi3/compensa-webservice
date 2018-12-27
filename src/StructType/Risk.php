<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Risk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Risk
 * @subpackage Structs
 */
class Risk extends AbstractStructBase
{
    /**
     * The basicRate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $basicRate;
    /**
     * The bookings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking
     */
    public $bookings;
    /**
     * The claims
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim
     */
    public $claims;
    /**
     * The discounts
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount
     */
    public $discounts;
    /**
     * The displayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $displayName;
    /**
     * The instalmentInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo
     */
    public $instalmentInfo;
    /**
     * The insuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $insuranceSum;
    /**
     * The paymentMethod
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod
     */
    public $paymentMethod;
    /**
     * The premium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $premium;
    /**
     * The premiumBase
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $premiumBase;
    /**
     * The premiumBasic
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $premiumBasic;
    /**
     * The premiumMinimal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $premiumMinimal;
    /**
     * The subRisks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk
     */
    public $subRisks;
    /**
     * The totalInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $totalInsuranceSum;
    /**
     * The totalPremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $totalPremium;
    /**
     * The HasManyVariants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $HasManyVariants;
    /**
     * The InsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $InsuranceSum;
    /**
     * The IsChangePossible
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsChangePossible;
    /**
     * The IsInsuranceSumOnBasePolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsInsuranceSumOnBasePolicy;
    /**
     * The IsInsuranceSumOnOffer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $IsInsuranceSumOnOffer;
    /**
     * The KAGroupingType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $KAGroupingType;
    /**
     * The KAName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $KAName;
    /**
     * The KANameSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $KANameSource;
    /**
     * The KAOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $KAOnly;
    /**
     * The KAVariantGroupId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $KAVariantGroupId;
    /**
     * The MZPOnly
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MZPOnly;
    /**
     * The MaximalInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MaximalInsuranceSum;
    /**
     * The MinimalInsuranceSum
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $MinimalInsuranceSum;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DisplayName;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Id;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Product;
    /**
     * The Variant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant
     */
    public $Variant;
    /**
     * The CessionDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CessionDate;
    /**
     * The Claims
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim
     */
    public $Claims;
    /**
     * The From
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $From;
    /**
     * The Partners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner
     */
    public $Partners;
    /**
     * The StandardizedCessionReason
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CessionReasonType
     */
    public $StandardizedCessionReason;
    /**
     * The To
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $To;
    /**
     * Constructor method for Risk
     * @uses Risk::setBasicRate()
     * @uses Risk::setBookings()
     * @uses Risk::setClaims()
     * @uses Risk::setDiscounts()
     * @uses Risk::setDisplayName()
     * @uses Risk::setInstalmentInfo()
     * @uses Risk::setInsuranceSum()
     * @uses Risk::setPaymentMethod()
     * @uses Risk::setPremium()
     * @uses Risk::setPremiumBase()
     * @uses Risk::setPremiumBasic()
     * @uses Risk::setPremiumMinimal()
     * @uses Risk::setSubRisks()
     * @uses Risk::setTotalInsuranceSum()
     * @uses Risk::setTotalPremium()
     * @uses Risk::setHasManyVariants()
     * @uses Risk::setInsuranceSum_1()
     * @uses Risk::setIsChangePossible()
     * @uses Risk::setIsInsuranceSumOnBasePolicy()
     * @uses Risk::setIsInsuranceSumOnOffer()
     * @uses Risk::setKAGroupingType()
     * @uses Risk::setKAName()
     * @uses Risk::setKANameSource()
     * @uses Risk::setKAOnly()
     * @uses Risk::setKAVariantGroupId()
     * @uses Risk::setMZPOnly()
     * @uses Risk::setMaximalInsuranceSum()
     * @uses Risk::setMinimalInsuranceSum()
     * @uses Risk::setDisplayName_1()
     * @uses Risk::setId()
     * @uses Risk::setProduct()
     * @uses Risk::setVariant()
     * @uses Risk::setCessionDate()
     * @uses Risk::setClaims_1()
     * @uses Risk::setFrom()
     * @uses Risk::setPartners()
     * @uses Risk::setStandardizedCessionReason()
     * @uses Risk::setTo()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $basicRate
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking $bookings
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount $discounts
     * @param string $displayName
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $instalmentInfo
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod $paymentMethod
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBase
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBasic
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumMinimal
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $subRisks
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $totalInsuranceSum
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $totalPremium
     * @param bool $hasManyVariants
     * @param int $insuranceSum
     * @param bool $isChangePossible
     * @param bool $isInsuranceSumOnBasePolicy
     * @param bool $isInsuranceSumOnOffer
     * @param int $kAGroupingType
     * @param string $kAName
     * @param int $kANameSource
     * @param bool $kAOnly
     * @param int $kAVariantGroupId
     * @param bool $mZPOnly
     * @param int $maximalInsuranceSum
     * @param int $minimalInsuranceSum
     * @param string $displayName
     * @param int $id
     * @param int $product
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant $variant
     * @param string $cessionDate
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims
     * @param string $from
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $partners
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CessionReasonType $standardizedCessionReason
     * @param string $to
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $basicRate = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking $bookings = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount $discounts = null, $displayName = null, \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $instalmentInfo = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null, \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod $paymentMethod = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBase = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBasic = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumMinimal = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $subRisks = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $totalInsuranceSum = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $totalPremium = null, $hasManyVariants = null, $insuranceSum_1 = null, $isChangePossible = null, $isInsuranceSumOnBasePolicy = null, $isInsuranceSumOnOffer = null, $kAGroupingType = null, $kAName = null, $kANameSource = null, $kAOnly = null, $kAVariantGroupId = null, $mZPOnly = null, $maximalInsuranceSum = null, $minimalInsuranceSum = null, $displayName_1 = null, $id = null, $product = null, \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant $variant = null, $cessionDate = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims_1 = null, $from = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $partners = null, \Mu4ddi3\Compensa\Webservice\StructType\CessionReasonType $standardizedCessionReason = null, $to = null)
    {
        $this
            ->setBasicRate($basicRate)
            ->setBookings($bookings)
            ->setClaims($claims)
            ->setDiscounts($discounts)
            ->setDisplayName($displayName)
            ->setInstalmentInfo($instalmentInfo)
            ->setInsuranceSum($insuranceSum)
            ->setPaymentMethod($paymentMethod)
            ->setPremium($premium)
            ->setPremiumBase($premiumBase)
            ->setPremiumBasic($premiumBasic)
            ->setPremiumMinimal($premiumMinimal)
            ->setSubRisks($subRisks)
            ->setTotalInsuranceSum($totalInsuranceSum)
            ->setTotalPremium($totalPremium)
            ->setHasManyVariants($hasManyVariants)
            ->setInsuranceSum_1($insuranceSum_1)
            ->setIsChangePossible($isChangePossible)
            ->setIsInsuranceSumOnBasePolicy($isInsuranceSumOnBasePolicy)
            ->setIsInsuranceSumOnOffer($isInsuranceSumOnOffer)
            ->setKAGroupingType($kAGroupingType)
            ->setKAName($kAName)
            ->setKANameSource($kANameSource)
            ->setKAOnly($kAOnly)
            ->setKAVariantGroupId($kAVariantGroupId)
            ->setMZPOnly($mZPOnly)
            ->setMaximalInsuranceSum($maximalInsuranceSum)
            ->setMinimalInsuranceSum($minimalInsuranceSum)
            ->setDisplayName_1($displayName_1)
            ->setId($id)
            ->setProduct($product)
            ->setVariant($variant)
            ->setCessionDate($cessionDate)
            ->setClaims_1($claims_1)
            ->setFrom($from)
            ->setPartners($partners)
            ->setStandardizedCessionReason($standardizedCessionReason)
            ->setTo($to);
    }
    /**
     * Get basicRate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBasicRate()
    {
        return isset($this->basicRate) ? $this->basicRate : null;
    }
    /**
     * Set basicRate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $basicRate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setBasicRate(\Mu4ddi3\Compensa\Webservice\StructType\Factor $basicRate = null)
    {
        if (is_null($basicRate) || (is_array($basicRate) && empty($basicRate))) {
            unset($this->basicRate);
        } else {
            $this->basicRate = $basicRate;
        }
        return $this;
    }
    /**
     * Get bookings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking|null
     */
    public function getBookings()
    {
        return isset($this->bookings) ? $this->bookings : null;
    }
    /**
     * Set bookings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking $bookings
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setBookings(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking $bookings = null)
    {
        if (is_null($bookings) || (is_array($bookings) && empty($bookings))) {
            unset($this->bookings);
        } else {
            $this->bookings = $bookings;
        }
        return $this;
    }
    /**
     * Get Claims value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim|null
     */
    public function getClaims()
    {
        return isset($this->claims) ? $this->claims : null;
    }
    /**
     * Set Claims value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setClaims(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims = null)
    {
        if (is_null($claims) || (is_array($claims) && empty($claims))) {
            unset($this->claims);
        } else {
            $this->claims = $claims;
        }
        return $this;
    }
    /**
     * Get discounts value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount|null
     */
    public function getDiscounts()
    {
        return isset($this->discounts) ? $this->discounts : null;
    }
    /**
     * Set discounts value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount $discounts
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setDiscounts(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscount $discounts = null)
    {
        if (is_null($discounts) || (is_array($discounts) && empty($discounts))) {
            unset($this->discounts);
        } else {
            $this->discounts = $discounts;
        }
        return $this;
    }
    /**
     * Get DisplayName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDisplayName()
    {
        return isset($this->displayName) ? $this->displayName : null;
    }
    /**
     * Set DisplayName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $displayName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        if (is_null($displayName) || (is_array($displayName) && empty($displayName))) {
            unset($this->displayName);
        } else {
            $this->displayName = $displayName;
        }
        return $this;
    }
    /**
     * Get instalmentInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo|null
     */
    public function getInstalmentInfo()
    {
        return isset($this->instalmentInfo) ? $this->instalmentInfo : null;
    }
    /**
     * Set instalmentInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $instalmentInfo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setInstalmentInfo(\Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $instalmentInfo = null)
    {
        if (is_null($instalmentInfo) || (is_array($instalmentInfo) && empty($instalmentInfo))) {
            unset($this->instalmentInfo);
        } else {
            $this->instalmentInfo = $instalmentInfo;
        }
        return $this;
    }
    /**
     * Get InsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getInsuranceSum()
    {
        return isset($this->insuranceSum) ? $this->insuranceSum : null;
    }
    /**
     * Set InsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $insuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $insuranceSum = null)
    {
        if (is_null($insuranceSum) || (is_array($insuranceSum) && empty($insuranceSum))) {
            unset($this->insuranceSum);
        } else {
            $this->insuranceSum = $insuranceSum;
        }
        return $this;
    }
    /**
     * Get paymentMethod value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod|null
     */
    public function getPaymentMethod()
    {
        return isset($this->paymentMethod) ? $this->paymentMethod : null;
    }
    /**
     * Set paymentMethod value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod $paymentMethod
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setPaymentMethod(\Mu4ddi3\Compensa\Webservice\StructType\PaymentMethod $paymentMethod = null)
    {
        if (is_null($paymentMethod) || (is_array($paymentMethod) && empty($paymentMethod))) {
            unset($this->paymentMethod);
        } else {
            $this->paymentMethod = $paymentMethod;
        }
        return $this;
    }
    /**
     * Get premium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremium()
    {
        return isset($this->premium) ? $this->premium : null;
    }
    /**
     * Set premium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setPremium(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null)
    {
        if (is_null($premium) || (is_array($premium) && empty($premium))) {
            unset($this->premium);
        } else {
            $this->premium = $premium;
        }
        return $this;
    }
    /**
     * Get premiumBase value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremiumBase()
    {
        return isset($this->premiumBase) ? $this->premiumBase : null;
    }
    /**
     * Set premiumBase value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBase
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setPremiumBase(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBase = null)
    {
        if (is_null($premiumBase) || (is_array($premiumBase) && empty($premiumBase))) {
            unset($this->premiumBase);
        } else {
            $this->premiumBase = $premiumBase;
        }
        return $this;
    }
    /**
     * Get premiumBasic value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremiumBasic()
    {
        return isset($this->premiumBasic) ? $this->premiumBasic : null;
    }
    /**
     * Set premiumBasic value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBasic
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setPremiumBasic(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumBasic = null)
    {
        if (is_null($premiumBasic) || (is_array($premiumBasic) && empty($premiumBasic))) {
            unset($this->premiumBasic);
        } else {
            $this->premiumBasic = $premiumBasic;
        }
        return $this;
    }
    /**
     * Get premiumMinimal value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremiumMinimal()
    {
        return isset($this->premiumMinimal) ? $this->premiumMinimal : null;
    }
    /**
     * Set premiumMinimal value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumMinimal
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setPremiumMinimal(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premiumMinimal = null)
    {
        if (is_null($premiumMinimal) || (is_array($premiumMinimal) && empty($premiumMinimal))) {
            unset($this->premiumMinimal);
        } else {
            $this->premiumMinimal = $premiumMinimal;
        }
        return $this;
    }
    /**
     * Get subRisks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk|null
     */
    public function getSubRisks()
    {
        return isset($this->subRisks) ? $this->subRisks : null;
    }
    /**
     * Set subRisks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $subRisks
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setSubRisks(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $subRisks = null)
    {
        if (is_null($subRisks) || (is_array($subRisks) && empty($subRisks))) {
            unset($this->subRisks);
        } else {
            $this->subRisks = $subRisks;
        }
        return $this;
    }
    /**
     * Get totalInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getTotalInsuranceSum()
    {
        return isset($this->totalInsuranceSum) ? $this->totalInsuranceSum : null;
    }
    /**
     * Set totalInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $totalInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setTotalInsuranceSum(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $totalInsuranceSum = null)
    {
        if (is_null($totalInsuranceSum) || (is_array($totalInsuranceSum) && empty($totalInsuranceSum))) {
            unset($this->totalInsuranceSum);
        } else {
            $this->totalInsuranceSum = $totalInsuranceSum;
        }
        return $this;
    }
    /**
     * Get totalPremium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getTotalPremium()
    {
        return isset($this->totalPremium) ? $this->totalPremium : null;
    }
    /**
     * Set totalPremium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $totalPremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setTotalPremium(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $totalPremium = null)
    {
        if (is_null($totalPremium) || (is_array($totalPremium) && empty($totalPremium))) {
            unset($this->totalPremium);
        } else {
            $this->totalPremium = $totalPremium;
        }
        return $this;
    }
    /**
     * Get HasManyVariants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getHasManyVariants()
    {
        return isset($this->HasManyVariants) ? $this->HasManyVariants : null;
    }
    /**
     * Set HasManyVariants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $hasManyVariants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setHasManyVariants($hasManyVariants = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasManyVariants) && !is_bool($hasManyVariants)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasManyVariants)), __LINE__);
        }
        if (is_null($hasManyVariants) || (is_array($hasManyVariants) && empty($hasManyVariants))) {
            unset($this->HasManyVariants);
        } else {
            $this->HasManyVariants = $hasManyVariants;
        }
        return $this;
    }
    /**
     * Get InsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getInsuranceSum_1()
    {
        return isset($this->InsuranceSum) ? $this->InsuranceSum : null;
    }
    /**
     * Set InsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $insuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setInsuranceSum_1($insuranceSum_1 = null)
    {
        // validation for constraint: int
        if (!is_null($insuranceSum_1) && !is_numeric($insuranceSum_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($insuranceSum_1)), __LINE__);
        }
        if (is_null($insuranceSum_1) || (is_array($insuranceSum_1) && empty($insuranceSum_1))) {
            unset($this->InsuranceSum);
        } else {
            $this->InsuranceSum = $insuranceSum_1;
        }
        return $this;
    }
    /**
     * Get IsChangePossible value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsChangePossible()
    {
        return isset($this->IsChangePossible) ? $this->IsChangePossible : null;
    }
    /**
     * Set IsChangePossible value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isChangePossible
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setIsChangePossible($isChangePossible = null)
    {
        // validation for constraint: boolean
        if (!is_null($isChangePossible) && !is_bool($isChangePossible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isChangePossible)), __LINE__);
        }
        if (is_null($isChangePossible) || (is_array($isChangePossible) && empty($isChangePossible))) {
            unset($this->IsChangePossible);
        } else {
            $this->IsChangePossible = $isChangePossible;
        }
        return $this;
    }
    /**
     * Get IsInsuranceSumOnBasePolicy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsInsuranceSumOnBasePolicy()
    {
        return isset($this->IsInsuranceSumOnBasePolicy) ? $this->IsInsuranceSumOnBasePolicy : null;
    }
    /**
     * Set IsInsuranceSumOnBasePolicy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isInsuranceSumOnBasePolicy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setIsInsuranceSumOnBasePolicy($isInsuranceSumOnBasePolicy = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInsuranceSumOnBasePolicy) && !is_bool($isInsuranceSumOnBasePolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInsuranceSumOnBasePolicy)), __LINE__);
        }
        if (is_null($isInsuranceSumOnBasePolicy) || (is_array($isInsuranceSumOnBasePolicy) && empty($isInsuranceSumOnBasePolicy))) {
            unset($this->IsInsuranceSumOnBasePolicy);
        } else {
            $this->IsInsuranceSumOnBasePolicy = $isInsuranceSumOnBasePolicy;
        }
        return $this;
    }
    /**
     * Get IsInsuranceSumOnOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getIsInsuranceSumOnOffer()
    {
        return isset($this->IsInsuranceSumOnOffer) ? $this->IsInsuranceSumOnOffer : null;
    }
    /**
     * Set IsInsuranceSumOnOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $isInsuranceSumOnOffer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setIsInsuranceSumOnOffer($isInsuranceSumOnOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInsuranceSumOnOffer) && !is_bool($isInsuranceSumOnOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInsuranceSumOnOffer)), __LINE__);
        }
        if (is_null($isInsuranceSumOnOffer) || (is_array($isInsuranceSumOnOffer) && empty($isInsuranceSumOnOffer))) {
            unset($this->IsInsuranceSumOnOffer);
        } else {
            $this->IsInsuranceSumOnOffer = $isInsuranceSumOnOffer;
        }
        return $this;
    }
    /**
     * Get KAGroupingType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getKAGroupingType()
    {
        return isset($this->KAGroupingType) ? $this->KAGroupingType : null;
    }
    /**
     * Set KAGroupingType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $kAGroupingType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setKAGroupingType($kAGroupingType = null)
    {
        // validation for constraint: int
        if (!is_null($kAGroupingType) && !is_numeric($kAGroupingType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($kAGroupingType)), __LINE__);
        }
        if (is_null($kAGroupingType) || (is_array($kAGroupingType) && empty($kAGroupingType))) {
            unset($this->KAGroupingType);
        } else {
            $this->KAGroupingType = $kAGroupingType;
        }
        return $this;
    }
    /**
     * Get KAName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getKAName()
    {
        return isset($this->KAName) ? $this->KAName : null;
    }
    /**
     * Set KAName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $kAName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setKAName($kAName = null)
    {
        // validation for constraint: string
        if (!is_null($kAName) && !is_string($kAName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($kAName)), __LINE__);
        }
        if (is_null($kAName) || (is_array($kAName) && empty($kAName))) {
            unset($this->KAName);
        } else {
            $this->KAName = $kAName;
        }
        return $this;
    }
    /**
     * Get KANameSource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getKANameSource()
    {
        return isset($this->KANameSource) ? $this->KANameSource : null;
    }
    /**
     * Set KANameSource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $kANameSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setKANameSource($kANameSource = null)
    {
        // validation for constraint: int
        if (!is_null($kANameSource) && !is_numeric($kANameSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($kANameSource)), __LINE__);
        }
        if (is_null($kANameSource) || (is_array($kANameSource) && empty($kANameSource))) {
            unset($this->KANameSource);
        } else {
            $this->KANameSource = $kANameSource;
        }
        return $this;
    }
    /**
     * Get KAOnly value
     * @return bool|null
     */
    public function getKAOnly()
    {
        return $this->KAOnly;
    }
    /**
     * Set KAOnly value
     * @param bool $kAOnly
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setKAOnly($kAOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($kAOnly) && !is_bool($kAOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($kAOnly)), __LINE__);
        }
        $this->KAOnly = $kAOnly;
        return $this;
    }
    /**
     * Get KAVariantGroupId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getKAVariantGroupId()
    {
        return isset($this->KAVariantGroupId) ? $this->KAVariantGroupId : null;
    }
    /**
     * Set KAVariantGroupId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $kAVariantGroupId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setKAVariantGroupId($kAVariantGroupId = null)
    {
        // validation for constraint: int
        if (!is_null($kAVariantGroupId) && !is_numeric($kAVariantGroupId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($kAVariantGroupId)), __LINE__);
        }
        if (is_null($kAVariantGroupId) || (is_array($kAVariantGroupId) && empty($kAVariantGroupId))) {
            unset($this->KAVariantGroupId);
        } else {
            $this->KAVariantGroupId = $kAVariantGroupId;
        }
        return $this;
    }
    /**
     * Get MZPOnly value
     * @return bool|null
     */
    public function getMZPOnly()
    {
        return $this->MZPOnly;
    }
    /**
     * Set MZPOnly value
     * @param bool $mZPOnly
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setMZPOnly($mZPOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($mZPOnly) && !is_bool($mZPOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($mZPOnly)), __LINE__);
        }
        $this->MZPOnly = $mZPOnly;
        return $this;
    }
    /**
     * Get MaximalInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMaximalInsuranceSum()
    {
        return isset($this->MaximalInsuranceSum) ? $this->MaximalInsuranceSum : null;
    }
    /**
     * Set MaximalInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $maximalInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setMaximalInsuranceSum($maximalInsuranceSum = null)
    {
        // validation for constraint: int
        if (!is_null($maximalInsuranceSum) && !is_numeric($maximalInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maximalInsuranceSum)), __LINE__);
        }
        if (is_null($maximalInsuranceSum) || (is_array($maximalInsuranceSum) && empty($maximalInsuranceSum))) {
            unset($this->MaximalInsuranceSum);
        } else {
            $this->MaximalInsuranceSum = $maximalInsuranceSum;
        }
        return $this;
    }
    /**
     * Get MinimalInsuranceSum value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getMinimalInsuranceSum()
    {
        return isset($this->MinimalInsuranceSum) ? $this->MinimalInsuranceSum : null;
    }
    /**
     * Set MinimalInsuranceSum value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $minimalInsuranceSum
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setMinimalInsuranceSum($minimalInsuranceSum = null)
    {
        // validation for constraint: int
        if (!is_null($minimalInsuranceSum) && !is_numeric($minimalInsuranceSum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($minimalInsuranceSum)), __LINE__);
        }
        if (is_null($minimalInsuranceSum) || (is_array($minimalInsuranceSum) && empty($minimalInsuranceSum))) {
            unset($this->MinimalInsuranceSum);
        } else {
            $this->MinimalInsuranceSum = $minimalInsuranceSum;
        }
        return $this;
    }
    /**
     * Get DisplayName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDisplayName_1()
    {
        return isset($this->DisplayName) ? $this->DisplayName : null;
    }
    /**
     * Set DisplayName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $displayName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setDisplayName_1($displayName_1 = null)
    {
        // validation for constraint: string
        if (!is_null($displayName_1) && !is_string($displayName_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName_1)), __LINE__);
        }
        if (is_null($displayName_1) || (is_array($displayName_1) && empty($displayName_1))) {
            unset($this->DisplayName);
        } else {
            $this->DisplayName = $displayName_1;
        }
        return $this;
    }
    /**
     * Get Id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }
    /**
     * Set Id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $id
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->Id);
        } else {
            $this->Id = $id;
        }
        return $this;
    }
    /**
     * Get Product value
     * @return int|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param int $product
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setProduct($product = null)
    {
        // validation for constraint: int
        if (!is_null($product) && !is_numeric($product)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($product)), __LINE__);
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Get Variant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant|null
     */
    public function getVariant()
    {
        return isset($this->Variant) ? $this->Variant : null;
    }
    /**
     * Set Variant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskVariant $variant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setVariant(\Mu4ddi3\Compensa\Webservice\StructType\RiskVariant $variant = null)
    {
        if (is_null($variant) || (is_array($variant) && empty($variant))) {
            unset($this->Variant);
        } else {
            $this->Variant = $variant;
        }
        return $this;
    }
    /**
     * Get CessionDate value
     * @return string|null
     */
    public function getCessionDate()
    {
        return $this->CessionDate;
    }
    /**
     * Set CessionDate value
     * @param string $cessionDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setCessionDate($cessionDate = null)
    {
        // validation for constraint: string
        if (!is_null($cessionDate) && !is_string($cessionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($cessionDate)), __LINE__);
        }
        $this->CessionDate = $cessionDate;
        return $this;
    }
    /**
     * Get Claims value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim|null
     */
    public function getClaims_1()
    {
        return isset($this->Claims) ? $this->Claims : null;
    }
    /**
     * Set Claims value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setClaims_1(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims_1 = null)
    {
        if (is_null($claims_1) || (is_array($claims_1) && empty($claims_1))) {
            unset($this->Claims);
        } else {
            $this->Claims = $claims_1;
        }
        return $this;
    }
    /**
     * Get From value
     * @return string|null
     */
    public function getFrom()
    {
        return $this->From;
    }
    /**
     * Set From value
     * @param string $from
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setFrom($from = null)
    {
        // validation for constraint: string
        if (!is_null($from) && !is_string($from)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($from)), __LINE__);
        }
        $this->From = $from;
        return $this;
    }
    /**
     * Get Partners value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner|null
     */
    public function getPartners()
    {
        return isset($this->Partners) ? $this->Partners : null;
    }
    /**
     * Set Partners value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $partners
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setPartners(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $partners = null)
    {
        if (is_null($partners) || (is_array($partners) && empty($partners))) {
            unset($this->Partners);
        } else {
            $this->Partners = $partners;
        }
        return $this;
    }
    /**
     * Get StandardizedCessionReason value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CessionReasonType|null
     */
    public function getStandardizedCessionReason()
    {
        return isset($this->StandardizedCessionReason) ? $this->StandardizedCessionReason : null;
    }
    /**
     * Set StandardizedCessionReason value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CessionReasonType $standardizedCessionReason
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setStandardizedCessionReason(\Mu4ddi3\Compensa\Webservice\StructType\CessionReasonType $standardizedCessionReason = null)
    {
        if (is_null($standardizedCessionReason) || (is_array($standardizedCessionReason) && empty($standardizedCessionReason))) {
            unset($this->StandardizedCessionReason);
        } else {
            $this->StandardizedCessionReason = $standardizedCessionReason;
        }
        return $this;
    }
    /**
     * Get To value
     * @return string|null
     */
    public function getTo()
    {
        return $this->To;
    }
    /**
     * Set To value
     * @param string $to
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
     */
    public function setTo($to = null)
    {
        // validation for constraint: string
        if (!is_null($to) && !is_string($to)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($to)), __LINE__);
        }
        $this->To = $to;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Risk
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
