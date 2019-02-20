<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelDefinition StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class LabelDefinition extends AbstractStructBase
{
    /**
     * The LabelLayout
     * Meta informations extracted from the WSDL
     * - documentation: Defines valid layouts.
     * - pattern: [a-zA-Z,0-9]{2}
     * @var string
     */
    public $LabelLayout;
    /**
     * Constructor method for LabelDefinition
     * @uses LabelDefinition::setLabelLayout()
     * @param string $labelLayout
     */
    public function __construct($labelLayout = null)
    {
        $this
            ->setLabelLayout($labelLayout);
    }
    /**
     * Get LabelLayout value
     * @return string|null
     */
    public function getLabelLayout()
    {
        return $this->LabelLayout;
    }
    /**
     * Set LabelLayout value
     * @param string $labelLayout
     * @return \Diglin\Swisspost\StructType\LabelDefinition
     */
    public function setLabelLayout($labelLayout = null)
    {
        // validation for constraint: pattern
        if (is_scalar($labelLayout) && !preg_match('/[a-zA-Z,0-9]{2}/', $labelLayout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z,0-9]{2}", "%s" given', var_export($labelLayout, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($labelLayout) && !is_string($labelLayout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labelLayout)), __LINE__);
        }
        $this->LabelLayout = $labelLayout;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\LabelDefinition
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
