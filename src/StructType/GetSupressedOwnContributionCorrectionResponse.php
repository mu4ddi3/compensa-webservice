<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupressedOwnContributionCorrectionResponse StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetSupressedOwnContributionCorrectionResponse
 * @subpackage Structs
 */
class GetSupressedOwnContributionCorrectionResponse extends AbstractStructBase
{
    /**
     * The SupressedOwnContributionCorrection
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrection
     */
    public $SupressedOwnContributionCorrection;
    /**
     * Constructor method for GetSupressedOwnContributionCorrectionResponse
     * @uses GetSupressedOwnContributionCorrectionResponse::setSupressedOwnContributionCorrection()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrection $supressedOwnContributionCorrection
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrection $supressedOwnContributionCorrection = null)
    {
        $this
            ->setSupressedOwnContributionCorrection($supressedOwnContributionCorrection);
    }
    /**
     * Get SupressedOwnContributionCorrection value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrection|null
     */
    public function getSupressedOwnContributionCorrection()
    {
        return isset($this->SupressedOwnContributionCorrection) ? $this->SupressedOwnContributionCorrection : null;
    }
    /**
     * Set SupressedOwnContributionCorrection value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrection $supressedOwnContributionCorrection
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetSupressedOwnContributionCorrectionResponse
     */
    public function setSupressedOwnContributionCorrection(\Mu4ddi3\Compensa\Webservice\StructType\SupressedOwnContributionCorrection $supressedOwnContributionCorrection = null)
    {
        if (is_null($supressedOwnContributionCorrection) || (is_array($supressedOwnContributionCorrection) && empty($supressedOwnContributionCorrection))) {
            unset($this->SupressedOwnContributionCorrection);
        } else {
            $this->SupressedOwnContributionCorrection = $supressedOwnContributionCorrection;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetSupressedOwnContributionCorrectionResponse
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
