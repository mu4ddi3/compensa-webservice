<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpVariantDriverInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OpVariantDriverInfo
 * @subpackage Structs
 */
class OpVariantDriverInfo extends AbstractStructBase
{
    /**
     * The Drivers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPartner
     */
    public $Drivers;
    /**
     * The IsAccordingToAnnex
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAccordingToAnnex;
    /**
     * The IsInsuredProtected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsInsuredProtected;
    /**
     * The IsInsurerProtected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsInsurerProtected;
    /**
     * Constructor method for OpVariantDriverInfo
     * @uses OpVariantDriverInfo::setDrivers()
     * @uses OpVariantDriverInfo::setIsAccordingToAnnex()
     * @uses OpVariantDriverInfo::setIsInsuredProtected()
     * @uses OpVariantDriverInfo::setIsInsurerProtected()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPartner $drivers
     * @param bool $isAccordingToAnnex
     * @param bool $isInsuredProtected
     * @param bool $isInsurerProtected
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPartner $drivers = null, $isAccordingToAnnex = null, $isInsuredProtected = null, $isInsurerProtected = null)
    {
        $this
            ->setDrivers($drivers)
            ->setIsAccordingToAnnex($isAccordingToAnnex)
            ->setIsInsuredProtected($isInsuredProtected)
            ->setIsInsurerProtected($isInsurerProtected);
    }
    /**
     * Get Drivers value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPartner|null
     */
    public function getDrivers()
    {
        return isset($this->Drivers) ? $this->Drivers : null;
    }
    /**
     * Set Drivers value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPartner $drivers
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo
     */
    public function setDrivers(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCompensaPartner $drivers = null)
    {
        if (is_null($drivers) || (is_array($drivers) && empty($drivers))) {
            unset($this->Drivers);
        } else {
            $this->Drivers = $drivers;
        }
        return $this;
    }
    /**
     * Get IsAccordingToAnnex value
     * @return bool|null
     */
    public function getIsAccordingToAnnex()
    {
        return $this->IsAccordingToAnnex;
    }
    /**
     * Set IsAccordingToAnnex value
     * @param bool $isAccordingToAnnex
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo
     */
    public function setIsAccordingToAnnex($isAccordingToAnnex = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAccordingToAnnex) && !is_bool($isAccordingToAnnex)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAccordingToAnnex)), __LINE__);
        }
        $this->IsAccordingToAnnex = $isAccordingToAnnex;
        return $this;
    }
    /**
     * Get IsInsuredProtected value
     * @return bool|null
     */
    public function getIsInsuredProtected()
    {
        return $this->IsInsuredProtected;
    }
    /**
     * Set IsInsuredProtected value
     * @param bool $isInsuredProtected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo
     */
    public function setIsInsuredProtected($isInsuredProtected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInsuredProtected) && !is_bool($isInsuredProtected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInsuredProtected)), __LINE__);
        }
        $this->IsInsuredProtected = $isInsuredProtected;
        return $this;
    }
    /**
     * Get IsInsurerProtected value
     * @return bool|null
     */
    public function getIsInsurerProtected()
    {
        return $this->IsInsurerProtected;
    }
    /**
     * Set IsInsurerProtected value
     * @param bool $isInsurerProtected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo
     */
    public function setIsInsurerProtected($isInsurerProtected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isInsurerProtected) && !is_bool($isInsurerProtected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isInsurerProtected)), __LINE__);
        }
        $this->IsInsurerProtected = $isInsurerProtected;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpVariantDriverInfo
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
