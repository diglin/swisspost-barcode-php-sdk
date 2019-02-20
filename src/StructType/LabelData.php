<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelData StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class LabelData extends AbstractStructBase
{
    /**
     * The Provider
     * @var \Diglin\Swisspost\StructType\GenerateProvider
     */
    public $Provider;
    /**
     * Constructor method for LabelData
     * @uses LabelData::setProvider()
     * @param \Diglin\Swisspost\StructType\GenerateProvider $provider
     */
    public function __construct(\Diglin\Swisspost\StructType\GenerateProvider $provider = null)
    {
        $this
            ->setProvider($provider);
    }
    /**
     * Get Provider value
     * @return \Diglin\Swisspost\StructType\GenerateProvider|null
     */
    public function getProvider()
    {
        return $this->Provider;
    }
    /**
     * Set Provider value
     * @param \Diglin\Swisspost\StructType\GenerateProvider $provider
     * @return \Diglin\Swisspost\StructType\LabelData
     */
    public function setProvider(\Diglin\Swisspost\StructType\GenerateProvider $provider = null)
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
     * @return \Diglin\Swisspost\StructType\LabelData
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
