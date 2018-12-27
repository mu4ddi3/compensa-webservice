<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IndexationTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:IndexationTariffDefinition
 * @subpackage Structs
 */
class IndexationTariffDefinition extends CommonTariffDefinition
{
    /**
     * The ISAcIndexationTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ISAcIndexationTariffDefinitionId;
    /**
     * The ISVehicleValueTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ISVehicleValueTariffDefinitionId;
    /**
     * The ISWdIndexationTariffDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ISWdIndexationTariffDefinitionId;
    /**
     * Constructor method for IndexationTariffDefinition
     * @uses IndexationTariffDefinition::setISAcIndexationTariffDefinitionId()
     * @uses IndexationTariffDefinition::setISVehicleValueTariffDefinitionId()
     * @uses IndexationTariffDefinition::setISWdIndexationTariffDefinitionId()
     * @param int $iSAcIndexationTariffDefinitionId
     * @param int $iSVehicleValueTariffDefinitionId
     * @param int $iSWdIndexationTariffDefinitionId
     */
    public function __construct($iSAcIndexationTariffDefinitionId = null, $iSVehicleValueTariffDefinitionId = null, $iSWdIndexationTariffDefinitionId = null)
    {
        $this
            ->setISAcIndexationTariffDefinitionId($iSAcIndexationTariffDefinitionId)
            ->setISVehicleValueTariffDefinitionId($iSVehicleValueTariffDefinitionId)
            ->setISWdIndexationTariffDefinitionId($iSWdIndexationTariffDefinitionId);
    }
    /**
     * Get ISAcIndexationTariffDefinitionId value
     * @return int|null
     */
    public function getISAcIndexationTariffDefinitionId()
    {
        return $this->ISAcIndexationTariffDefinitionId;
    }
    /**
     * Set ISAcIndexationTariffDefinitionId value
     * @param int $iSAcIndexationTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IndexationTariffDefinition
     */
    public function setISAcIndexationTariffDefinitionId($iSAcIndexationTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($iSAcIndexationTariffDefinitionId) && !is_numeric($iSAcIndexationTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iSAcIndexationTariffDefinitionId)), __LINE__);
        }
        $this->ISAcIndexationTariffDefinitionId = $iSAcIndexationTariffDefinitionId;
        return $this;
    }
    /**
     * Get ISVehicleValueTariffDefinitionId value
     * @return int|null
     */
    public function getISVehicleValueTariffDefinitionId()
    {
        return $this->ISVehicleValueTariffDefinitionId;
    }
    /**
     * Set ISVehicleValueTariffDefinitionId value
     * @param int $iSVehicleValueTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IndexationTariffDefinition
     */
    public function setISVehicleValueTariffDefinitionId($iSVehicleValueTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($iSVehicleValueTariffDefinitionId) && !is_numeric($iSVehicleValueTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iSVehicleValueTariffDefinitionId)), __LINE__);
        }
        $this->ISVehicleValueTariffDefinitionId = $iSVehicleValueTariffDefinitionId;
        return $this;
    }
    /**
     * Get ISWdIndexationTariffDefinitionId value
     * @return int|null
     */
    public function getISWdIndexationTariffDefinitionId()
    {
        return $this->ISWdIndexationTariffDefinitionId;
    }
    /**
     * Set ISWdIndexationTariffDefinitionId value
     * @param int $iSWdIndexationTariffDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IndexationTariffDefinition
     */
    public function setISWdIndexationTariffDefinitionId($iSWdIndexationTariffDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($iSWdIndexationTariffDefinitionId) && !is_numeric($iSWdIndexationTariffDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($iSWdIndexationTariffDefinitionId)), __LINE__);
        }
        $this->ISWdIndexationTariffDefinitionId = $iSWdIndexationTariffDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\IndexationTariffDefinition
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
