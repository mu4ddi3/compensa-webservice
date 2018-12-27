<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPartnerAgeDiscountRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPartnerAgeDiscountRequest
 * @subpackage Structs
 */
class GetPartnerAgeDiscountRequest extends AbstractStructBase
{
    /**
     * The PartnerAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PartnerAge;
    /**
     * Constructor method for GetPartnerAgeDiscountRequest
     * @uses GetPartnerAgeDiscountRequest::setPartnerAge()
     * @param int $partnerAge
     */
    public function __construct($partnerAge = null)
    {
        $this
            ->setPartnerAge($partnerAge);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPartnerAgeDiscountRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPartnerAgeDiscountRequest
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
