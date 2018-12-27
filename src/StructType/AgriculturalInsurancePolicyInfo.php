<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgriculturalInsurancePolicyInfo StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:AgriculturalInsurancePolicyInfo
 * @subpackage Structs
 */
class AgriculturalInsurancePolicyInfo extends AbstractStructBase
{
    /**
     * The ManuallyAdded
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ManuallyAdded;
    /**
     * The PolicyId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PolicyId;
    /**
     * The ProductTypeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductTypeId;
    /**
     * Constructor method for AgriculturalInsurancePolicyInfo
     * @uses AgriculturalInsurancePolicyInfo::setManuallyAdded()
     * @uses AgriculturalInsurancePolicyInfo::setPolicyId()
     * @uses AgriculturalInsurancePolicyInfo::setProductTypeId()
     * @param bool $manuallyAdded
     * @param string $policyId
     * @param string $productTypeId
     */
    public function __construct($manuallyAdded = null, $policyId = null, $productTypeId = null)
    {
        $this
            ->setManuallyAdded($manuallyAdded)
            ->setPolicyId($policyId)
            ->setProductTypeId($productTypeId);
    }
    /**
     * Get ManuallyAdded value
     * @return bool|null
     */
    public function getManuallyAdded()
    {
        return $this->ManuallyAdded;
    }
    /**
     * Set ManuallyAdded value
     * @param bool $manuallyAdded
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo
     */
    public function setManuallyAdded($manuallyAdded = null)
    {
        // validation for constraint: boolean
        if (!is_null($manuallyAdded) && !is_bool($manuallyAdded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($manuallyAdded)), __LINE__);
        }
        $this->ManuallyAdded = $manuallyAdded;
        return $this;
    }
    /**
     * Get PolicyId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPolicyId()
    {
        return isset($this->PolicyId) ? $this->PolicyId : null;
    }
    /**
     * Set PolicyId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $policyId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo
     */
    public function setPolicyId($policyId = null)
    {
        // validation for constraint: string
        if (!is_null($policyId) && !is_string($policyId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($policyId)), __LINE__);
        }
        if (is_null($policyId) || (is_array($policyId) && empty($policyId))) {
            unset($this->PolicyId);
        } else {
            $this->PolicyId = $policyId;
        }
        return $this;
    }
    /**
     * Get ProductTypeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductTypeId()
    {
        return isset($this->ProductTypeId) ? $this->ProductTypeId : null;
    }
    /**
     * Set ProductTypeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productTypeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo
     */
    public function setProductTypeId($productTypeId = null)
    {
        // validation for constraint: string
        if (!is_null($productTypeId) && !is_string($productTypeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productTypeId)), __LINE__);
        }
        if (is_null($productTypeId) || (is_array($productTypeId) && empty($productTypeId))) {
            unset($this->ProductTypeId);
        } else {
            $this->ProductTypeId = $productTypeId;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AgriculturalInsurancePolicyInfo
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
