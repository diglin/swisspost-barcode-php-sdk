<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReadLabelLayoutsResponse StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReadLabelLayoutsResponse extends AbstractStructBase
{
    /**
     * The LabelLayout
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\LabelLayoutResponse[]
     */
    public $LabelLayout;
    /**
     * The Errors
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\ErrorsType
     */
    public $Errors;
    /**
     * Constructor method for ReadLabelLayoutsResponse
     * @uses ReadLabelLayoutsResponse::setLabelLayout()
     * @uses ReadLabelLayoutsResponse::setErrors()
     * @param \Diglin\Swisspost\StructType\LabelLayoutResponse[] $labelLayout
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     */
    public function __construct(array $labelLayout = array(), \Diglin\Swisspost\StructType\ErrorsType $errors = null)
    {
        $this
            ->setLabelLayout($labelLayout)
            ->setErrors($errors);
    }
    /**
     * Get LabelLayout value
     * @return \Diglin\Swisspost\StructType\LabelLayoutResponse[]|null
     */
    public function getLabelLayout()
    {
        return $this->LabelLayout;
    }
    /**
     * Set LabelLayout value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\LabelLayoutResponse[] $labelLayout
     * @return \Diglin\Swisspost\StructType\ReadLabelLayoutsResponse
     */
    public function setLabelLayout(array $labelLayout = array())
    {
        foreach ($labelLayout as $readLabelLayoutsResponseLabelLayoutItem) {
            // validation for constraint: itemType
            if (!$readLabelLayoutsResponseLabelLayoutItem instanceof \Diglin\Swisspost\StructType\LabelLayoutResponse) {
                throw new \InvalidArgumentException(sprintf('The LabelLayout property can only contain items of \Diglin\Swisspost\StructType\LabelLayoutResponse, "%s" given', is_object($readLabelLayoutsResponseLabelLayoutItem) ? get_class($readLabelLayoutsResponseLabelLayoutItem) : gettype($readLabelLayoutsResponseLabelLayoutItem)), __LINE__);
            }
        }
        $this->LabelLayout = $labelLayout;
        return $this;
    }
    /**
     * Add item to LabelLayout value
     * @throws \InvalidArgumentException
     * @param \Diglin\Swisspost\StructType\LabelLayoutResponse $item
     * @return \Diglin\Swisspost\StructType\ReadLabelLayoutsResponse
     */
    public function addToLabelLayout(\Diglin\Swisspost\StructType\LabelLayoutResponse $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Diglin\Swisspost\StructType\LabelLayoutResponse) {
            throw new \InvalidArgumentException(sprintf('The LabelLayout property can only contain items of \Diglin\Swisspost\StructType\LabelLayoutResponse, "%s" given', is_object($item) ? get_class($item) : gettype($item)), __LINE__);
        }
        $this->LabelLayout[] = $item;
        return $this;
    }
    /**
     * Get Errors value
     * @return \Diglin\Swisspost\StructType\ErrorsType|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }
    /**
     * Set Errors value
     * @param \Diglin\Swisspost\StructType\ErrorsType $errors
     * @return \Diglin\Swisspost\StructType\ReadLabelLayoutsResponse
     */
    public function setErrors(\Diglin\Swisspost\StructType\ErrorsType $errors = null)
    {
        $this->Errors = $errors;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ReadLabelLayoutsResponse
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
