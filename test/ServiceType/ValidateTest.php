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
use Diglin\Swisspost\StructType\Attributes;
use Diglin\Swisspost\StructType\Data;
use Diglin\Swisspost\StructType\Envelope;
use Diglin\Swisspost\StructType\LabelDefinition;
use Diglin\Swisspost\StructType\Provider;
use Diglin\Swisspost\StructType\Sending;
use Diglin\Swisspost\StructType\ValidateCombination;
use Diglin\Swisspost\StructType\ValidateCombinationItem;
use Diglin\Swisspost\StructType\ValidateCombinationResponse;

class ValidateTest extends \PHPUnit\Framework\TestCase
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
     * @var Validate
     */
    protected $validate;

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
        $this->validate = new Validate($options);
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

    public function testValidateCombination()
    {
        $attributes = new Attributes(['PRI', 'AS', 'GAS']);
        $item = new ValidateCombinationItem('12345', $attributes);
        $sending = new Sending([$item]);
        $provider = new Provider($sending);
        $data = new Data($provider);
        $labelDefinition = new LabelDefinition('A6');

        $envelope = new Envelope($labelDefinition, $data);
        $validateCombination = new ValidateCombination($this->config->getLanguage(), $envelope);

        try {
            /* @var $response ValidateCombinationResponse */
            if ($this->validate->ValidateCombination($validateCombination) !== false) {
                $response = $this->validate->getResult();
            } else {
                $response = $this->validate->getLastError();
            }

//            $this->printOutResult(print_r($response, true), __METHOD__);

            $items = $response
                ->getEnvelope()
                ->getData()
                ->getProvider()
                ->getSending()
                ->getItem()
            ;

            /* @var $item \Diglin\Swisspost\StructType\ResponseItem */
            $item = array_shift($items);

            $this->assertNull($item->getErrors(), 'No error must be returned');

            $attributes->setPRZL(['PRI', 'AS', 'PRL']);

            /* @var $response ValidateCombinationResponse */
            if ($this->validate->ValidateCombination($validateCombination) !== false) {
                $response = $this->validate->getResult();
            } else {
                $response = $this->validate->getLastError();
            }

            $items = $response
                ->getEnvelope()
                ->getData()
                ->getProvider()
                ->getSending()
                ->getItem()
            ;

            /* @var $item \Diglin\Swisspost\StructType\ResponseItem */
            $item = array_shift($items);
            $this->assertEquals(1, count($item->getErrors()->getError()), 'No error must be returned');

            $this->printOutResult(print_r($response, true), __METHOD__);

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