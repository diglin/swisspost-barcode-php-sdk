<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleBarcodesCustomer StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class SingleBarcodesCustomer extends AbstractStructBase
{
    /**
     * The Name1
     * Meta informations extracted from the WSDL
     * - maxLength: 25
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Name1;
    /**
     * The Name2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 25
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Name2;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - maxLength: 25
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Street;
    /**
     * The POBox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 25
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $POBox;
    /**
     * The ZIP
     * Meta informations extracted from the WSDL
     * - maxLength: 10
     * - totalDigits: 6
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $ZIP;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxLength: 25
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $City;
    /**
     * The Country
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The ISO country code.
     * - pattern: [a-zA-Z]{2}
     * @var string
     */
    public $Country;
    /**
     * The DomicilePostOffice
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $DomicilePostOffice;
    /**
     * Constructor method for SingleBarcodesCustomer
     * @uses SingleBarcodesCustomer::setName1()
     * @uses SingleBarcodesCustomer::setName2()
     * @uses SingleBarcodesCustomer::setStreet()
     * @uses SingleBarcodesCustomer::setPOBox()
     * @uses SingleBarcodesCustomer::setZIP()
     * @uses SingleBarcodesCustomer::setCity()
     * @uses SingleBarcodesCustomer::setCountry()
     * @uses SingleBarcodesCustomer::setDomicilePostOffice()
     * @param string $name1
     * @param string $name2
     * @param string $street
     * @param string $pOBox
     * @param string $zIP
     * @param string $city
     * @param string $country
     * @param string $domicilePostOffice
     */
    public function __construct($name1 = null, $name2 = null, $street = null, $pOBox = null, $zIP = null, $city = null, $country = null, $domicilePostOffice = null)
    {
        $this
            ->setName1($name1)
            ->setName2($name2)
            ->setStreet($street)
            ->setPOBox($pOBox)
            ->setZIP($zIP)
            ->setCity($city)
            ->setCountry($country)
            ->setDomicilePostOffice($domicilePostOffice);
    }
    /**
     * Get Name1 value
     * @return string|null
     */
    public function getName1()
    {
        return $this->Name1;
    }
    /**
     * Set Name1 value
     * @param string $name1
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer
     */
    public function setName1($name1 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name1) && strlen($name1) > 25) || (is_array($name1) && count($name1) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($name1) ? strlen($name1) : count($name1)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($name1) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $name1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($name1, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($name1) && !is_string($name1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name1)), __LINE__);
        }
        $this->Name1 = $name1;
        return $this;
    }
    /**
     * Get Name2 value
     * @return string|null
     */
    public function getName2()
    {
        return $this->Name2;
    }
    /**
     * Set Name2 value
     * @param string $name2
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer
     */
    public function setName2($name2 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name2) && strlen($name2) > 25) || (is_array($name2) && count($name2) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($name2) ? strlen($name2) : count($name2)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($name2) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $name2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($name2, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($name2) && !is_string($name2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name2)), __LINE__);
        }
        $this->Name2 = $name2;
        return $this;
    }
    /**
     * Get Street value
     * @return string|null
     */
    public function getStreet()
    {
        return $this->Street;
    }
    /**
     * Set Street value
     * @param string $street
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer
     */
    public function setStreet($street = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($street) && strlen($street) > 25) || (is_array($street) && count($street) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($street) ? strlen($street) : count($street)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($street) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($street, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($street)), __LINE__);
        }
        $this->Street = $street;
        return $this;
    }
    /**
     * Get POBox value
     * @return string|null
     */
    public function getPOBox()
    {
        return $this->POBox;
    }
    /**
     * Set POBox value
     * @param string $pOBox
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer
     */
    public function setPOBox($pOBox = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($pOBox) && strlen($pOBox) > 25) || (is_array($pOBox) && count($pOBox) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($pOBox) ? strlen($pOBox) : count($pOBox)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($pOBox) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $pOBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($pOBox, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($pOBox) && !is_string($pOBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($pOBox)), __LINE__);
        }
        $this->POBox = $pOBox;
        return $this;
    }
    /**
     * Get ZIP value
     * @return string|null
     */
    public function getZIP()
    {
        return $this->ZIP;
    }
    /**
     * Set ZIP value
     * @param string $zIP
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer
     */
    public function setZIP($zIP = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($zIP) && strlen($zIP) > 10) || (is_array($zIP) && count($zIP) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($zIP) ? strlen($zIP) : count($zIP)), __LINE__);
        }
        // validation for constraint: totalDigits
        if (is_float($zIP) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $zIP)) !== 6) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 6 digits, "%d" given', strlen(substr($zIP, strpos($zIP, '.')))), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($zIP) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $zIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($zIP, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($zIP) && !is_string($zIP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($zIP)), __LINE__);
        }
        $this->ZIP = $zIP;
        return $this;
    }
    /**
     * Get City value
     * @return string|null
     */
    public function getCity()
    {
        return $this->City;
    }
    /**
     * Set City value
     * @param string $city
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer
     */
    public function setCity($city = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($city) && strlen($city) > 25) || (is_array($city) && count($city) > 25)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 25 element(s) or a scalar of 25 character(s) at most, "%d" length given', is_scalar($city) ? strlen($city) : count($city)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($city) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($city, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }
    /**
     * Get Country value
     * @return string|null
     */
    public function getCountry()
    {
        return $this->Country;
    }
    /**
     * Set Country value
     * @param string $country
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer
     */
    public function setCountry($country = null)
    {
        // validation for constraint: pattern
        if (is_scalar($country) && !preg_match('/[a-zA-Z]{2}/', $country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "[a-zA-Z]{2}", "%s" given', var_export($country, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }
    /**
     * Get DomicilePostOffice value
     * @return string|null
     */
    public function getDomicilePostOffice()
    {
        return $this->DomicilePostOffice;
    }
    /**
     * Set DomicilePostOffice value
     * @param string $domicilePostOffice
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer
     */
    public function setDomicilePostOffice($domicilePostOffice = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($domicilePostOffice) && strlen($domicilePostOffice) > 35) || (is_array($domicilePostOffice) && count($domicilePostOffice) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($domicilePostOffice) ? strlen($domicilePostOffice) : count($domicilePostOffice)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($domicilePostOffice) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $domicilePostOffice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($domicilePostOffice, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($domicilePostOffice) && !is_string($domicilePostOffice)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($domicilePostOffice)), __LINE__);
        }
        $this->DomicilePostOffice = $domicilePostOffice;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\SingleBarcodesCustomer
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
