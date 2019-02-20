<?php

namespace Diglin\Swisspost\EnumType;

/**
 * This class stands for BarcodeType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumeration of the different barcode types.
 * @subpackage Enumerations
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class BarcodeType
{
    /**
     * Constant for value 'LSO_1'
     * @return string 'LSO_1'
     */
    const VALUE_LSO_1 = 'LSO_1';
    /**
     * Constant for value 'LSO_2'
     * @return string 'LSO_2'
     */
    const VALUE_LSO_2 = 'LSO_2';
    /**
     * Constant for value 'LSO_3'
     * @return string 'LSO_3'
     */
    const VALUE_LSO_3 = 'LSO_3';
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
     * @uses self::VALUE_LSO_1
     * @uses self::VALUE_LSO_2
     * @uses self::VALUE_LSO_3
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LSO_1,
            self::VALUE_LSO_2,
            self::VALUE_LSO_3,
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
