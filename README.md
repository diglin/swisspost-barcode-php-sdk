# Introduction

This SDK allows to use the SwissPost Barcode Webservice to generate Label or Barcode for shipment. Tracking code are returned from the API and can be used for later use.

## Installation via Composer

Add the following requirements into your composer.json at root project level. You do not need to add an autoloader, composer will handle it for you if your application is compatible with it.

`composer require diglin/swisspost-barcode-php-sdk`

OR

```
 {
    "require" : {
        "diglin/barcode-swisspost-php-sdk": "1.*"
    },
    "repositories" : [
        {
            "type": "vcs",
            "url": "git@github.com:diglin/barcode-swisspost-php-sdk.git"
        }
    ]
 }
```
 
## Usage

You can see some examples into the file `tutorial.php` or the test cases into the `test/ServiceType` folder.

For example to generate a Barcode:

```
    /**
     * Minimal options
     */
    $options = array(
        \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL      => $this->config->getWsdl(),
        \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN    => $this->config->getLogin(),
        \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => $this->config->getPassword(),
        \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Diglin\Swisspost\ClassMap::get(),
    );
    
    $generate = new \Diglin\Swisspost\ServiceType\Generate($options);

    $barcodeDefinition = new \Diglin\Swisspost\StructType\BarcodeDefinition();
    $barcodeDefinition
        ->setBarcodeType(\Diglin\Swisspost\EnumType\BarcodeType::VALUE_LSO_1)
        ->setImageFileType('PNG')
        ->setImageResolution(300);

    $struct = new \Diglin\Swisspost\StructType\GenerateBarcode($this->config->getLanguage(), $barcodeDefinition);

    try {
        /* @var $response GenerateBarcodeResponse */
        if ($generate->GenerateBarcode($struct) !== false) {
            $response = $generate->getResult();
        } else {
            $response = $generate->getLastError();
        }

        // PNG Picture to use further
        $barcode = $response->getData()->getBarcode();
        
        // ... your code here

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
```

## Generate classes for new API version

run `composer install && php -f Generator.php`

## Changelog

See [CHANGELOG.md](CHANGELOG.md) file

## License

[MIT License](LICENSE.txt)

## Author

* Diglin GmbH
* [https://www.diglin.com/](https://www.diglin.com/)
* [@diglin_](https://twitter.com/diglin_)
* [Follow me on github!](https://github.com/diglin)