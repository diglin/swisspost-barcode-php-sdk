<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ErrorsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Structure containing a list of occurred business errors.
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ErrorsType extends AbstractStructBase
{
    /**
     * The Error
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Diglin\Swisspost\StructType\MessageType[]
     */
    public $Error;
    /**
     * Constructor method for ErrorsType
     * @uses ErrorsType::setError()
     * @param \Diglin\Swisspost\StructType\MessageType[] $error
     */
    public function __construct(array $error = array())
    {
        $this
            ->setError($error);
    }
    /**
     * Get Error value
     * @return \Diglin\Swisspost\StructType\MessageType[]|null
     */
    public function getError()
    {
        return $this->Error;
    }
    /**
     * Set Error value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\MessageType[] $error
     * @return \Diglin\Swisspost\StructType\ErrorsType
     */
    public function setError(array $error = array())
    {
        foreach ($error as $errorsTypeErrorItem) {
            // validation for constraint: itemType
            if (!$errorsTypeErrorItem instanceof \Diglin\Swisspost\StructType\MessageType) {
                throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \Diglin\Swisspost\StructType\MessageType, "%s" given', is_object($errorsTypeErrorItem) ? get_class($errorsTypeErrorItem) : gettype($errorsTypeErrorItem)), __LINE__);
            }
        }
        $this->Error = $error;
        return $this;
    }
    /**
     * Add item to Error value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\MessageType $item
     * @return \Diglin\Swisspost\StructType\ErrorsType
     */
    public function addToError(\Diglin\Swisspost\StructType\MessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\MessageType) {
            throw new \InvalidArgumentException(sprintf('The Error property can only contain items of \Diglin\Swisspost\StructType\MessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Error[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ErrorsType
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
