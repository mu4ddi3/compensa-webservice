<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OcPriceTestModifier StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:OcPriceTestModifier
 * @subpackage Structs
 */
class OcPriceTestModifier extends AbstractStructBase
{
    /**
     * The Modifier
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $Modifier;
    /**
     * The OcRegionArea
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var int
     */
    public $OcRegionArea;
    /**
     * Constructor method for OcPriceTestModifier
     * @uses OcPriceTestModifier::setModifier()
     * @uses OcPriceTestModifier::setOcRegionArea()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $modifier
     * @param int $ocRegionArea
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $modifier = null, $ocRegionArea = null)
    {
        $this
            ->setModifier($modifier)
            ->setOcRegionArea($ocRegionArea);
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcPriceTestModifier
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
     * Get OcRegionArea value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return int|null
     */
    public function getOcRegionArea()
    {
        return isset($this->OcRegionArea) ? $this->OcRegionArea : null;
    }
    /**
     * Set OcRegionArea value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param int $ocRegionArea
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcPriceTestModifier
     */
    public function setOcRegionArea($ocRegionArea = null)
    {
        // validation for constraint: int
        if (!is_null($ocRegionArea) && !is_numeric($ocRegionArea)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($ocRegionArea)), __LINE__);
        }
        if (is_null($ocRegionArea) || (is_array($ocRegionArea) && empty($ocRegionArea))) {
            unset($this->OcRegionArea);
        } else {
            $this->OcRegionArea = $ocRegionArea;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\OcPriceTestModifier
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
