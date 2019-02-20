<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadBasicServicesResponse StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadBasicServicesResponse extends AbstractStructBase
{
    /**
     * The BasicService
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\BasicService[]
     */
    public $BasicService;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ErrorsType
     */
    public $Errors;
    /**
     * Constructor method for ReadBasicServicesResponse
     * @uses ReadBasicServicesResponse::setBasicService()
     * @uses ReadBasicServicesResponse::setErrors()
     * @param \Diglin\Swisspost\StructType\BasicService[] $basicService
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     */
    public function __construct(array $basicService = array(), \Diglin\Swisspost\StructType\ErrorsType $errors = null)
    {
        $this
            ->setBasicService($basicService)
            ->setErrors($errors);
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
     * @return \Diglin\Swisspost\StructType\ReadBasicServicesResponse
     */
    public function setBasicService(array $basicService = array())
    {
        foreach ($basicService as $readBasicServicesResponseBasicServiceItem) {
            // validation for constraint: itemType
            if (!$readBasicServicesResponseBasicServiceItem instanceof \Diglin\Swisspost\StructType\BasicService) {
                throw new \InvalidArgumentException(sprintf('The BasicService property can only contain items of \Diglin\Swisspost\StructType\BasicService, "%s" given', is_object($readBasicServicesResponseBasicServiceItem) ? get_class($readBasicServicesResponseBasicServiceItem) : gettype($readBasicServicesResponseBasicServiceItem)), __LINE__);
            }
        }
        $this->BasicService = $basicService;
        return $this;
    }
    /**
     * Add item to BasicService value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\BasicService $item
     * @return \Diglin\Swisspost\StructType\ReadBasicServicesResponse
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
     * @return \Diglin\Swisspost\StructType\ReadBasicServicesResponse
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
     * @return \Diglin\Swisspost\StructType\ReadBasicServicesResponse
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
