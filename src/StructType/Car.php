<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Car StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Car
 * @subpackage Structs
 */
class Car extends InsuredObject
{
    /**
     * The body
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $body;
    /**
     * The brandId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $brandId;
    /**
     * The brandName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $brandName;
    /**
     * The capacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $capacity;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The doorsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $doorsCount;
    /**
     * The firstRegistrationDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $firstRegistrationDate;
    /**
     * The fullModelName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $fullModelName;
    /**
     * The modelId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $modelId;
    /**
     * The modelName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $modelName;
    /**
     * The power
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $power;
    /**
     * The price
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $price;
    /**
     * The productionYear
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $productionYear;
    /**
     * The registrationNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $registrationNumber;
    /**
     * The seatsCount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $seatsCount;
    /**
     * The type
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $type;
    /**
     * The typeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $typeId;
    /**
     * The usageCategory
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\CarUsageCategory
     */
    public $usageCategory;
    /**
     * The vinNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $vinNumber;
    /**
     * Constructor method for Car
     * @uses Car::setBody()
     * @uses Car::setBrandId()
     * @uses Car::setBrandName()
     * @uses Car::setCapacity()
     * @uses Car::setCountry()
     * @uses Car::setDoorsCount()
     * @uses Car::setFirstRegistrationDate()
     * @uses Car::setFullModelName()
     * @uses Car::setModelId()
     * @uses Car::setModelName()
     * @uses Car::setPower()
     * @uses Car::setPrice()
     * @uses Car::setProductionYear()
     * @uses Car::setRegistrationNumber()
     * @uses Car::setSeatsCount()
     * @uses Car::setType()
     * @uses Car::setTypeId()
     * @uses Car::setUsageCategory()
     * @uses Car::setVinNumber()
     * @param string $body
     * @param int $brandId
     * @param string $brandName
     * @param int $capacity
     * @param string $country
     * @param int $doorsCount
     * @param string $firstRegistrationDate
     * @param string $fullModelName
     * @param string $modelId
     * @param string $modelName
     * @param int $power
     * @param float $price
     * @param int $productionYear
     * @param string $registrationNumber
     * @param int $seatsCount
     * @param string $type
     * @param string $typeId
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CarUsageCategory $usageCategory
     * @param string $vinNumber
     */
    public function __construct($body = null, $brandId = null, $brandName = null, $capacity = null, $country = null, $doorsCount = null, $firstRegistrationDate = null, $fullModelName = null, $modelId = null, $modelName = null, $power = null, $price = null, $productionYear = null, $registrationNumber = null, $seatsCount = null, $type = null, $typeId = null, \Mu4ddi3\Compensa\Webservice\StructType\CarUsageCategory $usageCategory = null, $vinNumber = null)
    {
        $this
            ->setBody($body)
            ->setBrandId($brandId)
            ->setBrandName($brandName)
            ->setCapacity($capacity)
            ->setCountry($country)
            ->setDoorsCount($doorsCount)
            ->setFirstRegistrationDate($firstRegistrationDate)
            ->setFullModelName($fullModelName)
            ->setModelId($modelId)
            ->setModelName($modelName)
            ->setPower($power)
            ->setPrice($price)
            ->setProductionYear($productionYear)
            ->setRegistrationNumber($registrationNumber)
            ->setSeatsCount($seatsCount)
            ->setType($type)
            ->setTypeId($typeId)
            ->setUsageCategory($usageCategory)
            ->setVinNumber($vinNumber);
    }
    /**
     * Get body value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBody()
    {
        return isset($this->body) ? $this->body : null;
    }
    /**
     * Set body value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $body
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setBody($body = null)
    {
        // validation for constraint: string
        if (!is_null($body) && !is_string($body)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($body)), __LINE__);
        }
        if (is_null($body) || (is_array($body) && empty($body))) {
            unset($this->body);
        } else {
            $this->body = $body;
        }
        return $this;
    }
    /**
     * Get brandId value
     * @return int|null
     */
    public function getBrandId()
    {
        return $this->brandId;
    }
    /**
     * Set brandId value
     * @param int $brandId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setBrandId($brandId = null)
    {
        // validation for constraint: int
        if (!is_null($brandId) && !is_numeric($brandId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($brandId)), __LINE__);
        }
        $this->brandId = $brandId;
        return $this;
    }
    /**
     * Get brandName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBrandName()
    {
        return isset($this->brandName) ? $this->brandName : null;
    }
    /**
     * Set brandName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $brandName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setBrandName($brandName = null)
    {
        // validation for constraint: string
        if (!is_null($brandName) && !is_string($brandName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($brandName)), __LINE__);
        }
        if (is_null($brandName) || (is_array($brandName) && empty($brandName))) {
            unset($this->brandName);
        } else {
            $this->brandName = $brandName;
        }
        return $this;
    }
    /**
     * Get capacity value
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
    /**
     * Set capacity value
     * @param int $capacity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: int
        if (!is_null($capacity) && !is_numeric($capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacity)), __LINE__);
        }
        $this->capacity = $capacity;
        return $this;
    }
    /**
     * Get country value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCountry()
    {
        return isset($this->country) ? $this->country : null;
    }
    /**
     * Set country value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $country
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        if (is_null($country) || (is_array($country) && empty($country))) {
            unset($this->country);
        } else {
            $this->country = $country;
        }
        return $this;
    }
    /**
     * Get doorsCount value
     * @return int|null
     */
    public function getDoorsCount()
    {
        return $this->doorsCount;
    }
    /**
     * Set doorsCount value
     * @param int $doorsCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setDoorsCount($doorsCount = null)
    {
        // validation for constraint: int
        if (!is_null($doorsCount) && !is_numeric($doorsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($doorsCount)), __LINE__);
        }
        $this->doorsCount = $doorsCount;
        return $this;
    }
    /**
     * Get firstRegistrationDate value
     * @return string|null
     */
    public function getFirstRegistrationDate()
    {
        return $this->firstRegistrationDate;
    }
    /**
     * Set firstRegistrationDate value
     * @param string $firstRegistrationDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setFirstRegistrationDate($firstRegistrationDate = null)
    {
        // validation for constraint: string
        if (!is_null($firstRegistrationDate) && !is_string($firstRegistrationDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstRegistrationDate)), __LINE__);
        }
        $this->firstRegistrationDate = $firstRegistrationDate;
        return $this;
    }
    /**
     * Get fullModelName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFullModelName()
    {
        return isset($this->fullModelName) ? $this->fullModelName : null;
    }
    /**
     * Set fullModelName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fullModelName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setFullModelName($fullModelName = null)
    {
        // validation for constraint: string
        if (!is_null($fullModelName) && !is_string($fullModelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($fullModelName)), __LINE__);
        }
        if (is_null($fullModelName) || (is_array($fullModelName) && empty($fullModelName))) {
            unset($this->fullModelName);
        } else {
            $this->fullModelName = $fullModelName;
        }
        return $this;
    }
    /**
     * Get modelId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModelId()
    {
        return isset($this->modelId) ? $this->modelId : null;
    }
    /**
     * Set modelId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $modelId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setModelId($modelId = null)
    {
        // validation for constraint: string
        if (!is_null($modelId) && !is_string($modelId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modelId)), __LINE__);
        }
        if (is_null($modelId) || (is_array($modelId) && empty($modelId))) {
            unset($this->modelId);
        } else {
            $this->modelId = $modelId;
        }
        return $this;
    }
    /**
     * Get modelName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getModelName()
    {
        return isset($this->modelName) ? $this->modelName : null;
    }
    /**
     * Set modelName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $modelName
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setModelName($modelName = null)
    {
        // validation for constraint: string
        if (!is_null($modelName) && !is_string($modelName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($modelName)), __LINE__);
        }
        if (is_null($modelName) || (is_array($modelName) && empty($modelName))) {
            unset($this->modelName);
        } else {
            $this->modelName = $modelName;
        }
        return $this;
    }
    /**
     * Get power value
     * @return int|null
     */
    public function getPower()
    {
        return $this->power;
    }
    /**
     * Set power value
     * @param int $power
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setPower($power = null)
    {
        // validation for constraint: int
        if (!is_null($power) && !is_numeric($power)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($power)), __LINE__);
        }
        $this->power = $power;
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setPrice($price = null)
    {
        $this->price = $price;
        return $this;
    }
    /**
     * Get productionYear value
     * @return int|null
     */
    public function getProductionYear()
    {
        return $this->productionYear;
    }
    /**
     * Set productionYear value
     * @param int $productionYear
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setProductionYear($productionYear = null)
    {
        // validation for constraint: int
        if (!is_null($productionYear) && !is_numeric($productionYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productionYear)), __LINE__);
        }
        $this->productionYear = $productionYear;
        return $this;
    }
    /**
     * Get registrationNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegistrationNumber()
    {
        return isset($this->registrationNumber) ? $this->registrationNumber : null;
    }
    /**
     * Set registrationNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $registrationNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setRegistrationNumber($registrationNumber = null)
    {
        // validation for constraint: string
        if (!is_null($registrationNumber) && !is_string($registrationNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($registrationNumber)), __LINE__);
        }
        if (is_null($registrationNumber) || (is_array($registrationNumber) && empty($registrationNumber))) {
            unset($this->registrationNumber);
        } else {
            $this->registrationNumber = $registrationNumber;
        }
        return $this;
    }
    /**
     * Get seatsCount value
     * @return int|null
     */
    public function getSeatsCount()
    {
        return $this->seatsCount;
    }
    /**
     * Set seatsCount value
     * @param int $seatsCount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setSeatsCount($seatsCount = null)
    {
        // validation for constraint: int
        if (!is_null($seatsCount) && !is_numeric($seatsCount)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($seatsCount)), __LINE__);
        }
        $this->seatsCount = $seatsCount;
        return $this;
    }
    /**
     * Get type value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getType()
    {
        return isset($this->type) ? $this->type : null;
    }
    /**
     * Set type value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $type
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setType($type = null)
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        if (is_null($type) || (is_array($type) && empty($type))) {
            unset($this->type);
        } else {
            $this->type = $type;
        }
        return $this;
    }
    /**
     * Get typeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTypeId()
    {
        return isset($this->typeId) ? $this->typeId : null;
    }
    /**
     * Set typeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $typeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setTypeId($typeId = null)
    {
        // validation for constraint: string
        if (!is_null($typeId) && !is_string($typeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($typeId)), __LINE__);
        }
        if (is_null($typeId) || (is_array($typeId) && empty($typeId))) {
            unset($this->typeId);
        } else {
            $this->typeId = $typeId;
        }
        return $this;
    }
    /**
     * Get usageCategory value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CarUsageCategory|null
     */
    public function getUsageCategory()
    {
        return isset($this->usageCategory) ? $this->usageCategory : null;
    }
    /**
     * Set usageCategory value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\CarUsageCategory $usageCategory
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setUsageCategory(\Mu4ddi3\Compensa\Webservice\StructType\CarUsageCategory $usageCategory = null)
    {
        if (is_null($usageCategory) || (is_array($usageCategory) && empty($usageCategory))) {
            unset($this->usageCategory);
        } else {
            $this->usageCategory = $usageCategory;
        }
        return $this;
    }
    /**
     * Get vinNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVinNumber()
    {
        return isset($this->vinNumber) ? $this->vinNumber : null;
    }
    /**
     * Set vinNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $vinNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
     */
    public function setVinNumber($vinNumber = null)
    {
        // validation for constraint: string
        if (!is_null($vinNumber) && !is_string($vinNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($vinNumber)), __LINE__);
        }
        if (is_null($vinNumber) || (is_array($vinNumber) && empty($vinNumber))) {
            unset($this->vinNumber);
        } else {
            $this->vinNumber = $vinNumber;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Car
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
