<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateProvider StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateProvider extends AbstractStructBase
{
    /**
     * The Sending
     * @var \Diglin\Swisspost\StructType\GenerateSending
     */
    public $Sending;
    /**
     * Constructor method for GenerateProvider
     * @uses GenerateProvider::setSending()
     * @param \Diglin\Swisspost\StructType\GenerateSending $sending
     */
    public function __construct(\Diglin\Swisspost\StructType\GenerateSending $sending = null)
    {
        $this
            ->setSending($sending);
    }
    /**
     * Get Sending value
     * @return \Diglin\Swisspost\StructType\GenerateSending|null
     */
    public function getSending()
    {
        return $this->Sending;
    }
    /**
     * Set Sending value
     * @param \Diglin\Swisspost\StructType\GenerateSending $sending
     * @return \Diglin\Swisspost\StructType\GenerateProvider
     */
    public function setSending(\Diglin\Swisspost\StructType\GenerateSending $sending = null)
    {
        $this->Sending = $sending;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\GenerateProvider
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
