<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WD StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:WD
 * @subpackage Structs
 */
class WD extends MotorRisk
{
    /**
     * The AdditionalEquipment
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalEquipment
     */
    public $AdditionalEquipment;
    /**
     * Constructor method for WD
     * @uses WD::setAdditionalEquipment()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalEquipment $additionalEquipment
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalEquipment $additionalEquipment = null)
    {
        $this
            ->setAdditionalEquipment($additionalEquipment);
    }
    /**
     * Get AdditionalEquipment value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalEquipment|null
     */
    public function getAdditionalEquipment()
    {
        return isset($this->AdditionalEquipment) ? $this->AdditionalEquipment : null;
    }
    /**
     * Set AdditionalEquipment value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalEquipment $additionalEquipment
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WD
     */
    public function setAdditionalEquipment(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfAdditionalEquipment $additionalEquipment = null)
    {
        if (is_null($additionalEquipment) || (is_array($additionalEquipment) && empty($additionalEquipment))) {
            unset($this->AdditionalEquipment);
        } else {
            $this->AdditionalEquipment = $additionalEquipment;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\WD
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
