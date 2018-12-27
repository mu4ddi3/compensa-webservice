<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcInsuranceInCompensaDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAcInsuranceInCompensaDiscountResponse
 * @subpackage Structs
 */
class GetAcInsuranceInCompensaDiscountResponse extends AbstractStructBase
{
    /**
     * The AcInsuranceInCompensaDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscount
     */
    public $AcInsuranceInCompensaDiscount;
    /**
     * Constructor method for GetAcInsuranceInCompensaDiscountResponse
     * @uses GetAcInsuranceInCompensaDiscountResponse::setAcInsuranceInCompensaDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscount $acInsuranceInCompensaDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscount $acInsuranceInCompensaDiscount = null)
    {
        $this
            ->setAcInsuranceInCompensaDiscount($acInsuranceInCompensaDiscount);
    }
    /**
     * Get AcInsuranceInCompensaDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscount|null
     */
    public function getAcInsuranceInCompensaDiscount()
    {
        return isset($this->AcInsuranceInCompensaDiscount) ? $this->AcInsuranceInCompensaDiscount : null;
    }
    /**
     * Set AcInsuranceInCompensaDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscount $acInsuranceInCompensaDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAcInsuranceInCompensaDiscountResponse
     */
    public function setAcInsuranceInCompensaDiscount(\Mu4ddi3\Compensa\Webservice\StructType\AcInsuranceInCompensaDiscount $acInsuranceInCompensaDiscount = null)
    {
        if (is_null($acInsuranceInCompensaDiscount) || (is_array($acInsuranceInCompensaDiscount) && empty($acInsuranceInCompensaDiscount))) {
            unset($this->AcInsuranceInCompensaDiscount);
        } else {
            $this->AcInsuranceInCompensaDiscount = $acInsuranceInCompensaDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAcInsuranceInCompensaDiscountResponse
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
