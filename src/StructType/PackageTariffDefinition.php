<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageTariffDefinition
 * @subpackage Structs
 */
class PackageTariffDefinition extends MotorTariffDefinition
{
    /**
     * The IsPackageSpecyficConditionDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPackageSpecyficConditionDescription;
    /**
     * The PackageConditionsDefinition
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PackageAvaliabilityConditionsDefinition
     */
    public $PackageConditionsDefinition;
    /**
     * The SpecificPackageConditionsDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SpecificPackageConditionsDescription;
    /**
     * Constructor method for PackageTariffDefinition
     * @uses PackageTariffDefinition::setIsPackageSpecyficConditionDescription()
     * @uses PackageTariffDefinition::setPackageConditionsDefinition()
     * @uses PackageTariffDefinition::setSpecificPackageConditionsDescription()
     * @param bool $isPackageSpecyficConditionDescription
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageAvaliabilityConditionsDefinition $packageConditionsDefinition
     * @param string $specificPackageConditionsDescription
     */
    public function __construct($isPackageSpecyficConditionDescription = null, \Mu4ddi3\Compensa\Webservice\StructType\PackageAvaliabilityConditionsDefinition $packageConditionsDefinition = null, $specificPackageConditionsDescription = null)
    {
        $this
            ->setIsPackageSpecyficConditionDescription($isPackageSpecyficConditionDescription)
            ->setPackageConditionsDefinition($packageConditionsDefinition)
            ->setSpecificPackageConditionsDescription($specificPackageConditionsDescription);
    }
    /**
     * Get IsPackageSpecyficConditionDescription value
     * @return bool|null
     */
    public function getIsPackageSpecyficConditionDescription()
    {
        return $this->IsPackageSpecyficConditionDescription;
    }
    /**
     * Set IsPackageSpecyficConditionDescription value
     * @param bool $isPackageSpecyficConditionDescription
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageTariffDefinition
     */
    public function setIsPackageSpecyficConditionDescription($isPackageSpecyficConditionDescription = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPackageSpecyficConditionDescription) && !is_bool($isPackageSpecyficConditionDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPackageSpecyficConditionDescription)), __LINE__);
        }
        $this->IsPackageSpecyficConditionDescription = $isPackageSpecyficConditionDescription;
        return $this;
    }
    /**
     * Get PackageConditionsDefinition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAvaliabilityConditionsDefinition|null
     */
    public function getPackageConditionsDefinition()
    {
        return isset($this->PackageConditionsDefinition) ? $this->PackageConditionsDefinition : null;
    }
    /**
     * Set PackageConditionsDefinition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PackageAvaliabilityConditionsDefinition $packageConditionsDefinition
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageTariffDefinition
     */
    public function setPackageConditionsDefinition(\Mu4ddi3\Compensa\Webservice\StructType\PackageAvaliabilityConditionsDefinition $packageConditionsDefinition = null)
    {
        if (is_null($packageConditionsDefinition) || (is_array($packageConditionsDefinition) && empty($packageConditionsDefinition))) {
            unset($this->PackageConditionsDefinition);
        } else {
            $this->PackageConditionsDefinition = $packageConditionsDefinition;
        }
        return $this;
    }
    /**
     * Get SpecificPackageConditionsDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSpecificPackageConditionsDescription()
    {
        return isset($this->SpecificPackageConditionsDescription) ? $this->SpecificPackageConditionsDescription : null;
    }
    /**
     * Set SpecificPackageConditionsDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $specificPackageConditionsDescription
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageTariffDefinition
     */
    public function setSpecificPackageConditionsDescription($specificPackageConditionsDescription = null)
    {
        // validation for constraint: string
        if (!is_null($specificPackageConditionsDescription) && !is_string($specificPackageConditionsDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($specificPackageConditionsDescription)), __LINE__);
        }
        if (is_null($specificPackageConditionsDescription) || (is_array($specificPackageConditionsDescription) && empty($specificPackageConditionsDescription))) {
            unset($this->SpecificPackageConditionsDescription);
        } else {
            $this->SpecificPackageConditionsDescription = $specificPackageConditionsDescription;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageTariffDefinition
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
