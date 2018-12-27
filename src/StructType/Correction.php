<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Correction StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Correction
 * @subpackage Structs
 */
class Correction extends AbstractStructBase
{
    /**
     * The Factor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Factor;
    /**
     * The PropertyAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $PropertyAge;
    /**
     * The PropertyPartner
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PartnerType
     */
    public $PropertyPartner;
    /**
     * Constructor method for Correction
     * @uses Correction::setFactor()
     * @uses Correction::setPropertyAge()
     * @uses Correction::setPropertyPartner()
     * @param float $factor
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $propertyAge
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $propertyPartner
     */
    public function __construct($factor = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $propertyAge = null, \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $propertyPartner = null)
    {
        $this
            ->setFactor($factor)
            ->setPropertyAge($propertyAge)
            ->setPropertyPartner($propertyPartner);
    }
    /**
     * Get Factor value
     * @return float|null
     */
    public function getFactor()
    {
        return $this->Factor;
    }
    /**
     * Set Factor value
     * @param float $factor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction
     */
    public function setFactor($factor = null)
    {
        $this->Factor = $factor;
        return $this;
    }
    /**
     * Get PropertyAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function getPropertyAge()
    {
        return isset($this->PropertyAge) ? $this->PropertyAge : null;
    }
    /**
     * Set PropertyAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $propertyAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction
     */
    public function setPropertyAge(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $propertyAge = null)
    {
        if (is_null($propertyAge) || (is_array($propertyAge) && empty($propertyAge))) {
            unset($this->PropertyAge);
        } else {
            $this->PropertyAge = $propertyAge;
        }
        return $this;
    }
    /**
     * Get PropertyPartner value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerType|null
     */
    public function getPropertyPartner()
    {
        return isset($this->PropertyPartner) ? $this->PropertyPartner : null;
    }
    /**
     * Set PropertyPartner value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PartnerType $propertyPartner
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction
     */
    public function setPropertyPartner(\Mu4ddi3\Compensa\Webservice\StructType\PartnerType $propertyPartner = null)
    {
        if (is_null($propertyPartner) || (is_array($propertyPartner) && empty($propertyPartner))) {
            unset($this->PropertyPartner);
        } else {
            $this->PropertyPartner = $propertyPartner;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Correction
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
