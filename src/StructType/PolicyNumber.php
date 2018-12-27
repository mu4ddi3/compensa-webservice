<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PolicyNumber StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PolicyNumber
 * @subpackage Structs
 */
class PolicyNumber extends AbstractStructBase
{
    /**
     * The Number
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Number;
    /**
     * The ProductId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ProductId;
    /**
     * Constructor method for PolicyNumber
     * @uses PolicyNumber::setNumber()
     * @uses PolicyNumber::setProductId()
     * @param int $number
     * @param int $productId
     */
    public function __construct($number = null, $productId = null)
    {
        $this
            ->setNumber($number)
            ->setProductId($productId);
    }
    /**
     * Get Number value
     * @return int|null
     */
    public function getNumber()
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param int $number
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber
     */
    public function setNumber($number = null)
    {
        // validation for constraint: int
        if (!is_null($number) && !is_numeric($number)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($number)), __LINE__);
        }
        $this->Number = $number;
        return $this;
    }
    /**
     * Get ProductId value
     * @return int|null
     */
    public function getProductId()
    {
        return $this->ProductId;
    }
    /**
     * Set ProductId value
     * @param int $productId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber
     */
    public function setProductId($productId = null)
    {
        // validation for constraint: int
        if (!is_null($productId) && !is_numeric($productId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($productId)), __LINE__);
        }
        $this->ProductId = $productId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PolicyNumber
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
