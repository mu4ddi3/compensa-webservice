<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MTPLOtherClaim StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MTPLOtherClaim
 * @subpackage Structs
 */
class MTPLOtherClaim extends MTPLClaim
{
    /**
     * The OtherClaimType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\OtherClaimType
     */
    public $OtherClaimType;
    /**
     * Constructor method for MTPLOtherClaim
     * @uses MTPLOtherClaim::setOtherClaimType()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OtherClaimType $otherClaimType
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\OtherClaimType $otherClaimType = null)
    {
        $this
            ->setOtherClaimType($otherClaimType);
    }
    /**
     * Get OtherClaimType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OtherClaimType|null
     */
    public function getOtherClaimType()
    {
        return isset($this->OtherClaimType) ? $this->OtherClaimType : null;
    }
    /**
     * Set OtherClaimType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\OtherClaimType $otherClaimType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MTPLOtherClaim
     */
    public function setOtherClaimType(\Mu4ddi3\Compensa\Webservice\StructType\OtherClaimType $otherClaimType = null)
    {
        if (is_null($otherClaimType) || (is_array($otherClaimType) && empty($otherClaimType))) {
            unset($this->OtherClaimType);
        } else {
            $this->OtherClaimType = $otherClaimType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MTPLOtherClaim
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
