<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConstantInsuranceSumCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetConstantInsuranceSumCorrectionResponse
 * @subpackage Structs
 */
class GetConstantInsuranceSumCorrectionResponse extends AbstractStructBase
{
    /**
     * The ConstantInsuranceSumCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrection
     */
    public $ConstantInsuranceSumCorrection;
    /**
     * Constructor method for GetConstantInsuranceSumCorrectionResponse
     * @uses GetConstantInsuranceSumCorrectionResponse::setConstantInsuranceSumCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrection $constantInsuranceSumCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrection $constantInsuranceSumCorrection = null)
    {
        $this
            ->setConstantInsuranceSumCorrection($constantInsuranceSumCorrection);
    }
    /**
     * Get ConstantInsuranceSumCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrection|null
     */
    public function getConstantInsuranceSumCorrection()
    {
        return isset($this->ConstantInsuranceSumCorrection) ? $this->ConstantInsuranceSumCorrection : null;
    }
    /**
     * Set ConstantInsuranceSumCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrection $constantInsuranceSumCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetConstantInsuranceSumCorrectionResponse
     */
    public function setConstantInsuranceSumCorrection(\Mu4ddi3\Compensa\Webservice\StructType\ConstantInsuranceSumCorrection $constantInsuranceSumCorrection = null)
    {
        if (is_null($constantInsuranceSumCorrection) || (is_array($constantInsuranceSumCorrection) && empty($constantInsuranceSumCorrection))) {
            unset($this->ConstantInsuranceSumCorrection);
        } else {
            $this->ConstantInsuranceSumCorrection = $constantInsuranceSumCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetConstantInsuranceSumCorrectionResponse
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
