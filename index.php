<?php

require_once ("vendor/autoload.php");

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
	\AsciiShapes\Handler\HandlerSapi::class => DI\factory([\AsciiShapes\Handler\HandlerFactory::class, 'create']),
	\Noodlehaus\Config::class => DI\object(\Noodlehaus\Config::class)->constructor('config.php'),
	\Symfony\Component\HttpFoundation\Request::class => DI\factory([\Symfony\Component\HttpFoundation\Request::class, 'createFromGlobals'])
]);
$container = $builder->build()->call(function (\AsciiShapes\Handler\HandlerSapi $handler_sapi) {
	$handler_sapi->call();
});



