<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPkdCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPkdCorrectionResponse
 * @subpackage Structs
 */
class GetPkdCorrectionResponse extends AbstractStructBase
{
    /**
     * The PkdCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrection
     */
    public $PkdCorrection;
    /**
     * Constructor method for GetPkdCorrectionResponse
     * @uses GetPkdCorrectionResponse::setPkdCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrection $pkdCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\PkdCorrection $pkdCorrection = null)
    {
        $this
            ->setPkdCorrection($pkdCorrection);
    }
    /**
     * Get PkdCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrection|null
     */
    public function getPkdCorrection()
    {
        return isset($this->PkdCorrection) ? $this->PkdCorrection : null;
    }
    /**
     * Set PkdCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrection $pkdCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPkdCorrectionResponse
     */
    public function setPkdCorrection(\Mu4ddi3\Compensa\Webservice\StructType\PkdCorrection $pkdCorrection = null)
    {
        if (is_null($pkdCorrection) || (is_array($pkdCorrection) && empty($pkdCorrection))) {
            unset($this->PkdCorrection);
        } else {
            $this->PkdCorrection = $pkdCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPkdCorrectionResponse
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
