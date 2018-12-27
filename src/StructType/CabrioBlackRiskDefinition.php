<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabrioBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CabrioBlackRiskDefinition
 * @subpackage Structs
 */
class CabrioBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The CabrioBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCabrioBlackRiskRule
     */
    public $CabrioBlackRiskRules;
    /**
     * Constructor method for CabrioBlackRiskDefinition
     * @uses CabrioBlackRiskDefinition::setCabrioBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCabrioBlackRiskRule $cabrioBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCabrioBlackRiskRule $cabrioBlackRiskRules = null)
    {
        $this
            ->setCabrioBlackRiskRules($cabrioBlackRiskRules);
    }
    /**
     * Get CabrioBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCabrioBlackRiskRule|null
     */
    public function getCabrioBlackRiskRules()
    {
        return isset($this->CabrioBlackRiskRules) ? $this->CabrioBlackRiskRules : null;
    }
    /**
     * Set CabrioBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCabrioBlackRiskRule $cabrioBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskDefinition
     */
    public function setCabrioBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCabrioBlackRiskRule $cabrioBlackRiskRules = null)
    {
        if (is_null($cabrioBlackRiskRules) || (is_array($cabrioBlackRiskRules) && empty($cabrioBlackRiskRules))) {
            unset($this->CabrioBlackRiskRules);
        } else {
            $this->CabrioBlackRiskRules = $cabrioBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CabrioBlackRiskDefinition
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
