<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BarcodeResponseData StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class BarcodeResponseData extends AbstractStructBase
{
    /**
     * The Barcode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Barcode;
    /**
     * The DeliveryNoteRef
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Lieferscheinnummer Barcodeliste BMZ (128-er Klartext-Barcode)
     * - maxLength: 50
     * @var string
     */
    public $DeliveryNoteRef;
    /**
     * The BarcodeDefinition
     * @var \Diglin\Swisspost\StructType\BarcodeDefinition
     */
    public $BarcodeDefinition;
    /**
     * The ColorPrintRequired
     * @var bool
     */
    public $ColorPrintRequired;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ErrorsType
     */
    public $Errors;
    /**
     * The Warnings
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\WarningsType
     */
    public $Warnings;
    /**
     * Constructor method for BarcodeResponseData
     * @uses BarcodeResponseData::setBarcode()
     * @uses BarcodeResponseData::setDeliveryNoteRef()
     * @uses BarcodeResponseData::setBarcodeDefinition()
     * @uses BarcodeResponseData::setColorPrintRequired()
     * @uses BarcodeResponseData::setErrors()
     * @uses BarcodeResponseData::setWarnings()
     * @param string $barcode
     * @param string $deliveryNoteRef
     * @param \Diglin\Swisspost\StructType\BarcodeDefinition $barcodeDefinition
     * @param bool $colorPrintRequired
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     * @param \Diglin\Swisspost\StructType\WarningsType $warnings
     */
    public function __construct($barcode = null, $deliveryNoteRef = null, \Diglin\Swisspost\StructType\BarcodeDefinition $barcodeDefinition = null, $colorPrintRequired = null, \Diglin\Swisspost\StructType\ErrorsType $errors = null, \Diglin\Swisspost\StructType\WarningsType $warnings = null)
    {
        $this
            ->setBarcode($barcode)
            ->setDeliveryNoteRef($deliveryNoteRef)
            ->setBarcodeDefinition($barcodeDefinition)
            ->setColorPrintRequired($colorPrintRequired)
            ->setErrors($errors)
            ->setWarnings($warnings);
    }
    /**
     * Get Barcode value
     * @return string|null
     */
    public function getBarcode()
    {
        return $this->Barcode;
    }
    /**
     * Set Barcode value
     * @param string $barcode
     * @return \Diglin\Swisspost\StructType\BarcodeResponseData
     */
    public function setBarcode($barcode = null)
    {
        // validation for constraint: string
        if (!is_null($barcode) && !is_string($barcode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($barcode)), __LINE__);
        }
        $this->Barcode = $barcode;
        return $this;
    }
    /**
     * Get DeliveryNoteRef value
     * @return string|null
     */
    public function getDeliveryNoteRef()
    {
        return $this->DeliveryNoteRef;
    }
    /**
     * Set DeliveryNoteRef value
     * @param string $deliveryNoteRef
     * @return \Diglin\Swisspost\StructType\BarcodeResponseData
     */
    public function setDeliveryNoteRef($deliveryNoteRef = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($deliveryNoteRef) && strlen($deliveryNoteRef) > 50) || (is_array($deliveryNoteRef) && count($deliveryNoteRef) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($deliveryNoteRef) ? strlen($deliveryNoteRef) : count($deliveryNoteRef)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($deliveryNoteRef) && !is_string($deliveryNoteRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryNoteRef)), __LINE__);
        }
        $this->DeliveryNoteRef = $deliveryNoteRef;
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
     * @return \Diglin\Swisspost\StructType\BarcodeResponseData
     */
    public function setBarcodeDefinition(\Diglin\Swisspost\StructType\BarcodeDefinition $barcodeDefinition = null)
    {
        $this->BarcodeDefinition = $barcodeDefinition;
        return $this;
    }
    /**
     * Get ColorPrintRequired value
     * @return bool|null
     */
    public function getColorPrintRequired()
    {
        return $this->ColorPrintRequired;
    }
    /**
     * Set ColorPrintRequired value
     * @param bool $colorPrintRequired
     * @return \Diglin\Swisspost\StructType\BarcodeResponseData
     */
    public function setColorPrintRequired($colorPrintRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($colorPrintRequired) && !is_bool($colorPrintRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($colorPrintRequired)), __LINE__);
        }
        $this->ColorPrintRequired = $colorPrintRequired;
        return $this;
    }
    /**
     * Get Errors value
     * @return \Diglin\Swisspost\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     * @return \Diglin\Swisspost\StructType\BarcodeResponseData
     */
    public function setErrors(\Diglin\Swisspost\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Get Warnings value
     * @return \Diglin\Swisspost\StructType\WarningsType|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }
    /**
     * Set Warnings value
     * @param \Diglin\Swisspost\StructType\WarningsType $warnings
     * @return \Diglin\Swisspost\StructType\BarcodeResponseData
     */
    public function setWarnings(\Diglin\Swisspost\StructType\WarningsType $warnings = null)
    {
        $this->Warnings = $warnings;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\BarcodeResponseData
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
