<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateLabelDefinition StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateLabelDefinition extends LabelDefinition
{
    /**
     * The PrintAddresses
     * @var string
     */
    public $PrintAddresses;
    /**
     * The ImageFileType
     * Meta informations extracted from the WSDL
     * - documentation: Defines valid formats of images.
     * - pattern: [a-zA-Z,0-9]{1,5}
     * @var string
     */
    public $ImageFileType;
    /**
     * The ImageResolution
     * @var int
     */
    public $ImageResolution;
    /**
     * The PrintPreview
     * @var bool
     */
    public $PrintPreview;

    /**
     * Constructor method for GenerateLabelDefinition
     * @uses GenerateLabelDefinition::setPrintAddresses()
     * @uses GenerateLabelDefinition::setImageFileType()
     * @uses GenerateLabelDefinition::setImageResolution()
     * @uses GenerateLabelDefinition::setPrintPreview()
     * @param string $printAddresses
     * @param string $imageFileType
     * @param int $imageResolution
     * @param bool $printPreview
     */
    public function __construct($printAddresses = null, $imageFileType = null, $imageResolution = null, $printPreview = null)
    {
        $this
            ->setPrintAddresses($printAddresses)
            ->setImageFileType($imageFileType)
            ->setImageResolution($imageResolution)
            ->setPrintPreview($printPreview);
    }
    /**
     * Get PrintAddresses value
     * @return string|null
     */
    public function getPrintAddresses()
    {
        return $this->PrintAddresses;
    }
    /**
     * Set PrintAddresses value
     * @uses \Diglin\Swisspost\EnumType\PrintAddressesType::valueIsValid()
     * @uses \Diglin\Swisspost\EnumType\PrintAddressesType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $printAddresses
     * @return \Diglin\Swisspost\StructType\GenerateLabelDefinition
     */
    public function setPrintAddresses($printAddresses = null)
    {
        // validation for constraint: enumeration
        if (!\Diglin\Swisspost\EnumType\PrintAddressesType::valueIsValid($printAddresses)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $printAddresses, implode(', ', \Diglin\Swisspost\EnumType\PrintAddressesType::getValidValues())), __LINE__);
        }
        $this->PrintAddresses = $printAddresses;
        return $this;
    }
    /**
     * Get ImageFileType value
     * @return string|null
     */
    public function getImageFileType()
    {
        return $this->ImageFileType;
    }
    /**
     * Set ImageFileType value
     * @param string $imageFileType
     * @return \Diglin\Swisspost\StructType\GenerateLabelDefinition
     */
    public function setImageFileType($imageFileType = null)
    {
        // validation for constraint: pattern
        if (is_scalar($imageFileType) && !preg_match('/[a-zA-Z,0-9]{1,5}/', $imageFileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z,0-9]{1,5}", "%s" given', var_export($imageFileType, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($imageFileType) && !is_string($imageFileType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($imageFileType)), __LINE__);
        }
        $this->ImageFileType = $imageFileType;
        return $this;
    }
    /**
     * Get ImageResolution value
     * @return int|null
     */
    public function getImageResolution()
    {
        return $this->ImageResolution;
    }
    /**
     * Set ImageResolution value
     * @param int $imageResolution
     * @return \Diglin\Swisspost\StructType\GenerateLabelDefinition
     */
    public function setImageResolution($imageResolution = null)
    {
        // validation for constraint: int
        if (!is_null($imageResolution) && !is_numeric($imageResolution)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($imageResolution)), __LINE__);
        }
        $this->ImageResolution = $imageResolution;
        return $this;
    }
    /**
     * Get PrintPreview value
     * @return bool|null
     */
    public function getPrintPreview()
    {
        return $this->PrintPreview;
    }
    /**
     * Set PrintPreview value
     * @param bool $printPreview
     * @return \Diglin\Swisspost\StructType\GenerateLabelDefinition
     */
    public function setPrintPreview($printPreview = null)
    {
        // validation for constraint: boolean
        if (!is_null($printPreview) && !is_bool($printPreview)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($printPreview)), __LINE__);
        }
        $this->PrintPreview = $printPreview;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\GenerateLabelDefinition
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
