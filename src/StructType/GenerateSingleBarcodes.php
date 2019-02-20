<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateSingleBarcodes StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateSingleBarcodes extends AbstractStructBase
{
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * The Envelope
     * @var \Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope
     */
    public $Envelope;
    /**
     * Constructor method for GenerateSingleBarcodes
     * @uses GenerateSingleBarcodes::setLanguage()
     * @uses GenerateSingleBarcodes::setEnvelope()
     * @param string $language
     * @param \Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope $envelope
     */
    public function __construct($language = null, \Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope $envelope = null)
    {
        $this
            ->setLanguage($language)
            ->setEnvelope($envelope);
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
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodes
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
     * Get Envelope value
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope|null
     */
    public function getEnvelope()
    {
        return $this->Envelope;
    }
    /**
     * Set Envelope value
     * @param \Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope $envelope
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodes
     */
    public function setEnvelope(\Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope $envelope = null)
    {
        $this->Envelope = $envelope;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodes
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
