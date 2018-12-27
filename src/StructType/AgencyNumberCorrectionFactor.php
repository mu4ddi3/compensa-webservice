<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyNumberCorrectionFactor StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AgencyNumberCorrectionFactor
 * @subpackage Structs
 */
class AgencyNumberCorrectionFactor extends AbstractStructBase
{
    /**
     * The AgencyNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AgencyNumber;
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Factor;
    /**
     * Constructor method for AgencyNumberCorrectionFactor
     * @uses AgencyNumberCorrectionFactor::setAgencyNumber()
     * @uses AgencyNumberCorrectionFactor::setFactor()
     * @param string $agencyNumber
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     */
    public function __construct($agencyNumber = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        $this
            ->setAgencyNumber($agencyNumber)
            ->setFactor($factor);
    }
    /**
     * Get AgencyNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAgencyNumber()
    {
        return isset($this->AgencyNumber) ? $this->AgencyNumber : null;
    }
    /**
     * Set AgencyNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $agencyNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrectionFactor
     */
    public function setAgencyNumber($agencyNumber = null)
    {
        // validation for constraint: string
        if (!is_null($agencyNumber) && !is_string($agencyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($agencyNumber)), __LINE__);
        }
        if (is_null($agencyNumber) || (is_array($agencyNumber) && empty($agencyNumber))) {
            unset($this->AgencyNumber);
        } else {
            $this->AgencyNumber = $agencyNumber;
        }
        return $this;
    }
    /**
     * Get Factor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getFactor()
    {
        return isset($this->Factor) ? $this->Factor : null;
    }
    /**
     * Set Factor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrectionFactor
     */
    public function setFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $factor = null)
    {
        if (is_null($factor) || (is_array($factor) && empty($factor))) {
            unset($this->Factor);
        } else {
            $this->Factor = $factor;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrectionFactor
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
