<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePolicy StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePolicy
 * @subpackage Structs
 */
class BasePolicy extends AbstractStructBase
{
    /**
     * The MiminalPolicyPremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var float
     */
    public $MiminalPolicyPremium;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Product;
    /**
     * The Risks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk
     */
    public $Risks;
    /**
     * Constructor method for BasePolicy
     * @uses BasePolicy::setMiminalPolicyPremium()
     * @uses BasePolicy::setProduct()
     * @uses BasePolicy::setRisks()
     * @param float $miminalPolicyPremium
     * @param int $product
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks
     */
    public function __construct($miminalPolicyPremium = null, $product = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks = null)
    {
        $this
            ->setMiminalPolicyPremium($miminalPolicyPremium)
            ->setProduct($product)
            ->setRisks($risks);
    }
    /**
     * Get MiminalPolicyPremium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return float|null
     */
    public function getMiminalPolicyPremium()
    {
        return isset($this->MiminalPolicyPremium) ? $this->MiminalPolicyPremium : null;
    }
    /**
     * Set MiminalPolicyPremium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param float $miminalPolicyPremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy
     */
    public function setMiminalPolicyPremium($miminalPolicyPremium = null)
    {
        if (is_null($miminalPolicyPremium) || (is_array($miminalPolicyPremium) && empty($miminalPolicyPremium))) {
            unset($this->MiminalPolicyPremium);
        } else {
            $this->MiminalPolicyPremium = $miminalPolicyPremium;
        }
        return $this;
    }
    /**
     * Get Product value
     * @return int|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param int $product
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy
     */
    public function setProduct($product = null)
    {
        // validation for constraint: int
        if (!is_null($product) && !is_numeric($product)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($product)), __LINE__);
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Get Risks value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk|null
     */
    public function getRisks()
    {
        return isset($this->Risks) ? $this->Risks : null;
    }
    /**
     * Set Risks value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy
     */
    public function setRisks(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks = null)
    {
        if (is_null($risks) || (is_array($risks) && empty($risks))) {
            unset($this->Risks);
        } else {
            $this->Risks = $risks;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePolicy
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
