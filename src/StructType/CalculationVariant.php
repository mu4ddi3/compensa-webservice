<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculationVariant StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CalculationVariant
 * @subpackage Structs
 */
class CalculationVariant extends AbstractStructBase
{
    /**
     * The CalculationMessages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage
     */
    public $CalculationMessages;
    /**
     * The InsuredObjects
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject
     */
    public $InsuredObjects;
    /**
     * The TariffType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Type
     */
    public $TariffType;
    /**
     * The VariantName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VariantName;
    /**
     * The variantInstalmetnsInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo
     */
    public $variantInstalmetnsInfo;
    /**
     * Constructor method for CalculationVariant
     * @uses CalculationVariant::setCalculationMessages()
     * @uses CalculationVariant::setInsuredObjects()
     * @uses CalculationVariant::setTariffType()
     * @uses CalculationVariant::setVariantName()
     * @uses CalculationVariant::setVariantInstalmetnsInfo()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $calculationMessages
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Type $tariffType
     * @param string $variantName
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $variantInstalmetnsInfo
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $calculationMessages = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects = null, \Mu4ddi3\Compensa\Webservice\StructType\Type $tariffType = null, $variantName = null, \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $variantInstalmetnsInfo = null)
    {
        $this
            ->setCalculationMessages($calculationMessages)
            ->setInsuredObjects($insuredObjects)
            ->setTariffType($tariffType)
            ->setVariantName($variantName)
            ->setVariantInstalmetnsInfo($variantInstalmetnsInfo);
    }
    /**
     * Get CalculationMessages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage|null
     */
    public function getCalculationMessages()
    {
        return isset($this->CalculationMessages) ? $this->CalculationMessages : null;
    }
    /**
     * Set CalculationMessages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $calculationMessages
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant
     */
    public function setCalculationMessages(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $calculationMessages = null)
    {
        if (is_null($calculationMessages) || (is_array($calculationMessages) && empty($calculationMessages))) {
            unset($this->CalculationMessages);
        } else {
            $this->CalculationMessages = $calculationMessages;
        }
        return $this;
    }
    /**
     * Get InsuredObjects value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject|null
     */
    public function getInsuredObjects()
    {
        return isset($this->InsuredObjects) ? $this->InsuredObjects : null;
    }
    /**
     * Set InsuredObjects value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant
     */
    public function setInsuredObjects(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuredObject $insuredObjects = null)
    {
        if (is_null($insuredObjects) || (is_array($insuredObjects) && empty($insuredObjects))) {
            unset($this->InsuredObjects);
        } else {
            $this->InsuredObjects = $insuredObjects;
        }
        return $this;
    }
    /**
     * Get TariffType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Type|null
     */
    public function getTariffType()
    {
        return isset($this->TariffType) ? $this->TariffType : null;
    }
    /**
     * Set TariffType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Type $tariffType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant
     */
    public function setTariffType(\Mu4ddi3\Compensa\Webservice\StructType\Type $tariffType = null)
    {
        if (is_null($tariffType) || (is_array($tariffType) && empty($tariffType))) {
            unset($this->TariffType);
        } else {
            $this->TariffType = $tariffType;
        }
        return $this;
    }
    /**
     * Get VariantName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVariantName()
    {
        return isset($this->VariantName) ? $this->VariantName : null;
    }
    /**
     * Set VariantName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $variantName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant
     */
    public function setVariantName($variantName = null)
    {
        // validation for constraint: string
        if (!is_null($variantName) && !is_string($variantName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($variantName)), __LINE__);
        }
        if (is_null($variantName) || (is_array($variantName) && empty($variantName))) {
            unset($this->VariantName);
        } else {
            $this->VariantName = $variantName;
        }
        return $this;
    }
    /**
     * Get variantInstalmetnsInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo|null
     */
    public function getVariantInstalmetnsInfo()
    {
        return isset($this->variantInstalmetnsInfo) ? $this->variantInstalmetnsInfo : null;
    }
    /**
     * Set variantInstalmetnsInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $variantInstalmetnsInfo
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant
     */
    public function setVariantInstalmetnsInfo(\Mu4ddi3\Compensa\Webservice\StructType\InstalmentInfo $variantInstalmetnsInfo = null)
    {
        if (is_null($variantInstalmetnsInfo) || (is_array($variantInstalmetnsInfo) && empty($variantInstalmetnsInfo))) {
            unset($this->variantInstalmetnsInfo);
        } else {
            $this->variantInstalmetnsInfo = $variantInstalmetnsInfo;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CalculationVariant
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
