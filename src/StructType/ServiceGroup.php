<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceGroup StructType
 * Meta informations extracted from the WSDL
 * - documentation: Represents a Service Group.
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ServiceGroup extends AbstractStructBase
{
    /**
     * The ServiceGroupID
     * @var int
     */
    public $ServiceGroupID;
    /**
     * The Description
     * Meta informations extracted from the WSDL
     * - documentation: A common type for descriptions.
     * - maxLength: 255
     * @var string
     */
    public $Description;
    /**
     * Constructor method for ServiceGroup
     * @uses ServiceGroup::setServiceGroupID()
     * @uses ServiceGroup::setDescription()
     * @param int $serviceGroupID
     * @param string $description
     */
    public function __construct($serviceGroupID = null, $description = null)
    {
        $this
            ->setServiceGroupID($serviceGroupID)
            ->setDescription($description);
    }
    /**
     * Get ServiceGroupID value
     * @return int|null
     */
    public function getServiceGroupID()
    {
        return $this->ServiceGroupID;
    }
    /**
     * Set ServiceGroupID value
     * @param int $serviceGroupID
     * @return \Diglin\Swisspost\StructType\ServiceGroup
     */
    public function setServiceGroupID($serviceGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($serviceGroupID) && !is_numeric($serviceGroupID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($serviceGroupID)), __LINE__);
        }
        $this->ServiceGroupID = $serviceGroupID;
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
     * @return \Diglin\Swisspost\StructType\ServiceGroup
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
     * @return \Diglin\Swisspost\StructType\ServiceGroup
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
