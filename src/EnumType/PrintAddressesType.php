<?php

namespace Diglin\Swisspost\EnumType;

/**
 * This class stands for PrintAddressesType EnumType
 * Meta informations extracted from the WSDL
 * - documentation: Enumeration to indicated wheter addresses are printet or not.
 * @subpackage Enumerations
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class PrintAddressesType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OnlyRecipient'
     * @return string 'OnlyRecipient'
     */
    const VALUE_ONLY_RECIPIENT = 'OnlyRecipient';
    /**
     * Constant for value 'OnlyCustomer'
     * @return string 'OnlyCustomer'
     */
    const VALUE_ONLY_CUSTOMER = 'OnlyCustomer';
    /**
     * Constant for value 'RecipientAndCustomer'
     * @return string 'RecipientAndCustomer'
     */
    const VALUE_RECIPIENT_AND_CUSTOMER = 'RecipientAndCustomer';
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
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ONLY_RECIPIENT
     * @uses self::VALUE_ONLY_CUSTOMER
     * @uses self::VALUE_RECIPIENT_AND_CUSTOMER
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NONE,
            self::VALUE_ONLY_RECIPIENT,
            self::VALUE_ONLY_CUSTOMER,
            self::VALUE_RECIPIENT_AND_CUSTOMER,
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
