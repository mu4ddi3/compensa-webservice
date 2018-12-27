<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIAFMIncreaseResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIAFMIncreaseResponse
 * @subpackage Structs
 */
class GetIAFMIncreaseResponse extends AbstractStructBase
{
    /**
     * The IAFMIncrease
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncrease
     */
    public $IAFMIncrease;
    /**
     * Constructor method for GetIAFMIncreaseResponse
     * @uses GetIAFMIncreaseResponse::setIAFMIncrease()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncrease $iAFMIncrease
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\IAFMIncrease $iAFMIncrease = null)
    {
        $this
            ->setIAFMIncrease($iAFMIncrease);
    }
    /**
     * Get IAFMIncrease value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncrease|null
     */
    public function getIAFMIncrease()
    {
        return isset($this->IAFMIncrease) ? $this->IAFMIncrease : null;
    }
    /**
     * Set IAFMIncrease value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\IAFMIncrease $iAFMIncrease
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIAFMIncreaseResponse
     */
    public function setIAFMIncrease(\Mu4ddi3\Compensa\Webservice\StructType\IAFMIncrease $iAFMIncrease = null)
    {
        if (is_null($iAFMIncrease) || (is_array($iAFMIncrease) && empty($iAFMIncrease))) {
            unset($this->IAFMIncrease);
        } else {
            $this->IAFMIncrease = $iAFMIncrease;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIAFMIncreaseResponse
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
