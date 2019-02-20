<?php

namespace Diglin\Swisspost\EnumType;

/**
 * This class stands for LogoAspectRatio EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Default value is EXPAND.
 * @subpackage Enumerations
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class LogoAspectRatio
{
    /**
     * Constant for value 'EXPAND'
     * @return string 'EXPAND'
     */
    const VALUE_EXPAND = 'EXPAND';
    /**
     * Constant for value 'KEEP'
     * @return string 'KEEP'
     */
    const VALUE_KEEP = 'KEEP';
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
     * @uses self::VALUE_EXPAND
     * @uses self::VALUE_KEEP
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EXPAND,
            self::VALUE_KEEP,
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
