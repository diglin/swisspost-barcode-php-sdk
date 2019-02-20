<?php

namespace Diglin\Swisspost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Validate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ValidateCombination
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\ValidateCombination $body
     * @return \Diglin\Swisspost\StructType\ValidateCombinationResponse|bool
     */
    public function ValidateCombination(\Diglin\Swisspost\StructType\ValidateCombination $body)
    {
        try {
            $this->setResult($this->getSoapClient()->ValidateCombination($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Diglin\Swisspost\StructType\ValidateCombinationResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
