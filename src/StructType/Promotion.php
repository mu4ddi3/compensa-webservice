<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Promotion StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Promotion
 * @subpackage Structs
 */
class Promotion extends AbstractStructBase
{
    /**
     * The BasicData
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BasicData
     */
    public $BasicData;
    /**
     * The Conditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Conditions
     */
    public $Conditions;
    /**
     * The Files
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile
     */
    public $Files;
    /**
     * The IsValid
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsValid;
    /**
     * The Properties
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Properties
     */
    public $Properties;
    /**
     * Constructor method for Promotion
     * @uses Promotion::setBasicData()
     * @uses Promotion::setConditions()
     * @uses Promotion::setFiles()
     * @uses Promotion::setIsValid()
     * @uses Promotion::setProperties()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasicData $basicData
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Conditions $conditions
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile $files
     * @param bool $isValid
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Properties $properties
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\BasicData $basicData = null, \Mu4ddi3\Compensa\Webservice\StructType\Conditions $conditions = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile $files = null, $isValid = null, \Mu4ddi3\Compensa\Webservice\StructType\Properties $properties = null)
    {
        $this
            ->setBasicData($basicData)
            ->setConditions($conditions)
            ->setFiles($files)
            ->setIsValid($isValid)
            ->setProperties($properties);
    }
    /**
     * Get BasicData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicData|null
     */
    public function getBasicData()
    {
        return isset($this->BasicData) ? $this->BasicData : null;
    }
    /**
     * Set BasicData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasicData $basicData
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Promotion
     */
    public function setBasicData(\Mu4ddi3\Compensa\Webservice\StructType\BasicData $basicData = null)
    {
        if (is_null($basicData) || (is_array($basicData) && empty($basicData))) {
            unset($this->BasicData);
        } else {
            $this->BasicData = $basicData;
        }
        return $this;
    }
    /**
     * Get Conditions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Conditions|null
     */
    public function getConditions()
    {
        return isset($this->Conditions) ? $this->Conditions : null;
    }
    /**
     * Set Conditions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Conditions $conditions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Promotion
     */
    public function setConditions(\Mu4ddi3\Compensa\Webservice\StructType\Conditions $conditions = null)
    {
        if (is_null($conditions) || (is_array($conditions) && empty($conditions))) {
            unset($this->Conditions);
        } else {
            $this->Conditions = $conditions;
        }
        return $this;
    }
    /**
     * Get Files value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile|null
     */
    public function getFiles()
    {
        return isset($this->Files) ? $this->Files : null;
    }
    /**
     * Set Files value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile $files
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Promotion
     */
    public function setFiles(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfPromotionFile $files = null)
    {
        if (is_null($files) || (is_array($files) && empty($files))) {
            unset($this->Files);
        } else {
            $this->Files = $files;
        }
        return $this;
    }
    /**
     * Get IsValid value
     * @return bool|null
     */
    public function getIsValid()
    {
        return $this->IsValid;
    }
    /**
     * Set IsValid value
     * @param bool $isValid
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Promotion
     */
    public function setIsValid($isValid = null)
    {
        // validation for constraint: boolean
        if (!is_null($isValid) && !is_bool($isValid)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isValid)), __LINE__);
        }
        $this->IsValid = $isValid;
        return $this;
    }
    /**
     * Get Properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Properties|null
     */
    public function getProperties()
    {
        return isset($this->Properties) ? $this->Properties : null;
    }
    /**
     * Set Properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Properties $properties
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Promotion
     */
    public function setProperties(\Mu4ddi3\Compensa\Webservice\StructType\Properties $properties = null)
    {
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->Properties);
        } else {
            $this->Properties = $properties;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Promotion
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
