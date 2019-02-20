<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadAllowedServicesServiceGroups StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadAllowedServicesServiceGroups extends AbstractStructBase
{
    /**
     * The ServiceGroup
     * @var \Diglin\Swisspost\StructType\ServiceGroup
     */
    public $ServiceGroup;
    /**
     * The BasicService
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Diglin\Swisspost\StructType\BasicService[]
     */
    public $BasicService;
    /**
     * Constructor method for ReadAllowedServicesServiceGroups
     * @uses ReadAllowedServicesServiceGroups::setServiceGroup()
     * @uses ReadAllowedServicesServiceGroups::setBasicService()
     * @param \Diglin\Swisspost\StructType\ServiceGroup $serviceGroup
     * @param \Diglin\Swisspost\StructType\BasicService[] $basicService
     */
    public function __construct(\Diglin\Swisspost\StructType\ServiceGroup $serviceGroup = null, array $basicService = array())
    {
        $this
            ->setServiceGroup($serviceGroup)
            ->setBasicService($basicService);
    }
    /**
     * Get ServiceGroup value
     * @return \Diglin\Swisspost\StructType\ServiceGroup|null
     */
    public function getServiceGroup()
    {
        return $this->ServiceGroup;
    }
    /**
     * Set ServiceGroup value
     * @param \Diglin\Swisspost\StructType\ServiceGroup $serviceGroup
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups
     */
    public function setServiceGroup(\Diglin\Swisspost\StructType\ServiceGroup $serviceGroup = null)
    {
        $this->ServiceGroup = $serviceGroup;
        return $this;
    }
    /**
     * Get BasicService value
     * @return \Diglin\Swisspost\StructType\BasicService[]|null
     */
    public function getBasicService()
    {
        return $this->BasicService;
    }
    /**
     * Set BasicService value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\BasicService[] $basicService
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups
     */
    public function setBasicService(array $basicService = array())
    {
        foreach ($basicService as $readAllowedServicesServiceGroupsBasicServiceItem) {
            // validation for constraint: itemType
            if (!$readAllowedServicesServiceGroupsBasicServiceItem instanceof \Diglin\Swisspost\StructType\BasicService) {
                throw new \InvalidArgumentException(sprintf('The BasicService property can only contain items of \Diglin\Swisspost\StructType\BasicService, "%s" given', is_object($readAllowedServicesServiceGroupsBasicServiceItem) ? get_class($readAllowedServicesServiceGroupsBasicServiceItem) : gettype($readAllowedServicesServiceGroupsBasicServiceItem)), __LINE__);
            }
        }
        $this->BasicService = $basicService;
        return $this;
    }
    /**
     * Add item to BasicService value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\BasicService $item
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups
     */
    public function addToBasicService(\Diglin\Swisspost\StructType\BasicService $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\BasicService) {
            throw new \InvalidArgumentException(sprintf('The BasicService property can only contain items of \Diglin\Swisspost\StructType\BasicService, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->BasicService[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups
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
