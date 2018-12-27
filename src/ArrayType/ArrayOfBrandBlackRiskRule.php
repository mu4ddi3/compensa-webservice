<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBrandBlackRiskRule ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBrandBlackRiskRule
 * @subpackage Arrays
 */
class ArrayOfBrandBlackRiskRule extends AbstractStructArrayBase
{
    /**
     * The BrandBlackRiskRule
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule[]
     */
    public $BrandBlackRiskRule;
    /**
     * Constructor method for ArrayOfBrandBlackRiskRule
     * @uses ArrayOfBrandBlackRiskRule::setBrandBlackRiskRule()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule[] $brandBlackRiskRule
     */
    public function __construct(array $brandBlackRiskRule = array())
    {
        $this
            ->setBrandBlackRiskRule($brandBlackRiskRule);
    }
    /**
     * Get BrandBlackRiskRule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule[]|null
     */
    public function getBrandBlackRiskRule()
    {
        return isset($this->BrandBlackRiskRule) ? $this->BrandBlackRiskRule : null;
    }
    /**
     * Set BrandBlackRiskRule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule[] $brandBlackRiskRule
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandBlackRiskRule
     */
    public function setBrandBlackRiskRule(array $brandBlackRiskRule = array())
    {
        foreach ($brandBlackRiskRule as $arrayOfBrandBlackRiskRuleBrandBlackRiskRuleItem) {
            // validation for constraint: itemType
            if (!$arrayOfBrandBlackRiskRuleBrandBlackRiskRuleItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule) {
                throw new \InvalidArgumentException(sprintf('The BrandBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule, "%s" given', is_object($arrayOfBrandBlackRiskRuleBrandBlackRiskRuleItem) ? get_class($arrayOfBrandBlackRiskRuleBrandBlackRiskRuleItem) : gettype($arrayOfBrandBlackRiskRuleBrandBlackRiskRuleItem)), __LINE__);
            }
        }
        if (is_null($brandBlackRiskRule) || (is_array($brandBlackRiskRule) && empty($brandBlackRiskRule))) {
            unset($this->BrandBlackRiskRule);
        } else {
            $this->BrandBlackRiskRule = $brandBlackRiskRule;
        }
        return $this;
    }
    /**
     * Add item to BrandBlackRiskRule value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandBlackRiskRule
     */
    public function addToBrandBlackRiskRule(\Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule) {
            throw new \InvalidArgumentException(sprintf('The BrandBlackRiskRule property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BrandBlackRiskRule[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\BrandBlackRiskRule|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BrandBlackRiskRule
     */
    public function getAttributeName()
    {
        return 'BrandBlackRiskRule';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfBrandBlackRiskRule
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
