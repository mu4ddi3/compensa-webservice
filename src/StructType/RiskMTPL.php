<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RiskMTPL StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RiskMTPL
 * @subpackage Structs
 */
class RiskMTPL extends Risk
{
    /**
     * The MTPLVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RiskMTPLVariant
     */
    public $MTPLVariant;
    /**
     * Constructor method for RiskMTPL
     * @uses RiskMTPL::setMTPLVariant()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskMTPLVariant $mTPLVariant
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\RiskMTPLVariant $mTPLVariant = null)
    {
        $this
            ->setMTPLVariant($mTPLVariant);
    }
    /**
     * Get MTPLVariant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskMTPLVariant|null
     */
    public function getMTPLVariant()
    {
        return isset($this->MTPLVariant) ? $this->MTPLVariant : null;
    }
    /**
     * Set MTPLVariant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RiskMTPLVariant $mTPLVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskMTPL
     */
    public function setMTPLVariant(\Mu4ddi3\Compensa\Webservice\StructType\RiskMTPLVariant $mTPLVariant = null)
    {
        if (is_null($mTPLVariant) || (is_array($mTPLVariant) && empty($mTPLVariant))) {
            unset($this->MTPLVariant);
        } else {
            $this->MTPLVariant = $mTPLVariant;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RiskMTPL
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
