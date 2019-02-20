<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Barcodes StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Barcodes extends AbstractStructBase
{
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    public $Barcode;
    /**
     * Constructor method for Barcodes
     * @uses Barcodes::setBarcode()
     * @param string[] $barcode
     */
    public function __construct(array $barcode = array())
    {
        $this
            ->setBarcode($barcode);
    }
    /**
     * Get Barcode value
     * @return string[]|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @throws \InvalidArgumentException
     * @param string[] $barcode
     * @return \Diglin\Swisspost\StructType\Barcodes
     */
    public function setBarcode(array $barcode = array())
    {
        foreach ($barcode as $barcodesBarcodeItem) {
            // validation for constraint: itemType
            if (!is_string($barcodesBarcodeItem)) {
                throw new \InvalidArgumentException(sprintf('The Barcode property can only contain items of base64Binary, "%s" given', is_object($barcodesBarcodeItem) ? get_class($barcodesBarcodeItem) : gettype($barcodesBarcodeItem)), __LINE__);
            }
        }
        $this->Barcode = $barcode;
        return $this;
    }
    /**
     * Add item to Barcode value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Diglin\Swisspost\StructType\Barcodes
     */
    public function addToBarcode($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Barcode property can only contain items of base64Binary, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Barcode[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Barcodes
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
