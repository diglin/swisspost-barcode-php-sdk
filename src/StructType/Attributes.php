<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Attributes StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Attributes extends AbstractStructBase
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
     * Constructor method for Attributes
     * @uses Attributes::setPRZL()
     * @param string[] $pRZL
     */
    public function __construct(array $pRZL = array())
    {
        $this
            ->setPRZL($pRZL);
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
     * @return \Diglin\Swisspost\StructType\Attributes
     */
    public function setPRZL(array $pRZL = array())
    {
        // validation for constraint: pattern
        if (is_scalar($pRZL) && !preg_match('/[a-zA-Z,0-9]{1,10}/', $pRZL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z,0-9]{1,10}", "%s" given', var_export($pRZL, true)), __LINE__);
        }
        foreach ($pRZL as $attributesPRZLItem) {
            // validation for constraint: itemType
            if (!is_string($attributesPRZLItem)) {
                throw new \InvalidArgumentException(sprintf('The PRZL property can only contain items of string, "%s" given', is_object($attributesPRZLItem) ? get_class($attributesPRZLItem) : gettype($attributesPRZLItem)), __LINE__);
            }
        }
        $this->PRZL = $pRZL;
        return $this;
    }
    /**
     * Add item to PRZL value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \Diglin\Swisspost\StructType\Attributes
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
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Attributes
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
