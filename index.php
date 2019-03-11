<?php

require_once("vendor/autoload.php");

use AsciiShapes\Handler\ApplicationHandler;
use AsciiShapes\Handler\HandlerFactory;
use DI\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;
use Noodlehaus\Config;

$definitions = [
    ApplicationHandler::class => DI\factory([
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
$builder->build()->call(function (ApplicationHandler $application) {
    try {
        $application->init();
    } catch (\Exception $exception) {

    }
});