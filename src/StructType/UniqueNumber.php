<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UniqueNumber StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:UniqueNumber
 * @subpackage Structs
 */
class UniqueNumber extends AbstractStructBase
{
    /**
     * The countryCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $countryCode;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The otherId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $otherId;
    /**
     * The productType
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $productType;
    /**
     * The series
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $series;
    /**
     * Constructor method for UniqueNumber
     * @uses UniqueNumber::setCountryCode()
     * @uses UniqueNumber::setId()
     * @uses UniqueNumber::setOtherId()
     * @uses UniqueNumber::setProductType()
     * @uses UniqueNumber::setSeries()
     * @param string $countryCode
     * @param string $id
     * @param string $otherId
     * @param string $productType
     * @param string $series
     */
    public function __construct($countryCode = null, $id = null, $otherId = null, $productType = null, $series = null)
    {
        $this
            ->setCountryCode($countryCode)
            ->setId($id)
            ->setOtherId($otherId)
            ->setProductType($productType)
            ->setSeries($series);
    }
    /**
     * Get countryCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountryCode()
    {
        return isset($this->countryCode) ? $this->countryCode : null;
    }
    /**
     * Set countryCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $countryCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber
     */
    public function setCountryCode($countryCode = null)
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($countryCode)), __LINE__);
        }
        if (is_null($countryCode) || (is_array($countryCode) && empty($countryCode))) {
            unset($this->countryCode);
        } else {
            $this->countryCode = $countryCode;
        }
        return $this;
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $id
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($id)), __LINE__);
        }
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        return $this;
    }
    /**
     * Get otherId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOtherId()
    {
        return isset($this->otherId) ? $this->otherId : null;
    }
    /**
     * Set otherId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $otherId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber
     */
    public function setOtherId($otherId = null)
    {
        // validation for constraint: string
        if (!is_null($otherId) && !is_string($otherId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($otherId)), __LINE__);
        }
        if (is_null($otherId) || (is_array($otherId) && empty($otherId))) {
            unset($this->otherId);
        } else {
            $this->otherId = $otherId;
        }
        return $this;
    }
    /**
     * Get productType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getProductType()
    {
        return isset($this->productType) ? $this->productType : null;
    }
    /**
     * Set productType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $productType
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber
     */
    public function setProductType($productType = null)
    {
        // validation for constraint: string
        if (!is_null($productType) && !is_string($productType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($productType)), __LINE__);
        }
        if (is_null($productType) || (is_array($productType) && empty($productType))) {
            unset($this->productType);
        } else {
            $this->productType = $productType;
        }
        return $this;
    }
    /**
     * Get series value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSeries()
    {
        return isset($this->series) ? $this->series : null;
    }
    /**
     * Set series value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $series
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber
     */
    public function setSeries($series = null)
    {
        // validation for constraint: string
        if (!is_null($series) && !is_string($series)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($series)), __LINE__);
        }
        if (is_null($series) || (is_array($series) && empty($series))) {
            unset($this->series);
        } else {
            $this->series = $series;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\UniqueNumber
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
