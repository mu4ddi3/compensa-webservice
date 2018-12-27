<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConfirmPolicyRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ConfirmPolicyRequest
 * @subpackage Structs
 */
class ConfirmPolicyRequest extends AbstractStructBase
{
    /**
     * The PolicyNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PolicyNumber;
    /**
     * The ProductType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ProductType;
    /**
     * Constructor method for ConfirmPolicyRequest
     * @uses ConfirmPolicyRequest::setPolicyNumber()
     * @uses ConfirmPolicyRequest::setProductType()
     * @param int $policyNumber
     * @param string $productType
     */
    public function __construct($policyNumber = null, $productType = null)
    {
        $this
            ->setPolicyNumber($policyNumber)
            ->setProductType($productType);
    }
    /**
     * Get PolicyNumber value
     * @return int|null
     */
    public function getPolicyNumber()
    {
        return $this->PolicyNumber;
    }
    /**
     * Set PolicyNumber value
     * @param int $policyNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicyRequest
     */
    public function setPolicyNumber($policyNumber = null)
    {
        // validation for constraint: int
        if (!is_null($policyNumber) && !is_numeric($policyNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($policyNumber)), __LINE__);
        }
        $this->PolicyNumber = $policyNumber;
        return $this;
    }
    /**
     * Get ProductType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductType()
    {
        return isset($this->ProductType) ? $this->ProductType : null;
    }
    /**
     * Set ProductType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicyRequest
     */
    public function setProductType($productType = null)
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productType)), __LINE__);
        }
        if (is_null($productType) || (is_array($productType) && empty($productType))) {
            unset($this->ProductType);
        } else {
            $this->ProductType = $productType;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ConfirmPolicyRequest
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
