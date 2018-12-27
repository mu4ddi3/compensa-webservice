<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNoAcInsuranceCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetNoAcInsuranceCorrectionResponse
 * @subpackage Structs
 */
class GetNoAcInsuranceCorrectionResponse extends AbstractStructBase
{
    /**
     * The NoAcInsuranceCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrection
     */
    public $NoAcInsuranceCorrection;
    /**
     * Constructor method for GetNoAcInsuranceCorrectionResponse
     * @uses GetNoAcInsuranceCorrectionResponse::setNoAcInsuranceCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrection $noAcInsuranceCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrection $noAcInsuranceCorrection = null)
    {
        $this
            ->setNoAcInsuranceCorrection($noAcInsuranceCorrection);
    }
    /**
     * Get NoAcInsuranceCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrection|null
     */
    public function getNoAcInsuranceCorrection()
    {
        return isset($this->NoAcInsuranceCorrection) ? $this->NoAcInsuranceCorrection : null;
    }
    /**
     * Set NoAcInsuranceCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrection $noAcInsuranceCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetNoAcInsuranceCorrectionResponse
     */
    public function setNoAcInsuranceCorrection(\Mu4ddi3\Compensa\Webservice\StructType\NoAcInsuranceCorrection $noAcInsuranceCorrection = null)
    {
        if (is_null($noAcInsuranceCorrection) || (is_array($noAcInsuranceCorrection) && empty($noAcInsuranceCorrection))) {
            unset($this->NoAcInsuranceCorrection);
        } else {
            $this->NoAcInsuranceCorrection = $noAcInsuranceCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetNoAcInsuranceCorrectionResponse
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
