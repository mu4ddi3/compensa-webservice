<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MZPPromotion StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MZPPromotion
 * @subpackage Structs
 */
class MZPPromotion extends AbstractStructBase
{
    /**
     * The ActivePromotionCodes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ActivePromotionCodes;
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
     * The Description
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The DescriptionOnOffer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DescriptionOnOffer;
    /**
     * The DisplayName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DisplayName;
    /**
     * The EndDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EndDate;
    /**
     * The ExcludePromotions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExcludePromotions;
    /**
     * The Id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Id;
    /**
     * The IsSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSelected;
    /**
     * The IsSelectedOnOffer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSelectedOnOffer;
    /**
     * The NameOnOffer
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NameOnOffer;
    /**
     * The Priority
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Priority;
    /**
     * The PromotionCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PromotionCode;
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for MZPPromotion
     * @uses MZPPromotion::setActivePromotionCodes()
     * @uses MZPPromotion::setAlternativeBannerFilePath()
     * @uses MZPPromotion::setBannerFilePath()
     * @uses MZPPromotion::setDescription()
     * @uses MZPPromotion::setDescriptionOnOffer()
     * @uses MZPPromotion::setDisplayName()
     * @uses MZPPromotion::setEndDate()
     * @uses MZPPromotion::setExcludePromotions()
     * @uses MZPPromotion::setId()
     * @uses MZPPromotion::setIsSelected()
     * @uses MZPPromotion::setIsSelectedOnOffer()
     * @uses MZPPromotion::setNameOnOffer()
     * @uses MZPPromotion::setPriority()
     * @uses MZPPromotion::setPromotionCode()
     * @uses MZPPromotion::setType()
     * @param int $activePromotionCodes
     * @param string $alternativeBannerFilePath
     * @param string $bannerFilePath
     * @param string $description
     * @param string $descriptionOnOffer
     * @param string $displayName
     * @param string $endDate
     * @param bool $excludePromotions
     * @param int $id
     * @param bool $isSelected
     * @param bool $isSelectedOnOffer
     * @param string $nameOnOffer
     * @param int $priority
     * @param string $promotionCode
     * @param string $type
     */
    public function __construct($activePromotionCodes = null, $alternativeBannerFilePath = null, $bannerFilePath = null, $description = null, $descriptionOnOffer = null, $displayName = null, $endDate = null, $excludePromotions = null, $id = null, $isSelected = null, $isSelectedOnOffer = null, $nameOnOffer = null, $priority = null, $promotionCode = null, $type = null)
    {
        $this
            ->setActivePromotionCodes($activePromotionCodes)
            ->setAlternativeBannerFilePath($alternativeBannerFilePath)
            ->setBannerFilePath($bannerFilePath)
            ->setDescription($description)
            ->setDescriptionOnOffer($descriptionOnOffer)
            ->setDisplayName($displayName)
            ->setEndDate($endDate)
            ->setExcludePromotions($excludePromotions)
            ->setId($id)
            ->setIsSelected($isSelected)
            ->setIsSelectedOnOffer($isSelectedOnOffer)
            ->setNameOnOffer($nameOnOffer)
            ->setPriority($priority)
            ->setPromotionCode($promotionCode)
            ->setType($type);
    }
    /**
     * Get ActivePromotionCodes value
     * @return int|null
     */
    public function getActivePromotionCodes()
    {
        return $this->ActivePromotionCodes;
    }
    /**
     * Set ActivePromotionCodes value
     * @param int $activePromotionCodes
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setActivePromotionCodes($activePromotionCodes = null)
    {
        // validation for constraint: int
        if (!is_null($activePromotionCodes) && !is_numeric($activePromotionCodes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($activePromotionCodes)), __LINE__);
        }
        $this->ActivePromotionCodes = $activePromotionCodes;
        return $this;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
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
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get DescriptionOnOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescriptionOnOffer()
    {
        return isset($this->DescriptionOnOffer) ? $this->DescriptionOnOffer : null;
    }
    /**
     * Set DescriptionOnOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $descriptionOnOffer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setDescriptionOnOffer($descriptionOnOffer = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionOnOffer) && !is_string($descriptionOnOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptionOnOffer)), __LINE__);
        }
        if (is_null($descriptionOnOffer) || (is_array($descriptionOnOffer) && empty($descriptionOnOffer))) {
            unset($this->DescriptionOnOffer);
        } else {
            $this->DescriptionOnOffer = $descriptionOnOffer;
        }
        return $this;
    }
    /**
     * Get DisplayName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDisplayName()
    {
        return isset($this->DisplayName) ? $this->DisplayName : null;
    }
    /**
     * Set DisplayName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $displayName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setDisplayName($displayName = null)
    {
        // validation for constraint: string
        if (!is_null($displayName) && !is_string($displayName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($displayName)), __LINE__);
        }
        if (is_null($displayName) || (is_array($displayName) && empty($displayName))) {
            unset($this->DisplayName);
        } else {
            $this->DisplayName = $displayName;
        }
        return $this;
    }
    /**
     * Get EndDate value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEndDate()
    {
        return isset($this->EndDate) ? $this->EndDate : null;
    }
    /**
     * Set EndDate value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $endDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setEndDate($endDate = null)
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($endDate)), __LINE__);
        }
        if (is_null($endDate) || (is_array($endDate) && empty($endDate))) {
            unset($this->EndDate);
        } else {
            $this->EndDate = $endDate;
        }
        return $this;
    }
    /**
     * Get ExcludePromotions value
     * @return bool|null
     */
    public function getExcludePromotions()
    {
        return $this->ExcludePromotions;
    }
    /**
     * Set ExcludePromotions value
     * @param bool $excludePromotions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setExcludePromotions($excludePromotions = null)
    {
        // validation for constraint: boolean
        if (!is_null($excludePromotions) && !is_bool($excludePromotions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($excludePromotions)), __LINE__);
        }
        $this->ExcludePromotions = $excludePromotions;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
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
     * Get IsSelectedOnOffer value
     * @return bool|null
     */
    public function getIsSelectedOnOffer()
    {
        return $this->IsSelectedOnOffer;
    }
    /**
     * Set IsSelectedOnOffer value
     * @param bool $isSelectedOnOffer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setIsSelectedOnOffer($isSelectedOnOffer = null)
    {
        // validation for constraint: boolean
        if (!is_null($isSelectedOnOffer) && !is_bool($isSelectedOnOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isSelectedOnOffer)), __LINE__);
        }
        $this->IsSelectedOnOffer = $isSelectedOnOffer;
        return $this;
    }
    /**
     * Get NameOnOffer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNameOnOffer()
    {
        return isset($this->NameOnOffer) ? $this->NameOnOffer : null;
    }
    /**
     * Set NameOnOffer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $nameOnOffer
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setNameOnOffer($nameOnOffer = null)
    {
        // validation for constraint: string
        if (!is_null($nameOnOffer) && !is_string($nameOnOffer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($nameOnOffer)), __LINE__);
        }
        if (is_null($nameOnOffer) || (is_array($nameOnOffer) && empty($nameOnOffer))) {
            unset($this->NameOnOffer);
        } else {
            $this->NameOnOffer = $nameOnOffer;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
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
     * Get PromotionCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPromotionCode()
    {
        return isset($this->PromotionCode) ? $this->PromotionCode : null;
    }
    /**
     * Set PromotionCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $promotionCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setPromotionCode($promotionCode = null)
    {
        // validation for constraint: string
        if (!is_null($promotionCode) && !is_string($promotionCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($promotionCode)), __LINE__);
        }
        if (is_null($promotionCode) || (is_array($promotionCode) && empty($promotionCode))) {
            unset($this->PromotionCode);
        } else {
            $this->PromotionCode = $promotionCode;
        }
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionType::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\PromotionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\PromotionType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\PromotionType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPPromotion
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
