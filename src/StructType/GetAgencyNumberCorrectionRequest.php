<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgencyNumberCorrectionRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAgencyNumberCorrectionRequest
 * @subpackage Structs
 */
class GetAgencyNumberCorrectionRequest extends AbstractStructBase
{
    /**
     * The MagicNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MagicNumber;
    /**
     * Constructor method for GetAgencyNumberCorrectionRequest
     * @uses GetAgencyNumberCorrectionRequest::setMagicNumber()
     * @param string $magicNumber
     */
    public function __construct($magicNumber = null)
    {
        $this
            ->setMagicNumber($magicNumber);
    }
    /**
     * Get MagicNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMagicNumber()
    {
        return isset($this->MagicNumber) ? $this->MagicNumber : null;
    }
    /**
     * Set MagicNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $magicNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAgencyNumberCorrectionRequest
     */
    public function setMagicNumber($magicNumber = null)
    {
        // validation for constraint: string
        if (!is_null($magicNumber) && !is_string($magicNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($magicNumber)), __LINE__);
        }
        if (is_null($magicNumber) || (is_array($magicNumber) && empty($magicNumber))) {
            unset($this->MagicNumber);
        } else {
            $this->MagicNumber = $magicNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAgencyNumberCorrectionRequest
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
