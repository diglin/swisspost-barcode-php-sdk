<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Envelope StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Envelope extends AbstractStructBase
{
    /**
     * The LabelDefinition
     * @var \Diglin\Swisspost\StructType\LabelDefinition
     */
    public $LabelDefinition;
    /**
     * The Data
     * @var \Diglin\Swisspost\StructType\Data
     */
    public $Data;
    /**
     * The BarcodeDefinition
     * @var \Diglin\Swisspost\StructType\SingleBarcodesResponseDefinition
     */
    public $BarcodeDefinition;
    /**
     * Constructor method for Envelope
     * @uses Envelope::setLabelDefinition()
     * @uses Envelope::setData()
     * @uses Envelope::setBarcodeDefinition()
     * @param \Diglin\Swisspost\StructType\LabelDefinition $labelDefinition
     * @param \Diglin\Swisspost\StructType\Data $data
     * @param \Diglin\Swisspost\StructType\SingleBarcodesResponseDefinition $barcodeDefinition
     */
    public function __construct(\Diglin\Swisspost\StructType\LabelDefinition $labelDefinition = null, \Diglin\Swisspost\StructType\Data $data = null, \Diglin\Swisspost\StructType\SingleBarcodesResponseDefinition $barcodeDefinition = null)
    {
        $this
            ->setLabelDefinition($labelDefinition)
            ->setData($data)
            ->setBarcodeDefinition($barcodeDefinition);
    }
    /**
     * Get LabelDefinition value
     * @return \Diglin\Swisspost\StructType\LabelDefinition|null
     */
    public function getLabelDefinition()
    {
        return $this->LabelDefinition;
    }
    /**
     * Set LabelDefinition value
     * @param \Diglin\Swisspost\StructType\LabelDefinition $labelDefinition
     * @return \Diglin\Swisspost\StructType\Envelope
     */
    public function setLabelDefinition(\Diglin\Swisspost\StructType\LabelDefinition $labelDefinition = null)
    {
        $this->LabelDefinition = $labelDefinition;
        return $this;
    }
    /**
     * Get Data value
     * @return \Diglin\Swisspost\StructType\Data|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param \Diglin\Swisspost\StructType\Data $data
     * @return \Diglin\Swisspost\StructType\Envelope
     */
    public function setData(\Diglin\Swisspost\StructType\Data $data = null)
    {
        $this->Data = $data;
        return $this;
    }
    /**
     * Get BarcodeDefinition value
     * @return \Diglin\Swisspost\StructType\SingleBarcodesResponseDefinition|null
     */
    public function getBarcodeDefinition()
    {
        return $this->BarcodeDefinition;
    }
    /**
     * Set BarcodeDefinition value
     * @param \Diglin\Swisspost\StructType\SingleBarcodesResponseDefinition $barcodeDefinition
     * @return \Diglin\Swisspost\StructType\Envelope
     */
    public function setBarcodeDefinition(\Diglin\Swisspost\StructType\SingleBarcodesResponseDefinition $barcodeDefinition = null)
    {
        $this->BarcodeDefinition = $barcodeDefinition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Envelope
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
