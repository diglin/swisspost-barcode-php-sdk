<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalData StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class AdditionalData extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Type;
    /**
     * The Value
     * Meta informations extracted from the WSDL
     * - maxLength: 50
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Value;
    /**
     * Constructor method for AdditionalData
     * @uses AdditionalData::setType()
     * @uses AdditionalData::setValue()
     * @param string $type
     * @param string $value
     */
    public function __construct($type = null, $value = null)
    {
        $this
            ->setType($type)
            ->setValue($value);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Diglin\Swisspost\StructType\AdditionalData
     */
    public function setType($type = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($type) && strlen($type) > 35) || (is_array($type) && count($type) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($type) ? strlen($type) : count($type)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($type) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($type, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($type)), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Value value
     * @return string|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Diglin\Swisspost\StructType\AdditionalData
     */
    public function setValue($value = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($value) && strlen($value) > 50) || (is_array($value) && count($value) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($value) ? strlen($value) : count($value)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($value) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($value, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($value)), __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\AdditionalData
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
