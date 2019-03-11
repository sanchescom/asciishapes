<?php

require_once("vendor/autoload.php");

use AsciiShapes\Handler\HandlerSapi;
use AsciiShapes\Handler\HandlerFactory;
use DI\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;
use Noodlehaus\Config;

$definitions = [
    HandlerSapi::class => DI\factory([
        HandlerFactory::class,
        'create'
    ]),
    Request::class => DI\factory([
        Request::class,
        'createFromGlobals'
    ]),
    Config::class => DI\object(Config::class)->constructor('config.php'),
];

$builder = new ContainerBuilder();
$builder->addDefinitions($definitions);
$builder->build()->call(function (HandlerSapi $handler_sapi) {
    $handler_sapi->apply();
});