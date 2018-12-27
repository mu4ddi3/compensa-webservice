<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetQuintupleInsuranceSumNnwCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetQuintupleInsuranceSumNnwCorrectionResponse
 * @subpackage Structs
 */
class GetQuintupleInsuranceSumNnwCorrectionResponse extends AbstractStructBase
{
    /**
     * The QuintupleInsuranceSumCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrection
     */
    public $QuintupleInsuranceSumCorrection;
    /**
     * Constructor method for GetQuintupleInsuranceSumNnwCorrectionResponse
     * @uses GetQuintupleInsuranceSumNnwCorrectionResponse::setQuintupleInsuranceSumCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrection $quintupleInsuranceSumCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrection $quintupleInsuranceSumCorrection = null)
    {
        $this
            ->setQuintupleInsuranceSumCorrection($quintupleInsuranceSumCorrection);
    }
    /**
     * Get QuintupleInsuranceSumCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrection|null
     */
    public function getQuintupleInsuranceSumCorrection()
    {
        return isset($this->QuintupleInsuranceSumCorrection) ? $this->QuintupleInsuranceSumCorrection : null;
    }
    /**
     * Set QuintupleInsuranceSumCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrection $quintupleInsuranceSumCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetQuintupleInsuranceSumNnwCorrectionResponse
     */
    public function setQuintupleInsuranceSumCorrection(\Mu4ddi3\Compensa\Webservice\StructType\QuintupleInsuranceSumCorrection $quintupleInsuranceSumCorrection = null)
    {
        if (is_null($quintupleInsuranceSumCorrection) || (is_array($quintupleInsuranceSumCorrection) && empty($quintupleInsuranceSumCorrection))) {
            unset($this->QuintupleInsuranceSumCorrection);
        } else {
            $this->QuintupleInsuranceSumCorrection = $quintupleInsuranceSumCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetQuintupleInsuranceSumNnwCorrectionResponse
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
