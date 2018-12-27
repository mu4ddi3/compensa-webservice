<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisagreementOnVerificationDiscountDefinition StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:DisagreementOnVerificationDiscountDefinition
 * @subpackage Structs
 */
class DisagreementOnVerificationDiscountDefinition extends DiscountDefinition
{
    /**
     * The DisagreementOnVerificationDiscountFactors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDisagreementOnVerificationDiscountFactor
     */
    public $DisagreementOnVerificationDiscountFactors;
    /**
     * Constructor method for DisagreementOnVerificationDiscountDefinition
     * @uses DisagreementOnVerificationDiscountDefinition::setDisagreementOnVerificationDiscountFactors()
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDisagreementOnVerificationDiscountFactor $disagreementOnVerificationDiscountFactors
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDisagreementOnVerificationDiscountFactor $disagreementOnVerificationDiscountFactors = null)
    {
        $this
            ->setDisagreementOnVerificationDiscountFactors($disagreementOnVerificationDiscountFactors);
    }
    /**
     * Get DisagreementOnVerificationDiscountFactors value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDisagreementOnVerificationDiscountFactor|null
     */
    public function getDisagreementOnVerificationDiscountFactors()
    {
        return isset($this->DisagreementOnVerificationDiscountFactors) ? $this->DisagreementOnVerificationDiscountFactors : null;
    }
    /**
     * Set DisagreementOnVerificationDiscountFactors value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDisagreementOnVerificationDiscountFactor $disagreementOnVerificationDiscountFactors
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountDefinition
     */
    public function setDisagreementOnVerificationDiscountFactors(\Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfDisagreementOnVerificationDiscountFactor $disagreementOnVerificationDiscountFactors = null)
    {
        if (is_null($disagreementOnVerificationDiscountFactors) || (is_array($disagreementOnVerificationDiscountFactors) && empty($disagreementOnVerificationDiscountFactors))) {
            unset($this->DisagreementOnVerificationDiscountFactors);
        } else {
            $this->DisagreementOnVerificationDiscountFactors = $disagreementOnVerificationDiscountFactors;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\DisagreementOnVerificationDiscountDefinition
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
