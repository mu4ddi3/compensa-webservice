<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CentralBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CentralBlackRiskDefinition
 * @subpackage Structs
 */
class CentralBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The CentralBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralBlackRiskRule
     */
    public $CentralBlackRiskRules;
    /**
     * Constructor method for CentralBlackRiskDefinition
     * @uses CentralBlackRiskDefinition::setCentralBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralBlackRiskRule $centralBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralBlackRiskRule $centralBlackRiskRules = null)
    {
        $this
            ->setCentralBlackRiskRules($centralBlackRiskRules);
    }
    /**
     * Get CentralBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralBlackRiskRule|null
     */
    public function getCentralBlackRiskRules()
    {
        return isset($this->CentralBlackRiskRules) ? $this->CentralBlackRiskRules : null;
    }
    /**
     * Set CentralBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralBlackRiskRule $centralBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskDefinition
     */
    public function setCentralBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfCentralBlackRiskRule $centralBlackRiskRules = null)
    {
        if (is_null($centralBlackRiskRules) || (is_array($centralBlackRiskRules) && empty($centralBlackRiskRules))) {
            unset($this->CentralBlackRiskRules);
        } else {
            $this->CentralBlackRiskRules = $centralBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CentralBlackRiskDefinition
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
