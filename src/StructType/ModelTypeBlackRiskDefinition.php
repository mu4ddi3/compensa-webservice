<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModelTypeBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ModelTypeBlackRiskDefinition
 * @subpackage Structs
 */
class ModelTypeBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The ModelTypeBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeBlackRiskRule
     */
    public $ModelTypeBlackRiskRules;
    /**
     * Constructor method for ModelTypeBlackRiskDefinition
     * @uses ModelTypeBlackRiskDefinition::setModelTypeBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeBlackRiskRule $modelTypeBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeBlackRiskRule $modelTypeBlackRiskRules = null)
    {
        $this
            ->setModelTypeBlackRiskRules($modelTypeBlackRiskRules);
    }
    /**
     * Get ModelTypeBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeBlackRiskRule|null
     */
    public function getModelTypeBlackRiskRules()
    {
        return isset($this->ModelTypeBlackRiskRules) ? $this->ModelTypeBlackRiskRules : null;
    }
    /**
     * Set ModelTypeBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeBlackRiskRule $modelTypeBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ModelTypeBlackRiskDefinition
     */
    public function setModelTypeBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfModelTypeBlackRiskRule $modelTypeBlackRiskRules = null)
    {
        if (is_null($modelTypeBlackRiskRules) || (is_array($modelTypeBlackRiskRules) && empty($modelTypeBlackRiskRules))) {
            unset($this->ModelTypeBlackRiskRules);
        } else {
            $this->ModelTypeBlackRiskRules = $modelTypeBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ModelTypeBlackRiskDefinition
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
