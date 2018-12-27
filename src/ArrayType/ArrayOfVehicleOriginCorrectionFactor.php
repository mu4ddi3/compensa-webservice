<?php

namespace Mu4ddi3\Compensa\Webservice\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfVehicleOriginCorrectionFactor ArrayType
 * Meta informations extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfVehicleOriginCorrectionFactor
 * @subpackage Arrays
 */
class ArrayOfVehicleOriginCorrectionFactor extends AbstractStructArrayBase
{
    /**
     * The VehicleOriginCorrectionFactor
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor[]
     */
    public $VehicleOriginCorrectionFactor;
    /**
     * Constructor method for ArrayOfVehicleOriginCorrectionFactor
     * @uses ArrayOfVehicleOriginCorrectionFactor::setVehicleOriginCorrectionFactor()
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor[] $vehicleOriginCorrectionFactor
     */
    public function __construct(array $vehicleOriginCorrectionFactor = array())
    {
        $this
            ->setVehicleOriginCorrectionFactor($vehicleOriginCorrectionFactor);
    }
    /**
     * Get VehicleOriginCorrectionFactor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor[]|null
     */
    public function getVehicleOriginCorrectionFactor()
    {
        return isset($this->VehicleOriginCorrectionFactor) ? $this->VehicleOriginCorrectionFactor : null;
    }
    /**
     * Set VehicleOriginCorrectionFactor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor[] $vehicleOriginCorrectionFactor
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleOriginCorrectionFactor
     */
    public function setVehicleOriginCorrectionFactor(array $vehicleOriginCorrectionFactor = array())
    {
        foreach ($vehicleOriginCorrectionFactor as $arrayOfVehicleOriginCorrectionFactorVehicleOriginCorrectionFactorItem) {
            // validation for constraint: itemType
            if (!$arrayOfVehicleOriginCorrectionFactorVehicleOriginCorrectionFactorItem instanceof \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor) {
                throw new \InvalidArgumentException(sprintf('The VehicleOriginCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor, "%s" given', is_object($arrayOfVehicleOriginCorrectionFactorVehicleOriginCorrectionFactorItem) ? get_class($arrayOfVehicleOriginCorrectionFactorVehicleOriginCorrectionFactorItem) : gettype($arrayOfVehicleOriginCorrectionFactorVehicleOriginCorrectionFactorItem)), __LINE__);
            }
        }
        if (is_null($vehicleOriginCorrectionFactor) || (is_array($vehicleOriginCorrectionFactor) && empty($vehicleOriginCorrectionFactor))) {
            unset($this->VehicleOriginCorrectionFactor);
        } else {
            $this->VehicleOriginCorrectionFactor = $vehicleOriginCorrectionFactor;
        }
        return $this;
    }
    /**
     * Add item to VehicleOriginCorrectionFactor value
     * @throws \InvalidArgumentException
     * @param \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor $item
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleOriginCorrectionFactor
     */
    public function addToVehicleOriginCorrectionFactor(\Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor) {
            throw new \InvalidArgumentException(sprintf('The VehicleOriginCorrectionFactor property can only contain items of \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->VehicleOriginCorrectionFactor[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Mu4ddi3\Compensa\Webservice\StructType\VehicleOriginCorrectionFactor|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string VehicleOriginCorrectionFactor
     */
    public function getAttributeName()
    {
        return 'VehicleOriginCorrectionFactor';
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructArrayBase::__set_state()
     * @uses AbstractStructArrayBase::__set_state()
     * @param array $array the exported values
     * @return \Mu4ddi3\Compensa\Webservice\ArrayType\ArrayOfVehicleOriginCorrectionFactor
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
