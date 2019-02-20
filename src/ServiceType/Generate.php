<?php

namespace Diglin\Swisspost\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Generate ServiceType
 * @subpackage Services
 * @date 2019/01/11
 * @codeVersion 1.0.0
 */
class Generate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GenerateLabel
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\GenerateLabel $body
     * @return \Diglin\Swisspost\StructType\GenerateLabelResponse|bool
     */
    public function GenerateLabel(\Diglin\Swisspost\StructType\GenerateLabel $body)
    {
        try {
            $this->setResult($this->getSoapClient()->GenerateLabel($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GenerateSingleBarcodes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\GenerateSingleBarcodes $body
     * @return \Diglin\Swisspost\StructType\GenerateSingleBarcodesResponse|bool
     */
    public function GenerateSingleBarcodes(\Diglin\Swisspost\StructType\GenerateSingleBarcodes $body)
    {
        try {
            $this->setResult($this->getSoapClient()->GenerateSingleBarcodes($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GenerateBarcode
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Diglin\Swisspost\StructType\GenerateBarcode $body
     * @return \Diglin\Swisspost\StructType\GenerateBarcodeResponse|bool
     */
    public function GenerateBarcode(\Diglin\Swisspost\StructType\GenerateBarcode $body)
    {
        try {
            $this->setResult($this->getSoapClient()->GenerateBarcode($body));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Diglin\Swisspost\StructType\GenerateBarcodeResponse|\Diglin\Swisspost\StructType\GenerateLabelResponse|\Diglin\Swisspost\StructType\GenerateSingleBarcodesResponse
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
