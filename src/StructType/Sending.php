<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Sending StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Sending extends AbstractStructBase
{
    /**
     * The Item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Diglin\Swisspost\StructType\ValidateCombinationItem[]
     */
    public $Item;
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
     * The SendingID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 50
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^><?"|:\\/*])*
     * @var string
     */
    public $SendingID;
    /**
     * Constructor method for Sending
     * @uses Sending::setItem()
     * @uses Sending::setCountry()
     * @uses Sending::setSendingID()
     * @param \Diglin\Swisspost\StructType\ValidateCombinationItem[] $item
     * @param string $country
     * @param string $sendingID
     */
    public function __construct(array $item = array(), $country = null, $sendingID = null)
    {
        $this
            ->setItem($item)
            ->setCountry($country)
            ->setSendingID($sendingID);
    }
    /**
     * Get Item value
     * @return \Diglin\Swisspost\StructType\ValidateCombinationItem[]|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ValidateCombinationItem[] $item
     * @return \Diglin\Swisspost\StructType\Sending
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $sendingItemItem) {
            // validation for constraint: itemType
            if (!$sendingItemItem instanceof \Diglin\Swisspost\StructType\ValidateCombinationItem) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Diglin\Swisspost\StructType\ValidateCombinationItem, "%s" given', is_object($sendingItemItem) ? get_class($sendingItemItem) : gettype($sendingItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\ValidateCombinationItem $item
     * @return \Diglin\Swisspost\StructType\Sending
     */
    public function addToItem(\Diglin\Swisspost\StructType\ValidateCombinationItem $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\ValidateCombinationItem) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Diglin\Swisspost\StructType\ValidateCombinationItem, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Item[] = $item;
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
     * @return \Diglin\Swisspost\StructType\Sending
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
     * Get SendingID value
     * @return string|null
     */
    public function getSendingID()
    {
        return $this->SendingID;
    }
    /**
     * Set SendingID value
     * @param string $sendingID
     * @return \Diglin\Swisspost\StructType\Sending
     */
    public function setSendingID($sendingID = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($sendingID) && strlen($sendingID) > 50) || (is_array($sendingID) && count($sendingID) > 50)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 50 element(s) or a scalar of 50 character(s) at most, "%d" length given', is_scalar($sendingID) ? strlen($sendingID) : count($sendingID)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($sendingID) && !preg_match('/([^><?"|:\\\\\/*])*/', $sendingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^><?"|:\\/*])*", "%s" given', var_export($sendingID, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($sendingID) && !is_string($sendingID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($sendingID)), __LINE__);
        }
        $this->SendingID = $sendingID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Sending
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
