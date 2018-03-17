<?php

require_once ("vendor/autoload.php");

use \AsciiShapes\Handler\HandlerSapi as HandlerSapi;
use \AsciiShapes\Handler\HandlerFactory as HandlerFactory;
use \Symfony\Component\HttpFoundation\Request as Request;
use \Noodlehaus\Config as Config;

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
	HandlerSapi::class  => DI\factory([HandlerFactory::class, 'create']),
	Request::class      => DI\factory([Request::class, 'createFromGlobals']),
    Config::class       => DI\object(Config::class)->constructor('config.php'),
]);
$builder->build()->call(function (HandlerSapi $handler_sapi) {
	$handler_sapi->apply();
});



