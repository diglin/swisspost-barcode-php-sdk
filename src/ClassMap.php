<?php

namespace Diglin\Swisspost;

/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'ValidateCombination' => '\\Diglin\\Swisspost\\StructType\\ValidateCombination',
            'Envelope' => '\\Diglin\\Swisspost\\StructType\\Envelope',
            'Data' => '\\Diglin\\Swisspost\\StructType\\Data',
            'Provider' => '\\Diglin\\Swisspost\\StructType\\Provider',
            'Sending' => '\\Diglin\\Swisspost\\StructType\\Sending',
            'ValidateCombinationItem' => '\\Diglin\\Swisspost\\StructType\\ValidateCombinationItem',
            'Attributes' => '\\Diglin\\Swisspost\\StructType\\Attributes',
            'ValidateCombinationResponse' => '\\Diglin\\Swisspost\\StructType\\ValidateCombinationResponse',
            'GenerateLabel' => '\\Diglin\\Swisspost\\StructType\\GenerateLabel',
            'GenerateLabelEnvelope' => '\\Diglin\\Swisspost\\StructType\\GenerateLabelEnvelope',
            'GenerateLabelDefinition' => '\\Diglin\\Swisspost\\StructType\\GenerateLabelDefinition',
            'GenerateLabelFileInfos' => '\\Diglin\\Swisspost\\StructType\\GenerateLabelFileInfos',
            'GenerateLabelCustomer' => '\\Diglin\\Swisspost\\StructType\\GenerateLabelCustomer',
            'GenerateLabelResponse' => '\\Diglin\\Swisspost\\StructType\\GenerateLabelResponse',
            'GenerateLabelResponseDefinition' => '\\Diglin\\Swisspost\\StructType\\GenerateLabelResponseDefinition',
            'LabelResponseItem' => '\\Diglin\\Swisspost\\StructType\\LabelResponseItem',
            'GenerateSingleBarcodes' => '\\Diglin\\Swisspost\\StructType\\GenerateSingleBarcodes',
            'GenerateSingleBarcodesEnvelope' => '\\Diglin\\Swisspost\\StructType\\GenerateSingleBarcodesEnvelope',
            'SingleBarcodesDefinition' => '\\Diglin\\Swisspost\\StructType\\SingleBarcodesDefinition',
            'SingleBarcodesFileInfos' => '\\Diglin\\Swisspost\\StructType\\SingleBarcodesFileInfos',
            'SingleBarcodesCustomer' => '\\Diglin\\Swisspost\\StructType\\SingleBarcodesCustomer',
            'GenerateSingleBarcodesResponse' => '\\Diglin\\Swisspost\\StructType\\GenerateSingleBarcodesResponse',
            'SingleBarcodesResponseDefinition' => '\\Diglin\\Swisspost\\StructType\\SingleBarcodesResponseDefinition',
            'SingleBarcodesResponseItem' => '\\Diglin\\Swisspost\\StructType\\SingleBarcodesResponseItem',
            'Barcodes' => '\\Diglin\\Swisspost\\StructType\\Barcodes',
            'LabelData' => '\\Diglin\\Swisspost\\StructType\\LabelData',
            'GenerateProvider' => '\\Diglin\\Swisspost\\StructType\\GenerateProvider',
            'GenerateSending' => '\\Diglin\\Swisspost\\StructType\\GenerateSending',
            'Item' => '\\Diglin\\Swisspost\\StructType\\Item',
            'AdditionalINFOS' => '\\Diglin\\Swisspost\\StructType\\AdditionalINFOS',
            'Recipient' => '\\Diglin\\Swisspost\\StructType\\Recipient',
            'LabelAddress' => '\\Diglin\\Swisspost\\StructType\\LabelAddress',
            'AdditionalData' => '\\Diglin\\Swisspost\\StructType\\AdditionalData',
            'ServiceCodeAttributes' => '\\Diglin\\Swisspost\\StructType\\ServiceCodeAttributes',
            'ReturnInfoType' => '\\Diglin\\Swisspost\\StructType\\ReturnInfoType',
            'Dimensions' => '\\Diglin\\Swisspost\\StructType\\Dimensions',
            'UNNumbers' => '\\Diglin\\Swisspost\\StructType\\UNNumbers',
            'Notification' => '\\Diglin\\Swisspost\\StructType\\Notification',
            'Communication' => '\\Diglin\\Swisspost\\StructType\\Communication',
            'ReadServiceGroups' => '\\Diglin\\Swisspost\\StructType\\ReadServiceGroups',
            'ReadServiceGroupsResponse' => '\\Diglin\\Swisspost\\StructType\\ReadServiceGroupsResponse',
            'ReadAllowedServicesByFrankingLicense' => '\\Diglin\\Swisspost\\StructType\\ReadAllowedServicesByFrankingLicense',
            'ReadAllowedServicesByFrankingLicenseResponse' => '\\Diglin\\Swisspost\\StructType\\ReadAllowedServicesByFrankingLicenseResponse',
            'ReadAllowedServicesServiceGroups' => '\\Diglin\\Swisspost\\StructType\\ReadAllowedServicesServiceGroups',
            'ReadBasicServices' => '\\Diglin\\Swisspost\\StructType\\ReadBasicServices',
            'ReadBasicServicesResponse' => '\\Diglin\\Swisspost\\StructType\\ReadBasicServicesResponse',
            'ReadAdditionalServices' => '\\Diglin\\Swisspost\\StructType\\ReadAdditionalServices',
            'ReadAdditionalServicesResponse' => '\\Diglin\\Swisspost\\StructType\\ReadAdditionalServicesResponse',
            'ReadDeliveryInstructions' => '\\Diglin\\Swisspost\\StructType\\ReadDeliveryInstructions',
            'ReadDeliveryInstructionsResponse' => '\\Diglin\\Swisspost\\StructType\\ReadDeliveryInstructionsResponse',
            'ReadLabelLayouts' => '\\Diglin\\Swisspost\\StructType\\ReadLabelLayouts',
            'ReadLabelLayoutsResponse' => '\\Diglin\\Swisspost\\StructType\\ReadLabelLayoutsResponse',
            'LabelLayoutResponse' => '\\Diglin\\Swisspost\\StructType\\LabelLayoutResponse',
            'GenerateBarcode' => '\\Diglin\\Swisspost\\StructType\\GenerateBarcode',
            'GenerateBarcodeResponse' => '\\Diglin\\Swisspost\\StructType\\GenerateBarcodeResponse',
            'BarcodeResponseData' => '\\Diglin\\Swisspost\\StructType\\BarcodeResponseData',
            'BarcodeDefinition' => '\\Diglin\\Swisspost\\StructType\\BarcodeDefinition',
            'ServiceCode' => '\\Diglin\\Swisspost\\StructType\\ServiceCode',
            'BasicService' => '\\Diglin\\Swisspost\\StructType\\BasicService',
            'ServiceGroup' => '\\Diglin\\Swisspost\\StructType\\ServiceGroup',
            'LabelDefinition' => '\\Diglin\\Swisspost\\StructType\\LabelDefinition',
            'ResponseItem' => '\\Diglin\\Swisspost\\StructType\\ResponseItem',
            'ErrorsType' => '\\Diglin\\Swisspost\\StructType\\ErrorsType',
            'WarningsType' => '\\Diglin\\Swisspost\\StructType\\WarningsType',
            'MessageType' => '\\Diglin\\Swisspost\\StructType\\MessageType',
        );
    }
}
