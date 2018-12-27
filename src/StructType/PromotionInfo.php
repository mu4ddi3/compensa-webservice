<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromotionInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PromotionInfo
 * @subpackage Structs
 */
class PromotionInfo extends AbstractStructBase
{
    /**
     * The AlternativeBannerFilePath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AlternativeBannerFilePath;
    /**
     * The BannerFilePath
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BannerFilePath;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Id;
    /**
     * The IsIndivdual
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsIndivdual;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Priority;
    /**
     * Constructor method for PromotionInfo
     * @uses PromotionInfo::setAlternativeBannerFilePath()
     * @uses PromotionInfo::setBannerFilePath()
     * @uses PromotionInfo::setId()
     * @uses PromotionInfo::setIsIndivdual()
     * @uses PromotionInfo::setPriority()
     * @param string $alternativeBannerFilePath
     * @param string $bannerFilePath
     * @param int $id
     * @param bool $isIndivdual
     * @param int $priority
     */
    public function __construct($alternativeBannerFilePath = null, $bannerFilePath = null, $id = null, $isIndivdual = null, $priority = null)
    {
        $this
            ->setAlternativeBannerFilePath($alternativeBannerFilePath)
            ->setBannerFilePath($bannerFilePath)
            ->setId($id)
            ->setIsIndivdual($isIndivdual)
            ->setPriority($priority);
    }
    /**
     * Get AlternativeBannerFilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAlternativeBannerFilePath()
    {
        return isset($this->AlternativeBannerFilePath) ? $this->AlternativeBannerFilePath : null;
    }
    /**
     * Set AlternativeBannerFilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $alternativeBannerFilePath
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfo
     */
    public function setAlternativeBannerFilePath($alternativeBannerFilePath = null)
    {
        // validation for constraint: string
        if (!is_null($alternativeBannerFilePath) && !is_string($alternativeBannerFilePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($alternativeBannerFilePath)), __LINE__);
        }
        if (is_null($alternativeBannerFilePath) || (is_array($alternativeBannerFilePath) && empty($alternativeBannerFilePath))) {
            unset($this->AlternativeBannerFilePath);
        } else {
            $this->AlternativeBannerFilePath = $alternativeBannerFilePath;
        }
        return $this;
    }
    /**
     * Get BannerFilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBannerFilePath()
    {
        return isset($this->BannerFilePath) ? $this->BannerFilePath : null;
    }
    /**
     * Set BannerFilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $bannerFilePath
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfo
     */
    public function setBannerFilePath($bannerFilePath = null)
    {
        // validation for constraint: string
        if (!is_null($bannerFilePath) && !is_string($bannerFilePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($bannerFilePath)), __LINE__);
        }
        if (is_null($bannerFilePath) || (is_array($bannerFilePath) && empty($bannerFilePath))) {
            unset($this->BannerFilePath);
        } else {
            $this->BannerFilePath = $bannerFilePath;
        }
        return $this;
    }
    /**
     * Get Id value
     * @return int|null
     */
    public function getId()
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param int $id
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfo
     */
    public function setId($id = null)
    {
        // validation for constraint: int
        if (!is_null($id) && !is_numeric($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($id)), __LINE__);
        }
        $this->Id = $id;
        return $this;
    }
    /**
     * Get IsIndivdual value
     * @return bool|null
     */
    public function getIsIndivdual()
    {
        return $this->IsIndivdual;
    }
    /**
     * Set IsIndivdual value
     * @param bool $isIndivdual
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfo
     */
    public function setIsIndivdual($isIndivdual = null)
    {
        // validation for constraint: boolean
        if (!is_null($isIndivdual) && !is_bool($isIndivdual)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isIndivdual)), __LINE__);
        }
        $this->IsIndivdual = $isIndivdual;
        return $this;
    }
    /**
     * Get Priority value
     * @return int|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfo
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !is_numeric($priority)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfo
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
