<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelPolisyResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CancelPolisyResponse
 * @subpackage Structs
 */
class CancelPolisyResponse extends AbstractStructBase
{
    /**
     * The Success
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Success;
    /**
     * Constructor method for CancelPolisyResponse
     * @uses CancelPolisyResponse::setSuccess()
     * @param bool $success
     */
    public function __construct($success = null)
    {
        $this
            ->setSuccess($success);
    }
    /**
     * Get Success value
     * @return bool|null
     */
    public function getSuccess()
    {
        return $this->Success;
    }
    /**
     * Set Success value
     * @param bool $success
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CancelPolisyResponse
     */
    public function setSuccess($success = null)
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($success)), __LINE__);
        }
        $this->Success = $success;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CancelPolisyResponse
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
