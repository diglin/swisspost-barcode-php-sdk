<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WarningsType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Structure containing a list of occurred business warnings.
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class WarningsType extends AbstractStructBase
{
    /**
     * The Warning
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \Diglin\Swisspost\StructType\MessageType[]
     */
    public $Warning;
    /**
     * Constructor method for WarningsType
     * @uses WarningsType::setWarning()
     * @param \Diglin\Swisspost\StructType\MessageType[] $warning
     */
    public function __construct(array $warning = array())
    {
        $this
            ->setWarning($warning);
    }
    /**
     * Get Warning value
     * @return \Diglin\Swisspost\StructType\MessageType[]|null
     */
    public function getWarning()
    {
        return $this->Warning;
    }
    /**
     * Set Warning value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\MessageType[] $warning
     * @return \Diglin\Swisspost\StructType\WarningsType
     */
    public function setWarning(array $warning = array())
    {
        foreach ($warning as $warningsTypeWarningItem) {
            // validation for constraint: itemType
            if (!$warningsTypeWarningItem instanceof \Diglin\Swisspost\StructType\MessageType) {
                throw new \InvalidArgumentException(sprintf('The Warning property can only contain items of \Diglin\Swisspost\StructType\MessageType, "%s" given', is_object($warningsTypeWarningItem) ? get_class($warningsTypeWarningItem) : gettype($warningsTypeWarningItem)), __LINE__);
            }
        }
        $this->Warning = $warning;
        return $this;
    }
    /**
     * Add item to Warning value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\MessageType $item
     * @return \Diglin\Swisspost\StructType\WarningsType
     */
    public function addToWarning(\Diglin\Swisspost\StructType\MessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\MessageType) {
            throw new \InvalidArgumentException(sprintf('The Warning property can only contain items of \Diglin\Swisspost\StructType\MessageType, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->Warning[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\WarningsType
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
