<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompensaBusinessError StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CompensaBusinessError
 * @subpackage Structs
 */
class CompensaBusinessError extends BusinessError
{
    /**
     * The IsCentralBlocked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsCentralBlocked;
    /**
     * The IsFatalError
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsFatalError;
    /**
     * The IsOfferBlocked
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOfferBlocked;
    /**
     * Constructor method for CompensaBusinessError
     * @uses CompensaBusinessError::setIsCentralBlocked()
     * @uses CompensaBusinessError::setIsFatalError()
     * @uses CompensaBusinessError::setIsOfferBlocked()
     * @param bool $isCentralBlocked
     * @param bool $isFatalError
     * @param bool $isOfferBlocked
     */
    public function __construct($isCentralBlocked = null, $isFatalError = null, $isOfferBlocked = null)
    {
        $this
            ->setIsCentralBlocked($isCentralBlocked)
            ->setIsFatalError($isFatalError)
            ->setIsOfferBlocked($isOfferBlocked);
    }
    /**
     * Get IsCentralBlocked value
     * @return bool|null
     */
    public function getIsCentralBlocked()
    {
        return $this->IsCentralBlocked;
    }
    /**
     * Set IsCentralBlocked value
     * @param bool $isCentralBlocked
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBusinessError
     */
    public function setIsCentralBlocked($isCentralBlocked = null)
    {
        // validation for constraint: boolean
        if (!is_null($isCentralBlocked) && !is_bool($isCentralBlocked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isCentralBlocked)), __LINE__);
        }
        $this->IsCentralBlocked = $isCentralBlocked;
        return $this;
    }
    /**
     * Get IsFatalError value
     * @return bool|null
     */
    public function getIsFatalError()
    {
        return $this->IsFatalError;
    }
    /**
     * Set IsFatalError value
     * @param bool $isFatalError
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBusinessError
     */
    public function setIsFatalError($isFatalError = null)
    {
        // validation for constraint: boolean
        if (!is_null($isFatalError) && !is_bool($isFatalError)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isFatalError)), __LINE__);
        }
        $this->IsFatalError = $isFatalError;
        return $this;
    }
    /**
     * Get IsOfferBlocked value
     * @return bool|null
     */
    public function getIsOfferBlocked()
    {
        return $this->IsOfferBlocked;
    }
    /**
     * Set IsOfferBlocked value
     * @param bool $isOfferBlocked
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBusinessError
     */
    public function setIsOfferBlocked($isOfferBlocked = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOfferBlocked) && !is_bool($isOfferBlocked)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOfferBlocked)), __LINE__);
        }
        $this->IsOfferBlocked = $isOfferBlocked;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CompensaBusinessError
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
