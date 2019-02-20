<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceCode StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents a service code.
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ServiceCode extends AbstractStructBase
{
    /**
     * The PRZL
     * Meta informations extracted from the WSDL
     * - documentation: Identifies a PRZL.
     * - pattern: [a-zA-Z,0-9]{1,10}
     * @var string
     */
    public $PRZL;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A common type for descriptions.
     * - maxLength: 255
     * @var string
     */
    public $Description;
    /**
     * Constructor method for ServiceCode
     * @uses ServiceCode::setPRZL()
     * @uses ServiceCode::setDescription()
     * @param string $pRZL
     * @param string $description
     */
    public function __construct($pRZL = null, $description = null)
    {
        $this
            ->setPRZL($pRZL)
            ->setDescription($description);
    }
    /**
     * Get PRZL value
     * @return string|null
     */
    public function getPRZL()
    {
        return $this->PRZL;
    }
    /**
     * Set PRZL value
     * @param string $pRZL
     * @return \Diglin\Swisspost\StructType\ServiceCode
     */
    public function setPRZL($pRZL = null)
    {
        // validation for constraint: pattern
        if (is_scalar($pRZL) && !preg_match('/[a-zA-Z,0-9]{1,10}/', $pRZL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z,0-9]{1,10}", "%s" given', var_export($pRZL, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($pRZL) && !is_string($pRZL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pRZL)), __LINE__);
        }
        $this->PRZL = $pRZL;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Diglin\Swisspost\StructType\ServiceCode
     */
    public function setDescription($description = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($description) && strlen($description) > 255) || (is_array($description) && count($description) > 255)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 255 element(s) or a scalar of 255 character(s) at most, "%d" length given', is_scalar($description) ? strlen($description) : count($description)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ServiceCode
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
