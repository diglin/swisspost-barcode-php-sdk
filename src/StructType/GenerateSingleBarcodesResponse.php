<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateSingleBarcodesResponse StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateSingleBarcodesResponse extends AbstractStructBase
{
    /**
     * The Envelope
     * @var \Diglin\Swisspost\StructType\Envelope
     */
    public $Envelope;
    /**
     * Constructor method for GenerateSingleBarcodesResponse
     * @uses GenerateSingleBarcodesResponse::setEnvelope()
     * @param \Diglin\Swisspost\StructType\Envelope $envelope
     */
    public function __construct(\Diglin\Swisspost\StructType\Envelope $envelope = null)
    {
        $this
            ->setEnvelope($envelope);
    }
    /**
     * Get Envelope value
     * @return \Diglin\Swisspost\StructType\Envelope|null
     */
    public function getEnvelope()
    {
        return $this->Envelope;
    }
    /**
     * Set Envelope value
     * @param \Diglin\Swisspost\StructType\Envelope $envelope
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodesResponse
     */
    public function setEnvelope(\Diglin\Swisspost\StructType\Envelope $envelope = null)
    {
        $this->Envelope = $envelope;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodesResponse
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
