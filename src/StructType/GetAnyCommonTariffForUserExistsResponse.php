<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAnyCommonTariffForUserExistsResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAnyCommonTariffForUserExistsResponse
 * @subpackage Structs
 */
class GetAnyCommonTariffForUserExistsResponse extends AbstractStructBase
{
    /**
     * The AnyCommonTariffForUserExists
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AnyCommonTariffForUserExists;
    /**
     * Constructor method for GetAnyCommonTariffForUserExistsResponse
     * @uses GetAnyCommonTariffForUserExistsResponse::setAnyCommonTariffForUserExists()
     * @param bool $anyCommonTariffForUserExists
     */
    public function __construct($anyCommonTariffForUserExists = null)
    {
        $this
            ->setAnyCommonTariffForUserExists($anyCommonTariffForUserExists);
    }
    /**
     * Get AnyCommonTariffForUserExists value
     * @return bool|null
     */
    public function getAnyCommonTariffForUserExists()
    {
        return $this->AnyCommonTariffForUserExists;
    }
    /**
     * Set AnyCommonTariffForUserExists value
     * @param bool $anyCommonTariffForUserExists
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAnyCommonTariffForUserExistsResponse
     */
    public function setAnyCommonTariffForUserExists($anyCommonTariffForUserExists = null)
    {
        // validation for constraint: boolean
        if (!is_null($anyCommonTariffForUserExists) && !is_bool($anyCommonTariffForUserExists)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($anyCommonTariffForUserExists)), __LINE__);
        }
        $this->AnyCommonTariffForUserExists = $anyCommonTariffForUserExists;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAnyCommonTariffForUserExistsResponse
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
