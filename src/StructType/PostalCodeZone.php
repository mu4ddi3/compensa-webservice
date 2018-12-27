<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PostalCodeZone StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PostalCodeZone
 * @subpackage Structs
 */
class PostalCodeZone extends AbstractStructBase
{
    /**
     * The PostalCodePattern
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCodePattern;
    /**
     * The Zone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Zone;
    /**
     * Constructor method for PostalCodeZone
     * @uses PostalCodeZone::setPostalCodePattern()
     * @uses PostalCodeZone::setZone()
     * @param string $postalCodePattern
     * @param int $zone
     */
    public function __construct($postalCodePattern = null, $zone = null)
    {
        $this
            ->setPostalCodePattern($postalCodePattern)
            ->setZone($zone);
    }
    /**
     * Get PostalCodePattern value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCodePattern()
    {
        return isset($this->PostalCodePattern) ? $this->PostalCodePattern : null;
    }
    /**
     * Set PostalCodePattern value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCodePattern
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone
     */
    public function setPostalCodePattern($postalCodePattern = null)
    {
        // validation for constraint: string
        if (!is_null($postalCodePattern) && !is_string($postalCodePattern)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCodePattern)), __LINE__);
        }
        if (is_null($postalCodePattern) || (is_array($postalCodePattern) && empty($postalCodePattern))) {
            unset($this->PostalCodePattern);
        } else {
            $this->PostalCodePattern = $postalCodePattern;
        }
        return $this;
    }
    /**
     * Get Zone value
     * @return int|null
     */
    public function getZone()
    {
        return $this->Zone;
    }
    /**
     * Set Zone value
     * @param int $zone
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone
     */
    public function setZone($zone = null)
    {
        // validation for constraint: int
        if (!is_null($zone) && !is_numeric($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zone)), __LINE__);
        }
        $this->Zone = $zone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PostalCodeZone
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
