<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetScalpelCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetScalpelCorrectionResponse
 * @subpackage Structs
 */
class GetScalpelCorrectionResponse extends AbstractStructBase
{
    /**
     * The ScalpelCorrections
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelCorrection
     */
    public $ScalpelCorrections;
    /**
     * Constructor method for GetScalpelCorrectionResponse
     * @uses GetScalpelCorrectionResponse::setScalpelCorrections()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelCorrection $scalpelCorrections
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelCorrection $scalpelCorrections = null)
    {
        $this
            ->setScalpelCorrections($scalpelCorrections);
    }
    /**
     * Get ScalpelCorrections value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelCorrection|null
     */
    public function getScalpelCorrections()
    {
        return isset($this->ScalpelCorrections) ? $this->ScalpelCorrections : null;
    }
    /**
     * Set ScalpelCorrections value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelCorrection $scalpelCorrections
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetScalpelCorrectionResponse
     */
    public function setScalpelCorrections(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfScalpelCorrection $scalpelCorrections = null)
    {
        if (is_null($scalpelCorrections) || (is_array($scalpelCorrections) && empty($scalpelCorrections))) {
            unset($this->ScalpelCorrections);
        } else {
            $this->ScalpelCorrections = $scalpelCorrections;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetScalpelCorrectionResponse
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
