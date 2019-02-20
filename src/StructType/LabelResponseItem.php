<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelResponseItem StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class LabelResponseItem extends ResponseItem
{
    /**
     * The IdentCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: IdentCode is only a valid input for Post-internal applications. For Post-external applications the IdentCode must not be set. | Excludes unsupported characters.
     * - pattern: [a-zA-Z,0-9]{13} | ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $IdentCode;
    /**
     * The Label
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Label;
    /**
     * Constructor method for LabelResponseItem
     * @uses LabelResponseItem::setIdentCode()
     * @uses LabelResponseItem::setLabel()
     * @param string $identCode
     * @param string $label
     */
    public function __construct($identCode = null, $label = null)
    {
        $this
            ->setIdentCode($identCode)
            ->setLabel($label);
    }
    /**
     * Get IdentCode value
     * @return string|null
     */
    public function getIdentCode()
    {
        return $this->IdentCode;
    }
    /**
     * Set IdentCode value
     * @param string $identCode
     * @return \Diglin\Swisspost\StructType\LabelResponseItem
     */
    public function setIdentCode($identCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($identCode) && !preg_match('//', $identCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "Array", "%s" given', var_export($identCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($identCode) && !is_string($identCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identCode)), __LINE__);
        }
        $this->IdentCode = $identCode;
        return $this;
    }
    /**
     * Get Label value
     * @return string|null
     */
    public function getLabel()
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param string $label
     * @return \Diglin\Swisspost\StructType\LabelResponseItem
     */
    public function setLabel($label = null)
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($label)), __LINE__);
        }
        $this->Label = $label;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\LabelResponseItem
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
