<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTariffIdResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetTariffIdResponse
 * @subpackage Structs
 */
class GetTariffIdResponse extends AbstractStructBase
{
    /**
     * The TariffId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TariffId;
    /**
     * Constructor method for GetTariffIdResponse
     * @uses GetTariffIdResponse::setTariffId()
     * @param int $tariffId
     */
    public function __construct($tariffId = null)
    {
        $this
            ->setTariffId($tariffId);
    }
    /**
     * Get TariffId value
     * @return int|null
     */
    public function getTariffId()
    {
        return $this->TariffId;
    }
    /**
     * Set TariffId value
     * @param int $tariffId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetTariffIdResponse
     */
    public function setTariffId($tariffId = null)
    {
        // validation for constraint: int
        if (!is_null($tariffId) && !is_numeric($tariffId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tariffId)), __LINE__);
        }
        $this->TariffId = $tariffId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetTariffIdResponse
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
