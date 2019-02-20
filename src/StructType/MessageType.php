<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MessageType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents a business error or warning. Does not include technical errors, those are handled by SOAP faults.
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class MessageType extends AbstractStructBase
{
    /**
     * The Code
     * Meta informations extracted from the WSDL
     * - documentation: Five digit error/warning code. Error codes starts with a "E" and warning codes with a "W".
     * - pattern: [W,E]{1}[0-9]{4}
     * @var string
     */
    public $Code;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - documentation: Descriptive text in user's language for the occurred business warning/error.
     * - maxLength: 500
     * @var string
     */
    public $Message;
    /**
     * Constructor method for MessageType
     * @uses MessageType::setCode()
     * @uses MessageType::setMessage()
     * @param string $code
     * @param string $message
     */
    public function __construct($code = null, $message = null)
    {
        $this
            ->setCode($code)
            ->setMessage($message);
    }
    /**
     * Get Code value
     * @return string|null
     */
    public function getCode()
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Diglin\Swisspost\StructType\MessageType
     */
    public function setCode($code = null)
    {
        // validation for constraint: pattern
        if (is_scalar($code) && !preg_match('/[W,E]{1}[0-9]{4}/', $code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[W,E]{1}[0-9]{4}", "%s" given', var_export($code, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($code)), __LINE__);
        }
        $this->Code = $code;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Diglin\Swisspost\StructType\MessageType
     */
    public function setMessage($message = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($message) && strlen($message) > 500) || (is_array($message) && count($message) > 500)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 500 element(s) or a scalar of 500 character(s) at most, "%d" length given', is_scalar($message) ? strlen($message) : count($message)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($message)), __LINE__);
        }
        $this->Message = $message;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\MessageType
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
