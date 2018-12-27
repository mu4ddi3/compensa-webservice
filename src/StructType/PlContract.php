<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PlContract StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PlContract
 * @subpackage Structs
 */
class PlContract extends CompensaContract
{
    /**
     * The CommisionForLogin
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CommisionForLogin;
    /**
     * The InstallmentsNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InstallmentsNumber;
    /**
     * The OfferFirstSaveDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferFirstSaveDate;
    /**
     * The OfferName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OfferName;
    /**
     * The TechnicalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TechnicalCode;
    /**
     * Constructor method for PlContract
     * @uses PlContract::setCommisionForLogin()
     * @uses PlContract::setInstallmentsNumber()
     * @uses PlContract::setOfferFirstSaveDate()
     * @uses PlContract::setOfferName()
     * @uses PlContract::setTechnicalCode()
     * @param string $commisionForLogin
     * @param string $installmentsNumber
     * @param string $offerFirstSaveDate
     * @param string $offerName
     * @param string $technicalCode
     */
    public function __construct($commisionForLogin = null, $installmentsNumber = null, $offerFirstSaveDate = null, $offerName = null, $technicalCode = null)
    {
        $this
            ->setCommisionForLogin($commisionForLogin)
            ->setInstallmentsNumber($installmentsNumber)
            ->setOfferFirstSaveDate($offerFirstSaveDate)
            ->setOfferName($offerName)
            ->setTechnicalCode($technicalCode);
    }
    /**
     * Get CommisionForLogin value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommisionForLogin()
    {
        return isset($this->CommisionForLogin) ? $this->CommisionForLogin : null;
    }
    /**
     * Set CommisionForLogin value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $commisionForLogin
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PlContract
     */
    public function setCommisionForLogin($commisionForLogin = null)
    {
        // validation for constraint: string
        if (!is_null($commisionForLogin) && !is_string($commisionForLogin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($commisionForLogin)), __LINE__);
        }
        if (is_null($commisionForLogin) || (is_array($commisionForLogin) && empty($commisionForLogin))) {
            unset($this->CommisionForLogin);
        } else {
            $this->CommisionForLogin = $commisionForLogin;
        }
        return $this;
    }
    /**
     * Get InstallmentsNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInstallmentsNumber()
    {
        return isset($this->InstallmentsNumber) ? $this->InstallmentsNumber : null;
    }
    /**
     * Set InstallmentsNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $installmentsNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PlContract
     */
    public function setInstallmentsNumber($installmentsNumber = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid($installmentsNumber)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $installmentsNumber, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues())), __LINE__);
        }
        if (is_null($installmentsNumber) || (is_array($installmentsNumber) && empty($installmentsNumber))) {
            unset($this->InstallmentsNumber);
        } else {
            $this->InstallmentsNumber = $installmentsNumber;
        }
        return $this;
    }
    /**
     * Get OfferFirstSaveDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfferFirstSaveDate()
    {
        return isset($this->OfferFirstSaveDate) ? $this->OfferFirstSaveDate : null;
    }
    /**
     * Set OfferFirstSaveDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $offerFirstSaveDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PlContract
     */
    public function setOfferFirstSaveDate($offerFirstSaveDate = null)
    {
        // validation for constraint: string
        if (!is_null($offerFirstSaveDate) && !is_string($offerFirstSaveDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerFirstSaveDate)), __LINE__);
        }
        if (is_null($offerFirstSaveDate) || (is_array($offerFirstSaveDate) && empty($offerFirstSaveDate))) {
            unset($this->OfferFirstSaveDate);
        } else {
            $this->OfferFirstSaveDate = $offerFirstSaveDate;
        }
        return $this;
    }
    /**
     * Get OfferName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOfferName()
    {
        return isset($this->OfferName) ? $this->OfferName : null;
    }
    /**
     * Set OfferName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $offerName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PlContract
     */
    public function setOfferName($offerName = null)
    {
        // validation for constraint: string
        if (!is_null($offerName) && !is_string($offerName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($offerName)), __LINE__);
        }
        if (is_null($offerName) || (is_array($offerName) && empty($offerName))) {
            unset($this->OfferName);
        } else {
            $this->OfferName = $offerName;
        }
        return $this;
    }
    /**
     * Get TechnicalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTechnicalCode()
    {
        return isset($this->TechnicalCode) ? $this->TechnicalCode : null;
    }
    /**
     * Set TechnicalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $technicalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PlContract
     */
    public function setTechnicalCode($technicalCode = null)
    {
        // validation for constraint: string
        if (!is_null($technicalCode) && !is_string($technicalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($technicalCode)), __LINE__);
        }
        if (is_null($technicalCode) || (is_array($technicalCode) && empty($technicalCode))) {
            unset($this->TechnicalCode);
        } else {
            $this->TechnicalCode = $technicalCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PlContract
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
