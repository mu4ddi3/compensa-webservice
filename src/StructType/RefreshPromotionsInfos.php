<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshPromotionsInfos StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:RefreshPromotionsInfos
 * @subpackage Structs
 */
class RefreshPromotionsInfos extends AbstractStructBase
{
    /**
     * The LastCheck
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $LastCheck;
    /**
     * The PortalNodeId
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PortalNodeId;
    /**
     * The ShouldRefresh
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ShouldRefresh;
    /**
     * Constructor method for RefreshPromotionsInfos
     * @uses RefreshPromotionsInfos::setLastCheck()
     * @uses RefreshPromotionsInfos::setPortalNodeId()
     * @uses RefreshPromotionsInfos::setShouldRefresh()
     * @param string $lastCheck
     * @param int $portalNodeId
     * @param bool $shouldRefresh
     */
    public function __construct($lastCheck = null, $portalNodeId = null, $shouldRefresh = null)
    {
        $this
            ->setLastCheck($lastCheck)
            ->setPortalNodeId($portalNodeId)
            ->setShouldRefresh($shouldRefresh);
    }
    /**
     * Get LastCheck value
     * @return string|null
     */
    public function getLastCheck()
    {
        return $this->LastCheck;
    }
    /**
     * Set LastCheck value
     * @param string $lastCheck
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RefreshPromotionsInfos
     */
    public function setLastCheck($lastCheck = null)
    {
        // validation for constraint: string
        if (!is_null($lastCheck) && !is_string($lastCheck)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($lastCheck)), __LINE__);
        }
        $this->LastCheck = $lastCheck;
        return $this;
    }
    /**
     * Get PortalNodeId value
     * @return int|null
     */
    public function getPortalNodeId()
    {
        return $this->PortalNodeId;
    }
    /**
     * Set PortalNodeId value
     * @param int $portalNodeId
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RefreshPromotionsInfos
     */
    public function setPortalNodeId($portalNodeId = null)
    {
        // validation for constraint: int
        if (!is_null($portalNodeId) && !is_numeric($portalNodeId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($portalNodeId)), __LINE__);
        }
        $this->PortalNodeId = $portalNodeId;
        return $this;
    }
    /**
     * Get ShouldRefresh value
     * @return bool|null
     */
    public function getShouldRefresh()
    {
        return $this->ShouldRefresh;
    }
    /**
     * Set ShouldRefresh value
     * @param bool $shouldRefresh
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RefreshPromotionsInfos
     */
    public function setShouldRefresh($shouldRefresh = null)
    {
        // validation for constraint: boolean
        if (!is_null($shouldRefresh) && !is_bool($shouldRefresh)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($shouldRefresh)), __LINE__);
        }
        $this->ShouldRefresh = $shouldRefresh;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RefreshPromotionsInfos
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
