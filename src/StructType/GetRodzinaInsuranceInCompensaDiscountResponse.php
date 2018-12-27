<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRodzinaInsuranceInCompensaDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetRodzinaInsuranceInCompensaDiscountResponse
 * @subpackage Structs
 */
class GetRodzinaInsuranceInCompensaDiscountResponse extends AbstractStructBase
{
    /**
     * The RodzinaInsuranceInCompensaDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscount
     */
    public $RodzinaInsuranceInCompensaDiscount;
    /**
     * Constructor method for GetRodzinaInsuranceInCompensaDiscountResponse
     * @uses GetRodzinaInsuranceInCompensaDiscountResponse::setRodzinaInsuranceInCompensaDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscount $rodzinaInsuranceInCompensaDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscount $rodzinaInsuranceInCompensaDiscount = null)
    {
        $this
            ->setRodzinaInsuranceInCompensaDiscount($rodzinaInsuranceInCompensaDiscount);
    }
    /**
     * Get RodzinaInsuranceInCompensaDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscount|null
     */
    public function getRodzinaInsuranceInCompensaDiscount()
    {
        return isset($this->RodzinaInsuranceInCompensaDiscount) ? $this->RodzinaInsuranceInCompensaDiscount : null;
    }
    /**
     * Set RodzinaInsuranceInCompensaDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscount $rodzinaInsuranceInCompensaDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRodzinaInsuranceInCompensaDiscountResponse
     */
    public function setRodzinaInsuranceInCompensaDiscount(\Mu4ddi3\Compensa\Webservice\StructType\RodzinaInsuranceInCompensaDiscount $rodzinaInsuranceInCompensaDiscount = null)
    {
        if (is_null($rodzinaInsuranceInCompensaDiscount) || (is_array($rodzinaInsuranceInCompensaDiscount) && empty($rodzinaInsuranceInCompensaDiscount))) {
            unset($this->RodzinaInsuranceInCompensaDiscount);
        } else {
            $this->RodzinaInsuranceInCompensaDiscount = $rodzinaInsuranceInCompensaDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetRodzinaInsuranceInCompensaDiscountResponse
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
