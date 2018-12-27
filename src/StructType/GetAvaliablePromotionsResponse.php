<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvaliablePromotionsResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetAvaliablePromotionsResponse
 * @subpackage Structs
 */
class GetAvaliablePromotionsResponse extends ResponseBase
{
    /**
     * The MzpSummary
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary
     */
    public $MzpSummary;
    /**
     * The ValidationMessages
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage
     */
    public $ValidationMessages;
    /**
     * Constructor method for GetAvaliablePromotionsResponse
     * @uses GetAvaliablePromotionsResponse::setMzpSummary()
     * @uses GetAvaliablePromotionsResponse::setValidationMessages()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary $mzpSummary
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $validationMessages
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\MZPSummary $mzpSummary = null, \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $validationMessages = null)
    {
        $this
            ->setMzpSummary($mzpSummary)
            ->setValidationMessages($validationMessages);
    }
    /**
     * Get MzpSummary value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary|null
     */
    public function getMzpSummary()
    {
        return isset($this->MzpSummary) ? $this->MzpSummary : null;
    }
    /**
     * Set MzpSummary value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\MZPSummary $mzpSummary
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAvaliablePromotionsResponse
     */
    public function setMzpSummary(\Mu4ddi3\Compensa\Webservice\StructType\MZPSummary $mzpSummary = null)
    {
        if (is_null($mzpSummary) || (is_array($mzpSummary) && empty($mzpSummary))) {
            unset($this->MzpSummary);
        } else {
            $this->MzpSummary = $mzpSummary;
        }
        return $this;
    }
    /**
     * Get ValidationMessages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage|null
     */
    public function getValidationMessages()
    {
        return isset($this->ValidationMessages) ? $this->ValidationMessages : null;
    }
    /**
     * Set ValidationMessages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $validationMessages
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAvaliablePromotionsResponse
     */
    public function setValidationMessages(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfMessage $validationMessages = null)
    {
        if (is_null($validationMessages) || (is_array($validationMessages) && empty($validationMessages))) {
            unset($this->ValidationMessages);
        } else {
            $this->ValidationMessages = $validationMessages;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetAvaliablePromotionsResponse
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
