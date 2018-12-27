<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BasePremiumTariffDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:BasePremiumTariffDefinition
 * @subpackage Structs
 */
class BasePremiumTariffDefinition extends AbstractStructBase
{
    /**
     * The BasePremiumAssistanceDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumAssistanceDefinitionId;
    /**
     * The BasePremiumBagazDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumBagazDefinitionId;
    /**
     * The BasePremiumBlsDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumBlsDefinitionId;
    /**
     * The BasePremiumDnaDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumDnaDefinitionId;
    /**
     * The BasePremiumGapDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumGapDefinitionId;
    /**
     * The BasePremiumNnwDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumNnwDefinitionId;
    /**
     * The BasePremiumOcBazaDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumOcBazaDefinitionId;
    /**
     * The BasePremiumOcMocDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumOcMocDefinitionId;
    /**
     * The BasePremiumOpDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumOpDefinitionId;
    /**
     * The BasePremiumOuzAcDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumOuzAcDefinitionId;
    /**
     * The BasePremiumOuzOcDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumOuzOcDefinitionId;
    /**
     * The BasePremiumPomocDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumPomocDefinitionId;
    /**
     * The BasePremiumSzybyDefinitionId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BasePremiumSzybyDefinitionId;
    /**
     * Constructor method for BasePremiumTariffDefinition
     * @uses BasePremiumTariffDefinition::setBasePremiumAssistanceDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumBagazDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumBlsDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumDnaDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumGapDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumNnwDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumOcBazaDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumOcMocDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumOpDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumOuzAcDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumOuzOcDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumPomocDefinitionId()
     * @uses BasePremiumTariffDefinition::setBasePremiumSzybyDefinitionId()
     * @param int $basePremiumAssistanceDefinitionId
     * @param int $basePremiumBagazDefinitionId
     * @param int $basePremiumBlsDefinitionId
     * @param int $basePremiumDnaDefinitionId
     * @param int $basePremiumGapDefinitionId
     * @param int $basePremiumNnwDefinitionId
     * @param int $basePremiumOcBazaDefinitionId
     * @param int $basePremiumOcMocDefinitionId
     * @param int $basePremiumOpDefinitionId
     * @param int $basePremiumOuzAcDefinitionId
     * @param int $basePremiumOuzOcDefinitionId
     * @param int $basePremiumPomocDefinitionId
     * @param int $basePremiumSzybyDefinitionId
     */
    public function __construct($basePremiumAssistanceDefinitionId = null, $basePremiumBagazDefinitionId = null, $basePremiumBlsDefinitionId = null, $basePremiumDnaDefinitionId = null, $basePremiumGapDefinitionId = null, $basePremiumNnwDefinitionId = null, $basePremiumOcBazaDefinitionId = null, $basePremiumOcMocDefinitionId = null, $basePremiumOpDefinitionId = null, $basePremiumOuzAcDefinitionId = null, $basePremiumOuzOcDefinitionId = null, $basePremiumPomocDefinitionId = null, $basePremiumSzybyDefinitionId = null)
    {
        $this
            ->setBasePremiumAssistanceDefinitionId($basePremiumAssistanceDefinitionId)
            ->setBasePremiumBagazDefinitionId($basePremiumBagazDefinitionId)
            ->setBasePremiumBlsDefinitionId($basePremiumBlsDefinitionId)
            ->setBasePremiumDnaDefinitionId($basePremiumDnaDefinitionId)
            ->setBasePremiumGapDefinitionId($basePremiumGapDefinitionId)
            ->setBasePremiumNnwDefinitionId($basePremiumNnwDefinitionId)
            ->setBasePremiumOcBazaDefinitionId($basePremiumOcBazaDefinitionId)
            ->setBasePremiumOcMocDefinitionId($basePremiumOcMocDefinitionId)
            ->setBasePremiumOpDefinitionId($basePremiumOpDefinitionId)
            ->setBasePremiumOuzAcDefinitionId($basePremiumOuzAcDefinitionId)
            ->setBasePremiumOuzOcDefinitionId($basePremiumOuzOcDefinitionId)
            ->setBasePremiumPomocDefinitionId($basePremiumPomocDefinitionId)
            ->setBasePremiumSzybyDefinitionId($basePremiumSzybyDefinitionId);
    }
    /**
     * Get BasePremiumAssistanceDefinitionId value
     * @return int|null
     */
    public function getBasePremiumAssistanceDefinitionId()
    {
        return $this->BasePremiumAssistanceDefinitionId;
    }
    /**
     * Set BasePremiumAssistanceDefinitionId value
     * @param int $basePremiumAssistanceDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumAssistanceDefinitionId($basePremiumAssistanceDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumAssistanceDefinitionId) && !is_numeric($basePremiumAssistanceDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumAssistanceDefinitionId)), __LINE__);
        }
        $this->BasePremiumAssistanceDefinitionId = $basePremiumAssistanceDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumBagazDefinitionId value
     * @return int|null
     */
    public function getBasePremiumBagazDefinitionId()
    {
        return $this->BasePremiumBagazDefinitionId;
    }
    /**
     * Set BasePremiumBagazDefinitionId value
     * @param int $basePremiumBagazDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumBagazDefinitionId($basePremiumBagazDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumBagazDefinitionId) && !is_numeric($basePremiumBagazDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumBagazDefinitionId)), __LINE__);
        }
        $this->BasePremiumBagazDefinitionId = $basePremiumBagazDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumBlsDefinitionId value
     * @return int|null
     */
    public function getBasePremiumBlsDefinitionId()
    {
        return $this->BasePremiumBlsDefinitionId;
    }
    /**
     * Set BasePremiumBlsDefinitionId value
     * @param int $basePremiumBlsDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumBlsDefinitionId($basePremiumBlsDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumBlsDefinitionId) && !is_numeric($basePremiumBlsDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumBlsDefinitionId)), __LINE__);
        }
        $this->BasePremiumBlsDefinitionId = $basePremiumBlsDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumDnaDefinitionId value
     * @return int|null
     */
    public function getBasePremiumDnaDefinitionId()
    {
        return $this->BasePremiumDnaDefinitionId;
    }
    /**
     * Set BasePremiumDnaDefinitionId value
     * @param int $basePremiumDnaDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumDnaDefinitionId($basePremiumDnaDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumDnaDefinitionId) && !is_numeric($basePremiumDnaDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumDnaDefinitionId)), __LINE__);
        }
        $this->BasePremiumDnaDefinitionId = $basePremiumDnaDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumGapDefinitionId value
     * @return int|null
     */
    public function getBasePremiumGapDefinitionId()
    {
        return $this->BasePremiumGapDefinitionId;
    }
    /**
     * Set BasePremiumGapDefinitionId value
     * @param int $basePremiumGapDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumGapDefinitionId($basePremiumGapDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumGapDefinitionId) && !is_numeric($basePremiumGapDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumGapDefinitionId)), __LINE__);
        }
        $this->BasePremiumGapDefinitionId = $basePremiumGapDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumNnwDefinitionId value
     * @return int|null
     */
    public function getBasePremiumNnwDefinitionId()
    {
        return $this->BasePremiumNnwDefinitionId;
    }
    /**
     * Set BasePremiumNnwDefinitionId value
     * @param int $basePremiumNnwDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumNnwDefinitionId($basePremiumNnwDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumNnwDefinitionId) && !is_numeric($basePremiumNnwDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumNnwDefinitionId)), __LINE__);
        }
        $this->BasePremiumNnwDefinitionId = $basePremiumNnwDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumOcBazaDefinitionId value
     * @return int|null
     */
    public function getBasePremiumOcBazaDefinitionId()
    {
        return $this->BasePremiumOcBazaDefinitionId;
    }
    /**
     * Set BasePremiumOcBazaDefinitionId value
     * @param int $basePremiumOcBazaDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumOcBazaDefinitionId($basePremiumOcBazaDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumOcBazaDefinitionId) && !is_numeric($basePremiumOcBazaDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumOcBazaDefinitionId)), __LINE__);
        }
        $this->BasePremiumOcBazaDefinitionId = $basePremiumOcBazaDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumOcMocDefinitionId value
     * @return int|null
     */
    public function getBasePremiumOcMocDefinitionId()
    {
        return $this->BasePremiumOcMocDefinitionId;
    }
    /**
     * Set BasePremiumOcMocDefinitionId value
     * @param int $basePremiumOcMocDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumOcMocDefinitionId($basePremiumOcMocDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumOcMocDefinitionId) && !is_numeric($basePremiumOcMocDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumOcMocDefinitionId)), __LINE__);
        }
        $this->BasePremiumOcMocDefinitionId = $basePremiumOcMocDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumOpDefinitionId value
     * @return int|null
     */
    public function getBasePremiumOpDefinitionId()
    {
        return $this->BasePremiumOpDefinitionId;
    }
    /**
     * Set BasePremiumOpDefinitionId value
     * @param int $basePremiumOpDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumOpDefinitionId($basePremiumOpDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumOpDefinitionId) && !is_numeric($basePremiumOpDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumOpDefinitionId)), __LINE__);
        }
        $this->BasePremiumOpDefinitionId = $basePremiumOpDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumOuzAcDefinitionId value
     * @return int|null
     */
    public function getBasePremiumOuzAcDefinitionId()
    {
        return $this->BasePremiumOuzAcDefinitionId;
    }
    /**
     * Set BasePremiumOuzAcDefinitionId value
     * @param int $basePremiumOuzAcDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumOuzAcDefinitionId($basePremiumOuzAcDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumOuzAcDefinitionId) && !is_numeric($basePremiumOuzAcDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumOuzAcDefinitionId)), __LINE__);
        }
        $this->BasePremiumOuzAcDefinitionId = $basePremiumOuzAcDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumOuzOcDefinitionId value
     * @return int|null
     */
    public function getBasePremiumOuzOcDefinitionId()
    {
        return $this->BasePremiumOuzOcDefinitionId;
    }
    /**
     * Set BasePremiumOuzOcDefinitionId value
     * @param int $basePremiumOuzOcDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumOuzOcDefinitionId($basePremiumOuzOcDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumOuzOcDefinitionId) && !is_numeric($basePremiumOuzOcDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumOuzOcDefinitionId)), __LINE__);
        }
        $this->BasePremiumOuzOcDefinitionId = $basePremiumOuzOcDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumPomocDefinitionId value
     * @return int|null
     */
    public function getBasePremiumPomocDefinitionId()
    {
        return $this->BasePremiumPomocDefinitionId;
    }
    /**
     * Set BasePremiumPomocDefinitionId value
     * @param int $basePremiumPomocDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumPomocDefinitionId($basePremiumPomocDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumPomocDefinitionId) && !is_numeric($basePremiumPomocDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumPomocDefinitionId)), __LINE__);
        }
        $this->BasePremiumPomocDefinitionId = $basePremiumPomocDefinitionId;
        return $this;
    }
    /**
     * Get BasePremiumSzybyDefinitionId value
     * @return int|null
     */
    public function getBasePremiumSzybyDefinitionId()
    {
        return $this->BasePremiumSzybyDefinitionId;
    }
    /**
     * Set BasePremiumSzybyDefinitionId value
     * @param int $basePremiumSzybyDefinitionId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
     */
    public function setBasePremiumSzybyDefinitionId($basePremiumSzybyDefinitionId = null)
    {
        // validation for constraint: int
        if (!is_null($basePremiumSzybyDefinitionId) && !is_numeric($basePremiumSzybyDefinitionId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($basePremiumSzybyDefinitionId)), __LINE__);
        }
        $this->BasePremiumSzybyDefinitionId = $basePremiumSzybyDefinitionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BasePremiumTariffDefinition
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
