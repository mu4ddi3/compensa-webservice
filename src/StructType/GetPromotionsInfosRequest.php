<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPromotionsInfosRequest StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:GetPromotionsInfosRequest
 * @subpackage Structs
 */
class GetPromotionsInfosRequest extends RequestBase
{
    /**
     * The Filter
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter
     */
    public $Filter;
    /**
     * Constructor method for GetPromotionsInfosRequest
     * @uses GetPromotionsInfosRequest::setFilter()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter $filter
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter $filter = null)
    {
        $this
            ->setFilter($filter);
    }
    /**
     * Get Filter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter|null
     */
    public function getFilter()
    {
        return isset($this->Filter) ? $this->Filter : null;
    }
    /**
     * Set Filter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter $filter
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionsInfosRequest
     */
    public function setFilter(\Mu4ddi3\Compensa\Webservice\StructType\PromotionInfoFilter $filter = null)
    {
        if (is_null($filter) || (is_array($filter) && empty($filter))) {
            unset($this->Filter);
        } else {
            $this->Filter = $filter;
        }
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\GetPromotionsInfosRequest
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
