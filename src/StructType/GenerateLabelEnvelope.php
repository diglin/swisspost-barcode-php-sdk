<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelEnvelope StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateLabelEnvelope extends AbstractStructBase
{
    /**
     * The LabelDefinition
     * @var \Diglin\Swisspost\StructType\GenerateLabelDefinition
     */
    public $LabelDefinition;
    /**
     * The FileInfos
     * @var \Diglin\Swisspost\StructType\GenerateLabelFileInfos
     */
    public $FileInfos;
    /**
     * The Data
     * @var \Diglin\Swisspost\StructType\LabelData
     */
    public $Data;
    /**
     * Constructor method for GenerateLabelEnvelope
     * @uses GenerateLabelEnvelope::setLabelDefinition()
     * @uses GenerateLabelEnvelope::setFileInfos()
     * @uses GenerateLabelEnvelope::setData()
     * @param \Diglin\Swisspost\StructType\GenerateLabelDefinition $labelDefinition
     * @param \Diglin\Swisspost\StructType\GenerateLabelFileInfos $fileInfos
     * @param \Diglin\Swisspost\StructType\LabelData $data
     */
    public function __construct(\Diglin\Swisspost\StructType\GenerateLabelDefinition $labelDefinition = null, \Diglin\Swisspost\StructType\GenerateLabelFileInfos $fileInfos = null, \Diglin\Swisspost\StructType\LabelData $data = null)
    {
        $this
            ->setLabelDefinition($labelDefinition)
            ->setFileInfos($fileInfos)
            ->setData($data);
    }
    /**
     * Get LabelDefinition value
     * @return \Diglin\Swisspost\StructType\GenerateLabelDefinition|null
     */
    public function getLabelDefinition()
    {
        return $this->LabelDefinition;
    }
    /**
     * Set LabelDefinition value
     * @param \Diglin\Swisspost\StructType\GenerateLabelDefinition $labelDefinition
     * @return \Diglin\Swisspost\StructType\GenerateLabelEnvelope
     */
    public function setLabelDefinition(\Diglin\Swisspost\StructType\GenerateLabelDefinition $labelDefinition = null)
    {
        $this->LabelDefinition = $labelDefinition;
        return $this;
    }
    /**
     * Get FileInfos value
     * @return \Diglin\Swisspost\StructType\GenerateLabelFileInfos|null
     */
    public function getFileInfos()
    {
        return $this->FileInfos;
    }
    /**
     * Set FileInfos value
     * @param \Diglin\Swisspost\StructType\GenerateLabelFileInfos $fileInfos
     * @return \Diglin\Swisspost\StructType\GenerateLabelEnvelope
     */
    public function setFileInfos(\Diglin\Swisspost\StructType\GenerateLabelFileInfos $fileInfos = null)
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
     * @return \Diglin\Swisspost\StructType\GenerateLabelEnvelope
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
     * @return \Diglin\Swisspost\StructType\GenerateLabelEnvelope
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
