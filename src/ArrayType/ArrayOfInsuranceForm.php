<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInsuranceForm ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInsuranceForm
 * @subpackage Arrays
 */
class ArrayOfInsuranceForm extends AbstractStructArrayBase
{
    /**
     * The InsuranceForm
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $InsuranceForm;
    /**
     * Constructor method for ArrayOfInsuranceForm
     * @uses ArrayOfInsuranceForm::setInsuranceForm()
     * @param string[] $insuranceForm
     */
    public function __construct(array $insuranceForm = array())
    {
        $this
            ->setInsuranceForm($insuranceForm);
    }
    /**
     * Get InsuranceForm value
     * @return string[]|null
     */
    public function getInsuranceForm()
    {
        return $this->InsuranceForm;
    }
    /**
     * Set InsuranceForm value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $insuranceForm
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm
     */
    public function setInsuranceForm(array $insuranceForm = array())
    {
        $invalidValues = array();
        foreach ($insuranceForm as $arrayOfInsuranceFormInsuranceFormItem) {
            if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::valueIsValid($arrayOfInsuranceFormInsuranceFormItem)) {
                $invalidValues[] = var_export($arrayOfInsuranceFormInsuranceFormItem, true);
            }
        }
        if (!empty($invalidValues)) {
            throw new \InvalidArgumentException(sprintf('Value(s) "%s" is/are invalid, please use one of: %s', implode(', ', $invalidValues), implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::getValidValues())), __LINE__);
        }
        $this->InsuranceForm = $insuranceForm;
        return $this;
    }
    /**
     * Add item to InsuranceForm value
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::valueIsValid()
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm
     */
    public function addToInsuranceForm($item)
    {
        // validation for constraint: enumeration
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::getValidValues())), __LINE__);
        }
        $this->InsuranceForm[] = $item;
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
     * @uses \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::valueIsValid()
     * @param string $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm
     */
    public function add($item)
    {
        if (!\Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $item, implode(', ', \Mu4ddi3\Compensa\Webservice\EnumType\InsuranceForm::getValidValues())), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InsuranceForm
     */
    public function getAttributeName()
    {
        return 'InsuranceForm';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInsuranceForm
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
