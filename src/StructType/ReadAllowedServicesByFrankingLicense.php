<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadAllowedServicesByFrankingLicense StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadAllowedServicesByFrankingLicense extends AbstractStructBase
{
    /**
     * The FrankingLicense
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - documentation: Defines a franking license.
     * - pattern: [0-9]{8}
     * @var string
     */
    public $FrankingLicense;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * Constructor method for ReadAllowedServicesByFrankingLicense
     * @uses ReadAllowedServicesByFrankingLicense::setFrankingLicense()
     * @uses ReadAllowedServicesByFrankingLicense::setLanguage()
     * @param string $frankingLicense
     * @param string $language
     */
    public function __construct($frankingLicense = null, $language = null)
    {
        $this
            ->setFrankingLicense($frankingLicense)
            ->setLanguage($language);
    }
    /**
     * Get FrankingLicense value
     * @return string
     */
    public function getFrankingLicense()
    {
        return $this->FrankingLicense;
    }
    /**
     * Set FrankingLicense value
     * @param string $frankingLicense
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicense
     */
    public function setFrankingLicense($frankingLicense = null)
    {
        // validation for constraint: pattern
        if (is_scalar($frankingLicense) && !preg_match('/[0-9]{8}/', $frankingLicense)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{8}", "%s" given', var_export($frankingLicense, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($frankingLicense) && !is_string($frankingLicense)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frankingLicense)), __LINE__);
        }
        $this->FrankingLicense = $frankingLicense;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @uses \Diglin\Swisspost\EnumType\Language::valueIsValid()
     * @uses \Diglin\Swisspost\EnumType\Language::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $language
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicense
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: enumeration
        if (!\Diglin\Swisspost\EnumType\Language::valueIsValid($language)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $language, implode(', ', \Diglin\Swisspost\EnumType\Language::getValidValues())), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicense
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
