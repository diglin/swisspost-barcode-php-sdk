<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelAddress StructType
 * Meta informations extracted from the WSDL
 * - documentation: optional, used to declare a specific address on the label. if omitted, the address data of the recipient is taken. Useful if the address data of the recipient exceeds the length of the label.
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class LabelAddress extends AbstractStructBase
{
    /**
     * The LabelLine
     * Meta informations extracted from the WSDL
     * - maxOccurs: 5
     * - minOccurs: 2
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string[]
     */
    public $LabelLine;
    /**
     * Constructor method for LabelAddress
     * @uses LabelAddress::setLabelLine()
     * @param string[] $labelLine
     */
    public function __construct(array $labelLine = array())
    {
        $this
            ->setLabelLine($labelLine);
    }
    /**
     * Get LabelLine value
     * @return string[]
     */
    public function getLabelLine()
    {
        return $this->LabelLine;
    }
    /**
     * Set LabelLine value
     * @throws \InvalidArgumentException
     * @param string[] $labelLine
     * @return \Diglin\Swisspost\StructType\LabelAddress
     */
    public function setLabelLine(array $labelLine = array())
    {
        // validation for constraint: maxLength
        if ((is_scalar($labelLine) && strlen($labelLine) > 35) || (is_array($labelLine) && count($labelLine) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($labelLine) ? strlen($labelLine) : count($labelLine)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($labelLine) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $labelLine)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($labelLine, true)), __LINE__);
        }
        foreach ($labelLine as $labelAddressLabelLineItem) {
            // validation for constraint: itemType
            if (!is_string($labelAddressLabelLineItem)) {
                throw new \InvalidArgumentException(sprintf('The LabelLine property can only contain items of string, "%s" given', is_object($labelAddressLabelLineItem) ? get_class($labelAddressLabelLineItem) : gettype($labelAddressLabelLineItem)), __LINE__);
            }
        }
        $this->LabelLine = $labelLine;
        return $this;
    }
    /**
     * Add item to LabelLine value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Diglin\Swisspost\StructType\LabelAddress
     */
    public function addToLabelLine($item)
    {
        // validation for constraint: maxLength
        if ((is_scalar($item) && strlen($item) > 35) || (is_array($item) && count($item) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($item) ? strlen($item) : count($item)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($item) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($item, true)), __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The LabelLine property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LabelLine[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\LabelAddress
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
