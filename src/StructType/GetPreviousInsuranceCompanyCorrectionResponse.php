<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPreviousInsuranceCompanyCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPreviousInsuranceCompanyCorrectionResponse
 * @subpackage Structs
 */
class GetPreviousInsuranceCompanyCorrectionResponse extends AbstractStructBase
{
    /**
     * The PreviousInsuranceCompanyCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrection
     */
    public $PreviousInsuranceCompanyCorrection;
    /**
     * Constructor method for GetPreviousInsuranceCompanyCorrectionResponse
     * @uses GetPreviousInsuranceCompanyCorrectionResponse::setPreviousInsuranceCompanyCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrection $previousInsuranceCompanyCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrection $previousInsuranceCompanyCorrection = null)
    {
        $this
            ->setPreviousInsuranceCompanyCorrection($previousInsuranceCompanyCorrection);
    }
    /**
     * Get PreviousInsuranceCompanyCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrection|null
     */
    public function getPreviousInsuranceCompanyCorrection()
    {
        return isset($this->PreviousInsuranceCompanyCorrection) ? $this->PreviousInsuranceCompanyCorrection : null;
    }
    /**
     * Set PreviousInsuranceCompanyCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrection $previousInsuranceCompanyCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPreviousInsuranceCompanyCorrectionResponse
     */
    public function setPreviousInsuranceCompanyCorrection(\Mu4ddi3\Compensa\Webservice\StructType\PreviousInsuranceCompanyCorrection $previousInsuranceCompanyCorrection = null)
    {
        if (is_null($previousInsuranceCompanyCorrection) || (is_array($previousInsuranceCompanyCorrection) && empty($previousInsuranceCompanyCorrection))) {
            unset($this->PreviousInsuranceCompanyCorrection);
        } else {
            $this->PreviousInsuranceCompanyCorrection = $previousInsuranceCompanyCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPreviousInsuranceCompanyCorrectionResponse
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
