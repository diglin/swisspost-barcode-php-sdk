<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateSingleBarcodesEnvelope StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateSingleBarcodesEnvelope extends AbstractStructBase
{
    /**
     * The BarcodeDefinition
     * @var \Diglin\Swisspost\StructType\SingleBarcodesDefinition
     */
    public $BarcodeDefinition;
    /**
     * The FileInfos
     * @var \Diglin\Swisspost\StructType\SingleBarcodesFileInfos
     */
    public $FileInfos;
    /**
     * The Data
     * @var \Diglin\Swisspost\StructType\LabelData
     */
    public $Data;
    /**
     * Constructor method for GenerateSingleBarcodesEnvelope
     * @uses GenerateSingleBarcodesEnvelope::setBarcodeDefinition()
     * @uses GenerateSingleBarcodesEnvelope::setFileInfos()
     * @uses GenerateSingleBarcodesEnvelope::setData()
     * @param \Diglin\Swisspost\StructType\SingleBarcodesDefinition $barcodeDefinition
     * @param \Diglin\Swisspost\StructType\SingleBarcodesFileInfos $fileInfos
     * @param \Diglin\Swisspost\StructType\LabelData $data
     */
    public function __construct(\Diglin\Swisspost\StructType\SingleBarcodesDefinition $barcodeDefinition = null, \Diglin\Swisspost\StructType\SingleBarcodesFileInfos $fileInfos = null, \Diglin\Swisspost\StructType\LabelData $data = null)
    {
        $this
            ->setBarcodeDefinition($barcodeDefinition)
            ->setFileInfos($fileInfos)
            ->setData($data);
    }
    /**
     * Get BarcodeDefinition value
     * @return \Diglin\Swisspost\StructType\SingleBarcodesDefinition|null
     */
    public function getBarcodeDefinition()
    {
        return $this->BarcodeDefinition;
    }
    /**
     * Set BarcodeDefinition value
     * @param \Diglin\Swisspost\StructType\SingleBarcodesDefinition $barcodeDefinition
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope
     */
    public function setBarcodeDefinition(\Diglin\Swisspost\StructType\SingleBarcodesDefinition $barcodeDefinition = null)
    {
        $this->BarcodeDefinition = $barcodeDefinition;
        return $this;
    }
    /**
     * Get FileInfos value
     * @return \Diglin\Swisspost\StructType\SingleBarcodesFileInfos|null
     */
    public function getFileInfos()
    {
        return $this->FileInfos;
    }
    /**
     * Set FileInfos value
     * @param \Diglin\Swisspost\StructType\SingleBarcodesFileInfos $fileInfos
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope
     */
    public function setFileInfos(\Diglin\Swisspost\StructType\SingleBarcodesFileInfos $fileInfos = null)
    {
        $this->FileInfos = $fileInfos;
        return $this;
    }
    /**
     * Get Data value
     * @return \Diglin\Swisspost\StructType\LabelData|null
     */
    public function getData()
    {
        return $this->Data;
    }
    /**
     * Set Data value
     * @param \Diglin\Swisspost\StructType\LabelData $data
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope
     */
    public function setData(\Diglin\Swisspost\StructType\LabelData $data = null)
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
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope
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
