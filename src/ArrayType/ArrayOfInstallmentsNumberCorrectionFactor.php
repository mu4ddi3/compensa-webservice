<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfInstallmentsNumberCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfInstallmentsNumberCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfInstallmentsNumberCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The InstallmentsNumberCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor[]
     */
    public $InstallmentsNumberCorrectionFactor;
    /**
     * Constructor method for ArrayOfInstallmentsNumberCorrectionFactor
     * @uses ArrayOfInstallmentsNumberCorrectionFactor::setInstallmentsNumberCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor[] $installmentsNumberCorrectionFactor
     */
    public function __construct(array $installmentsNumberCorrectionFactor = array())
    {
        $this
            ->setInstallmentsNumberCorrectionFactor($installmentsNumberCorrectionFactor);
    }
    /**
     * Get InstallmentsNumberCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor[]|null
     */
    public function getInstallmentsNumberCorrectionFactor()
    {
        return isset($this->InstallmentsNumberCorrectionFactor) ? $this->InstallmentsNumberCorrectionFactor : null;
    }
    /**
     * Set InstallmentsNumberCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor[] $installmentsNumberCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumberCorrectionFactor
     */
    public function setInstallmentsNumberCorrectionFactor(array $installmentsNumberCorrectionFactor = array())
    {
        foreach ($installmentsNumberCorrectionFactor as $arrayOfInstallmentsNumberCorrectionFactorInstallmentsNumberCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfInstallmentsNumberCorrectionFactorInstallmentsNumberCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The InstallmentsNumberCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor, "%s" given', is_object($arrayOfInstallmentsNumberCorrectionFactorInstallmentsNumberCorrectionFactorItem) ? get_class($arrayOfInstallmentsNumberCorrectionFactorInstallmentsNumberCorrectionFactorItem) : gettype($arrayOfInstallmentsNumberCorrectionFactorInstallmentsNumberCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($installmentsNumberCorrectionFactor) || (is_array($installmentsNumberCorrectionFactor) && empty($installmentsNumberCorrectionFactor))) {
            unset($this->InstallmentsNumberCorrectionFactor);
        } else {
            $this->InstallmentsNumberCorrectionFactor = $installmentsNumberCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to InstallmentsNumberCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumberCorrectionFactor
     */
    public function addToInstallmentsNumberCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The InstallmentsNumberCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->InstallmentsNumberCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\InstallmentsNumberCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string InstallmentsNumberCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'InstallmentsNumberCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfInstallmentsNumberCorrectionFactor
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
