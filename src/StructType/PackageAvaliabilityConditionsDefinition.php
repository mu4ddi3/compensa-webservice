<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageAvaliabilityConditionsDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageAvaliabilityConditionsDefinition
 * @subpackage Structs
 */
class PackageAvaliabilityConditionsDefinition extends AvaliabilityConditionsDefinition
{
    /**
     * The PackageRangeDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\TariffPackageRangeDefinition
     */
    public $PackageRangeDefinition;
    /**
     * The TypeOfPolicyAvaliabilityCondition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\TypeOfPolicyAvaliabilityCondition
     */
    public $TypeOfPolicyAvaliabilityCondition;
    /**
     * Constructor method for PackageAvaliabilityConditionsDefinition
     * @uses PackageAvaliabilityConditionsDefinition::setPackageRangeDefinition()
     * @uses PackageAvaliabilityConditionsDefinition::setTypeOfPolicyAvaliabilityCondition()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TariffPackageRangeDefinition $packageRangeDefinition
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TypeOfPolicyAvaliabilityCondition $typeOfPolicyAvaliabilityCondition
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\TariffPackageRangeDefinition $packageRangeDefinition = null, \Mu4ddi3\Compensa\Webservice\StructType\TypeOfPolicyAvaliabilityCondition $typeOfPolicyAvaliabilityCondition = null)
    {
        $this
            ->setPackageRangeDefinition($packageRangeDefinition)
            ->setTypeOfPolicyAvaliabilityCondition($typeOfPolicyAvaliabilityCondition);
    }
    /**
     * Get PackageRangeDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TariffPackageRangeDefinition|null
     */
    public function getPackageRangeDefinition()
    {
        return isset($this->PackageRangeDefinition) ? $this->PackageRangeDefinition : null;
    }
    /**
     * Set PackageRangeDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TariffPackageRangeDefinition $packageRangeDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAvaliabilityConditionsDefinition
     */
    public function setPackageRangeDefinition(\Mu4ddi3\Compensa\Webservice\StructType\TariffPackageRangeDefinition $packageRangeDefinition = null)
    {
        if (is_null($packageRangeDefinition) || (is_array($packageRangeDefinition) && empty($packageRangeDefinition))) {
            unset($this->PackageRangeDefinition);
        } else {
            $this->PackageRangeDefinition = $packageRangeDefinition;
        }
        return $this;
    }
    /**
     * Get TypeOfPolicyAvaliabilityCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\TypeOfPolicyAvaliabilityCondition|null
     */
    public function getTypeOfPolicyAvaliabilityCondition()
    {
        return isset($this->TypeOfPolicyAvaliabilityCondition) ? $this->TypeOfPolicyAvaliabilityCondition : null;
    }
    /**
     * Set TypeOfPolicyAvaliabilityCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\TypeOfPolicyAvaliabilityCondition $typeOfPolicyAvaliabilityCondition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAvaliabilityConditionsDefinition
     */
    public function setTypeOfPolicyAvaliabilityCondition(\Mu4ddi3\Compensa\Webservice\StructType\TypeOfPolicyAvaliabilityCondition $typeOfPolicyAvaliabilityCondition = null)
    {
        if (is_null($typeOfPolicyAvaliabilityCondition) || (is_array($typeOfPolicyAvaliabilityCondition) && empty($typeOfPolicyAvaliabilityCondition))) {
            unset($this->TypeOfPolicyAvaliabilityCondition);
        } else {
            $this->TypeOfPolicyAvaliabilityCondition = $typeOfPolicyAvaliabilityCondition;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAvaliabilityConditionsDefinition
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
