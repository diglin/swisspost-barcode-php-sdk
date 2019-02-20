<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadDeliveryInstructionsResponse StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadDeliveryInstructionsResponse extends AbstractStructBase
{
    /**
     * The DeliveryInstructions
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ServiceCode[]
     */
    public $DeliveryInstructions;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ErrorsType
     */
    public $Errors;
    /**
     * Constructor method for ReadDeliveryInstructionsResponse
     * @uses ReadDeliveryInstructionsResponse::setDeliveryInstructions()
     * @uses ReadDeliveryInstructionsResponse::setErrors()
     * @param \Diglin\Swisspost\StructType\ServiceCode[] $deliveryInstructions
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     */
    public function __construct(array $deliveryInstructions = array(), \Diglin\Swisspost\StructType\ErrorsType $errors = null)
    {
        $this
            ->setDeliveryInstructions($deliveryInstructions)
            ->setErrors($errors);
    }
    /**
     * Get DeliveryInstructions value
     * @return \Diglin\Swisspost\StructType\ServiceCode[]|null
     */
    public function getDeliveryInstructions()
    {
        return $this->DeliveryInstructions;
    }
    /**
     * Set DeliveryInstructions value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ServiceCode[] $deliveryInstructions
     * @return \Diglin\Swisspost\StructType\ReadDeliveryInstructionsResponse
     */
    public function setDeliveryInstructions(array $deliveryInstructions = array())
    {
        foreach ($deliveryInstructions as $readDeliveryInstructionsResponseDeliveryInstructionsItem) {
            // validation for constraint: itemType
            if (!$readDeliveryInstructionsResponseDeliveryInstructionsItem instanceof \Diglin\Swisspost\StructType\ServiceCode) {
                throw new \InvalidArgumentException(sprintf('The DeliveryInstructions property can only contain items of \Diglin\Swisspost\StructType\ServiceCode, "%s" given', is_object($readDeliveryInstructionsResponseDeliveryInstructionsItem) ? get_class($readDeliveryInstructionsResponseDeliveryInstructionsItem) : gettype($readDeliveryInstructionsResponseDeliveryInstructionsItem)), __LINE__);
            }
        }
        $this->DeliveryInstructions = $deliveryInstructions;
        return $this;
    }
    /**
     * Add item to DeliveryInstructions value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ServiceCode $item
     * @return \Diglin\Swisspost\StructType\ReadDeliveryInstructionsResponse
     */
    public function addToDeliveryInstructions(\Diglin\Swisspost\StructType\ServiceCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\ServiceCode) {
            throw new \InvalidArgumentException(sprintf('The DeliveryInstructions property can only contain items of \Diglin\Swisspost\StructType\ServiceCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->DeliveryInstructions[] = $item;
        return $this;
    }
    /**
     * Get Errors value
     * @return \Diglin\Swisspost\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     * @return \Diglin\Swisspost\StructType\ReadDeliveryInstructionsResponse
     */
    public function setErrors(\Diglin\Swisspost\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ReadDeliveryInstructionsResponse
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
