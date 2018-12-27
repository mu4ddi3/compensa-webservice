<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkdCorrectionFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PkdCorrectionFactor
 * @subpackage Structs
 */
class PkdCorrectionFactor extends BaseFactorDefinition
{
    /**
     * The PkdCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PkdCode;
    /**
     * Constructor method for PkdCorrectionFactor
     * @uses PkdCorrectionFactor::setPkdCode()
     * @param string $pkdCode
     */
    public function __construct($pkdCode = null)
    {
        $this
            ->setPkdCode($pkdCode);
    }
    /**
     * Get PkdCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPkdCode()
    {
        return isset($this->PkdCode) ? $this->PkdCode : null;
    }
    /**
     * Set PkdCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pkdCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor
     */
    public function setPkdCode($pkdCode = null)
    {
        // validation for constraint: string
        if (!is_null($pkdCode) && !is_string($pkdCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pkdCode)), __LINE__);
        }
        if (is_null($pkdCode) || (is_array($pkdCode) && empty($pkdCode))) {
            unset($this->PkdCode);
        } else {
            $this->PkdCode = $pkdCode;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCorrectionFactor
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
