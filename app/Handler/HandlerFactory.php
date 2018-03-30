<?php

namespace AsciiShapes\Handler;

use CliArgs\CliArgs;
use Noodlehaus\Config;
use Symfony\Component\HttpFoundation\Request;

class HandlerFactory
{
	const CLI_INTERFACE_TYPE = 'cli';
	const FPM_FCGI_INTERFACE_TYPE = 'fpm-fcgi';


	public static function create(Config $config, Request $request) : HandlerSapi
	{
		switch (php_sapi_name())
		{
			case self::CLI_INTERFACE_TYPE:
				$instance = (new Cli())->setCliArgs(new CliArgs($config->get('cli')));
				break;
			case self::FPM_FCGI_INTERFACE_TYPE:
				$instance = new FpmFcgi();
				break;
			default:
				throw new \InvalidArgumentException("Invalid handler");
		}

		return $instance->setConfig($config)->setRequest($request);
	}
}