<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleBarcodesFileInfos StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class SingleBarcodesFileInfos extends AbstractStructBase
{
    /**
     * The FrankingLicense
     * Meta informations extracted from the WSDL
     * - documentation: Defines a franking license.
     * - pattern: [0-9]{8}
     * @var string
     */
    public $FrankingLicense;
    /**
     * The PpFranking
     * Meta informations extracted from the WSDL
     * - default: false
     * @var bool
     */
    public $PpFranking;
    /**
     * The Customer
     * @var \Diglin\Swisspost\StructType\SingleBarcodesCustomer
     */
    public $Customer;
    /**
     * The CustomerSystem
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - pattern: [a-zA-Z,0-9,\s]{1,255} | ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * - documentation: Excludes unsupported characters.
     * @var string
     */
    public $CustomerSystem;
    /**
     * Constructor method for SingleBarcodesFileInfos
     * @uses SingleBarcodesFileInfos::setFrankingLicense()
     * @uses SingleBarcodesFileInfos::setPpFranking()
     * @uses SingleBarcodesFileInfos::setCustomer()
     * @uses SingleBarcodesFileInfos::setCustomerSystem()
     * @param string $frankingLicense
     * @param bool $ppFranking
     * @param \Diglin\Swisspost\StructType\SingleBarcodesCustomer $customer
     * @param string $customerSystem
     */
    public function __construct($frankingLicense = null, $ppFranking = false, \Diglin\Swisspost\StructType\SingleBarcodesCustomer $customer = null, $customerSystem = null)
    {
        $this
            ->setFrankingLicense($frankingLicense)
            ->setPpFranking($ppFranking)
            ->setCustomer($customer)
            ->setCustomerSystem($customerSystem);
    }
    /**
     * Get FrankingLicense value
     * @return string|null
     */
    public function getFrankingLicense()
    {
        return $this->FrankingLicense;
    }
    /**
     * Set FrankingLicense value
     * @param string $frankingLicense
     * @return \Diglin\Swisspost\StructType\SingleBarcodesFileInfos
     */
    public function setFrankingLicense($frankingLicense = null)
    {
        // validation for constraint: pattern
        if (is_scalar($frankingLicense) && !preg_match('/[0-9]{8}/', $frankingLicense)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[0-9]{8}", "%s" given', var_export($frankingLicense, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($frankingLicense) && !is_string($frankingLicense)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($frankingLicense)), __LINE__);
        }
        $this->FrankingLicense = $frankingLicense;
        return $this;
    }
    /**
     * Get PpFranking value
     * @return bool|null
     */
    public function getPpFranking()
    {
        return $this->PpFranking;
    }
    /**
     * Set PpFranking value
     * @param bool $ppFranking
     * @return \Diglin\Swisspost\StructType\SingleBarcodesFileInfos
     */
    public function setPpFranking($ppFranking = false)
    {
        // validation for constraint: boolean
        if (!is_null($ppFranking) && !is_bool($ppFranking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($ppFranking)), __LINE__);
        }
        $this->PpFranking = $ppFranking;
        return $this;
    }
    /**
     * Get Customer value
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer|null
     */
    public function getCustomer()
    {
        return $this->Customer;
    }
    /**
     * Set Customer value
     * @param \Diglin\Swisspost\StructType\SingleBarcodesCustomer $customer
     * @return \Diglin\Swisspost\StructType\SingleBarcodesFileInfos
     */
    public function setCustomer(\Diglin\Swisspost\StructType\SingleBarcodesCustomer $customer = null)
    {
        $this->Customer = $customer;
        return $this;
    }
    /**
     * Get CustomerSystem value
     * @return string|null
     */
    public function getCustomerSystem()
    {
        return $this->CustomerSystem;
    }
    /**
     * Set CustomerSystem value
     * @param string $customerSystem
     * @return \Diglin\Swisspost\StructType\SingleBarcodesFileInfos
     */
    public function setCustomerSystem($customerSystem = null)
    {
        // validation for constraint: pattern
        if (is_scalar($customerSystem) && !preg_match('//', $customerSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "Array", "%s" given', var_export($customerSystem, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($customerSystem) && !is_string($customerSystem)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($customerSystem)), __LINE__);
        }
        $this->CustomerSystem = $customerSystem;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\SingleBarcodesFileInfos
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
