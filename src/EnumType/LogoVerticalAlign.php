<?php

namespace Diglin\Swisspost\EnumType;

/**
 * This class stands for LogoVerticalAlign EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Default value is TOP.
 * @subpackage Enumerations
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class LogoVerticalAlign
{
    /**
     * Constant for value 'TOP'
     * @return string 'TOP'
     */
    const VALUE_TOP = 'TOP';
    /**
     * Constant for value 'MIDDLE'
     * @return string 'MIDDLE'
     */
    const VALUE_MIDDLE = 'MIDDLE';
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
     * @uses self::VALUE_TOP
     * @uses self::VALUE_MIDDLE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TOP,
            self::VALUE_MIDDLE,
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
