<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PkdCode StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PkdCode
 * @subpackage Structs
 */
class PkdCode extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Code;
    /**
     * The DescriptionEN
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DescriptionEN;
    /**
     * The DescriptionPL
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DescriptionPL;
    /**
     * The CodeType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PkdCodeType
     */
    public $CodeType;
    /**
     * The englishDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $englishDescription;
    /**
     * The isRestricted
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $isRestricted;
    /**
     * The polishDescription
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $polishDescription;
    /**
     * The restrictedCodeMaping
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $restrictedCodeMaping;
    /**
     * The tariffGroupBurglary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $tariffGroupBurglary;
    /**
     * The tariffGroupFire
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $tariffGroupFire;
    /**
     * The tariffGroupLiability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $tariffGroupLiability;
    /**
     * Constructor method for PkdCode
     * @uses PkdCode::setCode()
     * @uses PkdCode::setDescriptionEN()
     * @uses PkdCode::setDescriptionPL()
     * @uses PkdCode::setCodeType()
     * @uses PkdCode::setEnglishDescription()
     * @uses PkdCode::setIsRestricted()
     * @uses PkdCode::setPolishDescription()
     * @uses PkdCode::setRestrictedCodeMaping()
     * @uses PkdCode::setTariffGroupBurglary()
     * @uses PkdCode::setTariffGroupFire()
     * @uses PkdCode::setTariffGroupLiability()
     * @param string $code
     * @param string $descriptionEN
     * @param string $descriptionPL
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCodeType $codeType
     * @param string $englishDescription
     * @param bool $isRestricted
     * @param string $polishDescription
     * @param string $restrictedCodeMaping
     * @param int $tariffGroupBurglary
     * @param int $tariffGroupFire
     * @param int $tariffGroupLiability
     */
    public function __construct($code = null, $descriptionEN = null, $descriptionPL = null, \Mu4ddi3\Compensa\Webservice\StructType\PkdCodeType $codeType = null, $englishDescription = null, $isRestricted = null, $polishDescription = null, $restrictedCodeMaping = null, $tariffGroupBurglary = null, $tariffGroupFire = null, $tariffGroupLiability = null)
    {
        $this
            ->setCode($code)
            ->setDescriptionEN($descriptionEN)
            ->setDescriptionPL($descriptionPL)
            ->setCodeType($codeType)
            ->setEnglishDescription($englishDescription)
            ->setIsRestricted($isRestricted)
            ->setPolishDescription($polishDescription)
            ->setRestrictedCodeMaping($restrictedCodeMaping)
            ->setTariffGroupBurglary($tariffGroupBurglary)
            ->setTariffGroupFire($tariffGroupFire)
            ->setTariffGroupLiability($tariffGroupLiability);
    }
    /**
     * Get Code value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCode()
    {
        return isset($this->Code) ? $this->Code : null;
    }
    /**
     * Set Code value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $code
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setCode($code = null)
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        if (is_null($code) || (is_array($code) && empty($code))) {
            unset($this->Code);
        } else {
            $this->Code = $code;
        }
        return $this;
    }
    /**
     * Get DescriptionEN value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescriptionEN()
    {
        return isset($this->DescriptionEN) ? $this->DescriptionEN : null;
    }
    /**
     * Set DescriptionEN value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $descriptionEN
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setDescriptionEN($descriptionEN = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionEN) && !is_string($descriptionEN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptionEN)), __LINE__);
        }
        if (is_null($descriptionEN) || (is_array($descriptionEN) && empty($descriptionEN))) {
            unset($this->DescriptionEN);
        } else {
            $this->DescriptionEN = $descriptionEN;
        }
        return $this;
    }
    /**
     * Get DescriptionPL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescriptionPL()
    {
        return isset($this->DescriptionPL) ? $this->DescriptionPL : null;
    }
    /**
     * Set DescriptionPL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $descriptionPL
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setDescriptionPL($descriptionPL = null)
    {
        // validation for constraint: string
        if (!is_null($descriptionPL) && !is_string($descriptionPL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($descriptionPL)), __LINE__);
        }
        if (is_null($descriptionPL) || (is_array($descriptionPL) && empty($descriptionPL))) {
            unset($this->DescriptionPL);
        } else {
            $this->DescriptionPL = $descriptionPL;
        }
        return $this;
    }
    /**
     * Get CodeType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCodeType|null
     */
    public function getCodeType()
    {
        return isset($this->CodeType) ? $this->CodeType : null;
    }
    /**
     * Set CodeType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PkdCodeType $codeType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setCodeType(\Mu4ddi3\Compensa\Webservice\StructType\PkdCodeType $codeType = null)
    {
        if (is_null($codeType) || (is_array($codeType) && empty($codeType))) {
            unset($this->CodeType);
        } else {
            $this->CodeType = $codeType;
        }
        return $this;
    }
    /**
     * Get englishDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEnglishDescription()
    {
        return isset($this->englishDescription) ? $this->englishDescription : null;
    }
    /**
     * Set englishDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $englishDescription
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setEnglishDescription($englishDescription = null)
    {
        // validation for constraint: string
        if (!is_null($englishDescription) && !is_string($englishDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($englishDescription)), __LINE__);
        }
        if (is_null($englishDescription) || (is_array($englishDescription) && empty($englishDescription))) {
            unset($this->englishDescription);
        } else {
            $this->englishDescription = $englishDescription;
        }
        return $this;
    }
    /**
     * Get isRestricted value
     * @return bool|null
     */
    public function getIsRestricted()
    {
        return $this->isRestricted;
    }
    /**
     * Set isRestricted value
     * @param bool $isRestricted
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setIsRestricted($isRestricted = null)
    {
        // validation for constraint: boolean
        if (!is_null($isRestricted) && !is_bool($isRestricted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isRestricted)), __LINE__);
        }
        $this->isRestricted = $isRestricted;
        return $this;
    }
    /**
     * Get polishDescription value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPolishDescription()
    {
        return isset($this->polishDescription) ? $this->polishDescription : null;
    }
    /**
     * Set polishDescription value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $polishDescription
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setPolishDescription($polishDescription = null)
    {
        // validation for constraint: string
        if (!is_null($polishDescription) && !is_string($polishDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($polishDescription)), __LINE__);
        }
        if (is_null($polishDescription) || (is_array($polishDescription) && empty($polishDescription))) {
            unset($this->polishDescription);
        } else {
            $this->polishDescription = $polishDescription;
        }
        return $this;
    }
    /**
     * Get restrictedCodeMaping value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRestrictedCodeMaping()
    {
        return isset($this->restrictedCodeMaping) ? $this->restrictedCodeMaping : null;
    }
    /**
     * Set restrictedCodeMaping value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $restrictedCodeMaping
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setRestrictedCodeMaping($restrictedCodeMaping = null)
    {
        // validation for constraint: string
        if (!is_null($restrictedCodeMaping) && !is_string($restrictedCodeMaping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($restrictedCodeMaping)), __LINE__);
        }
        if (is_null($restrictedCodeMaping) || (is_array($restrictedCodeMaping) && empty($restrictedCodeMaping))) {
            unset($this->restrictedCodeMaping);
        } else {
            $this->restrictedCodeMaping = $restrictedCodeMaping;
        }
        return $this;
    }
    /**
     * Get tariffGroupBurglary value
     * @return int|null
     */
    public function getTariffGroupBurglary()
    {
        return $this->tariffGroupBurglary;
    }
    /**
     * Set tariffGroupBurglary value
     * @param int $tariffGroupBurglary
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setTariffGroupBurglary($tariffGroupBurglary = null)
    {
        // validation for constraint: int
        if (!is_null($tariffGroupBurglary) && !is_numeric($tariffGroupBurglary)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tariffGroupBurglary)), __LINE__);
        }
        $this->tariffGroupBurglary = $tariffGroupBurglary;
        return $this;
    }
    /**
     * Get tariffGroupFire value
     * @return int|null
     */
    public function getTariffGroupFire()
    {
        return $this->tariffGroupFire;
    }
    /**
     * Set tariffGroupFire value
     * @param int $tariffGroupFire
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setTariffGroupFire($tariffGroupFire = null)
    {
        // validation for constraint: int
        if (!is_null($tariffGroupFire) && !is_numeric($tariffGroupFire)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tariffGroupFire)), __LINE__);
        }
        $this->tariffGroupFire = $tariffGroupFire;
        return $this;
    }
    /**
     * Get tariffGroupLiability value
     * @return int|null
     */
    public function getTariffGroupLiability()
    {
        return $this->tariffGroupLiability;
    }
    /**
     * Set tariffGroupLiability value
     * @param int $tariffGroupLiability
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
     */
    public function setTariffGroupLiability($tariffGroupLiability = null)
    {
        // validation for constraint: int
        if (!is_null($tariffGroupLiability) && !is_numeric($tariffGroupLiability)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($tariffGroupLiability)), __LINE__);
        }
        $this->tariffGroupLiability = $tariffGroupLiability;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PkdCode
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
