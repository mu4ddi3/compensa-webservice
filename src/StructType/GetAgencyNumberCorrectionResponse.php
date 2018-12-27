<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyNumberCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAgencyNumberCorrectionResponse
 * @subpackage Structs
 */
class GetAgencyNumberCorrectionResponse extends AbstractStructBase
{
    /**
     * The AgencyNumberCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrection
     */
    public $AgencyNumberCorrection;
    /**
     * Constructor method for GetAgencyNumberCorrectionResponse
     * @uses GetAgencyNumberCorrectionResponse::setAgencyNumberCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrection $agencyNumberCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrection $agencyNumberCorrection = null)
    {
        $this
            ->setAgencyNumberCorrection($agencyNumberCorrection);
    }
    /**
     * Get AgencyNumberCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrection|null
     */
    public function getAgencyNumberCorrection()
    {
        return isset($this->AgencyNumberCorrection) ? $this->AgencyNumberCorrection : null;
    }
    /**
     * Set AgencyNumberCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrection $agencyNumberCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAgencyNumberCorrectionResponse
     */
    public function setAgencyNumberCorrection(\Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrection $agencyNumberCorrection = null)
    {
        if (is_null($agencyNumberCorrection) || (is_array($agencyNumberCorrection) && empty($agencyNumberCorrection))) {
            unset($this->AgencyNumberCorrection);
        } else {
            $this->AgencyNumberCorrection = $agencyNumberCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAgencyNumberCorrectionResponse
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
