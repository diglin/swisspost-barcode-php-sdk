<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LabelLayoutResponse StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class LabelLayoutResponse extends AbstractStructBase
{
    /**
     * The LabelLayout
     * Meta informations extracted from the WSDL
     * - documentation: Defines valid layouts.
     * - pattern: [a-zA-Z,0-9]{2}
     * @var string
     */
    public $LabelLayout;
    /**
     * The MaxServices
     * @var int
     */
    public $MaxServices;
    /**
     * The MaxDeliveryInstructions
     * @var int
     */
    public $MaxDeliveryInstructions;
    /**
     * The FreeTextAllowed
     * @var bool
     */
    public $FreeTextAllowed;
    /**
     * Constructor method for LabelLayoutResponse
     * @uses LabelLayoutResponse::setLabelLayout()
     * @uses LabelLayoutResponse::setMaxServices()
     * @uses LabelLayoutResponse::setMaxDeliveryInstructions()
     * @uses LabelLayoutResponse::setFreeTextAllowed()
     * @param string $labelLayout
     * @param int $maxServices
     * @param int $maxDeliveryInstructions
     * @param bool $freeTextAllowed
     */
    public function __construct($labelLayout = null, $maxServices = null, $maxDeliveryInstructions = null, $freeTextAllowed = null)
    {
        $this
            ->setLabelLayout($labelLayout)
            ->setMaxServices($maxServices)
            ->setMaxDeliveryInstructions($maxDeliveryInstructions)
            ->setFreeTextAllowed($freeTextAllowed);
    }
    /**
     * Get LabelLayout value
     * @return string|null
     */
    public function getLabelLayout()
    {
        return $this->LabelLayout;
    }
    /**
     * Set LabelLayout value
     * @param string $labelLayout
     * @return \Diglin\Swisspost\StructType\LabelLayoutResponse
     */
    public function setLabelLayout($labelLayout = null)
    {
        // validation for constraint: pattern
        if (is_scalar($labelLayout) && !preg_match('/[a-zA-Z,0-9]{2}/', $labelLayout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z,0-9]{2}", "%s" given', var_export($labelLayout, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($labelLayout) && !is_string($labelLayout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($labelLayout)), __LINE__);
        }
        $this->LabelLayout = $labelLayout;
        return $this;
    }
    /**
     * Get MaxServices value
     * @return int|null
     */
    public function getMaxServices()
    {
        return $this->MaxServices;
    }
    /**
     * Set MaxServices value
     * @param int $maxServices
     * @return \Diglin\Swisspost\StructType\LabelLayoutResponse
     */
    public function setMaxServices($maxServices = null)
    {
        // validation for constraint: int
        if (!is_null($maxServices) && !is_numeric($maxServices)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxServices)), __LINE__);
        }
        $this->MaxServices = $maxServices;
        return $this;
    }
    /**
     * Get MaxDeliveryInstructions value
     * @return int|null
     */
    public function getMaxDeliveryInstructions()
    {
        return $this->MaxDeliveryInstructions;
    }
    /**
     * Set MaxDeliveryInstructions value
     * @param int $maxDeliveryInstructions
     * @return \Diglin\Swisspost\StructType\LabelLayoutResponse
     */
    public function setMaxDeliveryInstructions($maxDeliveryInstructions = null)
    {
        // validation for constraint: int
        if (!is_null($maxDeliveryInstructions) && !is_numeric($maxDeliveryInstructions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($maxDeliveryInstructions)), __LINE__);
        }
        $this->MaxDeliveryInstructions = $maxDeliveryInstructions;
        return $this;
    }
    /**
     * Get FreeTextAllowed value
     * @return bool|null
     */
    public function getFreeTextAllowed()
    {
        return $this->FreeTextAllowed;
    }
    /**
     * Set FreeTextAllowed value
     * @param bool $freeTextAllowed
     * @return \Diglin\Swisspost\StructType\LabelLayoutResponse
     */
    public function setFreeTextAllowed($freeTextAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($freeTextAllowed) && !is_bool($freeTextAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($freeTextAllowed)), __LINE__);
        }
        $this->FreeTextAllowed = $freeTextAllowed;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\LabelLayoutResponse
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
