<?php

namespace Diglin\Swisspost\EnumType;

/**
 * This class stands for LogoHorizontalAlign EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Default value is WITH_CONTENT.
 * @subpackage Enumerations
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class LogoHorizontalAlign
{
    /**
     * Constant for value 'WITH_CONTENT'
     * @return string 'WITH_CONTENT'
     */
    const VALUE_WITH_CONTENT = 'WITH_CONTENT';
    /**
     * Constant for value 'LEFT'
     * @return string 'LEFT'
     */
    const VALUE_LEFT = 'LEFT';
    /**
     * Return true if value is allowed
     * @uses self::getValidValues()
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return ($value === null) || in_array($value, self::getValidValues(), true);
    }
    /**
     * Return allowed values
     * @uses self::VALUE_WITH_CONTENT
     * @uses self::VALUE_LEFT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_WITH_CONTENT,
            self::VALUE_LEFT,
        );
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
