<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BarcodeDefinition StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents a BarcodeDefinition for the GenerateBarcode Service.
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class BarcodeDefinition extends AbstractStructBase
{
    /**
     * The BarcodeType
     * @var string
     */
    public $BarcodeType;
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
     * Constructor method for BarcodeDefinition
     * @uses BarcodeDefinition::setBarcodeType()
     * @uses BarcodeDefinition::setImageFileType()
     * @uses BarcodeDefinition::setImageResolution()
     * @param string $barcodeType
     * @param string $imageFileType
     * @param int $imageResolution
     */
    public function __construct($barcodeType = null, $imageFileType = null, $imageResolution = null)
    {
        $this
            ->setBarcodeType($barcodeType)
            ->setImageFileType($imageFileType)
            ->setImageResolution($imageResolution);
    }
    /**
     * Get BarcodeType value
     * @return string|null
     */
    public function getBarcodeType()
    {
        return $this->BarcodeType;
    }
    /**
     * Set BarcodeType value
     * @uses \Diglin\Swisspost\EnumType\BarcodeType::valueIsValid()
     * @uses \Diglin\Swisspost\EnumType\BarcodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $barcodeType
     * @return \Diglin\Swisspost\StructType\BarcodeDefinition
     */
    public function setBarcodeType($barcodeType = null)
    {
        // validation for constraint: enumeration
        if (!\Diglin\Swisspost\EnumType\BarcodeType::valueIsValid($barcodeType)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $barcodeType, implode(', ', \Diglin\Swisspost\EnumType\BarcodeType::getValidValues())), __LINE__);
        }
        $this->BarcodeType = $barcodeType;
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
     * @return \Diglin\Swisspost\StructType\BarcodeDefinition
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
     * @return \Diglin\Swisspost\StructType\BarcodeDefinition
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\BarcodeDefinition
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
