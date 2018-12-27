<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LoadOfferRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:LoadOfferRequest
 * @subpackage Structs
 */
class LoadOfferRequest extends AbstractStructBase
{
    /**
     * The OfferNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OfferNumber;
    /**
     * Constructor method for LoadOfferRequest
     * @uses LoadOfferRequest::setOfferNumber()
     * @param int $offerNumber
     */
    public function __construct($offerNumber = null)
    {
        $this
            ->setOfferNumber($offerNumber);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LoadOfferRequest
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LoadOfferRequest
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
