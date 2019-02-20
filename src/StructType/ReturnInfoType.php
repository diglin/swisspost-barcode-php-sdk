<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnInfoType StructType
 * Meta informations extracted from the WSDL
 * - documentation: Information regarding returns.
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class ReturnInfoType extends AbstractStructBase
{
    /**
     * The ReturnNote
     * Meta informations extracted from the WSDL
     * - documentation: Rücksendevermerk
     * @var bool
     */
    public $ReturnNote;
    /**
     * The InstructionForReturns
     * Meta informations extracted from the WSDL
     * - documentation: Vorverfügung Rücksendungen
     * @var bool
     */
    public $InstructionForReturns;
    /**
     * The ReturnService
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Rücksendeleistung
     * - totalDigits: 1
     * @var int
     */
    public $ReturnService;
    /**
     * The CustomerIDReturnAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Adress-ID Rückführadresse
     * - pattern: \d{8}
     * @var int
     */
    public $CustomerIDReturnAddress;
    /**
     * Constructor method for ReturnInfoType
     * @uses ReturnInfoType::setReturnNote()
     * @uses ReturnInfoType::setInstructionForReturns()
     * @uses ReturnInfoType::setReturnService()
     * @uses ReturnInfoType::setCustomerIDReturnAddress()
     * @param bool $returnNote
     * @param bool $instructionForReturns
     * @param int $returnService
     * @param int $customerIDReturnAddress
     */
    public function __construct($returnNote = null, $instructionForReturns = null, $returnService = null, $customerIDReturnAddress = null)
    {
        $this
            ->setReturnNote($returnNote)
            ->setInstructionForReturns($instructionForReturns)
            ->setReturnService($returnService)
            ->setCustomerIDReturnAddress($customerIDReturnAddress);
    }
    /**
     * Get ReturnNote value
     * @return bool|null
     */
    public function getReturnNote()
    {
        return $this->ReturnNote;
    }
    /**
     * Set ReturnNote value
     * @param bool $returnNote
     * @return \Diglin\Swisspost\StructType\ReturnInfoType
     */
    public function setReturnNote($returnNote = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnNote) && !is_bool($returnNote)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($returnNote)), __LINE__);
        }
        $this->ReturnNote = $returnNote;
        return $this;
    }
    /**
     * Get InstructionForReturns value
     * @return bool|null
     */
    public function getInstructionForReturns()
    {
        return $this->InstructionForReturns;
    }
    /**
     * Set InstructionForReturns value
     * @param bool $instructionForReturns
     * @return \Diglin\Swisspost\StructType\ReturnInfoType
     */
    public function setInstructionForReturns($instructionForReturns = null)
    {
        // validation for constraint: boolean
        if (!is_null($instructionForReturns) && !is_bool($instructionForReturns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($instructionForReturns)), __LINE__);
        }
        $this->InstructionForReturns = $instructionForReturns;
        return $this;
    }
    /**
     * Get ReturnService value
     * @return int|null
     */
    public function getReturnService()
    {
        return $this->ReturnService;
    }
    /**
     * Set ReturnService value
     * @param int $returnService
     * @return \Diglin\Swisspost\StructType\ReturnInfoType
     */
    public function setReturnService($returnService = null)
    {
        // validation for constraint: totalDigits
        if (is_float($returnService) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $returnService)) !== 1) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 1 digits, "%d" given', strlen(substr($returnService, strpos($returnService, '.')))), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($returnService) && !is_numeric($returnService)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($returnService)), __LINE__);
        }
        $this->ReturnService = $returnService;
        return $this;
    }
    /**
     * Get CustomerIDReturnAddress value
     * @return int|null
     */
    public function getCustomerIDReturnAddress()
    {
        return $this->CustomerIDReturnAddress;
    }
    /**
     * Set CustomerIDReturnAddress value
     * @param int $customerIDReturnAddress
     * @return \Diglin\Swisspost\StructType\ReturnInfoType
     */
    public function setCustomerIDReturnAddress($customerIDReturnAddress = null)
    {
        // validation for constraint: pattern
        if (is_scalar($customerIDReturnAddress) && !preg_match('/\\d{8}/', $customerIDReturnAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "\d{8}", "%s" given', var_export($customerIDReturnAddress, true)), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($customerIDReturnAddress) && !is_numeric($customerIDReturnAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($customerIDReturnAddress)), __LINE__);
        }
        $this->CustomerIDReturnAddress = $customerIDReturnAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\ReturnInfoType
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
