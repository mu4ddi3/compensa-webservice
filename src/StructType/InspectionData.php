<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InspectionData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:InspectionData
 * @subpackage Structs
 */
class InspectionData extends AbstractStructBase
{
    /**
     * The DamageDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DamageDescription;
    /**
     * The InspectionDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $InspectionDate;
    /**
     * The IsAnyDamage
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsAnyDamage;
    /**
     * The NumberOfCopiedKeys
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfCopiedKeys;
    /**
     * The NumberOfOriginalKeys
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfOriginalKeys;
    /**
     * The NumberOfPhotos
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPhotos;
    /**
     * The PhotoDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PhotoDate;
    /**
     * Constructor method for InspectionData
     * @uses InspectionData::setDamageDescription()
     * @uses InspectionData::setInspectionDate()
     * @uses InspectionData::setIsAnyDamage()
     * @uses InspectionData::setNumberOfCopiedKeys()
     * @uses InspectionData::setNumberOfOriginalKeys()
     * @uses InspectionData::setNumberOfPhotos()
     * @uses InspectionData::setPhotoDate()
     * @param string $damageDescription
     * @param string $inspectionDate
     * @param bool $isAnyDamage
     * @param int $numberOfCopiedKeys
     * @param int $numberOfOriginalKeys
     * @param int $numberOfPhotos
     * @param string $photoDate
     */
    public function __construct($damageDescription = null, $inspectionDate = null, $isAnyDamage = null, $numberOfCopiedKeys = null, $numberOfOriginalKeys = null, $numberOfPhotos = null, $photoDate = null)
    {
        $this
            ->setDamageDescription($damageDescription)
            ->setInspectionDate($inspectionDate)
            ->setIsAnyDamage($isAnyDamage)
            ->setNumberOfCopiedKeys($numberOfCopiedKeys)
            ->setNumberOfOriginalKeys($numberOfOriginalKeys)
            ->setNumberOfPhotos($numberOfPhotos)
            ->setPhotoDate($photoDate);
    }
    /**
     * Get DamageDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDamageDescription()
    {
        return isset($this->DamageDescription) ? $this->DamageDescription : null;
    }
    /**
     * Set DamageDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $damageDescription
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InspectionData
     */
    public function setDamageDescription($damageDescription = null)
    {
        // validation for constraint: string
        if (!is_null($damageDescription) && !is_string($damageDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($damageDescription)), __LINE__);
        }
        if (is_null($damageDescription) || (is_array($damageDescription) && empty($damageDescription))) {
            unset($this->DamageDescription);
        } else {
            $this->DamageDescription = $damageDescription;
        }
        return $this;
    }
    /**
     * Get InspectionDate value
     * @return string|null
     */
    public function getInspectionDate()
    {
        return $this->InspectionDate;
    }
    /**
     * Set InspectionDate value
     * @param string $inspectionDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InspectionData
     */
    public function setInspectionDate($inspectionDate = null)
    {
        // validation for constraint: string
        if (!is_null($inspectionDate) && !is_string($inspectionDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($inspectionDate)), __LINE__);
        }
        $this->InspectionDate = $inspectionDate;
        return $this;
    }
    /**
     * Get IsAnyDamage value
     * @return bool|null
     */
    public function getIsAnyDamage()
    {
        return $this->IsAnyDamage;
    }
    /**
     * Set IsAnyDamage value
     * @param bool $isAnyDamage
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InspectionData
     */
    public function setIsAnyDamage($isAnyDamage = null)
    {
        // validation for constraint: boolean
        if (!is_null($isAnyDamage) && !is_bool($isAnyDamage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isAnyDamage)), __LINE__);
        }
        $this->IsAnyDamage = $isAnyDamage;
        return $this;
    }
    /**
     * Get NumberOfCopiedKeys value
     * @return int|null
     */
    public function getNumberOfCopiedKeys()
    {
        return $this->NumberOfCopiedKeys;
    }
    /**
     * Set NumberOfCopiedKeys value
     * @param int $numberOfCopiedKeys
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InspectionData
     */
    public function setNumberOfCopiedKeys($numberOfCopiedKeys = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfCopiedKeys) && !is_numeric($numberOfCopiedKeys)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfCopiedKeys)), __LINE__);
        }
        $this->NumberOfCopiedKeys = $numberOfCopiedKeys;
        return $this;
    }
    /**
     * Get NumberOfOriginalKeys value
     * @return int|null
     */
    public function getNumberOfOriginalKeys()
    {
        return $this->NumberOfOriginalKeys;
    }
    /**
     * Set NumberOfOriginalKeys value
     * @param int $numberOfOriginalKeys
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InspectionData
     */
    public function setNumberOfOriginalKeys($numberOfOriginalKeys = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfOriginalKeys) && !is_numeric($numberOfOriginalKeys)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfOriginalKeys)), __LINE__);
        }
        $this->NumberOfOriginalKeys = $numberOfOriginalKeys;
        return $this;
    }
    /**
     * Get NumberOfPhotos value
     * @return int|null
     */
    public function getNumberOfPhotos()
    {
        return $this->NumberOfPhotos;
    }
    /**
     * Set NumberOfPhotos value
     * @param int $numberOfPhotos
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InspectionData
     */
    public function setNumberOfPhotos($numberOfPhotos = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPhotos) && !is_numeric($numberOfPhotos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($numberOfPhotos)), __LINE__);
        }
        $this->NumberOfPhotos = $numberOfPhotos;
        return $this;
    }
    /**
     * Get PhotoDate value
     * @return string|null
     */
    public function getPhotoDate()
    {
        return $this->PhotoDate;
    }
    /**
     * Set PhotoDate value
     * @param string $photoDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InspectionData
     */
    public function setPhotoDate($photoDate = null)
    {
        // validation for constraint: string
        if (!is_null($photoDate) && !is_string($photoDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($photoDate)), __LINE__);
        }
        $this->PhotoDate = $photoDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InspectionData
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
