<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Communication StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Communication extends AbstractStructBase
{
    /**
     * The Email
     * Meta informations extracted from the WSDL
     * - documentation: The email address. | Excludes unsupported characters.
     * - maxLength: 160
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Email;
    /**
     * The Mobile
     * Meta informations extracted from the WSDL
     * - documentation: Defines a valid phone number. | Excludes unsupported characters.
     * - maxLength: 20
     * - minLength: 10
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Mobile;
    /**
     * Constructor method for Communication
     * @uses Communication::setEmail()
     * @uses Communication::setMobile()
     * @param string $email
     * @param string $mobile
     */
    public function __construct($email = null, $mobile = null)
    {
        $this
            ->setEmail($email)
            ->setMobile($mobile);
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \Diglin\Swisspost\StructType\Communication
     */
    public function setEmail($email = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($email) && strlen($email) > 160) || (is_array($email) && count($email) > 160)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 160 element(s) or a scalar of 160 character(s) at most, "%d" length given', is_scalar($email) ? strlen($email) : count($email)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($email) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($email, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get Mobile value
     * @return string|null
     */
    public function getMobile()
    {
        return $this->Mobile;
    }
    /**
     * Set Mobile value
     * @param string $mobile
     * @return \Diglin\Swisspost\StructType\Communication
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($mobile) && strlen($mobile) > 20) || (is_array($mobile) && count($mobile) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($mobile) ? strlen($mobile) : count($mobile)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($mobile) && strlen($mobile) < 10) || (is_array($mobile) && count($mobile) < 10)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at least', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($mobile) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($mobile, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        $this->Mobile = $mobile;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Communication
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
