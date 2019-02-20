<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateBarcode StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateBarcode extends AbstractStructBase
{
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The BarcodeDefinition
     * @var \Diglin\Swisspost\StructType\BarcodeDefinition
     */
    public $BarcodeDefinition;
    /**
     * Constructor method for GenerateBarcode
     * @uses GenerateBarcode::setLanguage()
     * @uses GenerateBarcode::setBarcodeDefinition()
     * @param string $language
     * @param \Diglin\Swisspost\StructType\BarcodeDefinition $barcodeDefinition
     */
    public function __construct($language = null, \Diglin\Swisspost\StructType\BarcodeDefinition $barcodeDefinition = null)
    {
        $this
            ->setLanguage($language)
            ->setBarcodeDefinition($barcodeDefinition);
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
     * @return \Diglin\Swisspost\StructType\GenerateBarcode
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
     * Get BarcodeDefinition value
     * @return \Diglin\Swisspost\StructType\BarcodeDefinition|null
     */
    public function getBarcodeDefinition()
    {
        return $this->BarcodeDefinition;
    }
    /**
     * Set BarcodeDefinition value
     * @param \Diglin\Swisspost\StructType\BarcodeDefinition $barcodeDefinition
     * @return \Diglin\Swisspost\StructType\GenerateBarcode
     */
    public function setBarcodeDefinition(\Diglin\Swisspost\StructType\BarcodeDefinition $barcodeDefinition = null)
    {
        $this->BarcodeDefinition = $barcodeDefinition;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\GenerateBarcode
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
