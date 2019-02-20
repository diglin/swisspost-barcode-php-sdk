<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdditionalINFOS StructType
 * Meta informations extracted from the WSDL
 * - documentation: ehem. REC_Data bei V2.1 und 2.0
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class AdditionalINFOS extends AbstractStructBase
{
    /**
     * The AdditionalData
     * Meta informations extracted from the WSDL
     * - maxOccurs: 50
     * @var \Diglin\Swisspost\StructType\AdditionalData[]
     */
    public $AdditionalData;
    /**
     * Constructor method for AdditionalINFOS
     * @uses AdditionalINFOS::setAdditionalData()
     * @param \Diglin\Swisspost\StructType\AdditionalData[] $additionalData
     */
    public function __construct(array $additionalData = array())
    {
        $this
            ->setAdditionalData($additionalData);
    }
    /**
     * Get AdditionalData value
     * @return \Diglin\Swisspost\StructType\AdditionalData[]|null
     */
    public function getAdditionalData()
    {
        return $this->AdditionalData;
    }
    /**
     * Set AdditionalData value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\AdditionalData[] $additionalData
     * @return \Diglin\Swisspost\StructType\AdditionalINFOS
     */
    public function setAdditionalData(array $additionalData = array())
    {
        foreach ($additionalData as $additionalINFOSAdditionalDataItem) {
            // validation for constraint: itemType
            if (!$additionalINFOSAdditionalDataItem instanceof \Diglin\Swisspost\StructType\AdditionalData) {
                throw new \InvalidArgumentException(sprintf('The AdditionalData property can only contain items of \Diglin\Swisspost\StructType\AdditionalData, "%s" given', is_object($additionalINFOSAdditionalDataItem) ? get_class($additionalINFOSAdditionalDataItem) : gettype($additionalINFOSAdditionalDataItem)), __LINE__);
            }
        }
        $this->AdditionalData = $additionalData;
        return $this;
    }
    /**
     * Add item to AdditionalData value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\AdditionalData $item
     * @return \Diglin\Swisspost\StructType\AdditionalINFOS
     */
    public function addToAdditionalData(\Diglin\Swisspost\StructType\AdditionalData $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\AdditionalData) {
            throw new \InvalidArgumentException(sprintf('The AdditionalData property can only contain items of \Diglin\Swisspost\StructType\AdditionalData, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->AdditionalData[] = $item;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\AdditionalINFOS
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
