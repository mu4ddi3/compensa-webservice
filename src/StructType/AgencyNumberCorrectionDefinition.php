<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencyNumberCorrectionDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AgencyNumberCorrectionDefinition
 * @subpackage Structs
 */
class AgencyNumberCorrectionDefinition extends DiscountDefinition
{
    /**
     * The AgencyNumberCorrectionFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyNumberCorrectionFactor
     */
    public $AgencyNumberCorrectionFactors;
    /**
     * Constructor method for AgencyNumberCorrectionDefinition
     * @uses AgencyNumberCorrectionDefinition::setAgencyNumberCorrectionFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyNumberCorrectionFactor $agencyNumberCorrectionFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyNumberCorrectionFactor $agencyNumberCorrectionFactors = null)
    {
        $this
            ->setAgencyNumberCorrectionFactors($agencyNumberCorrectionFactors);
    }
    /**
     * Get AgencyNumberCorrectionFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyNumberCorrectionFactor|null
     */
    public function getAgencyNumberCorrectionFactors()
    {
        return isset($this->AgencyNumberCorrectionFactors) ? $this->AgencyNumberCorrectionFactors : null;
    }
    /**
     * Set AgencyNumberCorrectionFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyNumberCorrectionFactor $agencyNumberCorrectionFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrectionDefinition
     */
    public function setAgencyNumberCorrectionFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAgencyNumberCorrectionFactor $agencyNumberCorrectionFactors = null)
    {
        if (is_null($agencyNumberCorrectionFactors) || (is_array($agencyNumberCorrectionFactors) && empty($agencyNumberCorrectionFactors))) {
            unset($this->AgencyNumberCorrectionFactors);
        } else {
            $this->AgencyNumberCorrectionFactors = $agencyNumberCorrectionFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgencyNumberCorrectionDefinition
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
