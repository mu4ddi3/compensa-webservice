<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Address StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Address
 * @subpackage Structs
 */
class Address extends BaseAddress
{
    /**
     * The buildingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $buildingNumber;
    /**
     * The city
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $city;
    /**
     * The country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $country;
    /**
     * The flatNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $flatNumber;
    /**
     * The id
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $id;
    /**
     * The postalCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $postalCity;
    /**
     * The postalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $postalCode;
    /**
     * The region
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion
     */
    public $region;
    /**
     * The street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $street;
    /**
     * The streetPrefix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $streetPrefix;
    /**
     * The BuildingNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BuildingNumber;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $City;
    /**
     * The Community
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Community;
    /**
     * The County
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $County;
    /**
     * The FlatNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FlatNumber;
    /**
     * The PostalCity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCity;
    /**
     * The PostalCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PostalCode;
    /**
     * The StandardizedAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\StandardizedAddress
     */
    public $StandardizedAddress;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Street;
    /**
     * The StreetPrefix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StreetPrefix;
    /**
     * The Voivodeship
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Voivodeship;
    /**
     * Constructor method for Address
     * @uses Address::setBuildingNumber()
     * @uses Address::setCity()
     * @uses Address::setCountry()
     * @uses Address::setFlatNumber()
     * @uses Address::setId()
     * @uses Address::setPostalCity()
     * @uses Address::setPostalCode()
     * @uses Address::setRegion()
     * @uses Address::setStreet()
     * @uses Address::setStreetPrefix()
     * @uses Address::setBuildingNumber_1()
     * @uses Address::setCity_1()
     * @uses Address::setCommunity()
     * @uses Address::setCounty()
     * @uses Address::setFlatNumber_1()
     * @uses Address::setPostalCity_1()
     * @uses Address::setPostalCode_1()
     * @uses Address::setStandardizedAddress()
     * @uses Address::setStreet_1()
     * @uses Address::setStreetPrefix_1()
     * @uses Address::setVoivodeship()
     * @param string $buildingNumber
     * @param string $city
     * @param string $country
     * @param string $flatNumber
     * @param string $id
     * @param string $postalCity
     * @param string $postalCode
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion $region
     * @param string $street
     * @param string $streetPrefix
     * @param string $buildingNumber
     * @param string $city
     * @param string $community
     * @param string $county
     * @param string $flatNumber
     * @param string $postalCity
     * @param string $postalCode
     * @param \Mu4ddi3\Compensa\Webservice\StructType\StandardizedAddress $standardizedAddress
     * @param string $street
     * @param string $streetPrefix
     * @param string $voivodeship
     */
    public function __construct($buildingNumber = null, $city = null, $country = null, $flatNumber = null, $id = null, $postalCity = null, $postalCode = null, \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion $region = null, $street = null, $streetPrefix = null, $buildingNumber_1 = null, $city_1 = null, $community = null, $county = null, $flatNumber_1 = null, $postalCity_1 = null, $postalCode_1 = null, \Mu4ddi3\Compensa\Webservice\StructType\StandardizedAddress $standardizedAddress = null, $street_1 = null, $streetPrefix_1 = null, $voivodeship = null)
    {
        $this
            ->setBuildingNumber($buildingNumber)
            ->setCity($city)
            ->setCountry($country)
            ->setFlatNumber($flatNumber)
            ->setId($id)
            ->setPostalCity($postalCity)
            ->setPostalCode($postalCode)
            ->setRegion($region)
            ->setStreet($street)
            ->setStreetPrefix($streetPrefix)
            ->setBuildingNumber_1($buildingNumber_1)
            ->setCity_1($city_1)
            ->setCommunity($community)
            ->setCounty($county)
            ->setFlatNumber_1($flatNumber_1)
            ->setPostalCity_1($postalCity_1)
            ->setPostalCode_1($postalCode_1)
            ->setStandardizedAddress($standardizedAddress)
            ->setStreet_1($street_1)
            ->setStreetPrefix_1($streetPrefix_1)
            ->setVoivodeship($voivodeship);
    }
    /**
     * Get BuildingNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBuildingNumber()
    {
        return isset($this->buildingNumber) ? $this->buildingNumber : null;
    }
    /**
     * Set BuildingNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $buildingNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setBuildingNumber($buildingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($buildingNumber) && !is_string($buildingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buildingNumber)), __LINE__);
        }
        if (is_null($buildingNumber) || (is_array($buildingNumber) && empty($buildingNumber))) {
            unset($this->buildingNumber);
        } else {
            $this->buildingNumber = $buildingNumber;
        }
        return $this;
    }
    /**
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        if (is_null($city) || (is_array($city) && empty($city))) {
            unset($this->city);
        } else {
            $this->city = $city;
        }
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
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
     * Get FlatNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlatNumber()
    {
        return isset($this->flatNumber) ? $this->flatNumber : null;
    }
    /**
     * Set FlatNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $flatNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setFlatNumber($flatNumber = null)
    {
        // validation for constraint: string
        if (!is_null($flatNumber) && !is_string($flatNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flatNumber)), __LINE__);
        }
        if (is_null($flatNumber) || (is_array($flatNumber) && empty($flatNumber))) {
            unset($this->flatNumber);
        } else {
            $this->flatNumber = $flatNumber;
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
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
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
     * Get PostalCity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCity()
    {
        return isset($this->postalCity) ? $this->postalCity : null;
    }
    /**
     * Set PostalCity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setPostalCity($postalCity = null)
    {
        // validation for constraint: string
        if (!is_null($postalCity) && !is_string($postalCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCity)), __LINE__);
        }
        if (is_null($postalCity) || (is_array($postalCity) && empty($postalCity))) {
            unset($this->postalCity);
        } else {
            $this->postalCity = $postalCity;
        }
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCode()
    {
        return isset($this->postalCode) ? $this->postalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setPostalCode($postalCode = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode)), __LINE__);
        }
        if (is_null($postalCode) || (is_array($postalCode) && empty($postalCode))) {
            unset($this->postalCode);
        } else {
            $this->postalCode = $postalCode;
        }
        return $this;
    }
    /**
     * Get region value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion|null
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : null;
    }
    /**
     * Set region value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion $region
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setRegion(\Mu4ddi3\Compensa\Webservice\StructType\AdministrativeRegion $region = null)
    {
        if (is_null($region) || (is_array($region) && empty($region))) {
            unset($this->region);
        } else {
            $this->region = $region;
        }
        return $this;
    }
    /**
     * Get Street value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet()
    {
        return isset($this->street) ? $this->street : null;
    }
    /**
     * Set Street value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setStreet($street = null)
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        if (is_null($street) || (is_array($street) && empty($street))) {
            unset($this->street);
        } else {
            $this->street = $street;
        }
        return $this;
    }
    /**
     * Get StreetPrefix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreetPrefix()
    {
        return isset($this->streetPrefix) ? $this->streetPrefix : null;
    }
    /**
     * Set StreetPrefix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $streetPrefix
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setStreetPrefix($streetPrefix = null)
    {
        // validation for constraint: string
        if (!is_null($streetPrefix) && !is_string($streetPrefix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetPrefix)), __LINE__);
        }
        if (is_null($streetPrefix) || (is_array($streetPrefix) && empty($streetPrefix))) {
            unset($this->streetPrefix);
        } else {
            $this->streetPrefix = $streetPrefix;
        }
        return $this;
    }
    /**
     * Get BuildingNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBuildingNumber_1()
    {
        return isset($this->BuildingNumber) ? $this->BuildingNumber : null;
    }
    /**
     * Set BuildingNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $buildingNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setBuildingNumber_1($buildingNumber_1 = null)
    {
        // validation for constraint: string
        if (!is_null($buildingNumber_1) && !is_string($buildingNumber_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($buildingNumber_1)), __LINE__);
        }
        if (is_null($buildingNumber_1) || (is_array($buildingNumber_1) && empty($buildingNumber_1))) {
            unset($this->BuildingNumber);
        } else {
            $this->BuildingNumber = $buildingNumber_1;
        }
        return $this;
    }
    /**
     * Get City value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCity_1()
    {
        return isset($this->City) ? $this->City : null;
    }
    /**
     * Set City value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $city
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setCity_1($city_1 = null)
    {
        // validation for constraint: string
        if (!is_null($city_1) && !is_string($city_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city_1)), __LINE__);
        }
        if (is_null($city_1) || (is_array($city_1) && empty($city_1))) {
            unset($this->City);
        } else {
            $this->City = $city_1;
        }
        return $this;
    }
    /**
     * Get Community value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCommunity()
    {
        return isset($this->Community) ? $this->Community : null;
    }
    /**
     * Set Community value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $community
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setCommunity($community = null)
    {
        // validation for constraint: string
        if (!is_null($community) && !is_string($community)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($community)), __LINE__);
        }
        if (is_null($community) || (is_array($community) && empty($community))) {
            unset($this->Community);
        } else {
            $this->Community = $community;
        }
        return $this;
    }
    /**
     * Get County value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCounty()
    {
        return isset($this->County) ? $this->County : null;
    }
    /**
     * Set County value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $county
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setCounty($county = null)
    {
        // validation for constraint: string
        if (!is_null($county) && !is_string($county)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($county)), __LINE__);
        }
        if (is_null($county) || (is_array($county) && empty($county))) {
            unset($this->County);
        } else {
            $this->County = $county;
        }
        return $this;
    }
    /**
     * Get FlatNumber value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFlatNumber_1()
    {
        return isset($this->FlatNumber) ? $this->FlatNumber : null;
    }
    /**
     * Set FlatNumber value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $flatNumber
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setFlatNumber_1($flatNumber_1 = null)
    {
        // validation for constraint: string
        if (!is_null($flatNumber_1) && !is_string($flatNumber_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($flatNumber_1)), __LINE__);
        }
        if (is_null($flatNumber_1) || (is_array($flatNumber_1) && empty($flatNumber_1))) {
            unset($this->FlatNumber);
        } else {
            $this->FlatNumber = $flatNumber_1;
        }
        return $this;
    }
    /**
     * Get PostalCity value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCity_1()
    {
        return isset($this->PostalCity) ? $this->PostalCity : null;
    }
    /**
     * Set PostalCity value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setPostalCity_1($postalCity_1 = null)
    {
        // validation for constraint: string
        if (!is_null($postalCity_1) && !is_string($postalCity_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCity_1)), __LINE__);
        }
        if (is_null($postalCity_1) || (is_array($postalCity_1) && empty($postalCity_1))) {
            unset($this->PostalCity);
        } else {
            $this->PostalCity = $postalCity_1;
        }
        return $this;
    }
    /**
     * Get PostalCode value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPostalCode_1()
    {
        return isset($this->PostalCode) ? $this->PostalCode : null;
    }
    /**
     * Set PostalCode value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $postalCode
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setPostalCode_1($postalCode_1 = null)
    {
        // validation for constraint: string
        if (!is_null($postalCode_1) && !is_string($postalCode_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postalCode_1)), __LINE__);
        }
        if (is_null($postalCode_1) || (is_array($postalCode_1) && empty($postalCode_1))) {
            unset($this->PostalCode);
        } else {
            $this->PostalCode = $postalCode_1;
        }
        return $this;
    }
    /**
     * Get StandardizedAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\StandardizedAddress|null
     */
    public function getStandardizedAddress()
    {
        return isset($this->StandardizedAddress) ? $this->StandardizedAddress : null;
    }
    /**
     * Set StandardizedAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\StandardizedAddress $standardizedAddress
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setStandardizedAddress(\Mu4ddi3\Compensa\Webservice\StructType\StandardizedAddress $standardizedAddress = null)
    {
        if (is_null($standardizedAddress) || (is_array($standardizedAddress) && empty($standardizedAddress))) {
            unset($this->StandardizedAddress);
        } else {
            $this->StandardizedAddress = $standardizedAddress;
        }
        return $this;
    }
    /**
     * Get Street value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreet_1()
    {
        return isset($this->Street) ? $this->Street : null;
    }
    /**
     * Set Street value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $street
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setStreet_1($street_1 = null)
    {
        // validation for constraint: string
        if (!is_null($street_1) && !is_string($street_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street_1)), __LINE__);
        }
        if (is_null($street_1) || (is_array($street_1) && empty($street_1))) {
            unset($this->Street);
        } else {
            $this->Street = $street_1;
        }
        return $this;
    }
    /**
     * Get StreetPrefix value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStreetPrefix_1()
    {
        return isset($this->StreetPrefix) ? $this->StreetPrefix : null;
    }
    /**
     * Set StreetPrefix value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $streetPrefix
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setStreetPrefix_1($streetPrefix_1 = null)
    {
        // validation for constraint: string
        if (!is_null($streetPrefix_1) && !is_string($streetPrefix_1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($streetPrefix_1)), __LINE__);
        }
        if (is_null($streetPrefix_1) || (is_array($streetPrefix_1) && empty($streetPrefix_1))) {
            unset($this->StreetPrefix);
        } else {
            $this->StreetPrefix = $streetPrefix_1;
        }
        return $this;
    }
    /**
     * Get Voivodeship value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVoivodeship()
    {
        return isset($this->Voivodeship) ? $this->Voivodeship : null;
    }
    /**
     * Set Voivodeship value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $voivodeship
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
     */
    public function setVoivodeship($voivodeship = null)
    {
        // validation for constraint: string
        if (!is_null($voivodeship) && !is_string($voivodeship)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($voivodeship)), __LINE__);
        }
        if (is_null($voivodeship) || (is_array($voivodeship) && empty($voivodeship))) {
            unset($this->Voivodeship);
        } else {
            $this->Voivodeship = $voivodeship;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Address
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
