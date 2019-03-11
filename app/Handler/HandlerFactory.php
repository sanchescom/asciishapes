<?php

namespace AsciiShapes\Handler;

use CliArgs\CliArgs;
use Noodlehaus\Config;
use Symfony\Component\HttpFoundation\Request;

class HandlerFactory
{
    /**
     * @var string
     */
    const CLI_INTERFACE_TYPE = 'cli';

    /**
     * @var string
     */
    const FPM_FCGI_INTERFACE_TYPE = 'fpm-fcgi';


    /**
     * @param Config $config
     * @param Request $request
     * @return ApplicationHandler
     */
    public static function create(Config $config, Request $request) : ApplicationHandler
    {
        switch (php_sapi_name()) {
            case self::CLI_INTERFACE_TYPE:
                $instance = Cli::create()->setArguments(
                    new CliArgs($config->get('cli'))
                );
                break;
            case self::FPM_FCGI_INTERFACE_TYPE:
                $instance = FpmFcgi::create();
                break;
            default:
                throw new \InvalidArgumentException("Invalid handler");
        }

        return $instance->setConfig($config)->setRequest($request);
    }
}
