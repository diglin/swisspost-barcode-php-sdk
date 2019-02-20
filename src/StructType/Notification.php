<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Notification StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Notification extends AbstractStructBase
{
    /**
     * The Type
     * Meta informations extracted from the WSDL
     * - documentation: Angabe des Medium
     * - use: required
     * @var string
     */
    public $Type;
    /**
     * The Communication
     * @var \Diglin\Swisspost\StructType\Communication
     */
    public $Communication;
    /**
     * The Service
     * Meta informations extracted from the WSDL
     * - documentation: Avisierungs-Code, welcher die Avisierung bezeichnet.
     * - totalDigits: 20
     * @var int
     */
    public $Service;
    /**
     * The FreeText1
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Individueller Text 1 für Avisierung. | Excludes unsupported characters.
     * - maxLength: 160
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $FreeText1;
    /**
     * The FreeText2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Individueller Text 2 für Avisierung. | Excludes unsupported characters.
     * - maxLength: 512
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $FreeText2;
    /**
     * The Language
     * @var string
     */
    public $Language;
    /**
     * Constructor method for Notification
     * @uses Notification::setType()
     * @uses Notification::setCommunication()
     * @uses Notification::setService()
     * @uses Notification::setFreeText1()
     * @uses Notification::setFreeText2()
     * @uses Notification::setLanguage()
     * @param string $type
     * @param \Diglin\Swisspost\StructType\Communication $communication
     * @param int $service
     * @param string $freeText1
     * @param string $freeText2
     * @param string $language
     */
    public function __construct($type = null, \Diglin\Swisspost\StructType\Communication $communication = null, $service = null, $freeText1 = null, $freeText2 = null, $language = null)
    {
        $this
            ->setType($type)
            ->setCommunication($communication)
            ->setService($service)
            ->setFreeText1($freeText1)
            ->setFreeText2($freeText2)
            ->setLanguage($language);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Diglin\Swisspost\EnumType\NotificationType::valueIsValid()
     * @uses \Diglin\Swisspost\EnumType\NotificationType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \Diglin\Swisspost\StructType\Notification
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\Diglin\Swisspost\EnumType\NotificationType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $type, implode(', ', \Diglin\Swisspost\EnumType\NotificationType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get Communication value
     * @return \Diglin\Swisspost\StructType\Communication|null
     */
    public function getCommunication()
    {
        return $this->Communication;
    }
    /**
     * Set Communication value
     * @param \Diglin\Swisspost\StructType\Communication $communication
     * @return \Diglin\Swisspost\StructType\Notification
     */
    public function setCommunication(\Diglin\Swisspost\StructType\Communication $communication = null)
    {
        $this->Communication = $communication;
        return $this;
    }
    /**
     * Get Service value
     * @return int|null
     */
    public function getService()
    {
        return $this->Service;
    }
    /**
     * Set Service value
     * @param int $service
     * @return \Diglin\Swisspost\StructType\Notification
     */
    public function setService($service = null)
    {
        // validation for constraint: totalDigits
        if (is_float($service) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $service)) !== 20) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 20 digits, "%d" given', strlen(substr($service, strpos($service, '.')))), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($service) && !is_numeric($service)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($service)), __LINE__);
        }
        $this->Service = $service;
        return $this;
    }
    /**
     * Get FreeText1 value
     * @return string|null
     */
    public function getFreeText1()
    {
        return $this->FreeText1;
    }
    /**
     * Set FreeText1 value
     * @param string $freeText1
     * @return \Diglin\Swisspost\StructType\Notification
     */
    public function setFreeText1($freeText1 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($freeText1) && strlen($freeText1) > 160) || (is_array($freeText1) && count($freeText1) > 160)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 160 element(s) or a scalar of 160 character(s) at most, "%d" length given', is_scalar($freeText1) ? strlen($freeText1) : count($freeText1)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($freeText1) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $freeText1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($freeText1, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($freeText1) && !is_string($freeText1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText1)), __LINE__);
        }
        $this->FreeText1 = $freeText1;
        return $this;
    }
    /**
     * Get FreeText2 value
     * @return string|null
     */
    public function getFreeText2()
    {
        return $this->FreeText2;
    }
    /**
     * Set FreeText2 value
     * @param string $freeText2
     * @return \Diglin\Swisspost\StructType\Notification
     */
    public function setFreeText2($freeText2 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($freeText2) && strlen($freeText2) > 512) || (is_array($freeText2) && count($freeText2) > 512)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 512 element(s) or a scalar of 512 character(s) at most, "%d" length given', is_scalar($freeText2) ? strlen($freeText2) : count($freeText2)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($freeText2) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $freeText2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($freeText2, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($freeText2) && !is_string($freeText2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($freeText2)), __LINE__);
        }
        $this->FreeText2 = $freeText2;
        return $this;
    }
    /**
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @uses \Diglin\Swisspost\EnumType\Language::valueIsValid()
     * @uses \Diglin\Swisspost\EnumType\Language::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $language
     * @return \Diglin\Swisspost\StructType\Notification
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: enumeration
        if (!\Diglin\Swisspost\EnumType\Language::valueIsValid($language)) {
            throw new \InvalidArgumentException(sprintf('Value "%s" is invalid, please use one of: %s', $language, implode(', ', \Diglin\Swisspost\EnumType\Language::getValidValues())), __LINE__);
        }
        $this->Language = $language;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Notification
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
