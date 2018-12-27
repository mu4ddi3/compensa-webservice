<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdministrativeRegion StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AdministrativeRegion
 * @subpackage Structs
 */
class AdministrativeRegion extends AbstractStructBase
{
    /**
     * The communeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $communeId;
    /**
     * The communeName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $communeName;
    /**
     * The countyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $countyId;
    /**
     * The countyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $countyName;
    /**
     * The mainRegionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $mainRegionId;
    /**
     * The mainRegionName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $mainRegionName;
    /**
     * Constructor method for AdministrativeRegion
     * @uses AdministrativeRegion::setCommuneId()
     * @uses AdministrativeRegion::setCommuneName()
     * @uses AdministrativeRegion::setCountyId()
     * @uses AdministrativeRegion::setCountyName()
     * @uses AdministrativeRegion::setMainRegionId()
     * @uses AdministrativeRegion::setMainRegionName()
     * @param int $communeId
     * @param string $communeName
     * @param int $countyId
     * @param string $countyName
     * @param int $mainRegionId
     * @param string $mainRegionName
     */
    public function __construct($communeId = null, $communeName = null, $countyId = null, $countyName = null, $mainRegionId = null, $mainRegionName = null)
    {
        $this
            ->setCommuneId($communeId)
            ->setCommuneName($communeName)
            ->setCountyId($countyId)
            ->setCountyName($countyName)
            ->setMainRegionId($mainRegionId)
            ->setMainRegionName($mainRegionName);
    }
    /**
     * Get communeId value
     * @return int|null
     */
    public function getCommuneId()
    {
        return $this->communeId;
    }
    /**
     * Set communeId value
     * @param int $communeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion
     */
    public function setCommuneId($communeId = null)
    {
        // validation for constraint: int
        if (!is_null($communeId) && !is_numeric($communeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($communeId)), __LINE__);
        }
        $this->communeId = $communeId;
        return $this;
    }
    /**
     * Get communeName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommuneName()
    {
        return isset($this->communeName) ? $this->communeName : null;
    }
    /**
     * Set communeName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $communeName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion
     */
    public function setCommuneName($communeName = null)
    {
        // validation for constraint: string
        if (!is_null($communeName) && !is_string($communeName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($communeName)), __LINE__);
        }
        if (is_null($communeName) || (is_array($communeName) && empty($communeName))) {
            unset($this->communeName);
        } else {
            $this->communeName = $communeName;
        }
        return $this;
    }
    /**
     * Get countyId value
     * @return int|null
     */
    public function getCountyId()
    {
        return $this->countyId;
    }
    /**
     * Set countyId value
     * @param int $countyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion
     */
    public function setCountyId($countyId = null)
    {
        // validation for constraint: int
        if (!is_null($countyId) && !is_numeric($countyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($countyId)), __LINE__);
        }
        $this->countyId = $countyId;
        return $this;
    }
    /**
     * Get countyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountyName()
    {
        return isset($this->countyName) ? $this->countyName : null;
    }
    /**
     * Set countyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countyName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion
     */
    public function setCountyName($countyName = null)
    {
        // validation for constraint: string
        if (!is_null($countyName) && !is_string($countyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countyName)), __LINE__);
        }
        if (is_null($countyName) || (is_array($countyName) && empty($countyName))) {
            unset($this->countyName);
        } else {
            $this->countyName = $countyName;
        }
        return $this;
    }
    /**
     * Get mainRegionId value
     * @return int|null
     */
    public function getMainRegionId()
    {
        return $this->mainRegionId;
    }
    /**
     * Set mainRegionId value
     * @param int $mainRegionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion
     */
    public function setMainRegionId($mainRegionId = null)
    {
        // validation for constraint: int
        if (!is_null($mainRegionId) && !is_numeric($mainRegionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mainRegionId)), __LINE__);
        }
        $this->mainRegionId = $mainRegionId;
        return $this;
    }
    /**
     * Get mainRegionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMainRegionName()
    {
        return isset($this->mainRegionName) ? $this->mainRegionName : null;
    }
    /**
     * Set mainRegionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $mainRegionName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion
     */
    public function setMainRegionName($mainRegionName = null)
    {
        // validation for constraint: string
        if (!is_null($mainRegionName) && !is_string($mainRegionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mainRegionName)), __LINE__);
        }
        if (is_null($mainRegionName) || (is_array($mainRegionName) && empty($mainRegionName))) {
            unset($this->mainRegionName);
        } else {
            $this->mainRegionName = $mainRegionName;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion
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
