<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BurglaryInsuranceRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BurglaryInsuranceRisk
 * @subpackage Structs
 */
class BurglaryInsuranceRisk extends InsuranceRisk
{
    /**
     * The AreAntiBreakingDoors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AreAntiBreakingDoors;
    /**
     * The BurglaryProtectionDiscountPercentage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $BurglaryProtectionDiscountPercentage;
    /**
     * The IsConstantSurveillance
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsConstantSurveillance;
    /**
     * The IsLocalAlarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsLocalAlarm;
    /**
     * The IsSecurityAgencyOrPoliceAlarm
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSecurityAgencyOrPoliceAlarm;
    /**
     * The MinimumBurglaryProtectionFulfillsTerms
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $MinimumBurglaryProtectionFulfillsTerms;
    /**
     * Constructor method for BurglaryInsuranceRisk
     * @uses BurglaryInsuranceRisk::setAreAntiBreakingDoors()
     * @uses BurglaryInsuranceRisk::setBurglaryProtectionDiscountPercentage()
     * @uses BurglaryInsuranceRisk::setIsConstantSurveillance()
     * @uses BurglaryInsuranceRisk::setIsLocalAlarm()
     * @uses BurglaryInsuranceRisk::setIsSecurityAgencyOrPoliceAlarm()
     * @uses BurglaryInsuranceRisk::setMinimumBurglaryProtectionFulfillsTerms()
     * @param bool $areAntiBreakingDoors
     * @param float $burglaryProtectionDiscountPercentage
     * @param bool $isConstantSurveillance
     * @param bool $isLocalAlarm
     * @param bool $isSecurityAgencyOrPoliceAlarm
     * @param bool $minimumBurglaryProtectionFulfillsTerms
     */
    public function __construct($areAntiBreakingDoors = null, $burglaryProtectionDiscountPercentage = null, $isConstantSurveillance = null, $isLocalAlarm = null, $isSecurityAgencyOrPoliceAlarm = null, $minimumBurglaryProtectionFulfillsTerms = null)
    {
        $this
            ->setAreAntiBreakingDoors($areAntiBreakingDoors)
            ->setBurglaryProtectionDiscountPercentage($burglaryProtectionDiscountPercentage)
            ->setIsConstantSurveillance($isConstantSurveillance)
            ->setIsLocalAlarm($isLocalAlarm)
            ->setIsSecurityAgencyOrPoliceAlarm($isSecurityAgencyOrPoliceAlarm)
            ->setMinimumBurglaryProtectionFulfillsTerms($minimumBurglaryProtectionFulfillsTerms);
    }
    /**
     * Get AreAntiBreakingDoors value
     * @return bool|null
     */
    public function getAreAntiBreakingDoors()
    {
        return $this->AreAntiBreakingDoors;
    }
    /**
     * Set AreAntiBreakingDoors value
     * @param bool $areAntiBreakingDoors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryInsuranceRisk
     */
    public function setAreAntiBreakingDoors($areAntiBreakingDoors = null)
    {
        // validation for constraint: boolean
        if (!is_null($areAntiBreakingDoors) && !is_bool($areAntiBreakingDoors)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($areAntiBreakingDoors)), __LINE__);
        }
        $this->AreAntiBreakingDoors = $areAntiBreakingDoors;
        return $this;
    }
    /**
     * Get BurglaryProtectionDiscountPercentage value
     * @return float|null
     */
    public function getBurglaryProtectionDiscountPercentage()
    {
        return $this->BurglaryProtectionDiscountPercentage;
    }
    /**
     * Set BurglaryProtectionDiscountPercentage value
     * @param float $burglaryProtectionDiscountPercentage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryInsuranceRisk
     */
    public function setBurglaryProtectionDiscountPercentage($burglaryProtectionDiscountPercentage = null)
    {
        $this->BurglaryProtectionDiscountPercentage = $burglaryProtectionDiscountPercentage;
        return $this;
    }
    /**
     * Get IsConstantSurveillance value
     * @return bool|null
     */
    public function getIsConstantSurveillance()
    {
        return $this->IsConstantSurveillance;
    }
    /**
     * Set IsConstantSurveillance value
     * @param bool $isConstantSurveillance
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryInsuranceRisk
     */
    public function setIsConstantSurveillance($isConstantSurveillance = null)
    {
        // validation for constraint: boolean
        if (!is_null($isConstantSurveillance) && !is_bool($isConstantSurveillance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isConstantSurveillance)), __LINE__);
        }
        $this->IsConstantSurveillance = $isConstantSurveillance;
        return $this;
    }
    /**
     * Get IsLocalAlarm value
     * @return bool|null
     */
    public function getIsLocalAlarm()
    {
        return $this->IsLocalAlarm;
    }
    /**
     * Set IsLocalAlarm value
     * @param bool $isLocalAlarm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryInsuranceRisk
     */
    public function setIsLocalAlarm($isLocalAlarm = null)
    {
        // validation for constraint: boolean
        if (!is_null($isLocalAlarm) && !is_bool($isLocalAlarm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isLocalAlarm)), __LINE__);
        }
        $this->IsLocalAlarm = $isLocalAlarm;
        return $this;
    }
    /**
     * Get IsSecurityAgencyOrPoliceAlarm value
     * @return bool|null
     */
    public function getIsSecurityAgencyOrPoliceAlarm()
    {
        return $this->IsSecurityAgencyOrPoliceAlarm;
    }
    /**
     * Set IsSecurityAgencyOrPoliceAlarm value
     * @param bool $isSecurityAgencyOrPoliceAlarm
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryInsuranceRisk
     */
    public function setIsSecurityAgencyOrPoliceAlarm($isSecurityAgencyOrPoliceAlarm = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSecurityAgencyOrPoliceAlarm) && !is_bool($isSecurityAgencyOrPoliceAlarm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSecurityAgencyOrPoliceAlarm)), __LINE__);
        }
        $this->IsSecurityAgencyOrPoliceAlarm = $isSecurityAgencyOrPoliceAlarm;
        return $this;
    }
    /**
     * Get MinimumBurglaryProtectionFulfillsTerms value
     * @return bool|null
     */
    public function getMinimumBurglaryProtectionFulfillsTerms()
    {
        return $this->MinimumBurglaryProtectionFulfillsTerms;
    }
    /**
     * Set MinimumBurglaryProtectionFulfillsTerms value
     * @param bool $minimumBurglaryProtectionFulfillsTerms
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryInsuranceRisk
     */
    public function setMinimumBurglaryProtectionFulfillsTerms($minimumBurglaryProtectionFulfillsTerms = null)
    {
        // validation for constraint: boolean
        if (!is_null($minimumBurglaryProtectionFulfillsTerms) && !is_bool($minimumBurglaryProtectionFulfillsTerms)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($minimumBurglaryProtectionFulfillsTerms)), __LINE__);
        }
        $this->MinimumBurglaryProtectionFulfillsTerms = $minimumBurglaryProtectionFulfillsTerms;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BurglaryInsuranceRisk
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
