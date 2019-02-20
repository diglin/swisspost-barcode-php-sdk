<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Item StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Item extends AbstractStructBase
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
     * The ItemNumber
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: [0-9]{1,8}
     * @var string
     */
    public $ItemNumber;
    /**
     * The IdentCode
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: IdentCode is only a valid input for Post-internal applications. For Post-external applications the IdentCode must not be set. | Excludes unsupported characters.
     * - pattern: [a-zA-Z,0-9]{13} | ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $IdentCode;
    /**
     * The Recipient
     * @var \Diglin\Swisspost\StructType\Recipient
     */
    public $Recipient;
    /**
     * The AdditionalINFOS
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\AdditionalINFOS
     */
    public $AdditionalINFOS;
    /**
     * The Attributes
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public $Attributes;
    /**
     * The Notification
     * Meta informations extracted from the WSDL
     * - documentation: Zusatzinformationen für Dienstleistung
     * - maxOccurs: 15
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\Notification[]
     */
    public $Notification;
    /**
     * Constructor method for Item
     * @uses Item::setItemID()
     * @uses Item::setItemNumber()
     * @uses Item::setIdentCode()
     * @uses Item::setRecipient()
     * @uses Item::setAdditionalINFOS()
     * @uses Item::setAttributes()
     * @uses Item::setNotification()
     * @param string $itemID
     * @param string $itemNumber
     * @param string $identCode
     * @param \Diglin\Swisspost\StructType\Recipient $recipient
     * @param \Diglin\Swisspost\StructType\AdditionalINFOS $additionalINFOS
     * @param \Diglin\Swisspost\StructType\ServiceCodeAttributes $attributes
     * @param \Diglin\Swisspost\StructType\Notification[] $notification
     */
    public function __construct($itemID = null, $itemNumber = null, $identCode = null, \Diglin\Swisspost\StructType\Recipient $recipient = null, \Diglin\Swisspost\StructType\AdditionalINFOS $additionalINFOS = null, \Diglin\Swisspost\StructType\ServiceCodeAttributes $attributes = null, array $notification = array())
    {
        $this
            ->setItemID($itemID)
            ->setItemNumber($itemNumber)
            ->setIdentCode($identCode)
            ->setRecipient($recipient)
            ->setAdditionalINFOS($additionalINFOS)
            ->setAttributes($attributes)
            ->setNotification($notification);
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
     * @return \Diglin\Swisspost\StructType\Item
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
     * Get ItemNumber value
     * @return string|null
     */
    public function getItemNumber()
    {
        return $this->ItemNumber;
    }
    /**
     * Set ItemNumber value
     * @param string $itemNumber
     * @return \Diglin\Swisspost\StructType\Item
     */
    public function setItemNumber($itemNumber = null)
    {
        // validation for constraint: pattern
        if (is_scalar($itemNumber) && !preg_match('/[0-9]{1,8}/', $itemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{1,8}", "%s" given', var_export($itemNumber, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($itemNumber) && !is_string($itemNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($itemNumber)), __LINE__);
        }
        $this->ItemNumber = $itemNumber;
        return $this;
    }
    /**
     * Get IdentCode value
     * @return string|null
     */
    public function getIdentCode()
    {
        return $this->IdentCode;
    }
    /**
     * Set IdentCode value
     * @param string $identCode
     * @return \Diglin\Swisspost\StructType\Item
     */
    public function setIdentCode($identCode = null)
    {
        // validation for constraint: pattern
        if (is_scalar($identCode) && !preg_match('//', $identCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "Array", "%s" given', var_export($identCode, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($identCode) && !is_string($identCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($identCode)), __LINE__);
        }
        $this->IdentCode = $identCode;
        return $this;
    }
    /**
     * Get Recipient value
     * @return \Diglin\Swisspost\StructType\Recipient|null
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }
    /**
     * Set Recipient value
     * @param \Diglin\Swisspost\StructType\Recipient $recipient
     * @return \Diglin\Swisspost\StructType\Item
     */
    public function setRecipient(\Diglin\Swisspost\StructType\Recipient $recipient = null)
    {
        $this->Recipient = $recipient;
        return $this;
    }
    /**
     * Get AdditionalINFOS value
     * @return \Diglin\Swisspost\StructType\AdditionalINFOS|null
     */
    public function getAdditionalINFOS()
    {
        return $this->AdditionalINFOS;
    }
    /**
     * Set AdditionalINFOS value
     * @param \Diglin\Swisspost\StructType\AdditionalINFOS $additionalINFOS
     * @return \Diglin\Swisspost\StructType\Item
     */
    public function setAdditionalINFOS(\Diglin\Swisspost\StructType\AdditionalINFOS $additionalINFOS = null)
    {
        $this->AdditionalINFOS = $additionalINFOS;
        return $this;
    }
    /**
     * Get Attributes value
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes|null
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    /**
     * Set Attributes value
     * @param \Diglin\Swisspost\StructType\ServiceCodeAttributes $attributes
     * @return \Diglin\Swisspost\StructType\Item
     */
    public function setAttributes(\Diglin\Swisspost\StructType\ServiceCodeAttributes $attributes = null)
    {
        $this->Attributes = $attributes;
        return $this;
    }
    /**
     * Get Notification value
     * @return \Diglin\Swisspost\StructType\Notification[]|null
     */
    public function getNotification()
    {
        return $this->Notification;
    }
    /**
     * Set Notification value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\Notification[] $notification
     * @return \Diglin\Swisspost\StructType\Item
     */
    public function setNotification(array $notification = array())
    {
        foreach ($notification as $itemNotificationItem) {
            // validation for constraint: itemType
            if (!$itemNotificationItem instanceof \Diglin\Swisspost\StructType\Notification) {
                throw new \InvalidArgumentException(sprintf('The Notification property can only contain items of \Diglin\Swisspost\StructType\Notification, "%s" given', is_object($itemNotificationItem) ? get_class($itemNotificationItem) : gettype($itemNotificationItem)), __LINE__);
            }
        }
        $this->Notification = $notification;
        return $this;
    }
    /**
     * Add item to Notification value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\Notification $item
     * @return \Diglin\Swisspost\StructType\Item
     */
    public function addToNotification(\Diglin\Swisspost\StructType\Notification $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\Notification) {
            throw new \InvalidArgumentException(sprintf('The Notification property can only contain items of \Diglin\Swisspost\StructType\Notification, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Notification[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Item
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
