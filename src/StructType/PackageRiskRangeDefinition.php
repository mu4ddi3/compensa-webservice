<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageRiskRangeDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageRiskRangeDefinition
 * @subpackage Structs
 */
class PackageRiskRangeDefinition extends AbstractStructBase
{
    /**
     * The Elements
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageElement
     */
    public $Elements;
    /**
     * The IsAvaliable
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAvaliable;
    /**
     * The IsObligatory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsObligatory;
    /**
     * The IsSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSelected;
    /**
     * Constructor method for PackageRiskRangeDefinition
     * @uses PackageRiskRangeDefinition::setElements()
     * @uses PackageRiskRangeDefinition::setIsAvaliable()
     * @uses PackageRiskRangeDefinition::setIsObligatory()
     * @uses PackageRiskRangeDefinition::setIsSelected()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageElement $elements
     * @param bool $isAvaliable
     * @param bool $isObligatory
     * @param bool $isSelected
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageElement $elements = null, $isAvaliable = null, $isObligatory = null, $isSelected = null)
    {
        $this
            ->setElements($elements)
            ->setIsAvaliable($isAvaliable)
            ->setIsObligatory($isObligatory)
            ->setIsSelected($isSelected);
    }
    /**
     * Get Elements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageElement|null
     */
    public function getElements()
    {
        return isset($this->Elements) ? $this->Elements : null;
    }
    /**
     * Set Elements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageElement $elements
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition
     */
    public function setElements(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPackageElement $elements = null)
    {
        if (is_null($elements) || (is_array($elements) && empty($elements))) {
            unset($this->Elements);
        } else {
            $this->Elements = $elements;
        }
        return $this;
    }
    /**
     * Get IsAvaliable value
     * @return bool|null
     */
    public function getIsAvaliable()
    {
        return $this->IsAvaliable;
    }
    /**
     * Set IsAvaliable value
     * @param bool $isAvaliable
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition
     */
    public function setIsAvaliable($isAvaliable = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAvaliable) && !is_bool($isAvaliable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAvaliable)), __LINE__);
        }
        $this->IsAvaliable = $isAvaliable;
        return $this;
    }
    /**
     * Get IsObligatory value
     * @return bool|null
     */
    public function getIsObligatory()
    {
        return $this->IsObligatory;
    }
    /**
     * Set IsObligatory value
     * @param bool $isObligatory
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition
     */
    public function setIsObligatory($isObligatory = null)
    {
        // validation for constraint: boolean
        if (!is_null($isObligatory) && !is_bool($isObligatory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isObligatory)), __LINE__);
        }
        $this->IsObligatory = $isObligatory;
        return $this;
    }
    /**
     * Get IsSelected value
     * @return bool|null
     */
    public function getIsSelected()
    {
        return $this->IsSelected;
    }
    /**
     * Set IsSelected value
     * @param bool $isSelected
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition
     */
    public function setIsSelected($isSelected = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSelected) && !is_bool($isSelected)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSelected)), __LINE__);
        }
        $this->IsSelected = $isSelected;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageRiskRangeDefinition
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
