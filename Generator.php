<?php
/**
 * Diglin GmbH - Switzerland
 *
 * @author      Sylvain Rayé <support at diglin.com>
 * @category    Diglin
 * @package     swisspost
 * @copyright   Copyright (c) Diglin (http://www.diglin.com)
 */

use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

require 'vendor/autoload.php';

$options = GeneratorOptions::instance(/* '/path/file.yml' */);
$options
    ->setOrigin('barcode_v2_4_custom.wsdl')
    ->setStandalone(false)
    ->setDestination('./')
    ->setNamespace('Diglin\Swisspost')
    ->setComposerName('diglin/barcode-swisspost-php-sdk')
    ->setAddComments([
        "date"        => date("Y/m/d"),
        "codeVersion" => "1.0.0",
    ]);

// Generator instanciation
$generator = new Generator($options);

// Package generation
$generator->generatePackage();