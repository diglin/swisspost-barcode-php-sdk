<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceCodeAttributes StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ServiceCodeAttributes extends AbstractStructBase
{
    /**
     * The PRZL
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 1
     * - documentation: Identifies a PRZL.
     * - pattern: [a-zA-Z,0-9]{1,10}
     * @var string[]
     */
    public $PRZL;
    /**
     * The FreeText
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 34
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $FreeText;
    /**
     * The DeliveryDate
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $DeliveryDate;
    /**
     * The ParcelNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxInclusive: 99
     * - minInclusive: 0
     * @var int
     */
    public $ParcelNo;
    /**
     * The ParcelTotal
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxInclusive: 99
     * - minInclusive: 0
     * @var int
     */
    public $ParcelTotal;
    /**
     * The DeliveryPlace
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $DeliveryPlace;
    /**
     * The ProClima
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ProClima;
    /**
     * The ReturnInfo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ReturnInfoType
     */
    public $ReturnInfo;
    /**
     * The Dimensions
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\Dimensions
     */
    public $Dimensions;
    /**
     * The UNNumbers
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\UNNumbers
     */
    public $UNNumbers;
    /**
     * Constructor method for ServiceCodeAttributes
     * @uses ServiceCodeAttributes::setPRZL()
     * @uses ServiceCodeAttributes::setFreeText()
     * @uses ServiceCodeAttributes::setDeliveryDate()
     * @uses ServiceCodeAttributes::setParcelNo()
     * @uses ServiceCodeAttributes::setParcelTotal()
     * @uses ServiceCodeAttributes::setDeliveryPlace()
     * @uses ServiceCodeAttributes::setProClima()
     * @uses ServiceCodeAttributes::setReturnInfo()
     * @uses ServiceCodeAttributes::setDimensions()
     * @uses ServiceCodeAttributes::setUNNumbers()
     * @param string[] $pRZL
     * @param string $freeText
     * @param string $deliveryDate
     * @param int $parcelNo
     * @param int $parcelTotal
     * @param string $deliveryPlace
     * @param bool $proClima
     * @param \Diglin\Swisspost\StructType\ReturnInfoType $returnInfo
     * @param \Diglin\Swisspost\StructType\Dimensions $dimensions
     * @param \Diglin\Swisspost\StructType\UNNumbers $uNNumbers
     */
    public function __construct(array $pRZL = array(), $freeText = null, $deliveryDate = null, $parcelNo = null, $parcelTotal = null, $deliveryPlace = null, $proClima = null, \Diglin\Swisspost\StructType\ReturnInfoType $returnInfo = null, \Diglin\Swisspost\StructType\Dimensions $dimensions = null, \Diglin\Swisspost\StructType\UNNumbers $uNNumbers = null)
    {
        $this
            ->setPRZL($pRZL)
            ->setFreeText($freeText)
            ->setDeliveryDate($deliveryDate)
            ->setParcelNo($parcelNo)
            ->setParcelTotal($parcelTotal)
            ->setDeliveryPlace($deliveryPlace)
            ->setProClima($proClima)
            ->setReturnInfo($returnInfo)
            ->setDimensions($dimensions)
            ->setUNNumbers($uNNumbers);
    }
    /**
     * Get PRZL value
     * @return string[]
     */
    public function getPRZL()
    {
        return $this->PRZL;
    }
    /**
     * Set PRZL value
     * @throws \InvalidArgumentException
     * @param string[] $pRZL
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setPRZL(array $pRZL = array())
    {
        // validation for constraint: pattern
        if (is_scalar($pRZL) && !preg_match('/[a-zA-Z,0-9]{1,10}/', $pRZL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z,0-9]{1,10}", "%s" given', var_export($pRZL, true)), __LINE__);
        }
        foreach ($pRZL as $serviceCodeAttributesPRZLItem) {
            // validation for constraint: itemType
            if (!is_string($serviceCodeAttributesPRZLItem)) {
                throw new \InvalidArgumentException(sprintf('The PRZL property can only contain items of string, "%s" given', is_object($serviceCodeAttributesPRZLItem) ? get_class($serviceCodeAttributesPRZLItem) : gettype($serviceCodeAttributesPRZLItem)), __LINE__);
            }
        }
        $this->PRZL = $pRZL;
        return $this;
    }
    /**
     * Add item to PRZL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function addToPRZL($item)
    {
        // validation for constraint: pattern
        if (is_scalar($item) && !preg_match('/[a-zA-Z,0-9]{1,10}/', $item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z,0-9]{1,10}", "%s" given', var_export($item, true)), __LINE__);
        }
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The PRZL property can only contain items of string, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->PRZL[] = $item;
        return $this;
    }
    /**
     * Get FreeText value
     * @return string|null
     */
    public function getFreeText()
    {
        return $this->FreeText;
    }
    /**
     * Set FreeText value
     * @param string $freeText
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setFreeText($freeText = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($freeText) && strlen($freeText) > 34) || (is_array($freeText) && count($freeText) > 34)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 34 element(s) or a scalar of 34 character(s) at most, "%d" length given', is_scalar($freeText) ? strlen($freeText) : count($freeText)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($freeText) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($freeText, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($freeText) && !is_string($freeText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText)), __LINE__);
        }
        $this->FreeText = $freeText;
        return $this;
    }
    /**
     * Get DeliveryDate value
     * @return string|null
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }
    /**
     * Set DeliveryDate value
     * @param string $deliveryDate
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setDeliveryDate($deliveryDate = null)
    {
        // validation for constraint: string
        if (!is_null($deliveryDate) && !is_string($deliveryDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryDate)), __LINE__);
        }
        $this->DeliveryDate = $deliveryDate;
        return $this;
    }
    /**
     * Get ParcelNo value
     * @return int|null
     */
    public function getParcelNo()
    {
        return $this->ParcelNo;
    }
    /**
     * Set ParcelNo value
     * @param int $parcelNo
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setParcelNo($parcelNo = null)
    {
        // validation for constraint: maxInclusive
        if ($parcelNo > 99) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99, "%s" given', $parcelNo), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($parcelNo < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $parcelNo), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($parcelNo) && !is_numeric($parcelNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($parcelNo)), __LINE__);
        }
        $this->ParcelNo = $parcelNo;
        return $this;
    }
    /**
     * Get ParcelTotal value
     * @return int|null
     */
    public function getParcelTotal()
    {
        return $this->ParcelTotal;
    }
    /**
     * Set ParcelTotal value
     * @param int $parcelTotal
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setParcelTotal($parcelTotal = null)
    {
        // validation for constraint: maxInclusive
        if ($parcelTotal > 99) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be inferior or equal to 99, "%s" given', $parcelTotal), __LINE__);
        }
        // validation for constraint: minInclusive
        if ($parcelTotal < 0) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must be superior or equal to 0, "%s" given', $parcelTotal), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($parcelTotal) && !is_numeric($parcelTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($parcelTotal)), __LINE__);
        }
        $this->ParcelTotal = $parcelTotal;
        return $this;
    }
    /**
     * Get DeliveryPlace value
     * @return string|null
     */
    public function getDeliveryPlace()
    {
        return $this->DeliveryPlace;
    }
    /**
     * Set DeliveryPlace value
     * @param string $deliveryPlace
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setDeliveryPlace($deliveryPlace = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($deliveryPlace) && strlen($deliveryPlace) > 35) || (is_array($deliveryPlace) && count($deliveryPlace) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($deliveryPlace) ? strlen($deliveryPlace) : count($deliveryPlace)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($deliveryPlace) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $deliveryPlace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($deliveryPlace, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($deliveryPlace) && !is_string($deliveryPlace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($deliveryPlace)), __LINE__);
        }
        $this->DeliveryPlace = $deliveryPlace;
        return $this;
    }
    /**
     * Get ProClima value
     * @return bool|null
     */
    public function getProClima()
    {
        return $this->ProClima;
    }
    /**
     * Set ProClima value
     * @param bool $proClima
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setProClima($proClima = null)
    {
        // validation for constraint: boolean
        if (!is_null($proClima) && !is_bool($proClima)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($proClima)), __LINE__);
        }
        $this->ProClima = $proClima;
        return $this;
    }
    /**
     * Get ReturnInfo value
     * @return \Diglin\Swisspost\StructType\ReturnInfoType|null
     */
    public function getReturnInfo()
    {
        return $this->ReturnInfo;
    }
    /**
     * Set ReturnInfo value
     * @param \Diglin\Swisspost\StructType\ReturnInfoType $returnInfo
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setReturnInfo(\Diglin\Swisspost\StructType\ReturnInfoType $returnInfo = null)
    {
        $this->ReturnInfo = $returnInfo;
        return $this;
    }
    /**
     * Get Dimensions value
     * @return \Diglin\Swisspost\StructType\Dimensions|null
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    /**
     * Set Dimensions value
     * @param \Diglin\Swisspost\StructType\Dimensions $dimensions
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setDimensions(\Diglin\Swisspost\StructType\Dimensions $dimensions = null)
    {
        $this->Dimensions = $dimensions;
        return $this;
    }
    /**
     * Get UNNumbers value
     * @return \Diglin\Swisspost\StructType\UNNumbers|null
     */
    public function getUNNumbers()
    {
        return $this->UNNumbers;
    }
    /**
     * Set UNNumbers value
     * @param \Diglin\Swisspost\StructType\UNNumbers $uNNumbers
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
     */
    public function setUNNumbers(\Diglin\Swisspost\StructType\UNNumbers $uNNumbers = null)
    {
        $this->UNNumbers = $uNNumbers;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ServiceCodeAttributes
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
