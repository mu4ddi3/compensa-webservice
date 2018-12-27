<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRiskCode ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRiskCode
 * @subpackage Arrays
 */
class ArrayOfRiskCode extends AbstractStructArrayBase
{
    /**
     * The RiskCode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $RiskCode;
    /**
     * Constructor method for ArrayOfRiskCode
     * @uses ArrayOfRiskCode::setRiskCode()
     * @param string[] $riskCode
     */
    public function __construct(array $riskCode = array())
    {
        $this
            ->setRiskCode($riskCode);
    }
    /**
     * Get RiskCode value
     * @return string[]|null
     */
    public function getRiskCode()
    {
        return $this->RiskCode;
    }
    /**
     * Set RiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $riskCode
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode
     */
    public function setRiskCode(array $riskCode = array())
    {
        $invalidValues = array();
        foreach ($riskCode as $arrayOfRiskCodeRiskCodeItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($arrayOfRiskCodeRiskCodeItem)) {
                $invalidValues[] = var_export($arrayOfRiskCodeRiskCodeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        $this->RiskCode = $riskCode;
        return $this;
    }
    /**
     * Add item to RiskCode value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode
     */
    public function addToRiskCode($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        $this->RiskCode[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return string|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return string|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return string|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return string|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return string|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws \InvalidArgumentException
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\RiskCode::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RiskCode
     */
    public function getAttributeName()
    {
        return 'RiskCode';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfRiskCode
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
