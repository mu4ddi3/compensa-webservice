<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AcPriceTestModifier StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AcPriceTestModifier
 * @subpackage Structs
 */
class AcPriceTestModifier extends AbstractStructBase
{
    /**
     * The AConstantSu
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $AConstantSu;
    /**
     * The AcBoughtAmortization
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $AcBoughtAmortization;
    /**
     * The AcNonreducingSu
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $AcNonreducingSu;
    /**
     * The AcOwnShare
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AcOwnShare;
    /**
     * The AcRegionArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $AcRegionArea;
    /**
     * The AcVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $AcVariant;
    /**
     * The AcWithoutTheft
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var bool
     */
    public $AcWithoutTheft;
    /**
     * The Modifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Modifier;
    /**
     * Constructor method for AcPriceTestModifier
     * @uses AcPriceTestModifier::setAConstantSu()
     * @uses AcPriceTestModifier::setAcBoughtAmortization()
     * @uses AcPriceTestModifier::setAcNonreducingSu()
     * @uses AcPriceTestModifier::setAcOwnShare()
     * @uses AcPriceTestModifier::setAcRegionArea()
     * @uses AcPriceTestModifier::setAcVariant()
     * @uses AcPriceTestModifier::setAcWithoutTheft()
     * @uses AcPriceTestModifier::setModifier()
     * @param bool $aConstantSu
     * @param bool $acBoughtAmortization
     * @param bool $acNonreducingSu
     * @param string $acOwnShare
     * @param int $acRegionArea
     * @param string $acVariant
     * @param bool $acWithoutTheft
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $modifier
     */
    public function __construct($aConstantSu = null, $acBoughtAmortization = null, $acNonreducingSu = null, $acOwnShare = null, $acRegionArea = null, $acVariant = null, $acWithoutTheft = null, \Mu4ddi3\Compensa\Webservice\StructType\Factor $modifier = null)
    {
        $this
            ->setAConstantSu($aConstantSu)
            ->setAcBoughtAmortization($acBoughtAmortization)
            ->setAcNonreducingSu($acNonreducingSu)
            ->setAcOwnShare($acOwnShare)
            ->setAcRegionArea($acRegionArea)
            ->setAcVariant($acVariant)
            ->setAcWithoutTheft($acWithoutTheft)
            ->setModifier($modifier);
    }
    /**
     * Get AConstantSu value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getAConstantSu()
    {
        return isset($this->AConstantSu) ? $this->AConstantSu : null;
    }
    /**
     * Set AConstantSu value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $aConstantSu
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
     */
    public function setAConstantSu($aConstantSu = null)
    {
        // validation for constraint: boolean
        if (!is_null($aConstantSu) && !is_bool($aConstantSu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($aConstantSu)), __LINE__);
        }
        if (is_null($aConstantSu) || (is_array($aConstantSu) && empty($aConstantSu))) {
            unset($this->AConstantSu);
        } else {
            $this->AConstantSu = $aConstantSu;
        }
        return $this;
    }
    /**
     * Get AcBoughtAmortization value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getAcBoughtAmortization()
    {
        return isset($this->AcBoughtAmortization) ? $this->AcBoughtAmortization : null;
    }
    /**
     * Set AcBoughtAmortization value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $acBoughtAmortization
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
     */
    public function setAcBoughtAmortization($acBoughtAmortization = null)
    {
        // validation for constraint: boolean
        if (!is_null($acBoughtAmortization) && !is_bool($acBoughtAmortization)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($acBoughtAmortization)), __LINE__);
        }
        if (is_null($acBoughtAmortization) || (is_array($acBoughtAmortization) && empty($acBoughtAmortization))) {
            unset($this->AcBoughtAmortization);
        } else {
            $this->AcBoughtAmortization = $acBoughtAmortization;
        }
        return $this;
    }
    /**
     * Get AcNonreducingSu value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getAcNonreducingSu()
    {
        return isset($this->AcNonreducingSu) ? $this->AcNonreducingSu : null;
    }
    /**
     * Set AcNonreducingSu value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $acNonreducingSu
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
     */
    public function setAcNonreducingSu($acNonreducingSu = null)
    {
        // validation for constraint: boolean
        if (!is_null($acNonreducingSu) && !is_bool($acNonreducingSu)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($acNonreducingSu)), __LINE__);
        }
        if (is_null($acNonreducingSu) || (is_array($acNonreducingSu) && empty($acNonreducingSu))) {
            unset($this->AcNonreducingSu);
        } else {
            $this->AcNonreducingSu = $acNonreducingSu;
        }
        return $this;
    }
    /**
     * Get AcOwnShare value
     * @return string|null
     */
    public function getAcOwnShare()
    {
        return $this->AcOwnShare;
    }
    /**
     * Set AcOwnShare value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $acOwnShare
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
     */
    public function setAcOwnShare($acOwnShare = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::valueIsValid($acOwnShare)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $acOwnShare, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\DeductibleVariant::getValidValues())), __LINE__);
        }
        $this->AcOwnShare = $acOwnShare;
        return $this;
    }
    /**
     * Get AcRegionArea value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getAcRegionArea()
    {
        return isset($this->AcRegionArea) ? $this->AcRegionArea : null;
    }
    /**
     * Set AcRegionArea value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $acRegionArea
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
     */
    public function setAcRegionArea($acRegionArea = null)
    {
        // validation for constraint: int
        if (!is_null($acRegionArea) && !is_numeric($acRegionArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($acRegionArea)), __LINE__);
        }
        if (is_null($acRegionArea) || (is_array($acRegionArea) && empty($acRegionArea))) {
            unset($this->AcRegionArea);
        } else {
            $this->AcRegionArea = $acRegionArea;
        }
        return $this;
    }
    /**
     * Get AcVariant value
     * @return string|null
     */
    public function getAcVariant()
    {
        return $this->AcVariant;
    }
    /**
     * Set AcVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $acVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
     */
    public function setAcVariant($acVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::valueIsValid($acVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $acVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\ClaimSettlementVariant::getValidValues())), __LINE__);
        }
        $this->AcVariant = $acVariant;
        return $this;
    }
    /**
     * Get AcWithoutTheft value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return bool|null
     */
    public function getAcWithoutTheft()
    {
        return isset($this->AcWithoutTheft) ? $this->AcWithoutTheft : null;
    }
    /**
     * Set AcWithoutTheft value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param bool $acWithoutTheft
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
     */
    public function setAcWithoutTheft($acWithoutTheft = null)
    {
        // validation for constraint: boolean
        if (!is_null($acWithoutTheft) && !is_bool($acWithoutTheft)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($acWithoutTheft)), __LINE__);
        }
        if (is_null($acWithoutTheft) || (is_array($acWithoutTheft) && empty($acWithoutTheft))) {
            unset($this->AcWithoutTheft);
        } else {
            $this->AcWithoutTheft = $acWithoutTheft;
        }
        return $this;
    }
    /**
     * Get Modifier value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getModifier()
    {
        return isset($this->Modifier) ? $this->Modifier : null;
    }
    /**
     * Set Modifier value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $modifier
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
     */
    public function setModifier(\Mu4ddi3\Compensa\Webservice\StructType\Factor $modifier = null)
    {
        if (is_null($modifier) || (is_array($modifier) && empty($modifier))) {
            unset($this->Modifier);
        } else {
            $this->Modifier = $modifier;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcPriceTestModifier
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
