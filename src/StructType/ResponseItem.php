<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseItem StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ResponseItem extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Unique identifier for a specific item defined by the consumer. | Excludes unsupported characters.
     * - maxLength: 200
     * - pattern: ([^><?"|:\\/*])*
     * @var string
     */
    public $ItemID;
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
     * Constructor method for ResponseItem
     * @uses ResponseItem::setItemID()
     * @uses ResponseItem::setErrors()
     * @uses ResponseItem::setWarnings()
     * @param string $itemID
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     * @param \Diglin\Swisspost\StructType\WarningsType $warnings
     */
    public function __construct($itemID = null, \Diglin\Swisspost\StructType\ErrorsType $errors = null, \Diglin\Swisspost\StructType\WarningsType $warnings = null)
    {
        $this
            ->setItemID($itemID)
            ->setErrors($errors)
            ->setWarnings($warnings);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \Diglin\Swisspost\StructType\ResponseItem
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($itemID) && strlen($itemID) > 200) || (is_array($itemID) && count($itemID) > 200)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 200 element(s) or a scalar of 200 character(s) at most, "%d" length given', is_scalar($itemID) ? strlen($itemID) : count($itemID)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($itemID) && !preg_match('/([^><?"|:\\\\\/*])*/', $itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^><?"|:\\/*])*", "%s" given', var_export($itemID, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
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
     * @return \Diglin\Swisspost\StructType\ResponseItem
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
     * @return \Diglin\Swisspost\StructType\ResponseItem
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
     * @return \Diglin\Swisspost\StructType\ResponseItem
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
