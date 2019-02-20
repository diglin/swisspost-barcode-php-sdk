<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateBarcodeResponse StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateBarcodeResponse extends AbstractStructBase
{
    /**
     * The Data
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\BarcodeResponseData
     */
    public $Data;
    /**
     * Constructor method for GenerateBarcodeResponse
     * @uses GenerateBarcodeResponse::setData()
     * @param \Diglin\Swisspost\StructType\BarcodeResponseData $data
     */
    public function __construct(\Diglin\Swisspost\StructType\BarcodeResponseData $data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get Data value
     * @return \Diglin\Swisspost\StructType\BarcodeResponseData|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param \Diglin\Swisspost\StructType\BarcodeResponseData $data
     * @return \Diglin\Swisspost\StructType\GenerateBarcodeResponse
     */
    public function setData(\Diglin\Swisspost\StructType\BarcodeResponseData $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\GenerateBarcodeResponse
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
