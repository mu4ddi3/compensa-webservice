<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaRisk StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaRisk
 * @subpackage Structs
 */
class CompensaRisk extends Risk
{
    /**
     * The VersisCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaVersisCode
     */
    public $VersisCode;
    /**
     * Constructor method for CompensaRisk
     * @uses CompensaRisk::setVersisCode()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaVersisCode $versisCode
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\CompensaVersisCode $versisCode = null)
    {
        $this
            ->setVersisCode($versisCode);
    }
    /**
     * Get VersisCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaVersisCode|null
     */
    public function getVersisCode()
    {
        return isset($this->VersisCode) ? $this->VersisCode : null;
    }
    /**
     * Set VersisCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaVersisCode $versisCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRisk
     */
    public function setVersisCode(\Mu4ddi3\Compensa\Webservice\StructType\CompensaVersisCode $versisCode = null)
    {
        if (is_null($versisCode) || (is_array($versisCode) && empty($versisCode))) {
            unset($this->VersisCode);
        } else {
            $this->VersisCode = $versisCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaRisk
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
