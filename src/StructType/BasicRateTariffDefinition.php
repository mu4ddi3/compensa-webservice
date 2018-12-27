<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasicRateTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasicRateTariffDefinition
 * @subpackage Structs
 */
class BasicRateTariffDefinition extends AbstractStructBase
{
    /**
     * The BasicRateAcBazaDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasicRateAcBazaDefinitionId;
    /**
     * The BasicRateAcMocDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasicRateAcMocDefinitionId;
    /**
     * The BasicRateNnwDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasicRateNnwDefinitionId;
    /**
     * The BasicRateWdDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasicRateWdDefinitionId;
    /**
     * Constructor method for BasicRateTariffDefinition
     * @uses BasicRateTariffDefinition::setBasicRateAcBazaDefinitionId()
     * @uses BasicRateTariffDefinition::setBasicRateAcMocDefinitionId()
     * @uses BasicRateTariffDefinition::setBasicRateNnwDefinitionId()
     * @uses BasicRateTariffDefinition::setBasicRateWdDefinitionId()
     * @param int $basicRateAcBazaDefinitionId
     * @param int $basicRateAcMocDefinitionId
     * @param int $basicRateNnwDefinitionId
     * @param int $basicRateWdDefinitionId
     */
    public function __construct($basicRateAcBazaDefinitionId = null, $basicRateAcMocDefinitionId = null, $basicRateNnwDefinitionId = null, $basicRateWdDefinitionId = null)
    {
        $this
            ->setBasicRateAcBazaDefinitionId($basicRateAcBazaDefinitionId)
            ->setBasicRateAcMocDefinitionId($basicRateAcMocDefinitionId)
            ->setBasicRateNnwDefinitionId($basicRateNnwDefinitionId)
            ->setBasicRateWdDefinitionId($basicRateWdDefinitionId);
    }
    /**
     * Get BasicRateAcBazaDefinitionId value
     * @return int|null
     */
    public function getBasicRateAcBazaDefinitionId()
    {
        return $this->BasicRateAcBazaDefinitionId;
    }
    /**
     * Set BasicRateAcBazaDefinitionId value
     * @param int $basicRateAcBazaDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition
     */
    public function setBasicRateAcBazaDefinitionId($basicRateAcBazaDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basicRateAcBazaDefinitionId) && !is_numeric($basicRateAcBazaDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basicRateAcBazaDefinitionId)), __LINE__);
        }
        $this->BasicRateAcBazaDefinitionId = $basicRateAcBazaDefinitionId;
        return $this;
    }
    /**
     * Get BasicRateAcMocDefinitionId value
     * @return int|null
     */
    public function getBasicRateAcMocDefinitionId()
    {
        return $this->BasicRateAcMocDefinitionId;
    }
    /**
     * Set BasicRateAcMocDefinitionId value
     * @param int $basicRateAcMocDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition
     */
    public function setBasicRateAcMocDefinitionId($basicRateAcMocDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basicRateAcMocDefinitionId) && !is_numeric($basicRateAcMocDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basicRateAcMocDefinitionId)), __LINE__);
        }
        $this->BasicRateAcMocDefinitionId = $basicRateAcMocDefinitionId;
        return $this;
    }
    /**
     * Get BasicRateNnwDefinitionId value
     * @return int|null
     */
    public function getBasicRateNnwDefinitionId()
    {
        return $this->BasicRateNnwDefinitionId;
    }
    /**
     * Set BasicRateNnwDefinitionId value
     * @param int $basicRateNnwDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition
     */
    public function setBasicRateNnwDefinitionId($basicRateNnwDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basicRateNnwDefinitionId) && !is_numeric($basicRateNnwDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basicRateNnwDefinitionId)), __LINE__);
        }
        $this->BasicRateNnwDefinitionId = $basicRateNnwDefinitionId;
        return $this;
    }
    /**
     * Get BasicRateWdDefinitionId value
     * @return int|null
     */
    public function getBasicRateWdDefinitionId()
    {
        return $this->BasicRateWdDefinitionId;
    }
    /**
     * Set BasicRateWdDefinitionId value
     * @param int $basicRateWdDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition
     */
    public function setBasicRateWdDefinitionId($basicRateWdDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basicRateWdDefinitionId) && !is_numeric($basicRateWdDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basicRateWdDefinitionId)), __LINE__);
        }
        $this->BasicRateWdDefinitionId = $basicRateWdDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasicRateTariffDefinition
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
