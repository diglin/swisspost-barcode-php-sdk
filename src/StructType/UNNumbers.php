<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UNNumbers StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents the UN Numbers for the additional service LQ (limited quantities).
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class UNNumbers extends AbstractStructBase
{
    /**
     * The UNNumber
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - totalDigits: 4
     * @var int[]
     */
    public $UNNumber;
    /**
     * Constructor method for UNNumbers
     * @uses UNNumbers::setUNNumber()
     * @param int[] $uNNumber
     */
    public function __construct(array $uNNumber = array())
    {
        $this
            ->setUNNumber($uNNumber);
    }
    /**
     * Get UNNumber value
     * @return int[]|null
     */
    public function getUNNumber()
    {
        return $this->UNNumber;
    }
    /**
     * Set UNNumber value
     * @throws \InvalidArgumentException
     * @param int[] $uNNumber
     * @return \Diglin\Swisspost\StructType\UNNumbers
     */
    public function setUNNumber(array $uNNumber = array())
    {
        // validation for constraint: totalDigits
        if (is_float($uNNumber) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $uNNumber)) !== 4) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 4 digits, "%d" given', strlen(substr($uNNumber, strpos($uNNumber, '.')))), __LINE__);
        }
        foreach ($uNNumber as $uNNumbersUNNumberItem) {
            // validation for constraint: itemType
            if (!is_numeric($uNNumbersUNNumberItem)) {
                throw new \InvalidArgumentException(sprintf('The UNNumber property can only contain items of integer, "%s" given', is_object($uNNumbersUNNumberItem) ? get_class($uNNumbersUNNumberItem) : gettype($uNNumbersUNNumberItem)), __LINE__);
            }
        }
        $this->UNNumber = $uNNumber;
        return $this;
    }
    /**
     * Add item to UNNumber value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \Diglin\Swisspost\StructType\UNNumbers
     */
    public function addToUNNumber($item)
    {
        // validation for constraint: totalDigits
        if (is_float($item) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $item)) !== 4) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 4 digits, "%d" given', strlen(substr($item, strpos($item, '.')))), __LINE__);
        }
        // validation for constraint: itemType
        if (!is_numeric($item)) {
            throw new \InvalidArgumentException(sprintf('The UNNumber property can only contain items of integer, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->UNNumber[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\UNNumbers
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
