<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Contract StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Contract
 * @subpackage Structs
 */
class Contract extends AbstractStructBase
{
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
     * The commisionFor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $commisionFor;
    /**
     * The commisionPercent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $commisionPercent;
    /**
     * The contractInformationWrapper
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper
     */
    public $contractInformationWrapper;
    /**
     * The contractPartners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner
     */
    public $contractPartners;
    /**
     * The contractSender
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContractSender
     */
    public $contractSender;
    /**
     * The contractSource
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContractSource
     */
    public $contractSource;
    /**
     * The endorsements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEndorsement
     */
    public $endorsements;
    /**
     * The insuredObjects
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject
     */
    public $insuredObjects;
    /**
     * The issuedBy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $issuedBy;
    /**
     * The issuer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Issuer
     */
    public $issuer;
    /**
     * The iussedFor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $iussedFor;
    /**
     * The messages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage
     */
    public $messages;
    /**
     * The numbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUniqueNumber
     */
    public $numbers;
    /**
     * The policyInstalmetnsInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo
     */
    public $policyInstalmetnsInfo;
    /**
     * The policyPremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $policyPremium;
    /**
     * The previousNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber
     */
    public $previousNumber;
    /**
     * The printStatus
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PrintStatus
     */
    public $printStatus;
    /**
     * The status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ContractStatus
     */
    public $status;
    /**
     * The version
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $version;
    /**
     * The AdditionalCompanyDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails
     */
    public $AdditionalCompanyDetails;
    /**
     * The CompanyDetails
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails
     */
    public $CompanyDetails;
    /**
     * The InsuredObjects
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject
     */
    public $InsuredObjects;
    /**
     * The UniqueNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UniqueNumber;
    /**
     * Constructor method for Contract
     * @uses Contract::setBookings()
     * @uses Contract::setClaims()
     * @uses Contract::setCommisionFor()
     * @uses Contract::setCommisionPercent()
     * @uses Contract::setContractInformationWrapper()
     * @uses Contract::setContractPartners()
     * @uses Contract::setContractSender()
     * @uses Contract::setContractSource()
     * @uses Contract::setEndorsements()
     * @uses Contract::setInsuredObjects()
     * @uses Contract::setIssuedBy()
     * @uses Contract::setIssuer()
     * @uses Contract::setIussedFor()
     * @uses Contract::setMessages()
     * @uses Contract::setNumbers()
     * @uses Contract::setPolicyInstalmetnsInfo()
     * @uses Contract::setPolicyPremium()
     * @uses Contract::setPreviousNumber()
     * @uses Contract::setPrintStatus()
     * @uses Contract::setStatus()
     * @uses Contract::setVersion()
     * @uses Contract::setAdditionalCompanyDetails()
     * @uses Contract::setCompanyDetails()
     * @uses Contract::setInsuredObjects_1()
     * @uses Contract::setUniqueNumber()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking $bookings
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims
     * @param string $commisionFor
     * @param float $commisionPercent
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper $contractInformationWrapper
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $contractPartners
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractSender $contractSender
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractSource $contractSource
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEndorsement $endorsements
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects
     * @param string $issuedBy
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Issuer $issuer
     * @param string $iussedFor
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $messages
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUniqueNumber $numbers
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $policyInstalmetnsInfo
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $policyPremium
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber $previousNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PrintStatus $printStatus
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractStatus $status
     * @param string $version
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails $additionalCompanyDetails
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails $companyDetails
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects
     * @param string $uniqueNumber
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBooking $bookings = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims = null, $commisionFor = null, $commisionPercent = null, \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper $contractInformationWrapper = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $contractPartners = null, \Mu4ddi3\Compensa\Webservice\StructType\ContractSender $contractSender = null, \Mu4ddi3\Compensa\Webservice\StructType\ContractSource $contractSource = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEndorsement $endorsements = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects = null, $issuedBy = null, \Mu4ddi3\Compensa\Webservice\StructType\Issuer $issuer = null, $iussedFor = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $messages = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUniqueNumber $numbers = null, \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $policyInstalmetnsInfo = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $policyPremium = null, \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber $previousNumber = null, \Mu4ddi3\Compensa\Webservice\StructType\PrintStatus $printStatus = null, \Mu4ddi3\Compensa\Webservice\StructType\ContractStatus $status = null, $version = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails $additionalCompanyDetails = null, \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails $companyDetails = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects_1 = null, $uniqueNumber = null)
    {
        $this
            ->setBookings($bookings)
            ->setClaims($claims)
            ->setCommisionFor($commisionFor)
            ->setCommisionPercent($commisionPercent)
            ->setContractInformationWrapper($contractInformationWrapper)
            ->setContractPartners($contractPartners)
            ->setContractSender($contractSender)
            ->setContractSource($contractSource)
            ->setEndorsements($endorsements)
            ->setInsuredObjects($insuredObjects)
            ->setIssuedBy($issuedBy)
            ->setIssuer($issuer)
            ->setIussedFor($iussedFor)
            ->setMessages($messages)
            ->setNumbers($numbers)
            ->setPolicyInstalmetnsInfo($policyInstalmetnsInfo)
            ->setPolicyPremium($policyPremium)
            ->setPreviousNumber($previousNumber)
            ->setPrintStatus($printStatus)
            ->setStatus($status)
            ->setVersion($version)
            ->setAdditionalCompanyDetails($additionalCompanyDetails)
            ->setCompanyDetails($companyDetails)
            ->setInsuredObjects_1($insuredObjects_1)
            ->setUniqueNumber($uniqueNumber);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
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
     * Get claims value
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
     * Set claims value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaim $claims
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
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
     * Get commisionFor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommisionFor()
    {
        return isset($this->commisionFor) ? $this->commisionFor : null;
    }
    /**
     * Set commisionFor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $commisionFor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setCommisionFor($commisionFor = null)
    {
        // validation for constraint: string
        if (!is_null($commisionFor) && !is_string($commisionFor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commisionFor)), __LINE__);
        }
        if (is_null($commisionFor) || (is_array($commisionFor) && empty($commisionFor))) {
            unset($this->commisionFor);
        } else {
            $this->commisionFor = $commisionFor;
        }
        return $this;
    }
    /**
     * Get commisionPercent value
     * @return float|null
     */
    public function getCommisionPercent()
    {
        return $this->commisionPercent;
    }
    /**
     * Set commisionPercent value
     * @param float $commisionPercent
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setCommisionPercent($commisionPercent = null)
    {
        $this->commisionPercent = $commisionPercent;
        return $this;
    }
    /**
     * Get contractInformationWrapper value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper|null
     */
    public function getContractInformationWrapper()
    {
        return isset($this->contractInformationWrapper) ? $this->contractInformationWrapper : null;
    }
    /**
     * Set contractInformationWrapper value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper $contractInformationWrapper
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setContractInformationWrapper(\Mu4ddi3\Compensa\Webservice\StructType\ContractInformationWrapper $contractInformationWrapper = null)
    {
        if (is_null($contractInformationWrapper) || (is_array($contractInformationWrapper) && empty($contractInformationWrapper))) {
            unset($this->contractInformationWrapper);
        } else {
            $this->contractInformationWrapper = $contractInformationWrapper;
        }
        return $this;
    }
    /**
     * Get contractPartners value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner|null
     */
    public function getContractPartners()
    {
        return isset($this->contractPartners) ? $this->contractPartners : null;
    }
    /**
     * Set contractPartners value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $contractPartners
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setContractPartners(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPartner $contractPartners = null)
    {
        if (is_null($contractPartners) || (is_array($contractPartners) && empty($contractPartners))) {
            unset($this->contractPartners);
        } else {
            $this->contractPartners = $contractPartners;
        }
        return $this;
    }
    /**
     * Get contractSender value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractSender|null
     */
    public function getContractSender()
    {
        return isset($this->contractSender) ? $this->contractSender : null;
    }
    /**
     * Set contractSender value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractSender $contractSender
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setContractSender(\Mu4ddi3\Compensa\Webservice\StructType\ContractSender $contractSender = null)
    {
        if (is_null($contractSender) || (is_array($contractSender) && empty($contractSender))) {
            unset($this->contractSender);
        } else {
            $this->contractSender = $contractSender;
        }
        return $this;
    }
    /**
     * Get contractSource value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractSource|null
     */
    public function getContractSource()
    {
        return isset($this->contractSource) ? $this->contractSource : null;
    }
    /**
     * Set contractSource value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractSource $contractSource
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setContractSource(\Mu4ddi3\Compensa\Webservice\StructType\ContractSource $contractSource = null)
    {
        if (is_null($contractSource) || (is_array($contractSource) && empty($contractSource))) {
            unset($this->contractSource);
        } else {
            $this->contractSource = $contractSource;
        }
        return $this;
    }
    /**
     * Get endorsements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEndorsement|null
     */
    public function getEndorsements()
    {
        return isset($this->endorsements) ? $this->endorsements : null;
    }
    /**
     * Set endorsements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEndorsement $endorsements
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setEndorsements(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfEndorsement $endorsements = null)
    {
        if (is_null($endorsements) || (is_array($endorsements) && empty($endorsements))) {
            unset($this->endorsements);
        } else {
            $this->endorsements = $endorsements;
        }
        return $this;
    }
    /**
     * Get InsuredObjects value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject|null
     */
    public function getInsuredObjects()
    {
        return isset($this->insuredObjects) ? $this->insuredObjects : null;
    }
    /**
     * Set InsuredObjects value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setInsuredObjects(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects = null)
    {
        if (is_null($insuredObjects) || (is_array($insuredObjects) && empty($insuredObjects))) {
            unset($this->insuredObjects);
        } else {
            $this->insuredObjects = $insuredObjects;
        }
        return $this;
    }
    /**
     * Get issuedBy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIssuedBy()
    {
        return isset($this->issuedBy) ? $this->issuedBy : null;
    }
    /**
     * Set issuedBy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $issuedBy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setIssuedBy($issuedBy = null)
    {
        // validation for constraint: string
        if (!is_null($issuedBy) && !is_string($issuedBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($issuedBy)), __LINE__);
        }
        if (is_null($issuedBy) || (is_array($issuedBy) && empty($issuedBy))) {
            unset($this->issuedBy);
        } else {
            $this->issuedBy = $issuedBy;
        }
        return $this;
    }
    /**
     * Get issuer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Issuer|null
     */
    public function getIssuer()
    {
        return isset($this->issuer) ? $this->issuer : null;
    }
    /**
     * Set issuer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Issuer $issuer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setIssuer(\Mu4ddi3\Compensa\Webservice\StructType\Issuer $issuer = null)
    {
        if (is_null($issuer) || (is_array($issuer) && empty($issuer))) {
            unset($this->issuer);
        } else {
            $this->issuer = $issuer;
        }
        return $this;
    }
    /**
     * Get iussedFor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getIussedFor()
    {
        return isset($this->iussedFor) ? $this->iussedFor : null;
    }
    /**
     * Set iussedFor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $iussedFor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setIussedFor($iussedFor = null)
    {
        // validation for constraint: string
        if (!is_null($iussedFor) && !is_string($iussedFor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($iussedFor)), __LINE__);
        }
        if (is_null($iussedFor) || (is_array($iussedFor) && empty($iussedFor))) {
            unset($this->iussedFor);
        } else {
            $this->iussedFor = $iussedFor;
        }
        return $this;
    }
    /**
     * Get messages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage|null
     */
    public function getMessages()
    {
        return isset($this->messages) ? $this->messages : null;
    }
    /**
     * Set messages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $messages
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setMessages(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $messages = null)
    {
        if (is_null($messages) || (is_array($messages) && empty($messages))) {
            unset($this->messages);
        } else {
            $this->messages = $messages;
        }
        return $this;
    }
    /**
     * Get numbers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUniqueNumber|null
     */
    public function getNumbers()
    {
        return isset($this->numbers) ? $this->numbers : null;
    }
    /**
     * Set numbers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUniqueNumber $numbers
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setNumbers(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfUniqueNumber $numbers = null)
    {
        if (is_null($numbers) || (is_array($numbers) && empty($numbers))) {
            unset($this->numbers);
        } else {
            $this->numbers = $numbers;
        }
        return $this;
    }
    /**
     * Get policyInstalmetnsInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo|null
     */
    public function getPolicyInstalmetnsInfo()
    {
        return isset($this->policyInstalmetnsInfo) ? $this->policyInstalmetnsInfo : null;
    }
    /**
     * Set policyInstalmetnsInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $policyInstalmetnsInfo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setPolicyInstalmetnsInfo(\Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $policyInstalmetnsInfo = null)
    {
        if (is_null($policyInstalmetnsInfo) || (is_array($policyInstalmetnsInfo) && empty($policyInstalmetnsInfo))) {
            unset($this->policyInstalmetnsInfo);
        } else {
            $this->policyInstalmetnsInfo = $policyInstalmetnsInfo;
        }
        return $this;
    }
    /**
     * Get policyPremium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPolicyPremium()
    {
        return isset($this->policyPremium) ? $this->policyPremium : null;
    }
    /**
     * Set policyPremium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $policyPremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setPolicyPremium(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $policyPremium = null)
    {
        if (is_null($policyPremium) || (is_array($policyPremium) && empty($policyPremium))) {
            unset($this->policyPremium);
        } else {
            $this->policyPremium = $policyPremium;
        }
        return $this;
    }
    /**
     * Get previousNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber|null
     */
    public function getPreviousNumber()
    {
        return isset($this->previousNumber) ? $this->previousNumber : null;
    }
    /**
     * Set previousNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber $previousNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setPreviousNumber(\Mu4ddi3\Compensa\Webservice\StructType\ContractUniqueNumber $previousNumber = null)
    {
        if (is_null($previousNumber) || (is_array($previousNumber) && empty($previousNumber))) {
            unset($this->previousNumber);
        } else {
            $this->previousNumber = $previousNumber;
        }
        return $this;
    }
    /**
     * Get printStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PrintStatus|null
     */
    public function getPrintStatus()
    {
        return isset($this->printStatus) ? $this->printStatus : null;
    }
    /**
     * Set printStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PrintStatus $printStatus
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setPrintStatus(\Mu4ddi3\Compensa\Webservice\StructType\PrintStatus $printStatus = null)
    {
        if (is_null($printStatus) || (is_array($printStatus) && empty($printStatus))) {
            unset($this->printStatus);
        } else {
            $this->printStatus = $printStatus;
        }
        return $this;
    }
    /**
     * Get status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ContractStatus|null
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : null;
    }
    /**
     * Set status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ContractStatus $status
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setStatus(\Mu4ddi3\Compensa\Webservice\StructType\ContractStatus $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->status);
        } else {
            $this->status = $status;
        }
        return $this;
    }
    /**
     * Get version value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVersion()
    {
        return isset($this->version) ? $this->version : null;
    }
    /**
     * Set version value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $version
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setVersion($version = null)
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($version)), __LINE__);
        }
        if (is_null($version) || (is_array($version) && empty($version))) {
            unset($this->version);
        } else {
            $this->version = $version;
        }
        return $this;
    }
    /**
     * Get AdditionalCompanyDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails|null
     */
    public function getAdditionalCompanyDetails()
    {
        return isset($this->AdditionalCompanyDetails) ? $this->AdditionalCompanyDetails : null;
    }
    /**
     * Set AdditionalCompanyDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails $additionalCompanyDetails
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setAdditionalCompanyDetails(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails $additionalCompanyDetails = null)
    {
        if (is_null($additionalCompanyDetails) || (is_array($additionalCompanyDetails) && empty($additionalCompanyDetails))) {
            unset($this->AdditionalCompanyDetails);
        } else {
            $this->AdditionalCompanyDetails = $additionalCompanyDetails;
        }
        return $this;
    }
    /**
     * Get CompanyDetails value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails|null
     */
    public function getCompanyDetails()
    {
        return isset($this->CompanyDetails) ? $this->CompanyDetails : null;
    }
    /**
     * Set CompanyDetails value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails $companyDetails
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setCompanyDetails(\Mu4ddi3\Compensa\Webservice\StructType\InsuranceCompanyDetails $companyDetails = null)
    {
        if (is_null($companyDetails) || (is_array($companyDetails) && empty($companyDetails))) {
            unset($this->CompanyDetails);
        } else {
            $this->CompanyDetails = $companyDetails;
        }
        return $this;
    }
    /**
     * Get InsuredObjects value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject|null
     */
    public function getInsuredObjects_1()
    {
        return isset($this->InsuredObjects) ? $this->InsuredObjects : null;
    }
    /**
     * Set InsuredObjects value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setInsuredObjects_1(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects_1 = null)
    {
        if (is_null($insuredObjects_1) || (is_array($insuredObjects_1) && empty($insuredObjects_1))) {
            unset($this->InsuredObjects);
        } else {
            $this->InsuredObjects = $insuredObjects_1;
        }
        return $this;
    }
    /**
     * Get UniqueNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUniqueNumber()
    {
        return isset($this->UniqueNumber) ? $this->UniqueNumber : null;
    }
    /**
     * Set UniqueNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $uniqueNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
     */
    public function setUniqueNumber($uniqueNumber = null)
    {
        // validation for constraint: string
        if (!is_null($uniqueNumber) && !is_string($uniqueNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($uniqueNumber)), __LINE__);
        }
        if (is_null($uniqueNumber) || (is_array($uniqueNumber) && empty($uniqueNumber))) {
            unset($this->UniqueNumber);
        } else {
            $this->UniqueNumber = $uniqueNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Contract
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
