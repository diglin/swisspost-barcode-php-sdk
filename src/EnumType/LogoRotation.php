<?php

namespace Diglin\Swisspost\EnumType;

/**
 * This class stands for LogoRotation EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Default value is 270.
 * @subpackage Enumerations
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class LogoRotation
{
    /**
     * Constant for value '0'
     * @return string '0'
     */
    const VALUE_0 = '0';
    /**
     * Constant for value '90'
     * @return string '90'
     */
    const VALUE_90 = '90';
    /**
     * Constant for value '180'
     * @return string '180'
     */
    const VALUE_180 = '180';
    /**
     * Constant for value '270'
     * @return string '270'
     */
    const VALUE_270 = '270';
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
     * @uses self::VALUE_0
     * @uses self::VALUE_90
     * @uses self::VALUE_180
     * @uses self::VALUE_270
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_0,
            self::VALUE_90,
            self::VALUE_180,
            self::VALUE_270,
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
