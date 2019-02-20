<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Dimensions StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents the Dimensions attribute of the DataTransfer.
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Dimensions extends AbstractStructBase
{
    /**
     * The Weight
     * Meta informations extracted from the WSDL
     * - documentation: Weight in gramms.
     * - totalDigits: 5
     * @var int
     */
    public $Weight;
    /**
     * Constructor method for Dimensions
     * @uses Dimensions::setWeight()
     * @param int $weight
     */
    public function __construct($weight = null)
    {
        $this
            ->setWeight($weight);
    }
    /**
     * Get Weight value
     * @return int|null
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    /**
     * Set Weight value
     * @param int $weight
     * @return \Diglin\Swisspost\StructType\Dimensions
     */
    public function setWeight($weight = null)
    {
        // validation for constraint: totalDigits
        if (is_float($weight) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $weight)) !== 5) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 5 digits, "%d" given', strlen(substr($weight, strpos($weight, '.')))), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($weight) && !is_numeric($weight)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($weight)), __LINE__);
        }
        $this->Weight = $weight;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Dimensions
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
