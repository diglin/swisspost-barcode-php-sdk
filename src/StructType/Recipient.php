<?php

namespace Diglin\Swisspost\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Recipient StructType
 * @subpackage Structs
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Recipient extends AbstractStructBase
{
    /**
     * The ZIP
     * Meta informations extracted from the WSDL
     * - minOccurs: 1
     * - maxLength: 10
     * - totalDigits: 6
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $ZIP;
    /**
     * The PostIdent
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 15
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $PostIdent;
    /**
     * The Title
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Title;
    /**
     * The PersonallyAddressed
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $PersonallyAddressed;
    /**
     * The Name1
     * Meta informations extracted from the WSDL
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Name1;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $FirstName;
    /**
     * The Name2
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Name2;
    /**
     * The Name3
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Name3;
    /**
     * The AddressSuffix
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $AddressSuffix;
    /**
     * The Street
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Street;
    /**
     * The HouseNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 10
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $HouseNo;
    /**
     * The POBox
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 35
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $POBox;
    /**
     * The FloorNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - maxLength: 5
     * - documentation: Excludes unsupported characters.
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $FloorNo;
    /**
     * The MailboxNo
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - totalDigits: 10
     * @var int
     */
    public $MailboxNo;
    /**
     * The City
     * Meta informations extracted from the WSDL
     * - maxLength: 35
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
     * The Hauskey
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - totalDigits: 13
     * @var int
     */
    public $Hauskey;
    /**
     * The Phone
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Defines a valid phone number. | Excludes unsupported characters.
     * - maxLength: 20
     * - minLength: 10
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Phone;
    /**
     * The Mobile
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: Defines a valid phone number. | Excludes unsupported characters.
     * - maxLength: 20
     * - minLength: 10
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $Mobile;
    /**
     * The EMail
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - documentation: The email address. | Excludes unsupported characters.
     * - maxLength: 160
     * - pattern: ([^\*|\\|\{|\}|\[|\]|=|>|<])*
     * @var string
     */
    public $EMail;
    /**
     * The LabelAddress
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * @var \Diglin\Swisspost\StructType\LabelAddress
     */
    public $LabelAddress;
    /**
     * Constructor method for Recipient
     * @uses Recipient::setZIP()
     * @uses Recipient::setPostIdent()
     * @uses Recipient::setTitle()
     * @uses Recipient::setPersonallyAddressed()
     * @uses Recipient::setName1()
     * @uses Recipient::setFirstName()
     * @uses Recipient::setName2()
     * @uses Recipient::setName3()
     * @uses Recipient::setAddressSuffix()
     * @uses Recipient::setStreet()
     * @uses Recipient::setHouseNo()
     * @uses Recipient::setPOBox()
     * @uses Recipient::setFloorNo()
     * @uses Recipient::setMailboxNo()
     * @uses Recipient::setCity()
     * @uses Recipient::setCountry()
     * @uses Recipient::setHauskey()
     * @uses Recipient::setPhone()
     * @uses Recipient::setMobile()
     * @uses Recipient::setEMail()
     * @uses Recipient::setLabelAddress()
     * @param string $zIP
     * @param string $postIdent
     * @param string $title
     * @param bool $personallyAddressed
     * @param string $name1
     * @param string $firstName
     * @param string $name2
     * @param string $name3
     * @param string $addressSuffix
     * @param string $street
     * @param string $houseNo
     * @param string $pOBox
     * @param string $floorNo
     * @param int $mailboxNo
     * @param string $city
     * @param string $country
     * @param int $hauskey
     * @param string $phone
     * @param string $mobile
     * @param string $eMail
     * @param \Diglin\Swisspost\StructType\LabelAddress $labelAddress
     */
    public function __construct($zIP = null, $postIdent = null, $title = null, $personallyAddressed = null, $name1 = null, $firstName = null, $name2 = null, $name3 = null, $addressSuffix = null, $street = null, $houseNo = null, $pOBox = null, $floorNo = null, $mailboxNo = null, $city = null, $country = null, $hauskey = null, $phone = null, $mobile = null, $eMail = null, \Diglin\Swisspost\StructType\LabelAddress $labelAddress = null)
    {
        $this
            ->setZIP($zIP)
            ->setPostIdent($postIdent)
            ->setTitle($title)
            ->setPersonallyAddressed($personallyAddressed)
            ->setName1($name1)
            ->setFirstName($firstName)
            ->setName2($name2)
            ->setName3($name3)
            ->setAddressSuffix($addressSuffix)
            ->setStreet($street)
            ->setHouseNo($houseNo)
            ->setPOBox($pOBox)
            ->setFloorNo($floorNo)
            ->setMailboxNo($mailboxNo)
            ->setCity($city)
            ->setCountry($country)
            ->setHauskey($hauskey)
            ->setPhone($phone)
            ->setMobile($mobile)
            ->setEMail($eMail)
            ->setLabelAddress($labelAddress);
    }
    /**
     * Get ZIP value
     * @return string
     */
    public function getZIP()
    {
        return $this->ZIP;
    }
    /**
     * Set ZIP value
     * @param string $zIP
     * @return \Diglin\Swisspost\StructType\Recipient
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
     * Get PostIdent value
     * @return string|null
     */
    public function getPostIdent()
    {
        return $this->PostIdent;
    }
    /**
     * Set PostIdent value
     * @param string $postIdent
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setPostIdent($postIdent = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($postIdent) && strlen($postIdent) > 15) || (is_array($postIdent) && count($postIdent) > 15)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 15 element(s) or a scalar of 15 character(s) at most, "%d" length given', is_scalar($postIdent) ? strlen($postIdent) : count($postIdent)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($postIdent) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $postIdent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($postIdent, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($postIdent) && !is_string($postIdent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($postIdent)), __LINE__);
        }
        $this->PostIdent = $postIdent;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setTitle($title = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($title) && strlen($title) > 35) || (is_array($title) && count($title) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($title) ? strlen($title) : count($title)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($title) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($title, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get PersonallyAddressed value
     * @return bool|null
     */
    public function getPersonallyAddressed()
    {
        return $this->PersonallyAddressed;
    }
    /**
     * Set PersonallyAddressed value
     * @param bool $personallyAddressed
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setPersonallyAddressed($personallyAddressed = null)
    {
        // validation for constraint: boolean
        if (!is_null($personallyAddressed) && !is_bool($personallyAddressed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a bool, "%s" given', gettype($personallyAddressed)), __LINE__);
        }
        $this->PersonallyAddressed = $personallyAddressed;
        return $this;
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
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setName1($name1 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name1) && strlen($name1) > 35) || (is_array($name1) && count($name1) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($name1) ? strlen($name1) : count($name1)), __LINE__);
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
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $firstName
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setFirstName($firstName = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($firstName) && strlen($firstName) > 35) || (is_array($firstName) && count($firstName) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($firstName) ? strlen($firstName) : count($firstName)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($firstName) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($firstName, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($firstName)), __LINE__);
        }
        $this->FirstName = $firstName;
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
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setName2($name2 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name2) && strlen($name2) > 35) || (is_array($name2) && count($name2) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($name2) ? strlen($name2) : count($name2)), __LINE__);
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
     * Get Name3 value
     * @return string|null
     */
    public function getName3()
    {
        return $this->Name3;
    }
    /**
     * Set Name3 value
     * @param string $name3
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setName3($name3 = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($name3) && strlen($name3) > 35) || (is_array($name3) && count($name3) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($name3) ? strlen($name3) : count($name3)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($name3) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $name3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($name3, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($name3) && !is_string($name3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($name3)), __LINE__);
        }
        $this->Name3 = $name3;
        return $this;
    }
    /**
     * Get AddressSuffix value
     * @return string|null
     */
    public function getAddressSuffix()
    {
        return $this->AddressSuffix;
    }
    /**
     * Set AddressSuffix value
     * @param string $addressSuffix
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setAddressSuffix($addressSuffix = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($addressSuffix) && strlen($addressSuffix) > 35) || (is_array($addressSuffix) && count($addressSuffix) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($addressSuffix) ? strlen($addressSuffix) : count($addressSuffix)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($addressSuffix) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $addressSuffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($addressSuffix, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($addressSuffix) && !is_string($addressSuffix)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($addressSuffix)), __LINE__);
        }
        $this->AddressSuffix = $addressSuffix;
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
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setStreet($street = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($street) && strlen($street) > 35) || (is_array($street) && count($street) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($street) ? strlen($street) : count($street)), __LINE__);
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
     * Get HouseNo value
     * @return string|null
     */
    public function getHouseNo()
    {
        return $this->HouseNo;
    }
    /**
     * Set HouseNo value
     * @param string $houseNo
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setHouseNo($houseNo = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($houseNo) && strlen($houseNo) > 10) || (is_array($houseNo) && count($houseNo) > 10)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at most, "%d" length given', is_scalar($houseNo) ? strlen($houseNo) : count($houseNo)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($houseNo) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $houseNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($houseNo, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($houseNo) && !is_string($houseNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($houseNo)), __LINE__);
        }
        $this->HouseNo = $houseNo;
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
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setPOBox($pOBox = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($pOBox) && strlen($pOBox) > 35) || (is_array($pOBox) && count($pOBox) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($pOBox) ? strlen($pOBox) : count($pOBox)), __LINE__);
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
     * Get FloorNo value
     * @return string|null
     */
    public function getFloorNo()
    {
        return $this->FloorNo;
    }
    /**
     * Set FloorNo value
     * @param string $floorNo
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setFloorNo($floorNo = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($floorNo) && strlen($floorNo) > 5) || (is_array($floorNo) && count($floorNo) > 5)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 5 element(s) or a scalar of 5 character(s) at most, "%d" length given', is_scalar($floorNo) ? strlen($floorNo) : count($floorNo)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($floorNo) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $floorNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($floorNo, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($floorNo) && !is_string($floorNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($floorNo)), __LINE__);
        }
        $this->FloorNo = $floorNo;
        return $this;
    }
    /**
     * Get MailboxNo value
     * @return int|null
     */
    public function getMailboxNo()
    {
        return $this->MailboxNo;
    }
    /**
     * Set MailboxNo value
     * @param int $mailboxNo
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setMailboxNo($mailboxNo = null)
    {
        // validation for constraint: totalDigits
        if (is_float($mailboxNo) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $mailboxNo)) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 10 digits, "%d" given', strlen(substr($mailboxNo, strpos($mailboxNo, '.')))), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($mailboxNo) && !is_numeric($mailboxNo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($mailboxNo)), __LINE__);
        }
        $this->MailboxNo = $mailboxNo;
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
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setCity($city = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($city) && strlen($city) > 35) || (is_array($city) && count($city) > 35)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 35 element(s) or a scalar of 35 character(s) at most, "%d" length given', is_scalar($city) ? strlen($city) : count($city)), __LINE__);
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
     * @return \Diglin\Swisspost\StructType\Recipient
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
     * Get Hauskey value
     * @return int|null
     */
    public function getHauskey()
    {
        return $this->Hauskey;
    }
    /**
     * Set Hauskey value
     * @param int $hauskey
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setHauskey($hauskey = null)
    {
        // validation for constraint: totalDigits
        if (is_float($hauskey) && strlen(str_replace(array(' ', '.', ',', '-', '+'), '', $hauskey)) !== 13) {
            throw new \InvalidArgumentException(sprintf('Invalid value, the value must at most contain 13 digits, "%d" given', strlen(substr($hauskey, strpos($hauskey, '.')))), __LINE__);
        }
        // validation for constraint: int
        if (!is_null($hauskey) && !is_numeric($hauskey)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a numeric value, "%s" given', gettype($hauskey)), __LINE__);
        }
        $this->Hauskey = $hauskey;
        return $this;
    }
    /**
     * Get Phone value
     * @return string|null
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    /**
     * Set Phone value
     * @param string $phone
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setPhone($phone = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($phone) && strlen($phone) > 20) || (is_array($phone) && count($phone) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($phone) ? strlen($phone) : count($phone)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($phone) && strlen($phone) < 10) || (is_array($phone) && count($phone) < 10)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at least', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($phone) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($phone, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($phone)), __LINE__);
        }
        $this->Phone = $phone;
        return $this;
    }
    /**
     * Get Mobile value
     * @return string|null
     */
    public function getMobile()
    {
        return $this->Mobile;
    }
    /**
     * Set Mobile value
     * @param string $mobile
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setMobile($mobile = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($mobile) && strlen($mobile) > 20) || (is_array($mobile) && count($mobile) > 20)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 20 element(s) or a scalar of 20 character(s) at most, "%d" length given', is_scalar($mobile) ? strlen($mobile) : count($mobile)), __LINE__);
        }
        // validation for constraint: minLength
        if ((is_scalar($mobile) && strlen($mobile) < 10) || (is_array($mobile) && count($mobile) < 10)) {
            throw new \InvalidArgumentException('Invalid length, please provide an array with 10 element(s) or a scalar of 10 character(s) at least', __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($mobile) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($mobile, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($mobile)), __LINE__);
        }
        $this->Mobile = $mobile;
        return $this;
    }
    /**
     * Get EMail value
     * @return string|null
     */
    public function getEMail()
    {
        return $this->EMail;
    }
    /**
     * Set EMail value
     * @param string $eMail
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setEMail($eMail = null)
    {
        // validation for constraint: maxLength
        if ((is_scalar($eMail) && strlen($eMail) > 160) || (is_array($eMail) && count($eMail) > 160)) {
            throw new \InvalidArgumentException(sprintf('Invalid length, please provide an array with 160 element(s) or a scalar of 160 character(s) at most, "%d" length given', is_scalar($eMail) ? strlen($eMail) : count($eMail)), __LINE__);
        }
        // validation for constraint: pattern
        if (is_scalar($eMail) && !preg_match('/([^\\*|\\\\|\\{|\\}|\\[|\\]|=|>|<])*/', $eMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a scalar value that matches "([^\*|\\|\{|\}|\[|\]|=|>|<])*", "%s" given', var_export($eMail, true)), __LINE__);
        }
        // validation for constraint: string
        if (!is_null($eMail) && !is_string($eMail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value, please provide a string, "%s" given', gettype($eMail)), __LINE__);
        }
        $this->EMail = $eMail;
        return $this;
    }
    /**
     * Get LabelAddress value
     * @return \Diglin\Swisspost\StructType\LabelAddress|null
     */
    public function getLabelAddress()
    {
        return $this->LabelAddress;
    }
    /**
     * Set LabelAddress value
     * @param \Diglin\Swisspost\StructType\LabelAddress $labelAddress
     * @return \Diglin\Swisspost\StructType\Recipient
     */
    public function setLabelAddress(\Diglin\Swisspost\StructType\LabelAddress $labelAddress = null)
    {
        $this->LabelAddress = $labelAddress;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see AbstractStructBase::__set_state()
     * @uses AbstractStructBase::__set_state()
     * @param array $array the exported values
     * @return \Diglin\Swisspost\StructType\Recipient
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
