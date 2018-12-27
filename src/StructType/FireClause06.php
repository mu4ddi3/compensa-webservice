<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FireClause06 StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:FireClause06
 * @subpackage Structs
 */
class FireClause06 extends FireClause
{
    /**
     * The DailyLimitOfLiability
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DailyLimitOfLiability
     */
    public $DailyLimitOfLiability;
    /**
     * The LiabilityDuration
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\LiabilityDuration
     */
    public $LiabilityDuration;
    /**
     * Constructor method for FireClause06
     * @uses FireClause06::setDailyLimitOfLiability()
     * @uses FireClause06::setLiabilityDuration()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DailyLimitOfLiability $dailyLimitOfLiability
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LiabilityDuration $liabilityDuration
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\DailyLimitOfLiability $dailyLimitOfLiability = null, \Mu4ddi3\Compensa\Webservice\StructType\LiabilityDuration $liabilityDuration = null)
    {
        $this
            ->setDailyLimitOfLiability($dailyLimitOfLiability)
            ->setLiabilityDuration($liabilityDuration);
    }
    /**
     * Get DailyLimitOfLiability value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DailyLimitOfLiability|null
     */
    public function getDailyLimitOfLiability()
    {
        return isset($this->DailyLimitOfLiability) ? $this->DailyLimitOfLiability : null;
    }
    /**
     * Set DailyLimitOfLiability value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DailyLimitOfLiability $dailyLimitOfLiability
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireClause06
     */
    public function setDailyLimitOfLiability(\Mu4ddi3\Compensa\Webservice\StructType\DailyLimitOfLiability $dailyLimitOfLiability = null)
    {
        if (is_null($dailyLimitOfLiability) || (is_array($dailyLimitOfLiability) && empty($dailyLimitOfLiability))) {
            unset($this->DailyLimitOfLiability);
        } else {
            $this->DailyLimitOfLiability = $dailyLimitOfLiability;
        }
        return $this;
    }
    /**
     * Get LiabilityDuration value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\LiabilityDuration|null
     */
    public function getLiabilityDuration()
    {
        return isset($this->LiabilityDuration) ? $this->LiabilityDuration : null;
    }
    /**
     * Set LiabilityDuration value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\LiabilityDuration $liabilityDuration
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireClause06
     */
    public function setLiabilityDuration(\Mu4ddi3\Compensa\Webservice\StructType\LiabilityDuration $liabilityDuration = null)
    {
        if (is_null($liabilityDuration) || (is_array($liabilityDuration) && empty($liabilityDuration))) {
            unset($this->LiabilityDuration);
        } else {
            $this->LiabilityDuration = $liabilityDuration;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\FireClause06
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
