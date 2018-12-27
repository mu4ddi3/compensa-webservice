<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SupressedOwnContributionCorrectionDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:SupressedOwnContributionCorrectionDefinition
 * @subpackage Structs
 */
class SupressedOwnContributionCorrectionDefinition extends DiscountDefinition
{
    /**
     * The CorrectionFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSupressedOwnContributionCorrectionFactor
     */
    public $CorrectionFactors;
    /**
     * Constructor method for SupressedOwnContributionCorrectionDefinition
     * @uses SupressedOwnContributionCorrectionDefinition::setCorrectionFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSupressedOwnContributionCorrectionFactor $correctionFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSupressedOwnContributionCorrectionFactor $correctionFactors = null)
    {
        $this
            ->setCorrectionFactors($correctionFactors);
    }
    /**
     * Get CorrectionFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSupressedOwnContributionCorrectionFactor|null
     */
    public function getCorrectionFactors()
    {
        return isset($this->CorrectionFactors) ? $this->CorrectionFactors : null;
    }
    /**
     * Set CorrectionFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSupressedOwnContributionCorrectionFactor $correctionFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionDefinition
     */
    public function setCorrectionFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfSupressedOwnContributionCorrectionFactor $correctionFactors = null)
    {
        if (is_null($correctionFactors) || (is_array($correctionFactors) && empty($correctionFactors))) {
            unset($this->CorrectionFactors);
        } else {
            $this->CorrectionFactors = $correctionFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrectionDefinition
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
