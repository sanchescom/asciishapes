<?php

namespace AsciiShapes\Handler;

class HandlerFactory
{
	const CLI_INTERFACE_TYPE      = 'cli';
	const FPM_FCGI_INTERFACE_TYPE = 'fpm-fcgi';


	public static function create(): HandlerSapi
	{
		switch (php_sapi_name()) {
			case self::CLI_INTERFACE_TYPE:
				return new Cli();
			case self::FPM_FCGI_INTERFACE_TYPE:
				return new FpmFcgi();
			default:
				throw new \InvalidArgumentException("Invalid handler");
		}
	}
}