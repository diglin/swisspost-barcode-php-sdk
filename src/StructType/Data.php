<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Data StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Data extends AbstractStructBase
{
    /**
     * The Provider
     * @var \Diglin\Swisspost\StructType\Provider
     */
    public $Provider;
    /**
     * Constructor method for Data
     * @uses Data::setProvider()
     * @param \Diglin\Swisspost\StructType\Provider $provider
     */
    public function __construct(\Diglin\Swisspost\StructType\Provider $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Diglin\Swisspost\StructType\Provider|null
     */
    public function getProvider()
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Diglin\Swisspost\StructType\Provider $provider
     * @return \Diglin\Swisspost\StructType\Data
     */
    public function setProvider(\Diglin\Swisspost\StructType\Provider $provider = null)
    {
        $this->Provider = $provider;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Data
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
