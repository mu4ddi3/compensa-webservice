<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MyBusinessVariantCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MyBusinessVariantCondition
 * @subpackage Structs
 */
class MyBusinessVariantCondition extends AvailabilityConditionBase
{
    /**
     * The Business19035ContractVariants
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant
     */
    public $Business19035ContractVariants;
    /**
     * Constructor method for MyBusinessVariantCondition
     * @uses MyBusinessVariantCondition::setBusiness19035ContractVariants()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant $business19035ContractVariants
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant $business19035ContractVariants = null)
    {
        $this
            ->setBusiness19035ContractVariants($business19035ContractVariants);
    }
    /**
     * Get Business19035ContractVariants value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant|null
     */
    public function getBusiness19035ContractVariants()
    {
        return isset($this->Business19035ContractVariants) ? $this->Business19035ContractVariants : null;
    }
    /**
     * Set Business19035ContractVariants value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant $business19035ContractVariants
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessVariantCondition
     */
    public function setBusiness19035ContractVariants(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBusiness19035ContractVariant $business19035ContractVariants = null)
    {
        if (is_null($business19035ContractVariants) || (is_array($business19035ContractVariants) && empty($business19035ContractVariants))) {
            unset($this->Business19035ContractVariants);
        } else {
            $this->Business19035ContractVariants = $business19035ContractVariants;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessVariantCondition
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
