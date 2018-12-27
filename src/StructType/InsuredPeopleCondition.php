<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InsuredPeopleCondition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InsuredPeopleCondition
 * @subpackage Structs
 */
class InsuredPeopleCondition extends AvailabilityConditionBase
{
    /**
     * The InsuredItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredItem
     */
    public $InsuredItems;
    /**
     * Constructor method for InsuredPeopleCondition
     * @uses InsuredPeopleCondition::setInsuredItems()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredItem $insuredItems
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredItem $insuredItems = null)
    {
        $this
            ->setInsuredItems($insuredItems);
    }
    /**
     * Get InsuredItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredItem|null
     */
    public function getInsuredItems()
    {
        return isset($this->InsuredItems) ? $this->InsuredItems : null;
    }
    /**
     * Set InsuredItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredItem $insuredItems
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredPeopleCondition
     */
    public function setInsuredItems(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredItem $insuredItems = null)
    {
        if (is_null($insuredItems) || (is_array($insuredItems) && empty($insuredItems))) {
            unset($this->InsuredItems);
        } else {
            $this->InsuredItems = $insuredItems;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InsuredPeopleCondition
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
