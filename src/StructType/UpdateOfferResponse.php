<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateOfferResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UpdateOfferResponse
 * @subpackage Structs
 */
class UpdateOfferResponse extends AbstractStructBase
{
    /**
     * The UpdateOfferResult
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfUpdateOfferResponseAwgQbKoT
     */
    public $UpdateOfferResult;
    /**
     * The Contract
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MotorContract
     */
    public $Contract;
    /**
     * The OfferNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OfferNumber;
    /**
     * The OfferPortalUrl
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferPortalUrl;
    /**
     * The Updated
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Updated;
    /**
     * Constructor method for UpdateOfferResponse
     * @uses UpdateOfferResponse::setUpdateOfferResult()
     * @uses UpdateOfferResponse::setContract()
     * @uses UpdateOfferResponse::setOfferNumber()
     * @uses UpdateOfferResponse::setOfferPortalUrl()
     * @uses UpdateOfferResponse::setUpdated()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfUpdateOfferResponseAwgQbKoT $updateOfferResult
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract
     * @param int $offerNumber
     * @param string $offerPortalUrl
     * @param bool $updated
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfUpdateOfferResponseAwgQbKoT $updateOfferResult = null, \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract = null, $offerNumber = null, $offerPortalUrl = null, $updated = null)
    {
        $this
            ->setUpdateOfferResult($updateOfferResult)
            ->setContract($contract)
            ->setOfferNumber($offerNumber)
            ->setOfferPortalUrl($offerPortalUrl)
            ->setUpdated($updated);
    }
    /**
     * Get UpdateOfferResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfUpdateOfferResponseAwgQbKoT|null
     */
    public function getUpdateOfferResult()
    {
        return isset($this->UpdateOfferResult) ? $this->UpdateOfferResult : null;
    }
    /**
     * Set UpdateOfferResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ResponseOfUpdateOfferResponseAwgQbKoT $updateOfferResult
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UpdateOfferResponse
     */
    public function setUpdateOfferResult(\Mu4ddi3\Compensa\Webservice\StructType\ResponseOfUpdateOfferResponseAwgQbKoT $updateOfferResult = null)
    {
        if (is_null($updateOfferResult) || (is_array($updateOfferResult) && empty($updateOfferResult))) {
            unset($this->UpdateOfferResult);
        } else {
            $this->UpdateOfferResult = $updateOfferResult;
        }
        return $this;
    }
    /**
     * Get Contract value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MotorContract|null
     */
    public function getContract()
    {
        return isset($this->Contract) ? $this->Contract : null;
    }
    /**
     * Set Contract value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UpdateOfferResponse
     */
    public function setContract(\Mu4ddi3\Compensa\Webservice\StructType\MotorContract $contract = null)
    {
        if (is_null($contract) || (is_array($contract) && empty($contract))) {
            unset($this->Contract);
        } else {
            $this->Contract = $contract;
        }
        return $this;
    }
    /**
     * Get OfferNumber value
     * @return int|null
     */
    public function getOfferNumber()
    {
        return $this->OfferNumber;
    }
    /**
     * Set OfferNumber value
     * @param int $offerNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UpdateOfferResponse
     */
    public function setOfferNumber($offerNumber = null)
    {
        // validation for constraint: int
        if (!is_null($offerNumber) && !is_numeric($offerNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offerNumber)), __LINE__);
        }
        $this->OfferNumber = $offerNumber;
        return $this;
    }
    /**
     * Get OfferPortalUrl value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfferPortalUrl()
    {
        return isset($this->OfferPortalUrl) ? $this->OfferPortalUrl : null;
    }
    /**
     * Set OfferPortalUrl value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $offerPortalUrl
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UpdateOfferResponse
     */
    public function setOfferPortalUrl($offerPortalUrl = null)
    {
        // validation for constraint: string
        if (!is_null($offerPortalUrl) && !is_string($offerPortalUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerPortalUrl)), __LINE__);
        }
        if (is_null($offerPortalUrl) || (is_array($offerPortalUrl) && empty($offerPortalUrl))) {
            unset($this->OfferPortalUrl);
        } else {
            $this->OfferPortalUrl = $offerPortalUrl;
        }
        return $this;
    }
    /**
     * Get Updated value
     * @return bool|null
     */
    public function getUpdated()
    {
        return $this->Updated;
    }
    /**
     * Set Updated value
     * @param bool $updated
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UpdateOfferResponse
     */
    public function setUpdated($updated = null)
    {
        // validation for constraint: boolean
        if (!is_null($updated) && !is_bool($updated)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($updated)), __LINE__);
        }
        $this->Updated = $updated;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UpdateOfferResponse
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
