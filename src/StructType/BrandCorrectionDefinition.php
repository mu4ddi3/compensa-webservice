<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandCorrectionDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrandCorrectionDefinition
 * @subpackage Structs
 */
class BrandCorrectionDefinition extends DiscountDefinition
{
    /**
     * The BrandCorrectionFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandCorrectionFactor
     */
    public $BrandCorrectionFactors;
    /**
     * Constructor method for BrandCorrectionDefinition
     * @uses BrandCorrectionDefinition::setBrandCorrectionFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandCorrectionFactor $brandCorrectionFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandCorrectionFactor $brandCorrectionFactors = null)
    {
        $this
            ->setBrandCorrectionFactors($brandCorrectionFactors);
    }
    /**
     * Get BrandCorrectionFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandCorrectionFactor|null
     */
    public function getBrandCorrectionFactors()
    {
        return isset($this->BrandCorrectionFactors) ? $this->BrandCorrectionFactors : null;
    }
    /**
     * Set BrandCorrectionFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandCorrectionFactor $brandCorrectionFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionDefinition
     */
    public function setBrandCorrectionFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandCorrectionFactor $brandCorrectionFactors = null)
    {
        if (is_null($brandCorrectionFactors) || (is_array($brandCorrectionFactors) && empty($brandCorrectionFactors))) {
            unset($this->BrandCorrectionFactors);
        } else {
            $this->BrandCorrectionFactors = $brandCorrectionFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandCorrectionDefinition
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
