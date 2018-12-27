<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionCode StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionCode
 * @subpackage Structs
 */
class PromotionCode extends AbstractStructBase
{
    /**
     * The Achiever
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Achiever;
    /**
     * The AgencyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $AgencyId;
    /**
     * The CodeListId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CodeListId;
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Number;
    /**
     * The Owner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $Owner;
    /**
     * The PolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $PolicyId;
    /**
     * The PromotionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PromotionId;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Constructor method for PromotionCode
     * @uses PromotionCode::setAchiever()
     * @uses PromotionCode::setAgencyId()
     * @uses PromotionCode::setCodeListId()
     * @uses PromotionCode::setNumber()
     * @uses PromotionCode::setOwner()
     * @uses PromotionCode::setPolicyId()
     * @uses PromotionCode::setPromotionId()
     * @uses PromotionCode::setStatus()
     * @param int $achiever
     * @param int $agencyId
     * @param int $codeListId
     * @param string $number
     * @param int $owner
     * @param int $policyId
     * @param int $promotionId
     * @param string $status
     */
    public function __construct($achiever = null, $agencyId = null, $codeListId = null, $number = null, $owner = null, $policyId = null, $promotionId = null, $status = null)
    {
        $this
            ->setAchiever($achiever)
            ->setAgencyId($agencyId)
            ->setCodeListId($codeListId)
            ->setNumber($number)
            ->setOwner($owner)
            ->setPolicyId($policyId)
            ->setPromotionId($promotionId)
            ->setStatus($status);
    }
    /**
     * Get Achiever value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAchiever()
    {
        return isset($this->Achiever) ? $this->Achiever : null;
    }
    /**
     * Set Achiever value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $achiever
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCode
     */
    public function setAchiever($achiever = null)
    {
        // validation for constraint: int
        if (!is_null($achiever) && !is_numeric($achiever)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($achiever)), __LINE__);
        }
        if (is_null($achiever) || (is_array($achiever) && empty($achiever))) {
            unset($this->Achiever);
        } else {
            $this->Achiever = $achiever;
        }
        return $this;
    }
    /**
     * Get AgencyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAgencyId()
    {
        return isset($this->AgencyId) ? $this->AgencyId : null;
    }
    /**
     * Set AgencyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $agencyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCode
     */
    public function setAgencyId($agencyId = null)
    {
        // validation for constraint: int
        if (!is_null($agencyId) && !is_numeric($agencyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($agencyId)), __LINE__);
        }
        if (is_null($agencyId) || (is_array($agencyId) && empty($agencyId))) {
            unset($this->AgencyId);
        } else {
            $this->AgencyId = $agencyId;
        }
        return $this;
    }
    /**
     * Get CodeListId value
     * @return int|null
     */
    public function getCodeListId()
    {
        return $this->CodeListId;
    }
    /**
     * Set CodeListId value
     * @param int $codeListId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCode
     */
    public function setCodeListId($codeListId = null)
    {
        // validation for constraint: int
        if (!is_null($codeListId) && !is_numeric($codeListId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($codeListId)), __LINE__);
        }
        $this->CodeListId = $codeListId;
        return $this;
    }
    /**
     * Get Number value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNumber()
    {
        return isset($this->Number) ? $this->Number : null;
    }
    /**
     * Set Number value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $number
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCode
     */
    public function setNumber($number = null)
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($number)), __LINE__);
        }
        if (is_null($number) || (is_array($number) && empty($number))) {
            unset($this->Number);
        } else {
            $this->Number = $number;
        }
        return $this;
    }
    /**
     * Get Owner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOwner()
    {
        return isset($this->Owner) ? $this->Owner : null;
    }
    /**
     * Set Owner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $owner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCode
     */
    public function setOwner($owner = null)
    {
        // validation for constraint: int
        if (!is_null($owner) && !is_numeric($owner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($owner)), __LINE__);
        }
        if (is_null($owner) || (is_array($owner) && empty($owner))) {
            unset($this->Owner);
        } else {
            $this->Owner = $owner;
        }
        return $this;
    }
    /**
     * Get PolicyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getPolicyId()
    {
        return isset($this->PolicyId) ? $this->PolicyId : null;
    }
    /**
     * Set PolicyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $policyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCode
     */
    public function setPolicyId($policyId = null)
    {
        // validation for constraint: int
        if (!is_null($policyId) && !is_numeric($policyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyId)), __LINE__);
        }
        if (is_null($policyId) || (is_array($policyId) && empty($policyId))) {
            unset($this->PolicyId);
        } else {
            $this->PolicyId = $policyId;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCode
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
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionCodeStatus::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionCodeStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCode
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PromotionCodeStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $status, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PromotionCodeStatus::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionCode
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
