<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaContract StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaContract
 * @subpackage Structs
 */
class CompensaContract extends Contract
{
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Barcode;
    /**
     * The CompensaAuthorizationCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaAuthorizationCode
     */
    public $CompensaAuthorizationCodes;
    /**
     * The IAFMSummary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary
     */
    public $IAFMSummary;
    /**
     * The IsPaperlessPolicy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPaperlessPolicy;
    /**
     * The IssuerInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo
     */
    public $IssuerInfo;
    /**
     * The MZPSummary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public $MZPSummary;
    /**
     * The RelatedPolicyInfos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPolicyInfo
     */
    public $RelatedPolicyInfos;
    /**
     * Constructor method for CompensaContract
     * @uses CompensaContract::setBarcode()
     * @uses CompensaContract::setCompensaAuthorizationCodes()
     * @uses CompensaContract::setIAFMSummary()
     * @uses CompensaContract::setIsPaperlessPolicy()
     * @uses CompensaContract::setIssuerInfo()
     * @uses CompensaContract::setMZPSummary()
     * @uses CompensaContract::setRelatedPolicyInfos()
     * @param string $barcode
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaAuthorizationCode $compensaAuthorizationCodes
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary $iAFMSummary
     * @param bool $isPaperlessPolicy
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo $issuerInfo
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary $mZPSummary
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPolicyInfo $relatedPolicyInfos
     */
    public function __construct($barcode = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaAuthorizationCode $compensaAuthorizationCodes = null, \Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary $iAFMSummary = null, $isPaperlessPolicy = null, \Mu4ddi3\Compensa\Webservice\StructType\CompensaIssuerInfo $issuerInfo = null, \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary $mZPSummary = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPolicyInfo $relatedPolicyInfos = null)
    {
        $this
            ->setBarcode($barcode)
            ->setCompensaAuthorizationCodes($compensaAuthorizationCodes)
            ->setIAFMSummary($iAFMSummary)
            ->setIsPaperlessPolicy($isPaperlessPolicy)
            ->setIssuerInfo($issuerInfo)
            ->setMZPSummary($mZPSummary)
            ->setRelatedPolicyInfos($relatedPolicyInfos);
    }
    /**
     * Get Barcode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBarcode()
    {
        return isset($this->Barcode) ? $this->Barcode : null;
    }
    /**
     * Set Barcode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $barcode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaContract
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode)), __LINE__);
        }
        if (is_null($barcode) || (is_array($barcode) && empty($barcode))) {
            unset($this->Barcode);
        } else {
            $this->Barcode = $barcode;
        }
        return $this;
    }
    /**
     * Get CompensaAuthorizationCodes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaAuthorizationCode|null
     */
    public function getCompensaAuthorizationCodes()
    {
        return isset($this->CompensaAuthorizationCodes) ? $this->CompensaAuthorizationCodes : null;
    }
    /**
     * Set CompensaAuthorizationCodes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaAuthorizationCode $compensaAuthorizationCodes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaContract
     */
    public function setCompensaAuthorizationCodes(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaAuthorizationCode $compensaAuthorizationCodes = null)
    {
        if (is_null($compensaAuthorizationCodes) || (is_array($compensaAuthorizationCodes) && empty($compensaAuthorizationCodes))) {
            unset($this->CompensaAuthorizationCodes);
        } else {
            $this->CompensaAuthorizationCodes = $compensaAuthorizationCodes;
        }
        return $this;
    }
    /**
     * Get IAFMSummary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary|null
     */
    public function getIAFMSummary()
    {
        return isset($this->IAFMSummary) ? $this->IAFMSummary : null;
    }
    /**
     * Set IAFMSummary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary $iAFMSummary
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaContract
     */
    public function setIAFMSummary(\Mu4ddi3\Compensa\Webservice\StructType\IAFMSummary $iAFMSummary = null)
    {
        if (is_null($iAFMSummary) || (is_array($iAFMSummary) && empty($iAFMSummary))) {
            unset($this->IAFMSummary);
        } else {
            $this->IAFMSummary = $iAFMSummary;
        }
        return $this;
    }
    /**
     * Get IsPaperlessPolicy value
     * @return bool|null
     */
    public function getIsPaperlessPolicy()
    {
        return $this->IsPaperlessPolicy;
    }
    /**
     * Set IsPaperlessPolicy value
     * @param bool $isPaperlessPolicy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaContract
     */
    public function setIsPaperlessPolicy($isPaperlessPolicy = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPaperlessPolicy) && !is_bool($isPaperlessPolicy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPaperlessPolicy)), __LINE__);
        }
        $this->IsPaperlessPolicy = $isPaperlessPolicy;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaContract
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
     * Get MZPSummary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary|null
     */
    public function getMZPSummary()
    {
        return isset($this->MZPSummary) ? $this->MZPSummary : null;
    }
    /**
     * Set MZPSummary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary $mZPSummary
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaContract
     */
    public function setMZPSummary(\Mu4ddi3\Compensa\Webservice\StructType\MZPSummary $mZPSummary = null)
    {
        if (is_null($mZPSummary) || (is_array($mZPSummary) && empty($mZPSummary))) {
            unset($this->MZPSummary);
        } else {
            $this->MZPSummary = $mZPSummary;
        }
        return $this;
    }
    /**
     * Get RelatedPolicyInfos value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPolicyInfo|null
     */
    public function getRelatedPolicyInfos()
    {
        return isset($this->RelatedPolicyInfos) ? $this->RelatedPolicyInfos : null;
    }
    /**
     * Set RelatedPolicyInfos value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPolicyInfo $relatedPolicyInfos
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaContract
     */
    public function setRelatedPolicyInfos(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPolicyInfo $relatedPolicyInfos = null)
    {
        if (is_null($relatedPolicyInfos) || (is_array($relatedPolicyInfos) && empty($relatedPolicyInfos))) {
            unset($this->RelatedPolicyInfos);
        } else {
            $this->RelatedPolicyInfos = $relatedPolicyInfos;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaContract
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
