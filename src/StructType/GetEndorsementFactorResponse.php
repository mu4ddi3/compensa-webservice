<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEndorsementFactorResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetEndorsementFactorResponse
 * @subpackage Structs
 */
class GetEndorsementFactorResponse extends AbstractStructBase
{
    /**
     * The BuyerAgeCorrectionFactor
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Factor
     */
    public $BuyerAgeCorrectionFactor;
    /**
     * Constructor method for GetEndorsementFactorResponse
     * @uses GetEndorsementFactorResponse::setBuyerAgeCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $buyerAgeCorrectionFactor
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Factor $buyerAgeCorrectionFactor = null)
    {
        $this
            ->setBuyerAgeCorrectionFactor($buyerAgeCorrectionFactor);
    }
    /**
     * Get BuyerAgeCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Factor|null
     */
    public function getBuyerAgeCorrectionFactor()
    {
        return isset($this->BuyerAgeCorrectionFactor) ? $this->BuyerAgeCorrectionFactor : null;
    }
    /**
     * Set BuyerAgeCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Factor $buyerAgeCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetEndorsementFactorResponse
     */
    public function setBuyerAgeCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\Factor $buyerAgeCorrectionFactor = null)
    {
        if (is_null($buyerAgeCorrectionFactor) || (is_array($buyerAgeCorrectionFactor) && empty($buyerAgeCorrectionFactor))) {
            unset($this->BuyerAgeCorrectionFactor);
        } else {
            $this->BuyerAgeCorrectionFactor = $buyerAgeCorrectionFactor;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetEndorsementFactorResponse
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
