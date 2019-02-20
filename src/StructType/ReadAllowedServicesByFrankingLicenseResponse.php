<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadAllowedServicesByFrankingLicenseResponse StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadAllowedServicesByFrankingLicenseResponse extends AbstractStructBase
{
    /**
     * The ServiceGroups
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups[]
     */
    public $ServiceGroups;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ErrorsType
     */
    public $Errors;
    /**
     * Constructor method for ReadAllowedServicesByFrankingLicenseResponse
     * @uses ReadAllowedServicesByFrankingLicenseResponse::setServiceGroups()
     * @uses ReadAllowedServicesByFrankingLicenseResponse::setErrors()
     * @param \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups[] $serviceGroups
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     */
    public function __construct(array $serviceGroups = array(), \Diglin\Swisspost\StructType\ErrorsType $errors = null)
    {
        $this
            ->setServiceGroups($serviceGroups)
            ->setErrors($errors);
    }
    /**
     * Get ServiceGroups value
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups[]|null
     */
    public function getServiceGroups()
    {
        return $this->ServiceGroups;
    }
    /**
     * Set ServiceGroups value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups[] $serviceGroups
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicenseResponse
     */
    public function setServiceGroups(array $serviceGroups = array())
    {
        foreach ($serviceGroups as $readAllowedServicesByFrankingLicenseResponseServiceGroupsItem) {
            // validation for constraint: itemType
            if (!$readAllowedServicesByFrankingLicenseResponseServiceGroupsItem instanceof \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups) {
                throw new \InvalidArgumentException(sprintf('The ServiceGroups property can only contain items of \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups, "%s" given', is_object($readAllowedServicesByFrankingLicenseResponseServiceGroupsItem) ? get_class($readAllowedServicesByFrankingLicenseResponseServiceGroupsItem) : gettype($readAllowedServicesByFrankingLicenseResponseServiceGroupsItem)), __LINE__);
            }
        }
        $this->ServiceGroups = $serviceGroups;
        return $this;
    }
    /**
     * Add item to ServiceGroups value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups $item
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicenseResponse
     */
    public function addToServiceGroups(\Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups) {
            throw new \InvalidArgumentException(sprintf('The ServiceGroups property can only contain items of \Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->ServiceGroups[] = $item;
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
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicenseResponse
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
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicenseResponse
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
