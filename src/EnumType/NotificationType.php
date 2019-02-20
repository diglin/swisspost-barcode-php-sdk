<?php

namespace Diglin\Swisspost\EnumType;

/**
 * This class stands for NotificationType EnumType
 * @subpackage Enumerations
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class NotificationType
{
    /**
     * Constant for value 'EMAIL'
     * @return string 'EMAIL'
     */
    const VALUE_EMAIL = 'EMAIL';
    /**
     * Constant for value 'SMS'
     * @return string 'SMS'
     */
    const VALUE_SMS = 'SMS';
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
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_SMS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_EMAIL,
            self::VALUE_SMS,
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
