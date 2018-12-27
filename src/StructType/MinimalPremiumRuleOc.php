<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MinimalPremiumRuleOc StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:MinimalPremiumRuleOc
 * @subpackage Structs
 */
class MinimalPremiumRuleOc extends MinimalPremiumRule
{
    /**
     * The CrossSellWith21021
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CrossSellWith21021;
    /**
     * The LeasingTariffVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LeasingTariffVariant;
    /**
     * The VehicleAge
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint
     */
    public $VehicleAge;
    /**
     * Constructor method for MinimalPremiumRuleOc
     * @uses MinimalPremiumRuleOc::setCrossSellWith21021()
     * @uses MinimalPremiumRuleOc::setLeasingTariffVariant()
     * @uses MinimalPremiumRuleOc::setVehicleAge()
     * @param string $crossSellWith21021
     * @param string $leasingTariffVariant
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge
     */
    public function __construct($crossSellWith21021 = null, $leasingTariffVariant = null, \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge = null)
    {
        $this
            ->setCrossSellWith21021($crossSellWith21021)
            ->setLeasingTariffVariant($leasingTariffVariant)
            ->setVehicleAge($vehicleAge);
    }
    /**
     * Get CrossSellWith21021 value
     * @return string|null
     */
    public function getCrossSellWith21021()
    {
        return $this->CrossSellWith21021;
    }
    /**
     * Set CrossSellWith21021 value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CrossSellWith21021::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\CrossSellWith21021::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $crossSellWith21021
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleOc
     */
    public function setCrossSellWith21021($crossSellWith21021 = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\CrossSellWith21021::valueIsValid($crossSellWith21021)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $crossSellWith21021, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\CrossSellWith21021::getValidValues())), __LINE__);
        }
        $this->CrossSellWith21021 = $crossSellWith21021;
        return $this;
    }
    /**
     * Get LeasingTariffVariant value
     * @return string|null
     */
    public function getLeasingTariffVariant()
    {
        return $this->LeasingTariffVariant;
    }
    /**
     * Set LeasingTariffVariant value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LeasingTariffVariant::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\LeasingTariffVariant::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $leasingTariffVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleOc
     */
    public function setLeasingTariffVariant($leasingTariffVariant = null)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\LeasingTariffVariant::valueIsValid($leasingTariffVariant)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $leasingTariffVariant, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\LeasingTariffVariant::getValidValues())), __LINE__);
        }
        $this->LeasingTariffVariant = $leasingTariffVariant;
        return $this;
    }
    /**
     * Get VehicleAge value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint|null
     */
    public function getVehicleAge()
    {
        return isset($this->VehicleAge) ? $this->VehicleAge : null;
    }
    /**
     * Set VehicleAge value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleOc
     */
    public function setVehicleAge(\Mu4ddi3\Compensa\Webservice\StructType\RangeOfint $vehicleAge = null)
    {
        if (is_null($vehicleAge) || (is_array($vehicleAge) && empty($vehicleAge))) {
            unset($this->VehicleAge);
        } else {
            $this->VehicleAge = $vehicleAge;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MinimalPremiumRuleOc
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
