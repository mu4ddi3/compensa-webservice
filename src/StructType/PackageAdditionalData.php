<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PackageAdditionalData StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PackageAdditionalData
 * @subpackage Structs
 */
class PackageAdditionalData extends AbstractStructBase
{
    /**
     * The GapValueAutoCasco
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $GapValueAutoCasco;
    /**
     * The GapValueFakturowy
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage
     */
    public $GapValueFakturowy;
    /**
     * The InstallmentsNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber
     */
    public $InstallmentsNumber;
    /**
     * The OpDriversCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $OpDriversCount;
    /**
     * Constructor method for PackageAdditionalData
     * @uses PackageAdditionalData::setGapValueAutoCasco()
     * @uses PackageAdditionalData::setGapValueFakturowy()
     * @uses PackageAdditionalData::setInstallmentsNumber()
     * @uses PackageAdditionalData::setOpDriversCount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValueAutoCasco
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValueFakturowy
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber $installmentsNumber
     * @param int $opDriversCount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValueAutoCasco = null, \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValueFakturowy = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber $installmentsNumber = null, $opDriversCount = null)
    {
        $this
            ->setGapValueAutoCasco($gapValueAutoCasco)
            ->setGapValueFakturowy($gapValueFakturowy)
            ->setInstallmentsNumber($installmentsNumber)
            ->setOpDriversCount($opDriversCount);
    }
    /**
     * Get GapValueAutoCasco value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getGapValueAutoCasco()
    {
        return isset($this->GapValueAutoCasco) ? $this->GapValueAutoCasco : null;
    }
    /**
     * Set GapValueAutoCasco value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValueAutoCasco
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData
     */
    public function setGapValueAutoCasco(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValueAutoCasco = null)
    {
        if (is_null($gapValueAutoCasco) || (is_array($gapValueAutoCasco) && empty($gapValueAutoCasco))) {
            unset($this->GapValueAutoCasco);
        } else {
            $this->GapValueAutoCasco = $gapValueAutoCasco;
        }
        return $this;
    }
    /**
     * Get GapValueFakturowy value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage|null
     */
    public function getGapValueFakturowy()
    {
        return isset($this->GapValueFakturowy) ? $this->GapValueFakturowy : null;
    }
    /**
     * Set GapValueFakturowy value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValueFakturowy
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData
     */
    public function setGapValueFakturowy(\Mu4ddi3\Compensa\Webservice\StructType\MoneyAmountStorage $gapValueFakturowy = null)
    {
        if (is_null($gapValueFakturowy) || (is_array($gapValueFakturowy) && empty($gapValueFakturowy))) {
            unset($this->GapValueFakturowy);
        } else {
            $this->GapValueFakturowy = $gapValueFakturowy;
        }
        return $this;
    }
    /**
     * Get InstallmentsNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber|null
     */
    public function getInstallmentsNumber()
    {
        return isset($this->InstallmentsNumber) ? $this->InstallmentsNumber : null;
    }
    /**
     * Set InstallmentsNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber $installmentsNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData
     */
    public function setInstallmentsNumber(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumber $installmentsNumber = null)
    {
        if (is_null($installmentsNumber) || (is_array($installmentsNumber) && empty($installmentsNumber))) {
            unset($this->InstallmentsNumber);
        } else {
            $this->InstallmentsNumber = $installmentsNumber;
        }
        return $this;
    }
    /**
     * Get OpDriversCount value
     * @return int|null
     */
    public function getOpDriversCount()
    {
        return $this->OpDriversCount;
    }
    /**
     * Set OpDriversCount value
     * @param int $opDriversCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData
     */
    public function setOpDriversCount($opDriversCount = null)
    {
        // validation for constraint: int
        if (!is_null($opDriversCount) && !is_numeric($opDriversCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($opDriversCount)), __LINE__);
        }
        $this->OpDriversCount = $opDriversCount;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PackageAdditionalData
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
