<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Conditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Conditions
 * @subpackage Structs
 */
class Conditions extends AbstractStructBase
{
    /**
     * The BasePolicyConditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BasePolicyConditions
     */
    public $BasePolicyConditions;
    /**
     * The CommonConditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions
     */
    public $CommonConditions;
    /**
     * The ProductConditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\ProductConditions
     */
    public $ProductConditions;
    /**
     * Constructor method for Conditions
     * @uses Conditions::setBasePolicyConditions()
     * @uses Conditions::setCommonConditions()
     * @uses Conditions::setProductConditions()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePolicyConditions $basePolicyConditions
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions $commonConditions
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProductConditions $productConditions
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\BasePolicyConditions $basePolicyConditions = null, \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions $commonConditions = null, \Mu4ddi3\Compensa\Webservice\StructType\ProductConditions $productConditions = null)
    {
        $this
            ->setBasePolicyConditions($basePolicyConditions)
            ->setCommonConditions($commonConditions)
            ->setProductConditions($productConditions);
    }
    /**
     * Get BasePolicyConditions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicyConditions|null
     */
    public function getBasePolicyConditions()
    {
        return isset($this->BasePolicyConditions) ? $this->BasePolicyConditions : null;
    }
    /**
     * Set BasePolicyConditions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BasePolicyConditions $basePolicyConditions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Conditions
     */
    public function setBasePolicyConditions(\Mu4ddi3\Compensa\Webservice\StructType\BasePolicyConditions $basePolicyConditions = null)
    {
        if (is_null($basePolicyConditions) || (is_array($basePolicyConditions) && empty($basePolicyConditions))) {
            unset($this->BasePolicyConditions);
        } else {
            $this->BasePolicyConditions = $basePolicyConditions;
        }
        return $this;
    }
    /**
     * Get CommonConditions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions|null
     */
    public function getCommonConditions()
    {
        return isset($this->CommonConditions) ? $this->CommonConditions : null;
    }
    /**
     * Set CommonConditions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CommonConditions $commonConditions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Conditions
     */
    public function setCommonConditions(\Mu4ddi3\Compensa\Webservice\StructType\CommonConditions $commonConditions = null)
    {
        if (is_null($commonConditions) || (is_array($commonConditions) && empty($commonConditions))) {
            unset($this->CommonConditions);
        } else {
            $this->CommonConditions = $commonConditions;
        }
        return $this;
    }
    /**
     * Get ProductConditions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProductConditions|null
     */
    public function getProductConditions()
    {
        return isset($this->ProductConditions) ? $this->ProductConditions : null;
    }
    /**
     * Set ProductConditions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\ProductConditions $productConditions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Conditions
     */
    public function setProductConditions(\Mu4ddi3\Compensa\Webservice\StructType\ProductConditions $productConditions = null)
    {
        if (is_null($productConditions) || (is_array($productConditions) && empty($productConditions))) {
            unset($this->ProductConditions);
        } else {
            $this->ProductConditions = $productConditions;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Conditions
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
