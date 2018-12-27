<?php

namespace Mu4ddi3\Compensa\Webservice\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PartnerRoleDictionaryItem StructType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:PartnerRoleDictionaryItem
 * @subpackage Structs
 */
class PartnerRoleDictionaryItem extends AbstractStructBase
{
    /**
     * The PartnerRole
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\Role
     */
    public $PartnerRole;
    /**
     * The Product
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Product;
    /**
     * Constructor method for PartnerRoleDictionaryItem
     * @uses PartnerRoleDictionaryItem::setPartnerRole()
     * @uses PartnerRoleDictionaryItem::setProduct()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Role $partnerRole
     * @param int $product
     */
    public function __construct(\Mu4ddi3\Compensa\Webservice\StructType\Role $partnerRole = null, $product = null)
    {
        $this
            ->setPartnerRole($partnerRole)
            ->setProduct($product);
    }
    /**
     * Get PartnerRole value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\Role|null
     */
    public function getPartnerRole()
    {
        return isset($this->PartnerRole) ? $this->PartnerRole : null;
    }
    /**
     * Set PartnerRole value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \Mu4ddi3\Compensa\Webservice\StructType\Role $partnerRole
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerRoleDictionaryItem
     */
    public function setPartnerRole(\Mu4ddi3\Compensa\Webservice\StructType\Role $partnerRole = null)
    {
        if (is_null($partnerRole) || (is_array($partnerRole) && empty($partnerRole))) {
            unset($this->PartnerRole);
        } else {
            $this->PartnerRole = $partnerRole;
        }
        return $this;
    }
    /**
     * Get Product value
     * @return int|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * Set Product value
     * @param int $product
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerRoleDictionaryItem
     */
    public function setProduct($product = null)
    {
        // validation for constraint: int
        if (!is_null($product) && !is_numeric($product)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($product)), __LINE__);
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\StructType\PartnerRoleDictionaryItem
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
