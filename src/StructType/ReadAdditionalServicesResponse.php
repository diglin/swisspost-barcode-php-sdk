<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadAdditionalServicesResponse StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadAdditionalServicesResponse extends AbstractStructBase
{
    /**
     * The AdditionalService
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ServiceCode[]
     */
    public $AdditionalService;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ErrorsType
     */
    public $Errors;
    /**
     * Constructor method for ReadAdditionalServicesResponse
     * @uses ReadAdditionalServicesResponse::setAdditionalService()
     * @uses ReadAdditionalServicesResponse::setErrors()
     * @param \Diglin\Swisspost\StructType\ServiceCode[] $additionalService
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     */
    public function __construct(array $additionalService = array(), \Diglin\Swisspost\StructType\ErrorsType $errors = null)
    {
        $this
            ->setAdditionalService($additionalService)
            ->setErrors($errors);
    }
    /**
     * Get AdditionalService value
     * @return \Diglin\Swisspost\StructType\ServiceCode[]|null
     */
    public function getAdditionalService()
    {
        return $this->AdditionalService;
    }
    /**
     * Set AdditionalService value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ServiceCode[] $additionalService
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServicesResponse
     */
    public function setAdditionalService(array $additionalService = array())
    {
        foreach ($additionalService as $readAdditionalServicesResponseAdditionalServiceItem) {
            // validation for constraint: itemType
            if (!$readAdditionalServicesResponseAdditionalServiceItem instanceof \Diglin\Swisspost\StructType\ServiceCode) {
                throw new \InvalidArgumentException(sprintf('The AdditionalService property can only contain items of \Diglin\Swisspost\StructType\ServiceCode, "%s" given', is_object($readAdditionalServicesResponseAdditionalServiceItem) ? get_class($readAdditionalServicesResponseAdditionalServiceItem) : gettype($readAdditionalServicesResponseAdditionalServiceItem)), __LINE__);
            }
        }
        $this->AdditionalService = $additionalService;
        return $this;
    }
    /**
     * Add item to AdditionalService value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ServiceCode $item
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServicesResponse
     */
    public function addToAdditionalService(\Diglin\Swisspost\StructType\ServiceCode $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\ServiceCode) {
            throw new \InvalidArgumentException(sprintf('The AdditionalService property can only contain items of \Diglin\Swisspost\StructType\ServiceCode, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalService[] = $item;
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
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServicesResponse
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
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServicesResponse
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
