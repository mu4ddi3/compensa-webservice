<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetInstallmentsNumberCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetInstallmentsNumberCorrectionResponse
 * @subpackage Structs
 */
class GetInstallmentsNumberCorrectionResponse extends AbstractStructBase
{
    /**
     * The InstallmentsNumberCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrection
     */
    public $InstallmentsNumberCorrection;
    /**
     * Constructor method for GetInstallmentsNumberCorrectionResponse
     * @uses GetInstallmentsNumberCorrectionResponse::setInstallmentsNumberCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrection $installmentsNumberCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrection $installmentsNumberCorrection = null)
    {
        $this
            ->setInstallmentsNumberCorrection($installmentsNumberCorrection);
    }
    /**
     * Get InstallmentsNumberCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrection|null
     */
    public function getInstallmentsNumberCorrection()
    {
        return isset($this->InstallmentsNumberCorrection) ? $this->InstallmentsNumberCorrection : null;
    }
    /**
     * Set InstallmentsNumberCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrection $installmentsNumberCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetInstallmentsNumberCorrectionResponse
     */
    public function setInstallmentsNumberCorrection(\Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrection $installmentsNumberCorrection = null)
    {
        if (is_null($installmentsNumberCorrection) || (is_array($installmentsNumberCorrection) && empty($installmentsNumberCorrection))) {
            unset($this->InstallmentsNumberCorrection);
        } else {
            $this->InstallmentsNumberCorrection = $installmentsNumberCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetInstallmentsNumberCorrectionResponse
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
