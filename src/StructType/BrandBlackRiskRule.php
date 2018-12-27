<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BrandBlackRiskRule StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BrandBlackRiskRule
 * @subpackage Structs
 */
class BrandBlackRiskRule extends BlackRiskRule
{
    /**
     * The BrandId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BrandId;
    /**
     * Constructor method for BrandBlackRiskRule
     * @uses BrandBlackRiskRule::setBrandId()
     * @param int $brandId
     */
    public function __construct($brandId = null)
    {
        $this
            ->setBrandId($brandId);
    }
    /**
     * Get BrandId value
     * @return int|null
     */
    public function getBrandId()
    {
        return $this->BrandId;
    }
    /**
     * Set BrandId value
     * @param int $brandId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule
     */
    public function setBrandId($brandId = null)
    {
        // validation for constraint: int
        if (!is_null($brandId) && !is_numeric($brandId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($brandId)), __LINE__);
        }
        $this->BrandId = $brandId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule
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
