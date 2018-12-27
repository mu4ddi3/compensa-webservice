<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OpVariantCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OpVariantCondition
 * @subpackage Structs
 */
class OpVariantCondition extends AvailabilityConditionBase
{
    /**
     * The OpVariants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants
     */
    public $OpVariants;
    /**
     * Constructor method for OpVariantCondition
     * @uses OpVariantCondition::setOpVariants()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $opVariants
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $opVariants = null)
    {
        $this
            ->setOpVariants($opVariants);
    }
    /**
     * Get OpVariants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants|null
     */
    public function getOpVariants()
    {
        return isset($this->OpVariants) ? $this->OpVariants : null;
    }
    /**
     * Set OpVariants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $opVariants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpVariantCondition
     */
    public function setOpVariants(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfTariffVariants $opVariants = null)
    {
        if (is_null($opVariants) || (is_array($opVariants) && empty($opVariants))) {
            unset($this->OpVariants);
        } else {
            $this->OpVariants = $opVariants;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OpVariantCondition
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
