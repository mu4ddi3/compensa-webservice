<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasePremiumBagazRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasePremiumBagazRequest
 * @subpackage Structs
 */
class GetBasePremiumBagazRequest extends GetBasePremiumRequest
{
    /**
     * The Variant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Variant;
    /**
     * Constructor method for GetBasePremiumBagazRequest
     * @uses GetBasePremiumBagazRequest::setVariant()
     * @param string $variant
     */
    public function __construct($variant = null)
    {
        $this
            ->setVariant($variant);
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumBagazRequest
     */
    public function setVariant($variant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::valueIsValid($variant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $variant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\TariffVariants::getValidValues())), __LINE__);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumBagazRequest
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
