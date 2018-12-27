<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Business19035PolicyInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Business19035PolicyInfo
 * @subpackage Structs
 */
class Business19035PolicyInfo extends CompensaPolicyInfo
{
    /**
     * The CompanyName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompanyName;
    /**
     * The IsEnabled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsEnabled;
    /**
     * The IsSelected
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsSelected;
    /**
     * The Variant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Variant;
    /**
     * Constructor method for Business19035PolicyInfo
     * @uses Business19035PolicyInfo::setCompanyName()
     * @uses Business19035PolicyInfo::setIsEnabled()
     * @uses Business19035PolicyInfo::setIsSelected()
     * @uses Business19035PolicyInfo::setVariant()
     * @param string $companyName
     * @param bool $isEnabled
     * @param bool $isSelected
     * @param string $variant
     */
    public function __construct($companyName = null, $isEnabled = null, $isSelected = null, $variant = null)
    {
        $this
            ->setCompanyName($companyName)
            ->setIsEnabled($isEnabled)
            ->setIsSelected($isSelected)
            ->setVariant($variant);
    }
    /**
     * Get CompanyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompanyName()
    {
        return isset($this->CompanyName) ? $this->CompanyName : null;
    }
    /**
     * Set CompanyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $companyName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Business19035PolicyInfo
     */
    public function setCompanyName($companyName = null)
    {
        // validation for constraint: string
        if (!is_null($companyName) && !is_string($companyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($companyName)), __LINE__);
        }
        if (is_null($companyName) || (is_array($companyName) && empty($companyName))) {
            unset($this->CompanyName);
        } else {
            $this->CompanyName = $companyName;
        }
        return $this;
    }
    /**
     * Get IsEnabled value
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->IsEnabled;
    }
    /**
     * Set IsEnabled value
     * @param bool $isEnabled
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Business19035PolicyInfo
     */
    public function setIsEnabled($isEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isEnabled) && !is_bool($isEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isEnabled)), __LINE__);
        }
        $this->IsEnabled = $isEnabled;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Business19035PolicyInfo
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
     * Get Variant value
     * @return string|null
     */
    public function getVariant()
    {
        return $this->Variant;
    }
    /**
     * Set Variant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Business19035PolicyInfo
     */
    public function setVariant($variant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::valueIsValid($variant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\Business19035ContractVariant::getValidValues())), __LINE__);
        }
        $this->Variant = $variant;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Business19035PolicyInfo
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
