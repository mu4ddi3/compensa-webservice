<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartnerAgeAvaliabilityCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PartnerAgeAvaliabilityCondition
 * @subpackage Structs
 */
class PartnerAgeAvaliabilityCondition extends AvailabilityCondition
{
    /**
     * The CheckCoOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CheckCoOwner;
    /**
     * The CheckLeasing
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CheckLeasing;
    /**
     * The CheckOwner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CheckOwner;
    /**
     * The CheckYoungestUser
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $CheckYoungestUser;
    /**
     * The PartnerAgeRanges
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfint
     */
    public $PartnerAgeRanges;
    /**
     * Constructor method for PartnerAgeAvaliabilityCondition
     * @uses PartnerAgeAvaliabilityCondition::setCheckCoOwner()
     * @uses PartnerAgeAvaliabilityCondition::setCheckLeasing()
     * @uses PartnerAgeAvaliabilityCondition::setCheckOwner()
     * @uses PartnerAgeAvaliabilityCondition::setCheckYoungestUser()
     * @uses PartnerAgeAvaliabilityCondition::setPartnerAgeRanges()
     * @param bool $checkCoOwner
     * @param bool $checkLeasing
     * @param bool $checkOwner
     * @param bool $checkYoungestUser
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfint $partnerAgeRanges
     */
    public function __construct($checkCoOwner = null, $checkLeasing = null, $checkOwner = null, $checkYoungestUser = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfint $partnerAgeRanges = null)
    {
        $this
            ->setCheckCoOwner($checkCoOwner)
            ->setCheckLeasing($checkLeasing)
            ->setCheckOwner($checkOwner)
            ->setCheckYoungestUser($checkYoungestUser)
            ->setPartnerAgeRanges($partnerAgeRanges);
    }
    /**
     * Get CheckCoOwner value
     * @return bool|null
     */
    public function getCheckCoOwner()
    {
        return $this->CheckCoOwner;
    }
    /**
     * Set CheckCoOwner value
     * @param bool $checkCoOwner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition
     */
    public function setCheckCoOwner($checkCoOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkCoOwner) && !is_bool($checkCoOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checkCoOwner)), __LINE__);
        }
        $this->CheckCoOwner = $checkCoOwner;
        return $this;
    }
    /**
     * Get CheckLeasing value
     * @return bool|null
     */
    public function getCheckLeasing()
    {
        return $this->CheckLeasing;
    }
    /**
     * Set CheckLeasing value
     * @param bool $checkLeasing
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition
     */
    public function setCheckLeasing($checkLeasing = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkLeasing) && !is_bool($checkLeasing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checkLeasing)), __LINE__);
        }
        $this->CheckLeasing = $checkLeasing;
        return $this;
    }
    /**
     * Get CheckOwner value
     * @return bool|null
     */
    public function getCheckOwner()
    {
        return $this->CheckOwner;
    }
    /**
     * Set CheckOwner value
     * @param bool $checkOwner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition
     */
    public function setCheckOwner($checkOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkOwner) && !is_bool($checkOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checkOwner)), __LINE__);
        }
        $this->CheckOwner = $checkOwner;
        return $this;
    }
    /**
     * Get CheckYoungestUser value
     * @return bool|null
     */
    public function getCheckYoungestUser()
    {
        return $this->CheckYoungestUser;
    }
    /**
     * Set CheckYoungestUser value
     * @param bool $checkYoungestUser
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition
     */
    public function setCheckYoungestUser($checkYoungestUser = null)
    {
        // validation for constraint: boolean
        if (!is_null($checkYoungestUser) && !is_bool($checkYoungestUser)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($checkYoungestUser)), __LINE__);
        }
        $this->CheckYoungestUser = $checkYoungestUser;
        return $this;
    }
    /**
     * Get PartnerAgeRanges value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfint|null
     */
    public function getPartnerAgeRanges()
    {
        return isset($this->PartnerAgeRanges) ? $this->PartnerAgeRanges : null;
    }
    /**
     * Set PartnerAgeRanges value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfint $partnerAgeRanges
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition
     */
    public function setPartnerAgeRanges(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRangeOfint $partnerAgeRanges = null)
    {
        if (is_null($partnerAgeRanges) || (is_array($partnerAgeRanges) && empty($partnerAgeRanges))) {
            unset($this->PartnerAgeRanges);
        } else {
            $this->PartnerAgeRanges = $partnerAgeRanges;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerAgeAvaliabilityCondition
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
