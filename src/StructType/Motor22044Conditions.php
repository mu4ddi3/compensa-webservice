<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Motor22044Conditions StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:Motor22044Conditions
 * @subpackage Structs
 */
class Motor22044Conditions extends MotorConditions
{
    /**
     * The MyBusiness
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCondition
     */
    public $MyBusiness;
    /**
     * The MyBusinessVariant
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessVariantCondition
     */
    public $MyBusinessVariant;
    /**
     * Constructor method for Motor22044Conditions
     * @uses Motor22044Conditions::setMyBusiness()
     * @uses Motor22044Conditions::setMyBusinessVariant()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCondition $myBusiness
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessVariantCondition $myBusinessVariant
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCondition $myBusiness = null, \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessVariantCondition $myBusinessVariant = null)
    {
        $this
            ->setMyBusiness($myBusiness)
            ->setMyBusinessVariant($myBusinessVariant);
    }
    /**
     * Get MyBusiness value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCondition|null
     */
    public function getMyBusiness()
    {
        return isset($this->MyBusiness) ? $this->MyBusiness : null;
    }
    /**
     * Set MyBusiness value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCondition $myBusiness
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Motor22044Conditions
     */
    public function setMyBusiness(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessCondition $myBusiness = null)
    {
        if (is_null($myBusiness) || (is_array($myBusiness) && empty($myBusiness))) {
            unset($this->MyBusiness);
        } else {
            $this->MyBusiness = $myBusiness;
        }
        return $this;
    }
    /**
     * Get MyBusinessVariant value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessVariantCondition|null
     */
    public function getMyBusinessVariant()
    {
        return isset($this->MyBusinessVariant) ? $this->MyBusinessVariant : null;
    }
    /**
     * Set MyBusinessVariant value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MyBusinessVariantCondition $myBusinessVariant
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Motor22044Conditions
     */
    public function setMyBusinessVariant(\Mu4ddi3\Compensa\Webservice\StructType\MyBusinessVariantCondition $myBusinessVariant = null)
    {
        if (is_null($myBusinessVariant) || (is_array($myBusinessVariant) && empty($myBusinessVariant))) {
            unset($this->MyBusinessVariant);
        } else {
            $this->MyBusinessVariant = $myBusinessVariant;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Motor22044Conditions
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
