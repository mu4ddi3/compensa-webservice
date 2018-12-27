<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCommonTariffIdResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCommonTariffIdResponse
 * @subpackage Structs
 */
class GetCommonTariffIdResponse extends AbstractStructBase
{
    /**
     * The CommonTariffId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CommonTariffId;
    /**
     * Constructor method for GetCommonTariffIdResponse
     * @uses GetCommonTariffIdResponse::setCommonTariffId()
     * @param int $commonTariffId
     */
    public function __construct($commonTariffId = null)
    {
        $this
            ->setCommonTariffId($commonTariffId);
    }
    /**
     * Get CommonTariffId value
     * @return int|null
     */
    public function getCommonTariffId()
    {
        return $this->CommonTariffId;
    }
    /**
     * Set CommonTariffId value
     * @param int $commonTariffId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCommonTariffIdResponse
     */
    public function setCommonTariffId($commonTariffId = null)
    {
        // validation for constraint: int
        if (!is_null($commonTariffId) && !is_numeric($commonTariffId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($commonTariffId)), __LINE__);
        }
        $this->CommonTariffId = $commonTariffId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetCommonTariffIdResponse
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
