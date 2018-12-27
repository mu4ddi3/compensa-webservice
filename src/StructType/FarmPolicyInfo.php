<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FarmPolicyInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FarmPolicyInfo
 * @subpackage Structs
 */
class FarmPolicyInfo extends CompensaPolicyInfo
{
    /**
     * The OfferId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OfferId;
    /**
     * Constructor method for FarmPolicyInfo
     * @uses FarmPolicyInfo::setOfferId()
     * @param int $offerId
     */
    public function __construct($offerId = null)
    {
        $this
            ->setOfferId($offerId);
    }
    /**
     * Get OfferId value
     * @return int|null
     */
    public function getOfferId()
    {
        return $this->OfferId;
    }
    /**
     * Set OfferId value
     * @param int $offerId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FarmPolicyInfo
     */
    public function setOfferId($offerId = null)
    {
        // validation for constraint: int
        if (!is_null($offerId) && !is_numeric($offerId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($offerId)), __LINE__);
        }
        $this->OfferId = $offerId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FarmPolicyInfo
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
