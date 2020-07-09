<?php
/**
 * Diglin GmbH - Switzerland
 *
 * @author      Sylvain Rayé <support at diglin.com>
 * @category    Diglin
 * @package     swisspost
 * @copyright   Copyright (c) Diglin (http://www.diglin.com)
 */

namespace Diglin\Swisspost\ServiceType;

use Diglin\Swisspost\NotificationService;
use Diglin\Swisspost\Parameters;
use Diglin\Swisspost\EnumType\BarcodeType;
use Diglin\Swisspost\EnumType\NotificationType;
use Diglin\Swisspost\EnumType\PrintAddressesType;
use Diglin\Swisspost\StructType\BarcodeDefinition;
use Diglin\Swisspost\StructType\Communication;
use Diglin\Swisspost\StructType\GenerateBarcode;
use Diglin\Swisspost\StructType\GenerateBarcodeResponse;
use Diglin\Swisspost\StructType\GenerateLabel;
use Diglin\Swisspost\StructType\GenerateLabelCustomer;
use Diglin\Swisspost\StructType\GenerateLabelDefinition;
use Diglin\Swisspost\StructType\GenerateLabelEnvelope;
use Diglin\Swisspost\StructType\GenerateLabelFileInfos;
use Diglin\Swisspost\StructType\GenerateProvider;
use Diglin\Swisspost\StructType\GenerateSending;
use Diglin\Swisspost\StructType\GenerateSingleBarcodes;
use Diglin\Swisspost\StructType\GenerateSingleBarcodesEnvelope;
use Diglin\Swisspost\StructType\GenerateSingleBarcodesResponse;
use Diglin\Swisspost\StructType\Item;
use Diglin\Swisspost\StructType\LabelData;
use Diglin\Swisspost\StructType\LabelResponseItem;
use Diglin\Swisspost\StructType\MessageType;
use Diglin\Swisspost\StructType\Notification;
use Diglin\Swisspost\StructType\Recipient;
use Diglin\Swisspost\StructType\ServiceCodeAttributes;
use Diglin\Swisspost\StructType\SingleBarcodesCustomer;
use Diglin\Swisspost\StructType\SingleBarcodesDefinition;
use Diglin\Swisspost\StructType\SingleBarcodesFileInfos;
use Diglin\Swisspost\StructType\SingleBarcodesResponseItem;

class GenerateTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Parameters
     */
    private $config;

    /**
     * @var bool
     */
    private $printOut;

    /**
     * @var Generate
     */
    protected $generate;

    public function setUp()
    {
        require __DIR__ . '/../config/parameters.php';

        $this->config = new Parameters(
            $config['location'],
            $config['login'],
            $config['password'],
            $config['franking_licence'],
            $config['wsdl'],
            ($config['language']) ?? 'en',
            ($config['debug']) ?? false
        );

        /**
         * Minimal options
         */
        $options = array(
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL      => $this->config->getWsdl(),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN    => $this->config->getLogin(),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => $this->config->getPassword(),
            \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Diglin\Swisspost\ClassMap::get(),
        );

        $this->printOut = $this->config->getDebug();
        $this->generate = new Generate($options);
    }

    /**
     * @param $message
     * @param string $method
     */
    private function printOutResult($message, $method = '')
    {
        if ($this->printOut) {
            fwrite(STDOUT, "########  $method  ##########" . PHP_EOL);
            fwrite(STDOUT, "$message");
            fwrite(STDOUT, '#############################################' . PHP_EOL . PHP_EOL);
        }
    }

    /**
     * @return Recipient
     */
    private function getRecipient(): Recipient
    {
        $recipient = new Recipient();
        $recipient
            ->setTitle('Mr')
            ->setFirstName('Sylvain')
            ->setName1('Rayé')
//                ->setName2('')
//                ->setName3('')
            ->setStreet('Ifangstrasse')
            ->setHouseNo('6')
//                ->setFloorNo('')
            ->setCountry('CH')
            ->setAddressSuffix('')
            ->setEMail('support@diglin.com')
//                ->setHauskey('')
//                ->setLabelAddress(new LabelAddress([]))
            ->setPersonallyAddressed(false)// false in case address is a company
//                ->setMailboxNo('')
//                ->setPOBox('')
            ->setPhone('041 12 345 67 89')
            ->setMobile('041 12 345 67 89')
            ->setCity('Schlieren')
            ->setZIP('8952');

        return $recipient;
    }

    /**
     * @return Communication
     */
    private function getCommunication(): Communication
    {
        $comm = new Communication();
        $comm
            ->setEmail('support@diglin.com')
            ->setMobile('041 12 345 67 89');

        return $comm;
    }

    /**
     * @param Communication $comm
     * @return Notification
     */
    private function getNotification(Communication $comm): Notification
    {
        $notification = new Notification();
        $notification
            ->setCommunication($comm)
            ->setLanguage($this->config->getLanguage())
            ->setType(NotificationType::VALUE_EMAIL)
            ->setService(NotificationService::ORDER_CONFIRMATION);

        return $notification;
    }

    public function testGenerateSingleBarcodes()
    {
        $recipient = $this->getRecipient();

        $attributes = new ServiceCodeAttributes();
        $attributes
            ->setPRZL(['ECO']) //APLUS
//                ->setDeliveryDate('')
//                ->setDeliveryPlace('')
//                ->setDimensions('')
//                ->setFreeText('')
//                ->setParcelNo('')
//                ->setParcelTotal('')
            ->setProClima(true)
//                ->setReturnInfo(new ReturnInfoType())
//                ->setUNNumbers('')
        ;

        $comm = $this->getCommunication();
        $notification = $this->getNotification($comm);

        $item = new Item();
        $item
            ->setRecipient($recipient)
            ->setAttributes($attributes)
//                ->setNotification(
//                    [$notification]
//                )
        ;

        $sending = (new GenerateSending())->setItem([$item]);
        $provider = new GenerateProvider($sending);
        $data = new LabelData($provider);

        $customer = new SingleBarcodesCustomer();
        $customer
            ->setName1('Firma AG')
//                ->setName2('IT department')
            ->setStreet('rütistrasse 14')
//                ->setPOBox('')
            ->setZIP('8952')
            ->setCity('Schlieren')
            ->setCountry('CH')
            ->setDomicilePostOffice('3030 Bern');

        $fileInfos = new SingleBarcodesFileInfos($this->config->getFrankingLicence(), false, $customer);
        $barcodeDefinition = new SingleBarcodesDefinition('PNG', 300);

        $envelope = new GenerateSingleBarcodesEnvelope($barcodeDefinition, $fileInfos, $data);
        $struct = new GenerateSingleBarcodes($this->config->getLanguage(), $envelope);

        try {
            /* @var $response GenerateSingleBarcodesResponse */
            if ($this->generate->GenerateSingleBarcodes($struct) !== false) {
                $response = $this->generate->getResult();
            } else {
                $response = $this->generate->getLastError();
            }

            $this->printOutResult(print_r($response, true), __METHOD__);

            $items = $response
                ->getEnvelope()
                ->getData()
                ->getProvider()
                ->getSending()
                ->getItem();

            /* @var $item SingleBarcodesResponseItem */
            $item = array_shift($items);
            $errors = $item->getErrors()->getError();

            // Testing like that as the franking licence doesn't allow us to get Single Barcode for letters
            $this->assertGreaterThanOrEqual(1, \count($errors), 'No error found');
            $this->assertTrue(($errors[0] instanceof MessageType), 'errors is not type of \Diglin\Swisspost\StructType\MessageType');
            $this->assertContains('E2026', $errors[0]->getCode(), 'Error E2026 expected. Franking licence issue');

            if ($item->getBarcodes()) {
                @mkdir('output');
                foreach ($item->getBarcodes() as $barcode) {
                    file_put_contents('output/' . uniqid('barcode_') . '.png', $barcode);
                }
            }

        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    echo sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }

    public function testGenerateLabel()
    {
        $recipient = $this->getRecipient();

        $attributes = new ServiceCodeAttributes();
        $attributes
            ->setPRZL(['ECO'])// , 'ZAW3213'
            ->setProClima(true)
//                ->setDeliveryDate('')
//                ->setDeliveryPlace('')
//                ->setDimensions('')
//                ->setFreeText('')9
//                ->setParcelNo('')
//                ->setParcelTotal('')
//                ->setReturnInfo(new ReturnInfoType())
//                ->setUNNumbers('')
        ;

        $comm = $this->getCommunication();
        $notification = $this->getNotification($comm);

        $item = new Item();
        $item
            ->setRecipient($recipient)
            ->setAttributes($attributes)
//                ->setNotification(
//                    [$notification]
//                )
        ;

        $sending = (new GenerateSending())->setItem([$item]);
        $provider = new GenerateProvider($sending);
        $data = new LabelData($provider);


        $customer = new GenerateLabelCustomer();
        $customer
            ->setName1('Firma AG')
            ->setName2('IT department')
            ->setStreet('rütistrasse 14')
//                ->setPOBox('')
            ->setZIP('8952')
            ->setCity('Schlieren')
            ->setCountry('CH')
            ->setDomicilePostOffice('3030 Bern');

        $fileInfos = new GenerateLabelFileInfos(
            $this->config->getFrankingLicence(),
            false,
            $customer
        );

        $labelDefinition = new GenerateLabelDefinition(
            PrintAddressesType::VALUE_RECIPIENT_AND_CUSTOMER,
            'PNG',
            300,
            false
        );

        $labelDefinition->setLabelLayout('A6');

        $envelope = new GenerateLabelEnvelope(
            $labelDefinition,
            $fileInfos,
            $data
        );

        $struct = new GenerateLabel($this->config->getLanguage(), $envelope);

        try {
            /* @var $response GenerateSingleBarcodesResponse */
            if ($this->generate->GenerateLabel($struct) !== false) {
                $response = $this->generate->getResult();
            } else {
                $response = $this->generate->getLastError();
            }

            $this->printOutResult(print_r($response, true), __METHOD__);

            $items = $response
                ->getEnvelope()
                ->getData()
                ->getProvider()
                ->getSending()
                ->getItem();

            /* @var $item LabelResponseItem */
            $item = array_shift($items);
            $this->assertStringStartsWith('99', ($item->getIdentCode() ?: ''), 'No identification code found');

            if ($item->getLabel()) {
                @mkdir('output');
                file_put_contents('output/' . uniqid('label_') . '.png', $item->getLabel());
            }

        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    echo sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }

    public function testGenerateBarcode()
    {
        $barcodeDefinition = new BarcodeDefinition();
        $barcodeDefinition
            ->setBarcodeType(BarcodeType::VALUE_LSO_1)
            ->setImageFileType('PNG')
            ->setImageResolution(300);

        $struct = new GenerateBarcode($this->config->getLanguage(), $barcodeDefinition);

        try {
            /* @var $response GenerateBarcodeResponse */
            if ($this->generate->GenerateBarcode($struct) !== false) {
                $response = $this->generate->getResult();
            } else {
                $response = $this->generate->getLastError();
            }

            $this->printOutResult(print_r($response, true), __METHOD__);

            $data = $response->getData();

            $this->assertStringStartsWith('98', $data->getDeliveryNoteRef(), 'No identification code found');
            $this->assertStringStartsWith('PNG', $data->getBarcodeDefinition()->getImageFileType(), 'ImageFileType does not match');

            if ($data->getBarcode()) {
                @mkdir('output');
                file_put_contents('output/' . uniqid('barcode_') . '.png', $data->getBarcode());
            }

        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    echo sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }
}
