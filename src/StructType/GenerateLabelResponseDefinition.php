<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelResponseDefinition StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateLabelResponseDefinition extends GenerateLabelDefinition
{
    /**
     * The ColorPrintRequired
     * @var bool
     */
    public $ColorPrintRequired;
    /**
     * Constructor method for GenerateLabelResponseDefinition
     * @uses GenerateLabelResponseDefinition::setColorPrintRequired()
     * @param bool $colorPrintRequired
     */
    public function __construct($colorPrintRequired = null)
    {
        $this
            ->setColorPrintRequired($colorPrintRequired);
    }
    /**
     * Get ColorPrintRequired value
     * @return bool|null
     */
    public function getColorPrintRequired()
    {
        return $this->ColorPrintRequired;
    }
    /**
     * Set ColorPrintRequired value
     * @param bool $colorPrintRequired
     * @return \Diglin\Swisspost\StructType\GenerateLabelResponseDefinition
     */
    public function setColorPrintRequired($colorPrintRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($colorPrintRequired) && !is_bool($colorPrintRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($colorPrintRequired)), __LINE__);
        }
        $this->ColorPrintRequired = $colorPrintRequired;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\GenerateLabelResponseDefinition
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
