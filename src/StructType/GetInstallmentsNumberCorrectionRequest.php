<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInstallmentsNumberCorrectionRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetInstallmentsNumberCorrectionRequest
 * @subpackage Structs
 */
class GetInstallmentsNumberCorrectionRequest extends AbstractStructBase
{
    /**
     * The InstallmentsNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InstallmentsNumber;
    /**
     * Constructor method for GetInstallmentsNumberCorrectionRequest
     * @uses GetInstallmentsNumberCorrectionRequest::setInstallmentsNumber()
     * @param string $installmentsNumber
     */
    public function __construct($installmentsNumber = null)
    {
        $this
            ->setInstallmentsNumber($installmentsNumber);
    }
    /**
     * Get InstallmentsNumber value
     * @return string|null
     */
    public function getInstallmentsNumber()
    {
        return $this->InstallmentsNumber;
    }
    /**
     * Set InstallmentsNumber value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $installmentsNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetInstallmentsNumberCorrectionRequest
     */
    public function setInstallmentsNumber($installmentsNumber = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::valueIsValid($installmentsNumber)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $installmentsNumber, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InstallmentsNumber::getValidValues())), __LINE__);
        }
        $this->InstallmentsNumber = $installmentsNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetInstallmentsNumberCorrectionRequest
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
