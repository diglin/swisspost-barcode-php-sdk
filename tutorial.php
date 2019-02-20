<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the fist needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientbase class each generated ServiceType class extends this class
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'barcode_v2_4_custom.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc....
 * ################################################################################
 * Don't forget to add wsdltophp/packagebase:dev-master to your main composer.json.
 * ################################################################################
 */
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'barcode_v2_4_custom.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Diglin\Swisspost\ClassMap::get(),
);
/**
 * Samples for Validate ServiceType
 */
$validate = new \Diglin\Swisspost\ServiceType\Validate($options);
/**
 * Sample call for ValidateCombination operation/method
 */
if ($validate->ValidateCombination(new \Diglin\Swisspost\StructType\ValidateCombination()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for Generate ServiceType
 */
$generate = new \Diglin\Swisspost\ServiceType\Generate($options);
/**
 * Sample call for GenerateLabel operation/method
 */
if ($generate->GenerateLabel(new \Diglin\Swisspost\StructType\GenerateLabel()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Sample call for GenerateSingleBarcodes operation/method
 */
if ($generate->GenerateSingleBarcodes(new \Diglin\Swisspost\StructType\GenerateSingleBarcodes()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Sample call for GenerateBarcode operation/method
 */
if ($generate->GenerateBarcode(new \Diglin\Swisspost\StructType\GenerateBarcode()) !== false) {
    print_r($generate->getResult());
} else {
    print_r($generate->getLastError());
}
/**
 * Samples for Read ServiceType
 */
$read = new \Diglin\Swisspost\ServiceType\Read($options);
/**
 * Sample call for ReadServiceGroups operation/method
 */
if ($read->ReadServiceGroups(new \Diglin\Swisspost\StructType\ReadServiceGroups()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for ReadBasicServices operation/method
 */
if ($read->ReadBasicServices(new \Diglin\Swisspost\StructType\ReadBasicServices()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for ReadAllowedServicesByFrankingLicense operation/method
 */
if ($read->ReadAllowedServicesByFrankingLicense(new \Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicense()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for ReadAdditionalServices operation/method
 */
if ($read->ReadAdditionalServices(new \Diglin\Swisspost\StructType\ReadAdditionalServices()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for ReadDeliveryInstructions operation/method
 */
if ($read->ReadDeliveryInstructions(new \Diglin\Swisspost\StructType\ReadDeliveryInstructions()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
/**
 * Sample call for ReadLabelLayouts operation/method
 */
if ($read->ReadLabelLayouts(new \Diglin\Swisspost\StructType\ReadLabelLayouts()) !== false) {
    print_r($read->getResult());
} else {
    print_r($read->getLastError());
}
