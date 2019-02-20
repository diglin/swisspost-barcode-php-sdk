<?php

namespace Diglin\Swisspost\EnumType;

/**
 * This class stands for Language EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Represents the end-users language. The service returns all localized texts including error-messages in the selected language.
 * @subpackage Enumerations
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Language
{
    /**
     * Constant for value 'de'
     * @return string 'de'
     */
    const VALUE_DE = 'de';
    /**
     * Constant for value 'fr'
     * @return string 'fr'
     */
    const VALUE_FR = 'fr';
    /**
     * Constant for value 'it'
     * @return string 'it'
     */
    const VALUE_IT = 'it';
    /**
     * Constant for value 'en'
     * @return string 'en'
     */
    const VALUE_EN = 'en';
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
     * @uses self::VALUE_DE
     * @uses self::VALUE_FR
     * @uses self::VALUE_IT
     * @uses self::VALUE_EN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DE,
            self::VALUE_FR,
            self::VALUE_IT,
            self::VALUE_EN,
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
