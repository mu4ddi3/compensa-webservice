<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIsOnLeasingListResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetIsOnLeasingListResponse
 * @subpackage Structs
 */
class GetIsOnLeasingListResponse extends AbstractStructBase
{
    /**
     * The IsOnLeasingList
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsOnLeasingList;
    /**
     * Constructor method for GetIsOnLeasingListResponse
     * @uses GetIsOnLeasingListResponse::setIsOnLeasingList()
     * @param bool $isOnLeasingList
     */
    public function __construct($isOnLeasingList = null)
    {
        $this
            ->setIsOnLeasingList($isOnLeasingList);
    }
    /**
     * Get IsOnLeasingList value
     * @return bool|null
     */
    public function getIsOnLeasingList()
    {
        return $this->IsOnLeasingList;
    }
    /**
     * Set IsOnLeasingList value
     * @param bool $isOnLeasingList
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsOnLeasingListResponse
     */
    public function setIsOnLeasingList($isOnLeasingList = null)
    {
        // validation for constraint: boolean
        if (!is_null($isOnLeasingList) && !is_bool($isOnLeasingList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($isOnLeasingList)), __LINE__);
        }
        $this->IsOnLeasingList = $isOnLeasingList;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetIsOnLeasingListResponse
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
