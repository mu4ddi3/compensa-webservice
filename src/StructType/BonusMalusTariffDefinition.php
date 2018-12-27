<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BonusMalusTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BonusMalusTariffDefinition
 * @subpackage Structs
 */
class BonusMalusTariffDefinition extends AbstractStructBase
{
    /**
     * The BonusMalusTariffItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm
     */
    public $BonusMalusTariffItems;
    /**
     * The ClaimWeightTariffItemsAc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem
     */
    public $ClaimWeightTariffItemsAc;
    /**
     * The ClaimWeightTariffItemsOc
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem
     */
    public $ClaimWeightTariffItemsOc;
    /**
     * The DiscountForDiscountTariffItems
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountForDiscountTariffItem
     */
    public $DiscountForDiscountTariffItems;
    /**
     * Constructor method for BonusMalusTariffDefinition
     * @uses BonusMalusTariffDefinition::setBonusMalusTariffItems()
     * @uses BonusMalusTariffDefinition::setClaimWeightTariffItemsAc()
     * @uses BonusMalusTariffDefinition::setClaimWeightTariffItemsOc()
     * @uses BonusMalusTariffDefinition::setDiscountForDiscountTariffItems()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm $bonusMalusTariffItems
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem $claimWeightTariffItemsAc
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem $claimWeightTariffItemsOc
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountForDiscountTariffItem $discountForDiscountTariffItems
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm $bonusMalusTariffItems = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem $claimWeightTariffItemsAc = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem $claimWeightTariffItemsOc = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountForDiscountTariffItem $discountForDiscountTariffItems = null)
    {
        $this
            ->setBonusMalusTariffItems($bonusMalusTariffItems)
            ->setClaimWeightTariffItemsAc($claimWeightTariffItemsAc)
            ->setClaimWeightTariffItemsOc($claimWeightTariffItemsOc)
            ->setDiscountForDiscountTariffItems($discountForDiscountTariffItems);
    }
    /**
     * Get BonusMalusTariffItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm|null
     */
    public function getBonusMalusTariffItems()
    {
        return isset($this->BonusMalusTariffItems) ? $this->BonusMalusTariffItems : null;
    }
    /**
     * Set BonusMalusTariffItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm $bonusMalusTariffItems
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition
     */
    public function setBonusMalusTariffItems(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfKeyValueOfintArrayOfBonusMalusTariffItemUncC2EDm $bonusMalusTariffItems = null)
    {
        if (is_null($bonusMalusTariffItems) || (is_array($bonusMalusTariffItems) && empty($bonusMalusTariffItems))) {
            unset($this->BonusMalusTariffItems);
        } else {
            $this->BonusMalusTariffItems = $bonusMalusTariffItems;
        }
        return $this;
    }
    /**
     * Get ClaimWeightTariffItemsAc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem|null
     */
    public function getClaimWeightTariffItemsAc()
    {
        return isset($this->ClaimWeightTariffItemsAc) ? $this->ClaimWeightTariffItemsAc : null;
    }
    /**
     * Set ClaimWeightTariffItemsAc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem $claimWeightTariffItemsAc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition
     */
    public function setClaimWeightTariffItemsAc(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem $claimWeightTariffItemsAc = null)
    {
        if (is_null($claimWeightTariffItemsAc) || (is_array($claimWeightTariffItemsAc) && empty($claimWeightTariffItemsAc))) {
            unset($this->ClaimWeightTariffItemsAc);
        } else {
            $this->ClaimWeightTariffItemsAc = $claimWeightTariffItemsAc;
        }
        return $this;
    }
    /**
     * Get ClaimWeightTariffItemsOc value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem|null
     */
    public function getClaimWeightTariffItemsOc()
    {
        return isset($this->ClaimWeightTariffItemsOc) ? $this->ClaimWeightTariffItemsOc : null;
    }
    /**
     * Set ClaimWeightTariffItemsOc value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem $claimWeightTariffItemsOc
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition
     */
    public function setClaimWeightTariffItemsOc(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfClaimWeightTariffItem $claimWeightTariffItemsOc = null)
    {
        if (is_null($claimWeightTariffItemsOc) || (is_array($claimWeightTariffItemsOc) && empty($claimWeightTariffItemsOc))) {
            unset($this->ClaimWeightTariffItemsOc);
        } else {
            $this->ClaimWeightTariffItemsOc = $claimWeightTariffItemsOc;
        }
        return $this;
    }
    /**
     * Get DiscountForDiscountTariffItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountForDiscountTariffItem|null
     */
    public function getDiscountForDiscountTariffItems()
    {
        return isset($this->DiscountForDiscountTariffItems) ? $this->DiscountForDiscountTariffItems : null;
    }
    /**
     * Set DiscountForDiscountTariffItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountForDiscountTariffItem $discountForDiscountTariffItems
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition
     */
    public function setDiscountForDiscountTariffItems(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDiscountForDiscountTariffItem $discountForDiscountTariffItems = null)
    {
        if (is_null($discountForDiscountTariffItems) || (is_array($discountForDiscountTariffItems) && empty($discountForDiscountTariffItems))) {
            unset($this->DiscountForDiscountTariffItems);
        } else {
            $this->DiscountForDiscountTariffItems = $discountForDiscountTariffItems;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BonusMalusTariffDefinition
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
