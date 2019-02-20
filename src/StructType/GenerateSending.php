<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GenerateSending StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class GenerateSending extends AbstractStructBase
{
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
     * The Item
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Diglin\Swisspost\StructType\Item[]
     */
    public $Item;
    /**
     * Constructor method for GenerateSending
     * @uses GenerateSending::setSendingID()
     * @uses GenerateSending::setItem()
     * @param string $sendingID
     * @param \Diglin\Swisspost\StructType\Item[] $item
     */
    public function __construct($sendingID = null, array $item = array())
    {
        $this
            ->setSendingID($sendingID)
            ->setItem($item);
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
     * @return \Diglin\Swisspost\StructType\GenerateSending
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
     * Get Item value
     * @return \Diglin\Swisspost\StructType\Item[]|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\Item[] $item
     * @return \Diglin\Swisspost\StructType\GenerateSending
     */
    public function setItem(array $item = array())
    {
        foreach ($item as $generateSendingItemItem) {
            // validation for constraint: itemType
            if (!$generateSendingItemItem instanceof \Diglin\Swisspost\StructType\Item) {
                throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Diglin\Swisspost\StructType\Item, "%s" given', is_object($generateSendingItemItem) ? get_class($generateSendingItemItem) : gettype($generateSendingItemItem)), __LINE__);
            }
        }
        $this->Item = $item;
        return $this;
    }
    /**
     * Add item to Item value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\Item $item
     * @return \Diglin\Swisspost\StructType\GenerateSending
     */
    public function addToItem(\Diglin\Swisspost\StructType\Item $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\Item) {
            throw new \InvalidArgumentException(sprintf('The Item property can only contain items of \Diglin\Swisspost\StructType\Item, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Item[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\GenerateSending
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
