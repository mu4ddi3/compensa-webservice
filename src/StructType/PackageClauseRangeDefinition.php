<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageClauseRangeDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageClauseRangeDefinition
 * @subpackage Structs
 */
class PackageClauseRangeDefinition extends PackageRiskRangeDefinition
{
    /**
     * The IsStandardPremium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsStandardPremium;
    /**
     * The Premium
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $Premium;
    /**
     * The VersisNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $VersisNumber;
    /**
     * Constructor method for PackageClauseRangeDefinition
     * @uses PackageClauseRangeDefinition::setIsStandardPremium()
     * @uses PackageClauseRangeDefinition::setPremium()
     * @uses PackageClauseRangeDefinition::setVersisNumber()
     * @param bool $isStandardPremium
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @param int $versisNumber
     */
    public function __construct($isStandardPremium = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null, $versisNumber = null)
    {
        $this
            ->setIsStandardPremium($isStandardPremium)
            ->setPremium($premium)
            ->setVersisNumber($versisNumber);
    }
    /**
     * Get IsStandardPremium value
     * @return bool|null
     */
    public function getIsStandardPremium()
    {
        return $this->IsStandardPremium;
    }
    /**
     * Set IsStandardPremium value
     * @param bool $isStandardPremium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageClauseRangeDefinition
     */
    public function setIsStandardPremium($isStandardPremium = null)
    {
        // validation for constraint: boolean
        if (!is_null($isStandardPremium) && !is_bool($isStandardPremium)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isStandardPremium)), __LINE__);
        }
        $this->IsStandardPremium = $isStandardPremium;
        return $this;
    }
    /**
     * Get Premium value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getPremium()
    {
        return isset($this->Premium) ? $this->Premium : null;
    }
    /**
     * Set Premium value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageClauseRangeDefinition
     */
    public function setPremium(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $premium = null)
    {
        if (is_null($premium) || (is_array($premium) && empty($premium))) {
            unset($this->Premium);
        } else {
            $this->Premium = $premium;
        }
        return $this;
    }
    /**
     * Get VersisNumber value
     * @return int|null
     */
    public function getVersisNumber()
    {
        return $this->VersisNumber;
    }
    /**
     * Set VersisNumber value
     * @param int $versisNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageClauseRangeDefinition
     */
    public function setVersisNumber($versisNumber = null)
    {
        // validation for constraint: int
        if (!is_null($versisNumber) && !is_numeric($versisNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($versisNumber)), __LINE__);
        }
        $this->VersisNumber = $versisNumber;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageClauseRangeDefinition
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
