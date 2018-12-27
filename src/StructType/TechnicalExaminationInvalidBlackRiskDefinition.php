<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TechnicalExaminationInvalidBlackRiskDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:TechnicalExaminationInvalidBlackRiskDefinition
 * @subpackage Structs
 */
class TechnicalExaminationInvalidBlackRiskDefinition extends BlackRiskDefinition
{
    /**
     * The TechnicalExaminationInvalidBlackRiskRules
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTechnicalExaminationInvalidBlackRiskRule
     */
    public $TechnicalExaminationInvalidBlackRiskRules;
    /**
     * Constructor method for TechnicalExaminationInvalidBlackRiskDefinition
     * @uses TechnicalExaminationInvalidBlackRiskDefinition::setTechnicalExaminationInvalidBlackRiskRules()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTechnicalExaminationInvalidBlackRiskRule $technicalExaminationInvalidBlackRiskRules
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTechnicalExaminationInvalidBlackRiskRule $technicalExaminationInvalidBlackRiskRules = null)
    {
        $this
            ->setTechnicalExaminationInvalidBlackRiskRules($technicalExaminationInvalidBlackRiskRules);
    }
    /**
     * Get TechnicalExaminationInvalidBlackRiskRules value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTechnicalExaminationInvalidBlackRiskRule|null
     */
    public function getTechnicalExaminationInvalidBlackRiskRules()
    {
        return isset($this->TechnicalExaminationInvalidBlackRiskRules) ? $this->TechnicalExaminationInvalidBlackRiskRules : null;
    }
    /**
     * Set TechnicalExaminationInvalidBlackRiskRules value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTechnicalExaminationInvalidBlackRiskRule $technicalExaminationInvalidBlackRiskRules
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskDefinition
     */
    public function setTechnicalExaminationInvalidBlackRiskRules(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTechnicalExaminationInvalidBlackRiskRule $technicalExaminationInvalidBlackRiskRules = null)
    {
        if (is_null($technicalExaminationInvalidBlackRiskRules) || (is_array($technicalExaminationInvalidBlackRiskRules) && empty($technicalExaminationInvalidBlackRiskRules))) {
            unset($this->TechnicalExaminationInvalidBlackRiskRules);
        } else {
            $this->TechnicalExaminationInvalidBlackRiskRules = $technicalExaminationInvalidBlackRiskRules;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TechnicalExaminationInvalidBlackRiskDefinition
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
