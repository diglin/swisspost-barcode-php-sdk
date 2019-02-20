<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadBasicServices StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadBasicServices extends AbstractStructBase
{
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The ServiceGroupID
     * @var int
     */
    public $ServiceGroupID;
    /**
     * Constructor method for ReadBasicServices
     * @uses ReadBasicServices::setLanguage()
     * @uses ReadBasicServices::setServiceGroupID()
     * @param string $language
     * @param int $serviceGroupID
     */
    public function __construct($language = null, $serviceGroupID = null)
    {
        $this
            ->setLanguage($language)
            ->setServiceGroupID($serviceGroupID);
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
     * @return \Diglin\Swisspost\StructType\ReadBasicServices
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
     * Get ServiceGroupID value
     * @return int|null
     */
    public function getServiceGroupID()
    {
        return $this->ServiceGroupID;
    }
    /**
     * Set ServiceGroupID value
     * @param int $serviceGroupID
     * @return \Diglin\Swisspost\StructType\ReadBasicServices
     */
    public function setServiceGroupID($serviceGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($serviceGroupID) && !is_numeric($serviceGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($serviceGroupID)), __LINE__);
        }
        $this->ServiceGroupID = $serviceGroupID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ReadBasicServices
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
