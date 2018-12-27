<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEndorsementFactorRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetEndorsementFactorRequest
 * @subpackage Structs
 */
class GetEndorsementFactorRequest extends AbstractStructBase
{
    /**
     * The PartnerAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PartnerAge;
    /**
     * The PartnerType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $PartnerType;
    /**
     * Constructor method for GetEndorsementFactorRequest
     * @uses GetEndorsementFactorRequest::setPartnerAge()
     * @uses GetEndorsementFactorRequest::setPartnerType()
     * @param int $partnerAge
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType
     */
    public function __construct($partnerAge = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType = null)
    {
        $this
            ->setPartnerAge($partnerAge)
            ->setPartnerType($partnerType);
    }
    /**
     * Get PartnerAge value
     * @return int|null
     */
    public function getPartnerAge()
    {
        return $this->PartnerAge;
    }
    /**
     * Set PartnerAge value
     * @param int $partnerAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetEndorsementFactorRequest
     */
    public function setPartnerAge($partnerAge = null)
    {
        // validation for constraint: int
        if (!is_null($partnerAge) && !is_numeric($partnerAge)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($partnerAge)), __LINE__);
        }
        $this->PartnerAge = $partnerAge;
        return $this;
    }
    /**
     * Get PartnerType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getPartnerType()
    {
        return isset($this->PartnerType) ? $this->PartnerType : null;
    }
    /**
     * Set PartnerType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetEndorsementFactorRequest
     */
    public function setPartnerType(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $partnerType = null)
    {
        if (is_null($partnerType) || (is_array($partnerType) && empty($partnerType))) {
            unset($this->PartnerType);
        } else {
            $this->PartnerType = $partnerType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetEndorsementFactorRequest
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
