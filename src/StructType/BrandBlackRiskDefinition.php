<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrandBlackRiskDefinition
 * @subpackage Structs
 */
class BrandBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The BrandBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandBlackRiskRule
     */
    public $BrandBlackRiskRules;
    /**
     * Constructor method for BrandBlackRiskDefinition
     * @uses BrandBlackRiskDefinition::setBrandBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandBlackRiskRule $brandBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandBlackRiskRule $brandBlackRiskRules = null)
    {
        $this
            ->setBrandBlackRiskRules($brandBlackRiskRules);
    }
    /**
     * Get BrandBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandBlackRiskRule|null
     */
    public function getBrandBlackRiskRules()
    {
        return isset($this->BrandBlackRiskRules) ? $this->BrandBlackRiskRules : null;
    }
    /**
     * Set BrandBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandBlackRiskRule $brandBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskDefinition
     */
    public function setBrandBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandBlackRiskRule $brandBlackRiskRules = null)
    {
        if (is_null($brandBlackRiskRules) || (is_array($brandBlackRiskRules) && empty($brandBlackRiskRules))) {
            unset($this->BrandBlackRiskRules);
        } else {
            $this->BrandBlackRiskRules = $brandBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskDefinition
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
