<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadServiceGroupsResponse StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadServiceGroupsResponse extends AbstractStructBase
{
    /**
     * The ServiceGroup
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ServiceGroup[]
     */
    public $ServiceGroup;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ErrorsType
     */
    public $Errors;
    /**
     * Constructor method for ReadServiceGroupsResponse
     * @uses ReadServiceGroupsResponse::setServiceGroup()
     * @uses ReadServiceGroupsResponse::setErrors()
     * @param \Diglin\Swisspost\StructType\ServiceGroup[] $serviceGroup
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     */
    public function __construct(array $serviceGroup = array(), \Diglin\Swisspost\StructType\ErrorsType $errors = null)
    {
        $this
            ->setServiceGroup($serviceGroup)
            ->setErrors($errors);
    }
    /**
     * Get ServiceGroup value
     * @return \Diglin\Swisspost\StructType\ServiceGroup[]|null
     */
    public function getServiceGroup()
    {
        return $this->ServiceGroup;
    }
    /**
     * Set ServiceGroup value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ServiceGroup[] $serviceGroup
     * @return \Diglin\Swisspost\StructType\ReadServiceGroupsResponse
     */
    public function setServiceGroup(array $serviceGroup = array())
    {
        foreach ($serviceGroup as $readServiceGroupsResponseServiceGroupItem) {
            // validation for constraint: itemType
            if (!$readServiceGroupsResponseServiceGroupItem instanceof \Diglin\Swisspost\StructType\ServiceGroup) {
                throw new \InvalidArgumentException(sprintf('The ServiceGroup property can only contain items of \Diglin\Swisspost\StructType\ServiceGroup, "%s" given', is_object($readServiceGroupsResponseServiceGroupItem) ? get_class($readServiceGroupsResponseServiceGroupItem) : gettype($readServiceGroupsResponseServiceGroupItem)), __LINE__);
            }
        }
        $this->ServiceGroup = $serviceGroup;
        return $this;
    }
    /**
     * Add item to ServiceGroup value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ServiceGroup $item
     * @return \Diglin\Swisspost\StructType\ReadServiceGroupsResponse
     */
    public function addToServiceGroup(\Diglin\Swisspost\StructType\ServiceGroup $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\ServiceGroup) {
            throw new \InvalidArgumentException(sprintf('The ServiceGroup property can only contain items of \Diglin\Swisspost\StructType\ServiceGroup, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServiceGroup[] = $item;
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
     * @return \Diglin\Swisspost\StructType\ReadServiceGroupsResponse
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
     * @return \Diglin\Swisspost\StructType\ReadServiceGroupsResponse
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
