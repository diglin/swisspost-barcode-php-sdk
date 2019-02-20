<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadAdditionalServices StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadAdditionalServices extends AbstractStructBase
{
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The PRZL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - documentation: Identifies a PRZL.
     * - pattern: [a-zA-Z,0-9]{1,10}
     * @var string[]
     */
    public $PRZL;
    /**
     * Constructor method for ReadAdditionalServices
     * @uses ReadAdditionalServices::setLanguage()
     * @uses ReadAdditionalServices::setPRZL()
     * @param string $language
     * @param string[] $pRZL
     */
    public function __construct($language = null, array $pRZL = array())
    {
        $this
            ->setLanguage($language)
            ->setPRZL($pRZL);
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
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServices
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
     * Get PRZL value
     * @return string[]|null
     */
    public function getPRZL()
    {
        return $this->PRZL;
    }
    /**
     * Set PRZL value
     * @throws \InvalidArgumentException
     * @param string[] $pRZL
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServices
     */
    public function setPRZL(array $pRZL = array())
    {
        // validation for constraint: pattern
        if (is_scalar($pRZL) && !preg_match('/[a-zA-Z,0-9]{1,10}/', $pRZL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z,0-9]{1,10}", "%s" given', var_export($pRZL, true)), __LINE__);
        }
        foreach ($pRZL as $readAdditionalServicesPRZLItem) {
            // validation for constraint: itemType
            if (!is_string($readAdditionalServicesPRZLItem)) {
                throw new \InvalidArgumentException(sprintf('The PRZL property can only contain items of string, "%s" given', is_object($readAdditionalServicesPRZLItem) ? get_class($readAdditionalServicesPRZLItem) : gettype($readAdditionalServicesPRZLItem)), __LINE__);
            }
        }
        $this->PRZL = $pRZL;
        return $this;
    }
    /**
     * Add item to PRZL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServices
     */
    public function addToPRZL($item)
    {
        // validation for constraint: pattern
        if (is_scalar($item) && !preg_match('/[a-zA-Z,0-9]{1,10}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z,0-9]{1,10}", "%s" given', var_export($item, true)), __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PRZL property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PRZL[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServices
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
