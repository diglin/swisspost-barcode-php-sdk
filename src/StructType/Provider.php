<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Provider StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Provider extends AbstractStructBase
{
    /**
     * The Sending
     * @var \Diglin\Swisspost\StructType\Sending
     */
    public $Sending;
    /**
     * Constructor method for Provider
     * @uses Provider::setSending()
     * @param \Diglin\Swisspost\StructType\Sending $sending
     */
    public function __construct(\Diglin\Swisspost\StructType\Sending $sending = null)
    {
        $this
            ->setSending($sending);
    }
    /**
     * Get Sending value
     * @return \Diglin\Swisspost\StructType\Sending|null
     */
    public function getSending()
    {
        return $this->Sending;
    }
    /**
     * Set Sending value
     * @param \Diglin\Swisspost\StructType\Sending $sending
     * @return \Diglin\Swisspost\StructType\Provider
     */
    public function setSending(\Diglin\Swisspost\StructType\Sending $sending = null)
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
     * @return \Diglin\Swisspost\StructType\Provider
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
