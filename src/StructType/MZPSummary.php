<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MZPSummary StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MZPSummary
 * @subpackage Structs
 */
class MZPSummary extends AbstractStructBase
{
    /**
     * The AvaliablePromotions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion
     */
    public $AvaliablePromotions;
    /**
     * The Discount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount
     */
    public $Discount;
    /**
     * The HasAutomaticPromotionsPermission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasAutomaticPromotionsPermission;
    /**
     * The HasKAPromotionsPermission
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HasKAPromotionsPermission;
    /**
     * The IsPromotionPersonalNumberFieldFilled
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsPromotionPersonalNumberFieldFilled;
    /**
     * The Partners
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner
     */
    public $Partners;
    /**
     * The PolicyPremiumWithoutPromotionDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $PolicyPremiumWithoutPromotionDiscount;
    /**
     * The SelectedPromotionDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount
     */
    public $SelectedPromotionDiscount;
    /**
     * The SelectedPromotionIncrease
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MZPIncerase
     */
    public $SelectedPromotionIncrease;
    /**
     * Constructor method for MZPSummary
     * @uses MZPSummary::setAvaliablePromotions()
     * @uses MZPSummary::setDiscount()
     * @uses MZPSummary::setHasAutomaticPromotionsPermission()
     * @uses MZPSummary::setHasKAPromotionsPermission()
     * @uses MZPSummary::setIsPromotionPersonalNumberFieldFilled()
     * @uses MZPSummary::setPartners()
     * @uses MZPSummary::setPolicyPremiumWithoutPromotionDiscount()
     * @uses MZPSummary::setSelectedPromotionDiscount()
     * @uses MZPSummary::setSelectedPromotionIncrease()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion $avaliablePromotions
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount $discount
     * @param bool $hasAutomaticPromotionsPermission
     * @param bool $hasKAPromotionsPermission
     * @param bool $isPromotionPersonalNumberFieldFilled
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner $partners
     * @param float $policyPremiumWithoutPromotionDiscount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $selectedPromotionDiscount
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPIncerase $selectedPromotionIncrease
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion $avaliablePromotions = null, \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount $discount = null, $hasAutomaticPromotionsPermission = null, $hasKAPromotionsPermission = null, $isPromotionPersonalNumberFieldFilled = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner $partners = null, $policyPremiumWithoutPromotionDiscount = null, \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $selectedPromotionDiscount = null, \Mu4ddi3\Compensa\Webservice\StructType\MZPIncerase $selectedPromotionIncrease = null)
    {
        $this
            ->setAvaliablePromotions($avaliablePromotions)
            ->setDiscount($discount)
            ->setHasAutomaticPromotionsPermission($hasAutomaticPromotionsPermission)
            ->setHasKAPromotionsPermission($hasKAPromotionsPermission)
            ->setIsPromotionPersonalNumberFieldFilled($isPromotionPersonalNumberFieldFilled)
            ->setPartners($partners)
            ->setPolicyPremiumWithoutPromotionDiscount($policyPremiumWithoutPromotionDiscount)
            ->setSelectedPromotionDiscount($selectedPromotionDiscount)
            ->setSelectedPromotionIncrease($selectedPromotionIncrease);
    }
    /**
     * Get AvaliablePromotions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion|null
     */
    public function getAvaliablePromotions()
    {
        return isset($this->AvaliablePromotions) ? $this->AvaliablePromotions : null;
    }
    /**
     * Set AvaliablePromotions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion $avaliablePromotions
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public function setAvaliablePromotions(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPromotion $avaliablePromotions = null)
    {
        if (is_null($avaliablePromotions) || (is_array($avaliablePromotions) && empty($avaliablePromotions))) {
            unset($this->AvaliablePromotions);
        } else {
            $this->AvaliablePromotions = $avaliablePromotions;
        }
        return $this;
    }
    /**
     * Get Discount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount|null
     */
    public function getDiscount()
    {
        return isset($this->Discount) ? $this->Discount : null;
    }
    /**
     * Set Discount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount $discount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public function setDiscount(\Mu4ddi3\Compensa\Webservice\StructType\CompensaDiscount $discount = null)
    {
        if (is_null($discount) || (is_array($discount) && empty($discount))) {
            unset($this->Discount);
        } else {
            $this->Discount = $discount;
        }
        return $this;
    }
    /**
     * Get HasAutomaticPromotionsPermission value
     * @return bool|null
     */
    public function getHasAutomaticPromotionsPermission()
    {
        return $this->HasAutomaticPromotionsPermission;
    }
    /**
     * Set HasAutomaticPromotionsPermission value
     * @param bool $hasAutomaticPromotionsPermission
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public function setHasAutomaticPromotionsPermission($hasAutomaticPromotionsPermission = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasAutomaticPromotionsPermission) && !is_bool($hasAutomaticPromotionsPermission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasAutomaticPromotionsPermission)), __LINE__);
        }
        $this->HasAutomaticPromotionsPermission = $hasAutomaticPromotionsPermission;
        return $this;
    }
    /**
     * Get HasKAPromotionsPermission value
     * @return bool|null
     */
    public function getHasKAPromotionsPermission()
    {
        return $this->HasKAPromotionsPermission;
    }
    /**
     * Set HasKAPromotionsPermission value
     * @param bool $hasKAPromotionsPermission
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public function setHasKAPromotionsPermission($hasKAPromotionsPermission = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasKAPromotionsPermission) && !is_bool($hasKAPromotionsPermission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($hasKAPromotionsPermission)), __LINE__);
        }
        $this->HasKAPromotionsPermission = $hasKAPromotionsPermission;
        return $this;
    }
    /**
     * Get IsPromotionPersonalNumberFieldFilled value
     * @return bool|null
     */
    public function getIsPromotionPersonalNumberFieldFilled()
    {
        return $this->IsPromotionPersonalNumberFieldFilled;
    }
    /**
     * Set IsPromotionPersonalNumberFieldFilled value
     * @param bool $isPromotionPersonalNumberFieldFilled
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public function setIsPromotionPersonalNumberFieldFilled($isPromotionPersonalNumberFieldFilled = null)
    {
        // validation for constraint: boolean
        if (!is_null($isPromotionPersonalNumberFieldFilled) && !is_bool($isPromotionPersonalNumberFieldFilled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isPromotionPersonalNumberFieldFilled)), __LINE__);
        }
        $this->IsPromotionPersonalNumberFieldFilled = $isPromotionPersonalNumberFieldFilled;
        return $this;
    }
    /**
     * Get Partners value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner|null
     */
    public function getPartners()
    {
        return isset($this->Partners) ? $this->Partners : null;
    }
    /**
     * Set Partners value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner $partners
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public function setPartners(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMZPPartner $partners = null)
    {
        if (is_null($partners) || (is_array($partners) && empty($partners))) {
            unset($this->Partners);
        } else {
            $this->Partners = $partners;
        }
        return $this;
    }
    /**
     * Get PolicyPremiumWithoutPromotionDiscount value
     * @return float|null
     */
    public function getPolicyPremiumWithoutPromotionDiscount()
    {
        return $this->PolicyPremiumWithoutPromotionDiscount;
    }
    /**
     * Set PolicyPremiumWithoutPromotionDiscount value
     * @param float $policyPremiumWithoutPromotionDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public function setPolicyPremiumWithoutPromotionDiscount($policyPremiumWithoutPromotionDiscount = null)
    {
        $this->PolicyPremiumWithoutPromotionDiscount = $policyPremiumWithoutPromotionDiscount;
        return $this;
    }
    /**
     * Get SelectedPromotionDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount|null
     */
    public function getSelectedPromotionDiscount()
    {
        return isset($this->SelectedPromotionDiscount) ? $this->SelectedPromotionDiscount : null;
    }
    /**
     * Set SelectedPromotionDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $selectedPromotionDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public function setSelectedPromotionDiscount(\Mu4ddi3\Compensa\Webservice\StructType\MZPDiscount $selectedPromotionDiscount = null)
    {
        if (is_null($selectedPromotionDiscount) || (is_array($selectedPromotionDiscount) && empty($selectedPromotionDiscount))) {
            unset($this->SelectedPromotionDiscount);
        } else {
            $this->SelectedPromotionDiscount = $selectedPromotionDiscount;
        }
        return $this;
    }
    /**
     * Get SelectedPromotionIncrease value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPIncerase|null
     */
    public function getSelectedPromotionIncrease()
    {
        return isset($this->SelectedPromotionIncrease) ? $this->SelectedPromotionIncrease : null;
    }
    /**
     * Set SelectedPromotionIncrease value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPIncerase $selectedPromotionIncrease
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public function setSelectedPromotionIncrease(\Mu4ddi3\Compensa\Webservice\StructType\MZPIncerase $selectedPromotionIncrease = null)
    {
        if (is_null($selectedPromotionIncrease) || (is_array($selectedPromotionIncrease) && empty($selectedPromotionIncrease))) {
            unset($this->SelectedPromotionIncrease);
        } else {
            $this->SelectedPromotionIncrease = $selectedPromotionIncrease;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
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
