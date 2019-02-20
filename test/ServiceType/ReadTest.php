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

use Diglin\Swisspost\Parameters;
use Diglin\Swisspost\StructType\BasicService;
use Diglin\Swisspost\StructType\LabelLayoutResponse;
use Diglin\Swisspost\StructType\MessageType;
use Diglin\Swisspost\StructType\ReadAdditionalServices;
use Diglin\Swisspost\StructType\ReadAllowedServicesByFrankingLicense;
use Diglin\Swisspost\StructType\ReadAllowedServicesServiceGroups;
use Diglin\Swisspost\StructType\ReadBasicServices;
use Diglin\Swisspost\StructType\ReadDeliveryInstructions;
use Diglin\Swisspost\StructType\ReadLabelLayouts;
use Diglin\Swisspost\StructType\ReadServiceGroups;
use Diglin\Swisspost\StructType\ServiceGroup;

require_once __DIR__ . '/../../vendor/autoload.php';

class ReadTest extends \PHPUnit\Framework\TestCase
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
     * @var Read
     */
    protected $read;

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
        $this->read = new Read($options);
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
     * Data providers for service groups
     * @return array
     */
    public function serviceGroups()
    {
        return [
            [1, 9],
            [2, 6],
            [3, 3],
            [4, 8],
            [5, 3],
        ];
    }

    /**
     * @dataProvider serviceGroups
     * @param $serviceGroupId
     * @param $expected
     */
    public function testReadBasicServices($serviceGroupId, $expected)
    {
        try {

            if ($this->read->ReadBasicServices(new ReadBasicServices($this->config->getLanguage(), $serviceGroupId)) !== false) {
                $response = $this->read->getResult();
            } else {
                print_r($this->read->getLastError());
            }

            /* @var $basicService \Diglin\Swisspost\StructType\BasicService */
            foreach ($response->getBasicService() as $basicService) {
                $message = $basicService->getDescription() . ' - ' . implode(',', $basicService->getPRZL()) . PHP_EOL;
                $this->printOutResult($message, __METHOD__);
            }

            self::assertCount($expected, $response->getBasicService(), 'Number of basic Service is not correct');

        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }

    public function testReadAllowedServicesByFrankingLicense()
    {
        try {
            $struct = new ReadAllowedServicesByFrankingLicense($this->config->getFrankingLicence(), $this->config->getLanguage());

            if ($this->read->ReadAllowedServicesByFrankingLicense($struct) !== false) {
                $response = $this->read->getResult();
            } else {
                print_r($this->read->getLastError());
            }

            self::assertGreaterThanOrEqual(1, \count($response->getServiceGroups()), 'Number of Service Group is not greater or equal to 1');

            /* @var $serviceGroup ReadAllowedServicesServiceGroups */
            foreach ($response->getServiceGroups() as $serviceGroup) {

                $message = $serviceGroup->getServiceGroup()->getServiceGroupID() . ' / ' . $serviceGroup->getServiceGroup()->getDescription() . PHP_EOL;

                self::assertGreaterThanOrEqual(1, \count($serviceGroup->getBasicService()), 'Number of basic service is not greater or equal to 1');

                /* @var $basicService BasicService */
                foreach ($serviceGroup->getBasicService() as $basicService) {
                    $message .= $basicService->getDescription() . ' - ' . implode(',', $basicService->getPRZL()) . PHP_EOL;
                }

                $this->printOutResult($message, __METHOD__);
            }
        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }

    public function testReadLabelLayouts()
    {
        try {
            $struct = new ReadLabelLayouts($this->config->getLanguage(), ['ECO']);

            if ($this->read->ReadLabelLayouts($struct) !== false) {
                $response = $this->read->getResult();
            } else {
                print_r($this->read->getLastError());
            }

            self::assertGreaterThanOrEqual(1, \count($response->getLabelLayout()), 'Number of label layout is too low');

            /* @var $labelLayout LabelLayoutResponse */
            $labelLayout = $response->getLabelLayout();
            $labelLayout = array_shift($labelLayout);

            self::assertContains('A', $labelLayout->getLabelLayout(), 'Label Layout is not an international format');
            self::assertIsBool($labelLayout->getFreeTextAllowed(), 'Free Text allowed is not boolean');
            self::assertIsInt($labelLayout->getMaxServices(), 'Max Services is not an integer');
            self::assertIsInt($labelLayout->getMaxDeliveryInstructions(), 'Max Delivery Instructions is not an integer');

            $this->printOutResult(print_r($response->getLabelLayout(), true), __METHOD__);

        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }

    public function testReadLabelLayoutsWithErrors()
    {
        try {
            $struct = new ReadLabelLayouts($this->config->getLanguage(), ['XYZ']);

            if ($this->read->ReadLabelLayouts($struct) !== false) {
                $response = $this->read->getResult();
            } else {
                print_r($this->read->getLastError());
            }

            $errors = $response->getErrors()->getError();

            /* @var $error MessageType */
            $error = array_shift($errors);

            self::assertGreaterThanOrEqual(0, \count($response->getLabelLayout()), 'Number of label layout is too high');
            self::assertSame('E1015', $error->getCode(), 'Code E1015 not found');
            self::assertSame('No valid basic service codes were found in the list of service codes (XYZ).', $error->getMessage());

            $this->printOutResult(print_r($response->getErrors(), true), __METHOD__);

        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }

    public function testReadServiceGroups()
    {
        try {
            $struct = new ReadServiceGroups($this->config->getLanguage());

            if ($this->read->ReadServiceGroups($struct) !== false) {
                $response = $this->read->getResult();
            } else {
                print_r($this->read->getLastError());
            }

            self::assertGreaterThanOrEqual(1, \count($response->getServiceGroup()));

            $serviceGroups = $response->getServiceGroup();
            /* @var $serviceGroup ServiceGroup */
            $serviceGroup = array_shift($serviceGroups);

            self::assertIsInt($serviceGroup->getServiceGroupID(), 'Service Group ID not an integer');
            self::assertIsString($serviceGroup->getDescription(), 'Service Group Description is not a string');

            $this->printOutResult(print_r($response->getServiceGroup(), true), __METHOD__);

        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }

    public function testReadAdditionalServices()
    {
        try {
            $przl = ['PRI'];

            $struct = new ReadAdditionalServices($this->config->getLanguage(), $przl);

            if ($this->read->ReadAdditionalServices($struct) !== false) {
                $response = $this->read->getResult();
            } else {
                print_r($this->read->getLastError());
            }

            $addServices = $response->getAdditionalService();

            self::assertGreaterThanOrEqual(1, \count($addServices), 'No additional Services found for ' . print_r($przl, true));

            $this->printOutResult(print_r($response, true), __METHOD__);

        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }

    public function testReadDeliveryInstructions()
    {
        try {
            $przl = ['PRI'];

            $struct = new ReadDeliveryInstructions($this->config->getLanguage(), $przl);

            if ($this->read->ReadDeliveryInstructions($struct) !== false) {
                $response = $this->read->getResult();
            } else {
                print_r($this->read->getLastError());
            }

            $services = $response->getDeliveryInstructions();

            self::assertGreaterThanOrEqual(14, \count($services), 'No delivery instructions found for ' . print_r($przl, true));

            $this->printOutResult(print_r($response, true), __METHOD__);

        } catch (\SoapFault $e) {
            switch ($e->faultcode) {
                case 'HTTP':
                    echo 'Login and/or password is not correct' . PHP_EOL;
                    break;
                default:
                    sprintf('Error occurred with the SOAP interface with the error message "%s"', $e->faultstring);
                    break;
            }
        }
    }
}