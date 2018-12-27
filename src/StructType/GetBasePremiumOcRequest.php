<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBasePremiumOcRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetBasePremiumOcRequest
 * @subpackage Structs
 */
class GetBasePremiumOcRequest extends GetBasePremiumRequest
{
    /**
     * The Capacity
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Capacity;
    /**
     * The Zone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Zone;
    /**
     * Constructor method for GetBasePremiumOcRequest
     * @uses GetBasePremiumOcRequest::setCapacity()
     * @uses GetBasePremiumOcRequest::setZone()
     * @param int $capacity
     * @param int $zone
     */
    public function __construct($capacity = null, $zone = null)
    {
        $this
            ->setCapacity($capacity)
            ->setZone($zone);
    }
    /**
     * Get Capacity value
     * @return int|null
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }
    /**
     * Set Capacity value
     * @param int $capacity
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumOcRequest
     */
    public function setCapacity($capacity = null)
    {
        // validation for constraint: int
        if (!is_null($capacity) && !is_numeric($capacity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($capacity)), __LINE__);
        }
        $this->Capacity = $capacity;
        return $this;
    }
    /**
     * Get Zone value
     * @return int|null
     */
    public function getZone()
    {
        return $this->Zone;
    }
    /**
     * Set Zone value
     * @param int $zone
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumOcRequest
     */
    public function setZone($zone = null)
    {
        // validation for constraint: int
        if (!is_null($zone) && !is_numeric($zone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($zone)), __LINE__);
        }
        $this->Zone = $zone;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetBasePremiumOcRequest
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
