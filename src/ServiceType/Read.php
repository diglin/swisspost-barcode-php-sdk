<?php

namespace Diglin\Swisspost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Read ServiceType
 * @subpackage Services
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Read extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ReadServiceGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\ReadServiceGroups $body
     * @return \Diglin\Swisspost\StructType\ReadServiceGroupsResponse|bool
     */
    public function ReadServiceGroups(\Diglin\Swisspost\StructType\ReadServiceGroups $body)
    {
        try {
            $this->setResult($this->getSoapClient()->ReadServiceGroups($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReadBasicServices
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\ReadBasicServices $body
     * @return \Diglin\Swisspost\StructType\ReadBasicServicesResponse|bool
     */
    public function ReadBasicServices(\Diglin\Swisspost\StructType\ReadBasicServices $body)
    {
        try {
            $this->setResult($this->getSoapClient()->ReadBasicServices($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ReadAllowedServicesByFrankingLicense
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicense $body
     * @return \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicenseResponse|bool
     */
    public function ReadAllowedServicesByFrankingLicense(\Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicense $body)
    {
        try {
            $this->setResult($this->getSoapClient()->ReadAllowedServicesByFrankingLicense($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReadAdditionalServices
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\ReadAdditionalServices $body
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServicesResponse|bool
     */
    public function ReadAdditionalServices(\Diglin\Swisspost\StructType\ReadAdditionalServices $body)
    {
        try {
            $this->setResult($this->getSoapClient()->ReadAdditionalServices($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReadDeliveryInstructions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\ReadDeliveryInstructions $body
     * @return \Diglin\Swisspost\StructType\ReadDeliveryInstructionsResponse|bool
     */
    public function ReadDeliveryInstructions(\Diglin\Swisspost\StructType\ReadDeliveryInstructions $body)
    {
        try {
            $this->setResult($this->getSoapClient()->ReadDeliveryInstructions($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ReadLabelLayouts
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\ReadLabelLayouts $body
     * @return \Diglin\Swisspost\StructType\ReadLabelLayoutsResponse|bool
     */
    public function ReadLabelLayouts(\Diglin\Swisspost\StructType\ReadLabelLayouts $body)
    {
        try {
            $this->setResult($this->getSoapClient()->ReadLabelLayouts($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Diglin\Swisspost\StructType\ReadAdditionalServicesResponse|\Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicenseResponse|\Diglin\Swisspost\StructType\ReadBasicServicesResponse|\Diglin\Swisspost\StructType\ReadDeliveryInstructionsResponse|\Diglin\Swisspost\StructType\ReadLabelLayoutsResponse|\Diglin\Swisspost\StructType\ReadServiceGroupsResponse
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
