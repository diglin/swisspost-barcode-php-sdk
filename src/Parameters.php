<?php
/**
 * Diglin GmbH - Switzerland
 *
 * @author      Sylvain Rayé <support at diglin.com>
 * @category    Diglin
 * @package     Swisspost
 * @copyright   Copyright (c) Diglin (http://www.diglin.com)
 */

namespace Diglin\Swisspost;

/**
 * Class Parameters
 * @package Diglin\Swisspost
 */
class Parameters
{
    protected $wsdl = 'https://wsbc.post.ch/wsbc/barcode/v2_4?wsdl';
    protected $location;
    protected $login;
    protected $password;
    protected $franking_licence;
    protected $language;
    protected $debug;

    public function __construct(
        $location,
        $login,
        $password,
        $franking_licence,
        $wsdl = null,
        $language = null,
        $debug = null
    )
    {
        $this->location = $location;
        $this->login = $login;
        $this->password = $password;
        $this->franking_licence = $franking_licence;
        $this->wsdl = $wsdl ?? $this->wsdl;
        $this->language = $language ?? $this->language;
        $this->debug = $debug ?? $this->debug;
    }

    /**
     * @throws \ReflectionException
     */
    public function asArray(): array
    {
        $out = [];
        $reflection = new \ReflectionClass(self::class);

        foreach ($reflection->getProperties(\ReflectionProperty::IS_PROTECTED) as $property) {
            $out[$property->getName()] = $this->{$property->getName()};
        }

        return $out;
    }

    /**
     * @return mixed
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return mixed
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getFrankingLicence(): string
    {
        return $this->franking_licence;
    }

    /**
     * @return string
     */
    public function getWsdl(): string
    {
        return $this->wsdl;
    }

    /**
     * @param string $wsdl
     * @return $this
     */
    public function setWsdl($wsdl)
    {
        $this->wsdl = $wsdl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * @param mixed $debug
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }
}