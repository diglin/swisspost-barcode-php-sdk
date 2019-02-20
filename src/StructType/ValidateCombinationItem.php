<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateCombinationItem StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ValidateCombinationItem extends AbstractStructBase
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
     * The Attributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\Attributes
     */
    public $Attributes;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The ISO country code.
     * - pattern: [a-zA-Z]{2}
     * @var string
     */
    public $Country;
    /**
     * Constructor method for ValidateCombinationItem
     * @uses ValidateCombinationItem::setItemID()
     * @uses ValidateCombinationItem::setAttributes()
     * @uses ValidateCombinationItem::setCountry()
     * @param string $itemID
     * @param \Diglin\Swisspost\StructType\Attributes $attributes
     * @param string $country
     */
    public function __construct($itemID = null, \Diglin\Swisspost\StructType\Attributes $attributes = null, $country = null)
    {
        $this
            ->setItemID($itemID)
            ->setAttributes($attributes)
            ->setCountry($country);
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
     * @return \Diglin\Swisspost\StructType\ValidateCombinationItem
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
     * Get Attributes value
     * @return \Diglin\Swisspost\StructType\Attributes|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @param \Diglin\Swisspost\StructType\Attributes $attributes
     * @return \Diglin\Swisspost\StructType\ValidateCombinationItem
     */
    public function setAttributes(\Diglin\Swisspost\StructType\Attributes $attributes = null)
    {
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Diglin\Swisspost\StructType\ValidateCombinationItem
     */
    public function setCountry($country = null)
    {
        // validation for constraint: pattern
        if (is_scalar($country) && !preg_match('/[a-zA-Z]{2}/', $country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{2}", "%s" given', var_export($country, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ValidateCombinationItem
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
