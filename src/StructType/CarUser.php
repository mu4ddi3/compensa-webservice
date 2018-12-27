<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarUser StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:CarUser
 * @subpackage Structs
 */
class CarUser extends Partner
{
    /**
     * The drivingLicenseIssueDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $drivingLicenseIssueDate;
    /**
     * Constructor method for CarUser
     * @uses CarUser::setDrivingLicenseIssueDate()
     * @param string $drivingLicenseIssueDate
     */
    public function __construct($drivingLicenseIssueDate = null)
    {
        $this
            ->setDrivingLicenseIssueDate($drivingLicenseIssueDate);
    }
    /**
     * Get drivingLicenseIssueDate value
     * @return string|null
     */
    public function getDrivingLicenseIssueDate()
    {
        return $this->drivingLicenseIssueDate;
    }
    /**
     * Set drivingLicenseIssueDate value
     * @param string $drivingLicenseIssueDate
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CarUser
     */
    public function setDrivingLicenseIssueDate($drivingLicenseIssueDate = null)
    {
        // validation for constraint: string
        if (!is_null($drivingLicenseIssueDate) && !is_string($drivingLicenseIssueDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($drivingLicenseIssueDate)), __LINE__);
        }
        $this->drivingLicenseIssueDate = $drivingLicenseIssueDate;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\CarUser
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
