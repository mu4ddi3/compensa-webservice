<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductConditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ProductConditions
 * @subpackage Structs
 */
class ProductConditions extends ConditionsBase
{
    /**
     * The DiscountConditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DiscountConditions
     */
    public $DiscountConditions;
    /**
     * The IsOtherConditions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOtherConditions;
    /**
     * The Risks
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk
     */
    public $Risks;
    /**
     * Constructor method for ProductConditions
     * @uses ProductConditions::setDiscountConditions()
     * @uses ProductConditions::setIsOtherConditions()
     * @uses ProductConditions::setRisks()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountConditions $discountConditions
     * @param bool $isOtherConditions
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\DiscountConditions $discountConditions = null, $isOtherConditions = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRisk $risks = null)
    {
        $this
            ->setDiscountConditions($discountConditions)
            ->setIsOtherConditions($isOtherConditions)
            ->setRisks($risks);
    }
    /**
     * Get DiscountConditions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DiscountConditions|null
     */
    public function getDiscountConditions()
    {
        return isset($this->DiscountConditions) ? $this->DiscountConditions : null;
    }
    /**
     * Set DiscountConditions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DiscountConditions $discountConditions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProductConditions
     */
    public function setDiscountConditions(\Mu4ddi3\Compensa\Webservice\StructType\DiscountConditions $discountConditions = null)
    {
        if (is_null($discountConditions) || (is_array($discountConditions) && empty($discountConditions))) {
            unset($this->DiscountConditions);
        } else {
            $this->DiscountConditions = $discountConditions;
        }
        return $this;
    }
    /**
     * Get IsOtherConditions value
     * @return bool|null
     */
    public function getIsOtherConditions()
    {
        return $this->IsOtherConditions;
    }
    /**
     * Set IsOtherConditions value
     * @param bool $isOtherConditions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProductConditions
     */
    public function setIsOtherConditions($isOtherConditions = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOtherConditions) && !is_bool($isOtherConditions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOtherConditions)), __LINE__);
        }
        $this->IsOtherConditions = $isOtherConditions;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProductConditions
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\ProductConditions
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
