<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDisagreementOnVerificationDiscountResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetDisagreementOnVerificationDiscountResponse
 * @subpackage Structs
 */
class GetDisagreementOnVerificationDiscountResponse extends AbstractStructBase
{
    /**
     * The DisagreementOnVerificationDiscount
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscount
     */
    public $DisagreementOnVerificationDiscount;
    /**
     * Constructor method for GetDisagreementOnVerificationDiscountResponse
     * @uses GetDisagreementOnVerificationDiscountResponse::setDisagreementOnVerificationDiscount()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscount $disagreementOnVerificationDiscount
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscount $disagreementOnVerificationDiscount = null)
    {
        $this
            ->setDisagreementOnVerificationDiscount($disagreementOnVerificationDiscount);
    }
    /**
     * Get DisagreementOnVerificationDiscount value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscount|null
     */
    public function getDisagreementOnVerificationDiscount()
    {
        return isset($this->DisagreementOnVerificationDiscount) ? $this->DisagreementOnVerificationDiscount : null;
    }
    /**
     * Set DisagreementOnVerificationDiscount value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscount $disagreementOnVerificationDiscount
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetDisagreementOnVerificationDiscountResponse
     */
    public function setDisagreementOnVerificationDiscount(\Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscount $disagreementOnVerificationDiscount = null)
    {
        if (is_null($disagreementOnVerificationDiscount) || (is_array($disagreementOnVerificationDiscount) && empty($disagreementOnVerificationDiscount))) {
            unset($this->DisagreementOnVerificationDiscount);
        } else {
            $this->DisagreementOnVerificationDiscount = $disagreementOnVerificationDiscount;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetDisagreementOnVerificationDiscountResponse
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
